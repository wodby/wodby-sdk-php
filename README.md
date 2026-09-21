# Wodby 2 SDK for PHP

[![Build](https://github.com/wodby/wodby-sdk-php/actions/workflows/build.yml/badge.svg?branch=2.0)](https://github.com/wodby/wodby-sdk-php/actions/workflows/build.yml?query=branch%3A2.0)

PHP client for the Wodby 2 public API. This branch maintains SDK 4.x.

## Version compatibility

| Wodby platform | SDK version | Branch | API reference |
| --- | --- | --- | --- |
| Wodby 1 | 3.x | [master](https://github.com/wodby/wodby-sdk-php/tree/master) | [Wodby 1 API](https://wodby.com/docs/1.0/api/) |
| Wodby 2 | 4.x | [2.0](https://github.com/wodby/wodby-sdk-php/tree/2.0) | [Wodby 2 API](https://wodby.com/docs/2.0/api/) |

Choose the SDK major version for your Wodby platform. Upgrading from SDK 3.x to 4.x changes the target platform to Wodby 2.

## Package

- [Packagist: `wodby/wodby-sdk-php`](https://packagist.org/packages/wodby/wodby-sdk-php)
- Composer package: `wodby/wodby-sdk-php`

## Documentation

- [API reference](https://wodby.com/docs/2.0/api/)
- [OpenAPI schema](https://wodby.com/docs/2.0/api/openapi.json)
- [Generated SDK documentation](SwaggerClient-php/docs)

## Install

```bash
composer require "wodby/wodby-sdk-php:^4.0"
```

## Authentication

Wodby API requests use an API key in the `X-API-KEY` header.

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = Wodby\Api\Configuration::getDefaultConfiguration()
    ->setApiKey('X-API-KEY', getenv('WODBY_API_KEY'));
```
