<?php declare (strict_types=1);

namespace Wodby\Api;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Wodby\Api\Exception\UnexpectedStatusCode;

abstract class ApiAbstract
{
    const METHOD_GET = 'get';
    const METHOD_POST = 'post';
    const METHOD_PUT = 'put';
    const METHOD_DELETE = 'delete';
    const CONNECT_TIMEOUT = 10;
    const REQUEST_TIMEOUT = 30;

    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * ApiAbstract constructor.
     * @param $accessToken
     * @param \GuzzleHttp\Client $client
     */
    public function __construct($accessToken, Client $client)
    {
        $this->accessToken = $accessToken;
        $this->httpClient = $client;
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function makeRequest($method, $uri, array $options = [])
    {
        $options = array_merge_recursive([
            RequestOptions::CONNECT_TIMEOUT => self::CONNECT_TIMEOUT,
            RequestOptions::TIMEOUT => self::REQUEST_TIMEOUT,
            RequestOptions::HEADERS => [
                'Accept' => 'application/json',
                'Authorization' => 'token ' . $this->getAccessToken(),
            ],
        ], $options);

        $baseUri = defined('WODBY_API_BASE_URI')
            ? WODBY_API_BASE_URI
            : 'https://api.wodby.com/api/v2/';

        return $this->getHttpClient()
            ->request($method, $baseUri . $uri, $options);
    }

    /**
     * @return string
     */
    protected function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return \GuzzleHttp\Client
     */
    protected function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * @param int $statusCode
     * @param int $expectedStatusCode
     * @throws \Wodby\Api\Exception\UnexpectedStatusCode
     */
    protected function checkStatusCode($statusCode, $expectedStatusCode)
    {
        if ($statusCode != $expectedStatusCode) {
            throw new UnexpectedStatusCode("Unexpected status code $statusCode, expected $expectedStatusCode");
        }
    }
}
