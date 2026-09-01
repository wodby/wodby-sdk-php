# Wodby\Api\AppEnvironmentsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAppEnvironment()**](AppEnvironmentsApi.md#createAppEnvironment) | **POST** /app-environments | Create app environment |
| [**deleteAppEnvironment()**](AppEnvironmentsApi.md#deleteAppEnvironment) | **DELETE** /app-environments/{id} | Delete app environment |
| [**getAppEnvironment()**](AppEnvironmentsApi.md#getAppEnvironment) | **GET** /app-environments/{id} | Get app environment |
| [**getAppEnvironmentByName()**](AppEnvironmentsApi.md#getAppEnvironmentByName) | **GET** /app-environments/by-name/{appName}/{environmentName} | Get app environment by name |
| [**getAppEnvironmentCICDSettings()**](AppEnvironmentsApi.md#getAppEnvironmentCICDSettings) | **GET** /app-environments/cicd-settings/{id} | Get app environment CI/CD settings |
| [**listAppEnvironments()**](AppEnvironmentsApi.md#listAppEnvironments) | **GET** /app-environments | List app environments |
| [**reconcileAppEnvironmentStack()**](AppEnvironmentsApi.md#reconcileAppEnvironmentStack) | **POST** /app-environments/{id}/actions/reconcile-stack | Reconcile app environment stack |
| [**updateAppEnvironment()**](AppEnvironmentsApi.md#updateAppEnvironment) | **PUT** /app-environments/{id} | Update app environment |
| [**updateAppEnvironmentCICDSettings()**](AppEnvironmentsApi.md#updateAppEnvironmentCICDSettings) | **PUT** /app-environments/cicd-settings/{id} | Update app environment CI/CD settings |
| [**updateAppEnvironmentMaintenanceMode()**](AppEnvironmentsApi.md#updateAppEnvironmentMaintenanceMode) | **PUT** /app-environments/{id}/actions/maintenance-mode | Update app environment maintenance mode |
| [**updateAppEnvironmentSettings()**](AppEnvironmentsApi.md#updateAppEnvironmentSettings) | **PUT** /app-environments/settings/{id} | Update app environment settings |
| [**upgradeAppEnvironmentStack()**](AppEnvironmentsApi.md#upgradeAppEnvironmentStack) | **POST** /app-environments/{id}/actions/upgrade-stack | Upgrade app environment stack |


## `createAppEnvironment()`

```php
createAppEnvironment($new_app_environment_input): \Wodby\Api\Model\AppEnvironment
```

Create app environment

Creates an app environment and returns the created resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_app_environment_input = new \Wodby\Api\Model\NewAppEnvironmentInput(); // \Wodby\Api\Model\NewAppEnvironmentInput

try {
    $result = $apiInstance->createAppEnvironment($new_app_environment_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->createAppEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_app_environment_input** | [**\Wodby\Api\Model\NewAppEnvironmentInput**](../Model/NewAppEnvironmentInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironment**](../Model/AppEnvironment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppEnvironment()`

```php
deleteAppEnvironment($id, $force): \Wodby\Api\Model\OperationResult
```

Delete app environment

Deletes the app environment and returns the operation result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$force = false; // bool

try {
    $result = $apiInstance->deleteAppEnvironment($id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->deleteAppEnvironment: ', $e->getMessage(), PHP_EOL;
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

## `getAppEnvironment()`

```php
getAppEnvironment($id): \Wodby\Api\Model\AppEnvironment
```

Get app environment

Returns the app environment identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppEnvironment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->getAppEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironment**](../Model/AppEnvironment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppEnvironmentByName()`

```php
getAppEnvironmentByName($app_name, $environment_name, $org_id): \Wodby\Api\Model\AppEnvironment
```

Get app environment by name

Returns the app environment identified by app and environment name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_name = 'app_name_example'; // string
$environment_name = 'environment_name_example'; // string
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->getAppEnvironmentByName($app_name, $environment_name, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->getAppEnvironmentByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_name** | **string**|  | |
| **environment_name** | **string**|  | |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\AppEnvironment**](../Model/AppEnvironment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppEnvironmentCICDSettings()`

```php
getAppEnvironmentCICDSettings($id): \Wodby\Api\Model\AppEnvironmentCICDSettings
```

Get app environment CI/CD settings

Returns the CI and registry integrations used by future app environment builds. Integration ID 0 identifies the built-in Wodby service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppEnvironmentCICDSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->getAppEnvironmentCICDSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironmentCICDSettings**](../Model/AppEnvironmentCICDSettings.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppEnvironments()`

```php
listAppEnvironments($org_id, $project_ids, $app_id, $cluster_id, $cluster_app): \Wodby\Api\Model\AppEnvironment[]
```

List app environments

Returns app environments matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
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
    $result = $apiInstance->listAppEnvironments($org_id, $project_ids, $app_id, $cluster_id, $cluster_app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->listAppEnvironments: ', $e->getMessage(), PHP_EOL;
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

[**\Wodby\Api\Model\AppEnvironment[]**](../Model/AppEnvironment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reconcileAppEnvironmentStack()`

```php
reconcileAppEnvironmentStack($id, $app_environment_stack_reconciliation_input): \Wodby\Api\Model\OperationResult
```

Reconcile app environment stack

Reapplies the app environment's assigned stack revision using the selected override sections without changing its stack revision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_environment_stack_reconciliation_input = new \Wodby\Api\Model\AppEnvironmentStackReconciliationInput(); // \Wodby\Api\Model\AppEnvironmentStackReconciliationInput

try {
    $result = $apiInstance->reconcileAppEnvironmentStack($id, $app_environment_stack_reconciliation_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->reconcileAppEnvironmentStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_environment_stack_reconciliation_input** | [**\Wodby\Api\Model\AppEnvironmentStackReconciliationInput**](../Model/AppEnvironmentStackReconciliationInput.md)|  | |

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

## `updateAppEnvironment()`

```php
updateAppEnvironment($id, $update_title_request): \Wodby\Api\Model\AppEnvironment
```

Update app environment

Updates the app environment and returns the updated resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_title_request = new \Wodby\Api\Model\UpdateTitleRequest(); // \Wodby\Api\Model\UpdateTitleRequest

try {
    $result = $apiInstance->updateAppEnvironment($id, $update_title_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->updateAppEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_title_request** | [**\Wodby\Api\Model\UpdateTitleRequest**](../Model/UpdateTitleRequest.md)|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironment**](../Model/AppEnvironment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppEnvironmentCICDSettings()`

```php
updateAppEnvironmentCICDSettings($id, $app_environment_cicd_settings_input): \Wodby\Api\Model\AppEnvironmentCICDSettings
```

Update app environment CI/CD settings

Updates the CI and registry integrations used by future app environment builds. Integration ID 0 selects the built-in Wodby service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_environment_cicd_settings_input = new \Wodby\Api\Model\AppEnvironmentCICDSettingsInput(); // \Wodby\Api\Model\AppEnvironmentCICDSettingsInput

try {
    $result = $apiInstance->updateAppEnvironmentCICDSettings($id, $app_environment_cicd_settings_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->updateAppEnvironmentCICDSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_environment_cicd_settings_input** | [**\Wodby\Api\Model\AppEnvironmentCICDSettingsInput**](../Model/AppEnvironmentCICDSettingsInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironmentCICDSettings**](../Model/AppEnvironmentCICDSettings.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppEnvironmentMaintenanceMode()`

```php
updateAppEnvironmentMaintenanceMode($id, $app_environment_maintenance_mode_input): \Wodby\Api\Model\OperationResult
```

Update app environment maintenance mode

Enables or disables the fixed maintenance response on all public HTTP routes while application workloads continue running.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_environment_maintenance_mode_input = new \Wodby\Api\Model\AppEnvironmentMaintenanceModeInput(); // \Wodby\Api\Model\AppEnvironmentMaintenanceModeInput

try {
    $result = $apiInstance->updateAppEnvironmentMaintenanceMode($id, $app_environment_maintenance_mode_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->updateAppEnvironmentMaintenanceMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_environment_maintenance_mode_input** | [**\Wodby\Api\Model\AppEnvironmentMaintenanceModeInput**](../Model/AppEnvironmentMaintenanceModeInput.md)|  | |

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

## `updateAppEnvironmentSettings()`

```php
updateAppEnvironmentSettings($id, $app_environment_settings_input): \Wodby\Api\Model\AppEnvironment
```

Update app environment settings

Updates app environment settings and returns the updated app environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_environment_settings_input = new \Wodby\Api\Model\AppEnvironmentSettingsInput(); // \Wodby\Api\Model\AppEnvironmentSettingsInput

try {
    $result = $apiInstance->updateAppEnvironmentSettings($id, $app_environment_settings_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->updateAppEnvironmentSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_environment_settings_input** | [**\Wodby\Api\Model\AppEnvironmentSettingsInput**](../Model/AppEnvironmentSettingsInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironment**](../Model/AppEnvironment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upgradeAppEnvironmentStack()`

```php
upgradeAppEnvironmentStack($id, $app_environment_stack_upgrade_input): \Wodby\Api\Model\OperationResult
```

Upgrade app environment stack

Upgrades an app environment stack using the selected upgrade sections.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_environment_stack_upgrade_input = new \Wodby\Api\Model\AppEnvironmentStackUpgradeInput(); // \Wodby\Api\Model\AppEnvironmentStackUpgradeInput

try {
    $result = $apiInstance->upgradeAppEnvironmentStack($id, $app_environment_stack_upgrade_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->upgradeAppEnvironmentStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_environment_stack_upgrade_input** | [**\Wodby\Api\Model\AppEnvironmentStackUpgradeInput**](../Model/AppEnvironmentStackUpgradeInput.md)|  | |

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
