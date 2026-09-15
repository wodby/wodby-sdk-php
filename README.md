# Wodby 1.0 SDK for PHP

[![Build](https://github.com/wodby/wodby-sdk-php/actions/workflows/build.yml/badge.svg?branch=master)](https://github.com/wodby/wodby-sdk-php/actions/workflows/build.yml?query=branch%3Amaster)

PHP client for the Wodby 1.0 public API. This branch maintains SDK 3.x.

## Version compatibility

| Wodby platform | SDK version | Branch | API reference |
| --- | --- | --- | --- |
| Wodby 1.0 | 3.x | [master](https://github.com/wodby/wodby-sdk-php/tree/master) | [Wodby 1.0 API](https://wodby.com/docs/1.0/api/) |
| Wodby 2.0 | 4.x | [2.0](https://github.com/wodby/wodby-sdk-php/tree/2.0) | [Wodby 2.0 API](https://wodby.com/docs/2.0/api/) |

Choose the SDK major version for your Wodby platform. Upgrading from SDK 3.x to 4.x changes the target platform to Wodby 2.0.

## Requirements

PHP 8.3 or newer. Supports Guzzle 7.15.5+ and Guzzle 8.2+. These minimums apply to the next 3.x release; existing releases are unchanged.

## Documentation

* [API reference](https://wodby.com/docs/1.0/api/)
* [Automatically generated documentation](SwaggerClient-php)

## Install

```bash
composer require "wodby/wodby-sdk-php:^3.0"
```

## Basic usage

```php
require_once './vendor/autoload.php';

$config = \Wodby\Api\Configuration::getDefaultConfiguration()
    ->setApiKey('X-API-KEY', 'YOUR_API_KEY');

$appApi = new \Wodby\Api\Client\ApplicationApi(new GuzzleHttp\Client(), $config);

// Fetch apps and print them.
$apps = $appApi->getApps();

/** @var \Wodby\Api\Model\App $app */
foreach ($apps as $app) {
    echo sprintf('ID: %d, Name: %s', $app->getId(), $app->getName()), PHP_EOL;
}
```

## Development

```sh
composer install
composer test
composer audit
```

Tests use mocks or a local HTTP server and do not require an API key.

Regenerate with `make codegen` (Docker and Java 17 image required). The existing Swagger generator stays pinned to preserve the client API; the post-generation script reapplies modern dependency compatibility.
