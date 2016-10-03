# Wodby SDK PHP

## Install

```bash
composer require wodby/wodby-sdk-php:dev
```

## How to use

```php
// Initialize an API factory.
$api = new Wodby\Api('YOUR ACCESS TOKEN', new GuzzleHttp\Client());

// Load info about current user.
var_dump($api->user()->load());
```

## Documentation

See the documentation here http://docs.wodbyapi.apiary.io/.
