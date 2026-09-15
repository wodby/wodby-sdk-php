# Wodby SDK PHP

[![Latest stable](https://img.shields.io/packagist/v/wodby/wodby-sdk-php.svg)](https://packagist.org/packages/wodby/wodby-sdk-php)

The Wodby SDK for PHP makes it easy for developers to access Wodby in their PHP code. You can get started in minutes by installing the SDK with the language package manager.

---

* [Documentation](#documentation)
* [Install](#install)
* [Basic usage](#basic-usage)

## Requirements

PHP 8.3 or newer. Supports Guzzle 7.15.5+ and Guzzle 8.2+. These minimums apply to the next 3.x release; existing releases are unchanged.

SDK 3.x targets Wodby 1. SDK 4.x targets Wodby 2.

## Documentation

* [API reference](https://wodby.com/docs/1.0/api)
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
