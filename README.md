# Wodby SDK PHP

[![TravisCI](https://travis-ci.org/wodby/wodby-sdk-php.svg)](https://travis-ci.org/wodby/wodby-sdk-php)
[![Latest stable](https://img.shields.io/packagist/v/wodby/wodby-sdk-php.svg)](https://packagist.org/packages/wodby/wodby-sdk-php)

The Wodby SDK for PHP makes it easy for developers to access Wodby in their PHP code. You can get started in minutes by installing the SDK through Composer or by downloading a single zip. 

---

* [Documentation](#documentation)
* [Install](#install)
* [Basic usage](#basic-usage)

## Documentation

* [API reference](https://wodby.com/docs/api)
* [Automatically generated documentation](SwaggerClient-php)

## Install

```bash
composer require wodby/wodby-sdk-php
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