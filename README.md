# Wodby SDK PHP

[![Downloads this Month](https://img.shields.io/packagist/dm/wodby/wodby-sdk-php.svg)](https://packagist.org/packages/wodby/wodby-sdk-php)
[![Latest stable](https://img.shields.io/packagist/v/wodby/wodby-sdk-php.svg)](https://packagist.org/packages/wodby/wodby-sdk-php)
[![Apache 2 License](https://img.shields.io/packagist/l/wodby/wodby-sdk-php.svg?style=flat)](http://aws.amazon.com/apache-2-0/)

The Wodby SDK for PHP makes it easy for developers to access Wodby in their PHP code. You can get started in minutes by installing the SDK through Composer or by downloading a single zip or phar file from our latest release. 

## Documentation

See the documentation here http://docs.wodbyapi.apiary.io/.

## Install

```bash
composer require wodby/wodby-sdk-php
```

## Basic usage

```php
require_once './vendor/autoload.php';

// Initialize an API factory.
$api = new Wodby\Api('YOUR ACCESS TOKEN', new GuzzleHttp\Client());

// Load my user info.
$user = $api->user()->load();

// Load my organizations.
$orgs = $api->organization()->loadAll();
```

## Create new Application instance

### Basic

```php
$api->instance()->create(
  'APP ID',
  'NEW INSTANCE NAME',
  \Wodby\Api\Entity\Instance::TYPE_DEV,
  'master',
  'SERVER ID',
);
```

### Create instance and wait until it's created

```php
$result = $api->instance()->create(
  'APP ID',
  'NEW INSTANCE NAME',
  \Wodby\Api\Entity\Instance::TYPE_DEV,
  'master',
  'SERVER ID',
);

/** @var \Wodby\Api\Entity\Task $task */
$task = $result['task'];

/** @var \Wodby\Api\Entity\Instance $instance */
$instance = $result['instance'];

// Wait until the instance will be created with timeout of 5 minutes.
$api->task()->wait($task->getId(), 600);

// Reload the instance.
$instance = $api->instance()->load($instance->getId());
```

### Create instance and import data

Create new application instance and import Database and Files from production instance.

```php
$api->instance()->create(
  'APP ID',
  'NEW INSTANCE NAME',
  \Wodby\Api\Entity\Instance::TYPE_DEV,
  'master',
  'SERVER ID',
  [
    \Wodby\Api\Entity\Instance::COMPONENT_DATABASE => 'PROD INSTANCE ID',
    \Wodby\Api\Entity\Instance::COMPONENT_FILES => 'PROD INSTANCE ID',
  ]
);
```

### Import data from files

```php
$api->instance()->importFromFiles('INSTANCE ID', [
  \Wodby\Api\Entity\Instance::COMPONENT_DATABASE => 'URI',
  \Wodby\Api\Entity\Instance::COMPONENT_FILES => 'URI',
  \Wodby\Api\Entity\Instance::COMPONENT_CODEBASE => 'URI',
]);
```

### Import data from other instances

```php
$api->instance()->importFromInstances('INSTANCE ID', [
  \Wodby\Api\Entity\Instance::COMPONENT_DATABASE => 'SOURCE INSTANCE ID',
  \Wodby\Api\Entity\Instance::COMPONENT_FILES => 'SOURCE INSTANCE ID',
]);
```

### Import codebase

It's a wrapper for `$api->instance()->importFromFiles()`.

```php
$api->instance()->importCodebase('INSTANCE ID', 'CODEBASE URI');
```
