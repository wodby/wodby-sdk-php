<?php
set_error_handler(function (int $severity, string $message, string $file, int $line): never {
    throw new ErrorException($message, 0, $severity, $file, $line);
});
require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Wodby\Api\Client\InstanceApi;
use Wodby\Api\Client\OrganizationApi;
use Wodby\Api\Configuration;
use Wodby\Api\Model\RequestInstanceDeploy;

function check(bool $ok, string $message): void {
    if (!$ok) { throw new RuntimeException($message); }
}

$history = [];
$mock = new MockHandler([new Response(200, [], '[]'), new Response(200, [], '{"task":{"id":"task-1"}}'), new Response(403, [], '{"message":"Forbidden"}')]);
$stack = HandlerStack::create($mock);
$stack->push(Middleware::history($history));
$client = new Client(['handler' => $stack]);
$config = (new Configuration())->setHost('https://example.test/api/v3')->setApiKey('X-API-KEY', 'test-key');
$orgs = new OrganizationApi($client, $config);
check($orgs->getOrgs() === [], 'Response decoding failed');
check($history[0]['request']->getHeaderLine('X-API-KEY') === 'test-key', 'API key missing');
$instances = new InstanceApi($client, $config);
$result = $instances->deployInstanceAsync('instance-1', new RequestInstanceDeploy(['post_deployment' => true]))->wait();
check($result->getTask()->getId() === 'task-1', 'Async model decoding failed');
check(json_decode((string)$history[1]['request']->getBody(), true)['post_deployment'] === true, 'JSON request encoding failed');
check((string)$history[1]['request']->getUri() === 'https://example.test/api/v3/instances/instance-1/deploy', 'Request URL changed');
try {
    $orgs->getOrgs();
    throw new RuntimeException('Expected API exception');
} catch (\Wodby\Api\ApiException $e) {
    check($e->getCode() === 403, 'API error status changed');
}
echo "Dependency compatibility checks passed\n";
