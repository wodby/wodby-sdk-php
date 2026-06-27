# Wodby\Api\AppInstancesApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAppInstance()**](AppInstancesApi.md#createAppInstance) | **POST** /app-instances | Create app instance |
| [**deleteAppInstance()**](AppInstancesApi.md#deleteAppInstance) | **DELETE** /app-instances/{id} | Delete app instance |
| [**getAppInstance()**](AppInstancesApi.md#getAppInstance) | **GET** /app-instances/{id} | Get app instance |
| [**getAppInstanceByName()**](AppInstancesApi.md#getAppInstanceByName) | **GET** /app-instances/by-name/{appName}/{instanceName} | Get app instance by app and instance name |
| [**listAppInstances()**](AppInstancesApi.md#listAppInstances) | **GET** /app-instances | List app instances |
| [**updateAppInstance()**](AppInstancesApi.md#updateAppInstance) | **PUT** /app-instances/{id} | Update app instance |
| [**upgradeAppInstanceStack()**](AppInstancesApi.md#upgradeAppInstanceStack) | **POST** /app-instances/{id}/actions/upgrade-stack | Upgrade app instance stack |


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
- **Accept**: `application/json`

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
- **Accept**: `application/json`

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
- **Accept**: `application/json`

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
- **Accept**: `application/json`

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
- **Accept**: `application/json`

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
- **Accept**: `application/json`

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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
