# Wodby\Api\AppInstancesApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAppAccess()**](AppInstancesApi.md#createAppAccess) | **POST** /app-instance-accesses/{id} | Create app instance access |
| [**createAppInstance()**](AppInstancesApi.md#createAppInstance) | **POST** /app-instances | Create app instance |
| [**deleteAppAccess()**](AppInstancesApi.md#deleteAppAccess) | **DELETE** /app-accesses/{id} | Delete app access |
| [**deleteAppInstance()**](AppInstancesApi.md#deleteAppInstance) | **DELETE** /app-instances/{id} | Delete app instance |
| [**getAppInstance()**](AppInstancesApi.md#getAppInstance) | **GET** /app-instances/{id} | Get app instance |
| [**getAppInstanceAccess()**](AppInstancesApi.md#getAppInstanceAccess) | **GET** /app-instance-accesses/{id} | Get app instance access |
| [**getAppInstanceByName()**](AppInstancesApi.md#getAppInstanceByName) | **GET** /app-instances/by-name/{appName}/{instanceName} | Get app instance by app and instance name |
| [**getAppInstanceCICDSettings()**](AppInstancesApi.md#getAppInstanceCICDSettings) | **GET** /app-instances/cicd-settings/{id} | Get app instance CI/CD settings |
| [**getAppInstanceStackUpgradeChangelog()**](AppInstancesApi.md#getAppInstanceStackUpgradeChangelog) | **GET** /app-instance-stack-upgrade-changelogs/{id} | Preview app instance stack upgrade |
| [**listAppAccessCleanups()**](AppInstancesApi.md#listAppAccessCleanups) | **GET** /app-access-cleanups | List app-access cleanups |
| [**listAppInstances()**](AppInstancesApi.md#listAppInstances) | **GET** /app-instances | List app instances |
| [**preflightAppAccess()**](AppInstancesApi.md#preflightAppAccess) | **POST** /app-accesses/actions/preflight | Preflight app instance access |
| [**reconcileAppInstanceStack()**](AppInstancesApi.md#reconcileAppInstanceStack) | **POST** /app-instances/{id}/actions/reconcile-stack | Reconcile app instance stack |
| [**retryAppAccessCleanup()**](AppInstancesApi.md#retryAppAccessCleanup) | **POST** /app-access-cleanups/{id}/actions/retry | Retry app-access cleanup |
| [**updateAppAccess()**](AppInstancesApi.md#updateAppAccess) | **PUT** /app-accesses/{id} | Update app access |
| [**updateAppInstance()**](AppInstancesApi.md#updateAppInstance) | **PUT** /app-instances/{id} | Update app instance |
| [**updateAppInstanceCICDSettings()**](AppInstancesApi.md#updateAppInstanceCICDSettings) | **PUT** /app-instances/cicd-settings/{id} | Update app instance CI/CD settings |
| [**updateAppInstanceMaintenanceMode()**](AppInstancesApi.md#updateAppInstanceMaintenanceMode) | **PUT** /app-instances/{id}/actions/maintenance-mode | Update app instance maintenance mode |
| [**updateAppInstanceSettings()**](AppInstancesApi.md#updateAppInstanceSettings) | **PUT** /app-instances/settings/{id} | Update app instance settings |
| [**upgradeAppInstanceStack()**](AppInstancesApi.md#upgradeAppInstanceStack) | **POST** /app-instances/{id}/actions/upgrade-stack | Upgrade app instance stack |


## `createAppAccess()`

```php
createAppAccess($id, $new_app_access_input): \Wodby\Api\Model\AppAccessOperationResult
```

Create app instance access

Creates external access for the app instance identified by the path. An active paid subscription is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$new_app_access_input = new \Wodby\Api\Model\NewAppAccessInput(); // \Wodby\Api\Model\NewAppAccessInput

try {
    $result = $apiInstance->createAppAccess($id, $new_app_access_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->createAppAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_app_access_input** | [**\Wodby\Api\Model\NewAppAccessInput**](../Model/NewAppAccessInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppAccessOperationResult**](../Model/AppAccessOperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppInstance()`

```php
createAppInstance($new_app_instance_input): \Wodby\Api\Model\AppInstance
```

Create app instance

Creates an app instance and returns the created resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_app_instance_input = new \Wodby\Api\Model\NewAppInstanceInput(); // \Wodby\Api\Model\NewAppInstanceInput

try {
    $result = $apiInstance->createAppInstance($new_app_instance_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->createAppInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_app_instance_input** | [**\Wodby\Api\Model\NewAppInstanceInput**](../Model/NewAppInstanceInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppInstance**](../Model/AppInstance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppAccess()`

```php
deleteAppAccess($id): \Wodby\Api\Model\OperationResult
```

Delete app access

Removes app access and returns the cleanup task identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteAppAccess($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->deleteAppAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppInstance()`

```php
deleteAppInstance($id, $force): \Wodby\Api\Model\OperationResult
```

Delete app instance

Deletes the app instance and returns the operation result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$force = false; // bool

try {
    $result = $apiInstance->deleteAppInstance($id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->deleteAppInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **force** | **bool**|  | [optional] [default to false] |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppInstance()`

```php
getAppInstance($id): \Wodby\Api\Model\AppInstance
```

Get app instance

Returns the app instance identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppInstance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->getAppInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppInstance**](../Model/AppInstance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppInstanceAccess()`

```php
getAppInstanceAccess($id): \Wodby\Api\Model\AppAccess
```

Get app instance access

Returns the external access configuration for the app instance identified by the path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppInstanceAccess($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->getAppInstanceAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppAccess**](../Model/AppAccess.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppInstanceByName()`

```php
getAppInstanceByName($app_name, $instance_name, $org_id): \Wodby\Api\Model\AppInstance
```

Get app instance by app and instance name

Returns the app instance identified by app and instance name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_name = 'app_name_example'; // string
$instance_name = 'instance_name_example'; // string
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->getAppInstanceByName($app_name, $instance_name, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->getAppInstanceByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_name** | **string**|  | |
| **instance_name** | **string**|  | |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\AppInstance**](../Model/AppInstance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppInstanceCICDSettings()`

```php
getAppInstanceCICDSettings($id): \Wodby\Api\Model\AppInstanceCICDSettings
```

Get app instance CI/CD settings

Returns the CI and registry integrations used by future app instance builds. Integration ID 0 identifies the built-in Wodby service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppInstanceCICDSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->getAppInstanceCICDSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppInstanceCICDSettings**](../Model/AppInstanceCICDSettings.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppInstanceStackUpgradeChangelog()`

```php
getAppInstanceStackUpgradeChangelog($id): \Wodby\Api\Model\AppInstanceStackUpgradeChangelog
```

Preview app instance stack upgrade

Returns the stack and service revision changes that an app instance stack upgrade would apply.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppInstanceStackUpgradeChangelog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->getAppInstanceStackUpgradeChangelog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppInstanceStackUpgradeChangelog**](../Model/AppInstanceStackUpgradeChangelog.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppAccessCleanups()`

```php
listAppAccessCleanups($app_instance_id, $integration_id): \Wodby\Api\Model\AppAccessCleanup[]
```

List app-access cleanups

Returns cleanup records for exactly one app instance or integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_instance_id = 56; // int
$integration_id = 56; // int

try {
    $result = $apiInstance->listAppAccessCleanups($app_instance_id, $integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->listAppAccessCleanups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_instance_id** | **int**|  | [optional] |
| **integration_id** | **int**|  | [optional] |

### Return type

[**\Wodby\Api\Model\AppAccessCleanup[]**](../Model/AppAccessCleanup.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppInstances()`

```php
listAppInstances($org_id, $project_ids, $app_id, $cluster_id, $cluster_app): \Wodby\Api\Model\AppInstance[]
```

List app instances

Returns app instances matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.
$project_ids = 'project_ids_example'; // string | Comma-separated project ids
$app_id = 56; // int
$cluster_id = 56; // int
$cluster_app = True; // bool

try {
    $result = $apiInstance->listAppInstances($org_id, $project_ids, $app_id, $cluster_id, $cluster_app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->listAppInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |
| **project_ids** | **string**| Comma-separated project ids | [optional] |
| **app_id** | **int**|  | [optional] |
| **cluster_id** | **int**|  | [optional] |
| **cluster_app** | **bool**|  | [optional] |

### Return type

[**\Wodby\Api\Model\AppInstance[]**](../Model/AppInstance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `preflightAppAccess()`

```php
preflightAppAccess($new_app_instance_access_input): \Wodby\Api\Model\ValidationResult
```

Preflight app instance access

Validates a proposed app-access configuration before an app instance or access resource is created. An active paid subscription is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_app_instance_access_input = new \Wodby\Api\Model\NewAppInstanceAccessInput(); // \Wodby\Api\Model\NewAppInstanceAccessInput

try {
    $result = $apiInstance->preflightAppAccess($new_app_instance_access_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->preflightAppAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_app_instance_access_input** | [**\Wodby\Api\Model\NewAppInstanceAccessInput**](../Model/NewAppInstanceAccessInput.md)|  | |

### Return type

[**\Wodby\Api\Model\ValidationResult**](../Model/ValidationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reconcileAppInstanceStack()`

```php
reconcileAppInstanceStack($id, $app_instance_stack_reconciliation_input): \Wodby\Api\Model\OperationResult
```

Reconcile app instance stack

Reapplies the app instance's assigned stack revision using the selected override sections without changing its stack revision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_instance_stack_reconciliation_input = new \Wodby\Api\Model\AppInstanceStackReconciliationInput(); // \Wodby\Api\Model\AppInstanceStackReconciliationInput

try {
    $result = $apiInstance->reconcileAppInstanceStack($id, $app_instance_stack_reconciliation_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->reconcileAppInstanceStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_instance_stack_reconciliation_input** | [**\Wodby\Api\Model\AppInstanceStackReconciliationInput**](../Model/AppInstanceStackReconciliationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryAppAccessCleanup()`

```php
retryAppAccessCleanup($id): \Wodby\Api\Model\OperationResult
```

Retry app-access cleanup

Retries a failed app-access cleanup and returns its task identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->retryAppAccessCleanup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->retryAppAccessCleanup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppAccess()`

```php
updateAppAccess($id, $update_app_access_input): \Wodby\Api\Model\AppAccessOperationResult
```

Update app access

Updates an existing app-access configuration and starts its reconciliation task. An active paid subscription is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_app_access_input = new \Wodby\Api\Model\UpdateAppAccessInput(); // \Wodby\Api\Model\UpdateAppAccessInput

try {
    $result = $apiInstance->updateAppAccess($id, $update_app_access_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->updateAppAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_app_access_input** | [**\Wodby\Api\Model\UpdateAppAccessInput**](../Model/UpdateAppAccessInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppAccessOperationResult**](../Model/AppAccessOperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppInstance()`

```php
updateAppInstance($id, $update_title_request): \Wodby\Api\Model\AppInstance
```

Update app instance

Updates the app instance and returns the updated resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_title_request = new \Wodby\Api\Model\UpdateTitleRequest(); // \Wodby\Api\Model\UpdateTitleRequest

try {
    $result = $apiInstance->updateAppInstance($id, $update_title_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->updateAppInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_title_request** | [**\Wodby\Api\Model\UpdateTitleRequest**](../Model/UpdateTitleRequest.md)|  | |

### Return type

[**\Wodby\Api\Model\AppInstance**](../Model/AppInstance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppInstanceCICDSettings()`

```php
updateAppInstanceCICDSettings($id, $app_instance_cicd_settings_input): \Wodby\Api\Model\AppInstanceCICDSettings
```

Update app instance CI/CD settings

Updates the CI and registry integrations used by future app instance builds. Integration ID 0 selects the built-in Wodby service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_instance_cicd_settings_input = new \Wodby\Api\Model\AppInstanceCICDSettingsInput(); // \Wodby\Api\Model\AppInstanceCICDSettingsInput

try {
    $result = $apiInstance->updateAppInstanceCICDSettings($id, $app_instance_cicd_settings_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->updateAppInstanceCICDSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_instance_cicd_settings_input** | [**\Wodby\Api\Model\AppInstanceCICDSettingsInput**](../Model/AppInstanceCICDSettingsInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppInstanceCICDSettings**](../Model/AppInstanceCICDSettings.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppInstanceMaintenanceMode()`

```php
updateAppInstanceMaintenanceMode($id, $app_instance_maintenance_mode_input): \Wodby\Api\Model\OperationResult
```

Update app instance maintenance mode

Enables or disables the fixed maintenance response on all public HTTP routes while application workloads continue running.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_instance_maintenance_mode_input = new \Wodby\Api\Model\AppInstanceMaintenanceModeInput(); // \Wodby\Api\Model\AppInstanceMaintenanceModeInput

try {
    $result = $apiInstance->updateAppInstanceMaintenanceMode($id, $app_instance_maintenance_mode_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->updateAppInstanceMaintenanceMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_instance_maintenance_mode_input** | [**\Wodby\Api\Model\AppInstanceMaintenanceModeInput**](../Model/AppInstanceMaintenanceModeInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppInstanceSettings()`

```php
updateAppInstanceSettings($id, $app_instance_settings_input): \Wodby\Api\Model\AppInstance
```

Update app instance settings

Updates app instance settings and returns the updated app instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_instance_settings_input = new \Wodby\Api\Model\AppInstanceSettingsInput(); // \Wodby\Api\Model\AppInstanceSettingsInput

try {
    $result = $apiInstance->updateAppInstanceSettings($id, $app_instance_settings_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->updateAppInstanceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_instance_settings_input** | [**\Wodby\Api\Model\AppInstanceSettingsInput**](../Model/AppInstanceSettingsInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppInstance**](../Model/AppInstance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upgradeAppInstanceStack()`

```php
upgradeAppInstanceStack($id, $app_instance_stack_upgrade_input): \Wodby\Api\Model\OperationResult
```

Upgrade app instance stack

Upgrades an app instance stack using the selected upgrade sections.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_instance_stack_upgrade_input = new \Wodby\Api\Model\AppInstanceStackUpgradeInput(); // \Wodby\Api\Model\AppInstanceStackUpgradeInput

try {
    $result = $apiInstance->upgradeAppInstanceStack($id, $app_instance_stack_upgrade_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInstancesApi->upgradeAppInstanceStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_instance_stack_upgrade_input** | [**\Wodby\Api\Model\AppInstanceStackUpgradeInput**](../Model/AppInstanceStackUpgradeInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
