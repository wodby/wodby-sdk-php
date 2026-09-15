<?php
// Keep generated clients compatible with current Guzzle and PHP releases.
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__ . '/SwaggerClient-php/lib'));
foreach ($files as $file) {
    if ($file->getExtension() !== 'php') { continue; }
    $source = file_get_contents($file->getPathname());
    $source = str_replace(
        ['\\GuzzleHttp\\json_encode(', '\\GuzzleHttp\\Psr7\\build_query('],
        ['\\GuzzleHttp\\Utils::jsonEncode(', '\\GuzzleHttp\\Psr7\\Query::build('],
        $source
    );
    // Generated clients assign this selector but do not declare its property.
    if (str_contains($source, '$this->headerSelector =') && !str_contains($source, 'protected $headerSelector;')) {
        $source = str_replace('    protected $config;', "    protected \$config;\n\n    /** @var HeaderSelector */\n    protected \$headerSelector;", $source);
    }
    // PHP 8.4 requires explicit nullable parameter types.
    $source = preg_replace('/(?<![\\w?\\\\])([\\\\\\w]+) (\\$\\w+) = null/', '?$1 $2 = null', $source);
    foreach (['offsetExists' => 'bool', 'offsetGet' => 'mixed', 'offsetSet' => 'void', 'offsetUnset' => 'void'] as $method => $type) {
        $source = preg_replace('/(public function ' . $method . '\([^)]*\))(\s*\{)/', '$1: ' . $type . '$2', $source);
    }
    file_put_contents($file->getPathname(), $source);
}

// The schema contains a historical documentation URL.
$readme = __DIR__ . "/SwaggerClient-php/README.md";
file_put_contents($readme, str_replace(
    "Wodby Developer Documentation https://wodby.com/docs/1.0/docs/dev",
    "Wodby 1.0 API reference: https://wodby.com/docs/1.0/api/",
    file_get_contents($readme)
));
