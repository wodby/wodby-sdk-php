# Wodby 2.0 SDK for PHP

PHP client for the Wodby 2.0 Public API.

## Documentation

- [API reference](https://wodby.com/docs/2.0/api/)
- [OpenAPI schema](https://wodby.com/docs/2.0/api/openapi.yaml)
- Generated SDK docs: `SwaggerClient-php/docs`

## Install

```bash
composer require wodby/wodby-sdk-php
```

## Authentication

Wodby API requests use an API key in the `X-API-KEY` header.

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = Wodby\Api\Configuration::getDefaultConfiguration()
    ->setApiKey('X-API-KEY', getenv('WODBY_API_KEY'));
```
