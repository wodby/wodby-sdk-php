# Wodby SDK PHP

[![Latest stable](https://img.shields.io/packagist/v/wodby/wodby-sdk-php.svg)](https://packagist.org/packages/wodby/wodby-sdk-php)

The Wodby SDK for PHP makes it easy for developers to access Wodby in their PHP code. You can get started in minutes by installing the SDK through Composer or by downloading a single zip. 

---

* [Documentation](#documentation)
* [Install](#install)
* Examples
    * [Basic usage](#basic-usage)
    * [Create new Application](#create-new-application)
    * [Create Instance and wait until it's created](#create-instance-and-wait-until-its-created)
    * [Create Instance and import data](#create-instance-and-import-data)
    * [Import data from files](#import-data-from-files)
    * [Import data from other instances](#import-data-from-other-instances)
    * [Delete instance](#delete-instance)
    * [Delete instance by name](#delete-instance-by-name)


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

## Create new Application

```php
$api->application()->create(
  'APP NAME',
  'drupal8', // Bundle name   
  'REPOSITORY ID',
  'My Drupal 8', // New app title.
  ['redis', 'mailhog'] // Additional services.
);
```

## Create new Application Instance

```php
$api->instance()->create(
  'APP ID',
  'NEW INSTANCE NAME',
  \Wodby\Api\Entity\Instance::TYPE_DEV,
  'master',
  'SERVER ID',
);
```

## Create Instance and wait until it's created

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
```

## Create Instance and import data

Create new application instance and import Database and Files from the production instance.

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

## Import data from files

```php
$api->instance()->importFromFiles('INSTANCE ID', [
  \Wodby\Api\Entity\Instance::COMPONENT_DATABASE => 'URI',
  \Wodby\Api\Entity\Instance::COMPONENT_FILES => 'URI',
  \Wodby\Api\Entity\Instance::COMPONENT_CODEBASE => 'URI',
]);
```

## Import data from other instances

```php
$api->instance()->importFromInstances('INSTANCE ID', [
  \Wodby\Api\Entity\Instance::COMPONENT_DATABASE => 'SOURCE INSTANCE ID',
  \Wodby\Api\Entity\Instance::COMPONENT_FILES => 'SOURCE INSTANCE ID',
]);
```

## Import codebase

It's a wrapper for `$api->instance()->importFromFiles()`.

```php
$api->instance()->importCodebase('INSTANCE ID', 'CODEBASE URI');
```

## Delete instance

```php
$api->instance()->delete('INSTANCE ID');
```

## Delete instance by name

```php
$instance = $api->instance()->findByName('APP ID', 'INSTANCE NAME');

if ($instance) {
  $api->instance()->delete($instance->getId());
}
```
