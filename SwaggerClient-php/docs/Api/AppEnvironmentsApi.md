# Wodby\Api\AppEnvironmentsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cleanupAppEnvironmentMigration()**](AppEnvironmentsApi.md#cleanupAppEnvironmentMigration) | **POST** /app-environment-migrations/{id}/actions/cleanup | Clean up app environment migration |
| [**createAppAccess()**](AppEnvironmentsApi.md#createAppAccess) | **POST** /app-environment-accesses/{id} | Create app environment access |
| [**createAppAnnotation()**](AppEnvironmentsApi.md#createAppAnnotation) | **POST** /app-annotations | Create app annotation |
| [**createAppEnvironment()**](AppEnvironmentsApi.md#createAppEnvironment) | **POST** /app-environments | Create app environment |
| [**deleteAppAccess()**](AppEnvironmentsApi.md#deleteAppAccess) | **DELETE** /app-accesses/{id} | Delete app access |
| [**deleteAppAnnotation()**](AppEnvironmentsApi.md#deleteAppAnnotation) | **DELETE** /app-annotations/{id} | Delete app annotation |
| [**deleteAppEnvironment()**](AppEnvironmentsApi.md#deleteAppEnvironment) | **DELETE** /app-environments/{id} | Delete app environment |
| [**getAppAccess()**](AppEnvironmentsApi.md#getAppAccess) | **GET** /app-accesses/{id} | Get app access |
| [**getAppAnnotation()**](AppEnvironmentsApi.md#getAppAnnotation) | **GET** /app-annotations/{id} | Get app annotation |
| [**getAppEnvironment()**](AppEnvironmentsApi.md#getAppEnvironment) | **GET** /app-environments/{id} | Get app environment |
| [**getAppEnvironmentAccess()**](AppEnvironmentsApi.md#getAppEnvironmentAccess) | **GET** /app-environment-accesses/{id} | Get app environment access |
| [**getAppEnvironmentByName()**](AppEnvironmentsApi.md#getAppEnvironmentByName) | **GET** /app-environments/by-name/{appName}/{environmentName} | Get app environment by name |
| [**getAppEnvironmentCICDSettings()**](AppEnvironmentsApi.md#getAppEnvironmentCICDSettings) | **GET** /app-environments/cicd-settings/{id} | Get app environment CI/CD settings |
| [**getAppEnvironmentMigration()**](AppEnvironmentsApi.md#getAppEnvironmentMigration) | **GET** /app-environment-migrations/{id} | Get app environment migration |
| [**getAppEnvironmentStackUpgradeChangelog()**](AppEnvironmentsApi.md#getAppEnvironmentStackUpgradeChangelog) | **GET** /app-environment-stack-upgrade-changelogs/{id} | Preview app environment stack upgrade |
| [**getWorkspaceConnection()**](AppEnvironmentsApi.md#getWorkspaceConnection) | **GET** /workspaces/{id}/connection | Get workspace SSH connection |
| [**getWorkspaceGitDiff()**](AppEnvironmentsApi.md#getWorkspaceGitDiff) | **GET** /workspaces/{id}/git-diff | Get workspace file diff |
| [**getWorkspaceGitStatus()**](AppEnvironmentsApi.md#getWorkspaceGitStatus) | **GET** /workspaces/{id}/git-status | Get workspace Git status |
| [**listAppAccessCleanups()**](AppEnvironmentsApi.md#listAppAccessCleanups) | **GET** /app-access-cleanups | List app-access cleanups |
| [**listAppAnnotations()**](AppEnvironmentsApi.md#listAppAnnotations) | **GET** /app-annotations | List app annotations |
| [**listAppEnvironmentMigrations()**](AppEnvironmentsApi.md#listAppEnvironmentMigrations) | **GET** /app-environment-migrations | List app environment migrations |
| [**listAppEnvironments()**](AppEnvironmentsApi.md#listAppEnvironments) | **GET** /app-environments | List app environments |
| [**migrateAppEnvironment()**](AppEnvironmentsApi.md#migrateAppEnvironment) | **POST** /app-environments/{id}/actions/migrate | Migrate app environment to another cluster |
| [**pauseWorkspace()**](AppEnvironmentsApi.md#pauseWorkspace) | **POST** /workspaces/{id}/actions/pause | Pause workspace |
| [**preflightAppAccess()**](AppEnvironmentsApi.md#preflightAppAccess) | **POST** /app-accesses/actions/preflight | Preflight app environment access |
| [**prepareWorkspace()**](AppEnvironmentsApi.md#prepareWorkspace) | **POST** /workspaces/{id}/actions/prepare | Prepare workspace |
| [**pullWorkspace()**](AppEnvironmentsApi.md#pullWorkspace) | **POST** /workspaces/{id}/actions/pull | Pull workspace |
| [**reconcileAppEnvironmentStack()**](AppEnvironmentsApi.md#reconcileAppEnvironmentStack) | **POST** /app-environments/{id}/actions/reconcile-stack | Reconcile app environment stack |
| [**restartWorkspace()**](AppEnvironmentsApi.md#restartWorkspace) | **POST** /workspaces/{id}/actions/restart | Restart workspace |
| [**resumeWorkspace()**](AppEnvironmentsApi.md#resumeWorkspace) | **POST** /workspaces/{id}/actions/resume | Resume workspace |
| [**retryAppAccessCleanup()**](AppEnvironmentsApi.md#retryAppAccessCleanup) | **POST** /app-access-cleanups/{id}/actions/retry | Retry app-access cleanup |
| [**rollbackAppEnvironmentMigration()**](AppEnvironmentsApi.md#rollbackAppEnvironmentMigration) | **POST** /app-environment-migrations/{id}/actions/rollback | Roll back app environment migration |
| [**updateAppAccess()**](AppEnvironmentsApi.md#updateAppAccess) | **PUT** /app-accesses/{id} | Update app access |
| [**updateAppAnnotation()**](AppEnvironmentsApi.md#updateAppAnnotation) | **PUT** /app-annotations/{id} | Update app annotation |
| [**updateAppEnvironment()**](AppEnvironmentsApi.md#updateAppEnvironment) | **PUT** /app-environments/{id} | Update app environment |
| [**updateAppEnvironmentCICDSettings()**](AppEnvironmentsApi.md#updateAppEnvironmentCICDSettings) | **PUT** /app-environments/cicd-settings/{id} | Update app environment CI/CD settings |
| [**updateAppEnvironmentMaintenanceMode()**](AppEnvironmentsApi.md#updateAppEnvironmentMaintenanceMode) | **PUT** /app-environments/{id}/actions/maintenance-mode | Update app environment maintenance mode |
| [**updateAppEnvironmentSettings()**](AppEnvironmentsApi.md#updateAppEnvironmentSettings) | **PUT** /app-environments/settings/{id} | Update app environment settings |
| [**upgradeAppEnvironmentStack()**](AppEnvironmentsApi.md#upgradeAppEnvironmentStack) | **POST** /app-environments/{id}/actions/upgrade-stack | Upgrade app environment stack |
| [**workspaceEligibility()**](AppEnvironmentsApi.md#workspaceEligibility) | **POST** /workspace-eligibility | Check workspace service eligibility |


## `cleanupAppEnvironmentMigration()`

```php
cleanupAppEnvironmentMigration($id): \Wodby\Api\Model\AppEnvironmentMigrationOperationResult
```

Clean up app environment migration

Removes the app environment's retained resources from the source cluster after a completed migration. The migration can no longer be rolled back afterwards.

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
    $result = $apiInstance->cleanupAppEnvironmentMigration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->cleanupAppEnvironmentMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironmentMigrationOperationResult**](../Model/AppEnvironmentMigrationOperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppAccess()`

```php
createAppAccess($id, $new_app_access_input): \Wodby\Api\Model\AppAccessOperationResult
```

Create app environment access

Creates external access for the app environment identified by the path. An active paid subscription is required.

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
$new_app_access_input = new \Wodby\Api\Model\NewAppAccessInput(); // \Wodby\Api\Model\NewAppAccessInput

try {
    $result = $apiInstance->createAppAccess($id, $new_app_access_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->createAppAccess: ', $e->getMessage(), PHP_EOL;
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

## `createAppAnnotation()`

```php
createAppAnnotation($new_app_annotation_input): \Wodby\Api\Model\AppAnnotation
```

Create app annotation

Adds an ingress annotation to the app environment, or to one of its services or routes.

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
$new_app_annotation_input = new \Wodby\Api\Model\NewAppAnnotationInput(); // \Wodby\Api\Model\NewAppAnnotationInput

try {
    $result = $apiInstance->createAppAnnotation($new_app_annotation_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->createAppAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_app_annotation_input** | [**\Wodby\Api\Model\NewAppAnnotationInput**](../Model/NewAppAnnotationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppAnnotation**](../Model/AppAnnotation.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
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
    echo 'Exception when calling AppEnvironmentsApi->deleteAppAccess: ', $e->getMessage(), PHP_EOL;
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

## `deleteAppAnnotation()`

```php
deleteAppAnnotation($id): \Wodby\Api\Model\OperationResult
```

Delete app annotation

Deletes an app annotation.

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
    $result = $apiInstance->deleteAppAnnotation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->deleteAppAnnotation: ', $e->getMessage(), PHP_EOL;
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

## `getAppAccess()`

```php
getAppAccess($id): \Wodby\Api\Model\AppAccess
```

Get app access

Returns one app access configuration.

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
    $result = $apiInstance->getAppAccess($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->getAppAccess: ', $e->getMessage(), PHP_EOL;
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

## `getAppAnnotation()`

```php
getAppAnnotation($id): \Wodby\Api\Model\AppAnnotation
```

Get app annotation

Returns one app annotation.

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
    $result = $apiInstance->getAppAnnotation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->getAppAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppAnnotation**](../Model/AppAnnotation.md)

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

## `getAppEnvironmentAccess()`

```php
getAppEnvironmentAccess($id): \Wodby\Api\Model\AppAccess
```

Get app environment access

Returns the external access configuration for the app environment identified by the path.

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
    $result = $apiInstance->getAppEnvironmentAccess($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->getAppEnvironmentAccess: ', $e->getMessage(), PHP_EOL;
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

## `getAppEnvironmentMigration()`

```php
getAppEnvironmentMigration($id): \Wodby\Api\Model\AppEnvironmentMigration
```

Get app environment migration

Returns one cluster migration with the progress of each copied service.

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
    $result = $apiInstance->getAppEnvironmentMigration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->getAppEnvironmentMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironmentMigration**](../Model/AppEnvironmentMigration.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppEnvironmentStackUpgradeChangelog()`

```php
getAppEnvironmentStackUpgradeChangelog($id): \Wodby\Api\Model\AppEnvironmentStackUpgradeChangelog
```

Preview app environment stack upgrade

Returns the stack and service revision changes that an app environment stack upgrade would apply.

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
    $result = $apiInstance->getAppEnvironmentStackUpgradeChangelog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->getAppEnvironmentStackUpgradeChangelog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironmentStackUpgradeChangelog**](../Model/AppEnvironmentStackUpgradeChangelog.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkspaceConnection()`

```php
getWorkspaceConnection($id): \Wodby\Api\Model\WorkspaceConnection
```

Get workspace SSH connection

Return the owner-only SSH endpoint, readiness and stable host fingerprint.

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
    $result = $apiInstance->getWorkspaceConnection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->getWorkspaceConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\WorkspaceConnection**](../Model/WorkspaceConnection.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkspaceGitDiff()`

```php
getWorkspaceGitDiff($id, $path, $original_path): \Wodby\Api\Model\WorkspaceGitDiff
```

Get workspace file diff

Owner-only. Returns how one file in the workspace checkout differs from the last commit, with staged and unstaged changes together. An untracked file is shown as added. When the diff cannot be read, available is false and reason explains why.

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
$path = 'path_example'; // string | File path relative to the checkout, as listed by the workspace Git status.
$original_path = 'original_path_example'; // string | Previous path of a renamed or copied file.

try {
    $result = $apiInstance->getWorkspaceGitDiff($id, $path, $original_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->getWorkspaceGitDiff: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **path** | **string**| File path relative to the checkout, as listed by the workspace Git status. | |
| **original_path** | **string**| Previous path of a renamed or copied file. | [optional] |

### Return type

[**\Wodby\Api\Model\WorkspaceGitDiff**](../Model/WorkspaceGitDiff.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkspaceGitStatus()`

```php
getWorkspaceGitStatus($id): \Wodby\Api\Model\WorkspaceGitStatus
```

Get workspace Git status

Owner-only. Run a read-only Git command in the workspace runner and return the current branch, HEAD commit and uncommitted changes. When the state cannot be read, available is false and reason explains why.

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
    $result = $apiInstance->getWorkspaceGitStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->getWorkspaceGitStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\WorkspaceGitStatus**](../Model/WorkspaceGitStatus.md)

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

Returns cleanup records for exactly one app environment or integration.

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
$app_instance_id = 56; // int
$integration_id = 56; // int

try {
    $result = $apiInstance->listAppAccessCleanups($app_instance_id, $integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->listAppAccessCleanups: ', $e->getMessage(), PHP_EOL;
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

## `listAppAnnotations()`

```php
listAppAnnotations($app_environment_id, $types): \Wodby\Api\Model\AppAnnotation[]
```

List app annotations

Returns the ingress annotations of an app environment, its services and routes.

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
$app_environment_id = 56; // int
$types = 'types_example'; // string | Comma-separated annotation types, such as ingress.

try {
    $result = $apiInstance->listAppAnnotations($app_environment_id, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->listAppAnnotations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_environment_id** | **int**|  | |
| **types** | **string**| Comma-separated annotation types, such as ingress. | [optional] |

### Return type

[**\Wodby\Api\Model\AppAnnotation[]**](../Model/AppAnnotation.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppEnvironmentMigrations()`

```php
listAppEnvironmentMigrations($app_environment_id): \Wodby\Api\Model\AppEnvironmentMigration[]
```

List app environment migrations

Returns the cluster migrations of one app environment.

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
$app_environment_id = 56; // int

try {
    $result = $apiInstance->listAppEnvironmentMigrations($app_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->listAppEnvironmentMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_environment_id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironmentMigration[]**](../Model/AppEnvironmentMigration.md)

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

## `migrateAppEnvironment()`

```php
migrateAppEnvironment($id, $app_environment_migration_input): \Wodby\Api\Model\AppEnvironmentMigrationOperationResult
```

Migrate app environment to another cluster

Starts moving the app environment and its data to another cluster of the same organization. The source stays available for rollback until the migration is cleaned up or its retention ends.

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
$app_environment_migration_input = new \Wodby\Api\Model\AppEnvironmentMigrationInput(); // \Wodby\Api\Model\AppEnvironmentMigrationInput

try {
    $result = $apiInstance->migrateAppEnvironment($id, $app_environment_migration_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->migrateAppEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_environment_migration_input** | [**\Wodby\Api\Model\AppEnvironmentMigrationInput**](../Model/AppEnvironmentMigrationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironmentMigrationOperationResult**](../Model/AppEnvironmentMigrationOperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pauseWorkspace()`

```php
pauseWorkspace($id): \Wodby\Api\Model\Task
```

Pause workspace

Pause workspace. Workspace operations preserve the persistent checkout.

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
    $result = $apiInstance->pauseWorkspace($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->pauseWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Task**](../Model/Task.md)

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
preflightAppAccess($new_app_environment_access_input): \Wodby\Api\Model\ValidationResult
```

Preflight app environment access

Validates a proposed app-access configuration before an app environment or access resource is created. An active paid subscription is required.

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
$new_app_environment_access_input = new \Wodby\Api\Model\NewAppEnvironmentAccessInput(); // \Wodby\Api\Model\NewAppEnvironmentAccessInput

try {
    $result = $apiInstance->preflightAppAccess($new_app_environment_access_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->preflightAppAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_app_environment_access_input** | [**\Wodby\Api\Model\NewAppEnvironmentAccessInput**](../Model/NewAppEnvironmentAccessInput.md)|  | |

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

## `prepareWorkspace()`

```php
prepareWorkspace($id): \Wodby\Api\Model\Task
```

Prepare workspace

Prepare workspace. Workspace operations preserve the persistent checkout.

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
    $result = $apiInstance->prepareWorkspace($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->prepareWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Task**](../Model/Task.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pullWorkspace()`

```php
pullWorkspace($id, $workspace_pull_input): \Wodby\Api\Model\Task
```

Pull workspace

Owner-only. Fast-forwards the workspace checkout to its upstream branch, keeping uncommitted changes, then runs the environment's post-deployment scripts unless scripts is false.

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
$workspace_pull_input = new \Wodby\Api\Model\WorkspacePullInput(); // \Wodby\Api\Model\WorkspacePullInput

try {
    $result = $apiInstance->pullWorkspace($id, $workspace_pull_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->pullWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **workspace_pull_input** | [**\Wodby\Api\Model\WorkspacePullInput**](../Model/WorkspacePullInput.md)|  | [optional] |

### Return type

[**\Wodby\Api\Model\Task**](../Model/Task.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `restartWorkspace()`

```php
restartWorkspace($id): \Wodby\Api\Model\Task
```

Restart workspace

Restart the SSH runner, ending existing sessions while preserving code and home volumes.

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
    $result = $apiInstance->restartWorkspace($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->restartWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Task**](../Model/Task.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resumeWorkspace()`

```php
resumeWorkspace($id): \Wodby\Api\Model\Task
```

Resume workspace

Resume workspace. Workspace operations preserve the persistent checkout.

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
    $result = $apiInstance->resumeWorkspace($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->resumeWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Task**](../Model/Task.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
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
    echo 'Exception when calling AppEnvironmentsApi->retryAppAccessCleanup: ', $e->getMessage(), PHP_EOL;
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

## `rollbackAppEnvironmentMigration()`

```php
rollbackAppEnvironmentMigration($id): \Wodby\Api\Model\AppEnvironmentMigrationOperationResult
```

Roll back app environment migration

Moves the app environment back to its source cluster while the source is still retained.

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
    $result = $apiInstance->rollbackAppEnvironmentMigration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->rollbackAppEnvironmentMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppEnvironmentMigrationOperationResult**](../Model/AppEnvironmentMigrationOperationResult.md)

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


$apiInstance = new Wodby\Api\Api\AppEnvironmentsApi(
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
    echo 'Exception when calling AppEnvironmentsApi->updateAppAccess: ', $e->getMessage(), PHP_EOL;
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

## `updateAppAnnotation()`

```php
updateAppAnnotation($id, $update_app_annotation_input): \Wodby\Api\Model\AppAnnotation
```

Update app annotation

Changes an app annotation and returns it.

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
$update_app_annotation_input = new \Wodby\Api\Model\UpdateAppAnnotationInput(); // \Wodby\Api\Model\UpdateAppAnnotationInput

try {
    $result = $apiInstance->updateAppAnnotation($id, $update_app_annotation_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->updateAppAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_app_annotation_input** | [**\Wodby\Api\Model\UpdateAppAnnotationInput**](../Model/UpdateAppAnnotationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppAnnotation**](../Model/AppAnnotation.md)

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

## `workspaceEligibility()`

```php
workspaceEligibility($workspace_eligibility_request): \Wodby\Api\Model\WorkspaceEligibility200Response
```

Check workspace service eligibility

Check the selected stack service graph. Creation separately validates repository, shared storage, access and resource limits.

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
$workspace_eligibility_request = new \Wodby\Api\Model\WorkspaceEligibilityRequest(); // \Wodby\Api\Model\WorkspaceEligibilityRequest

try {
    $result = $apiInstance->workspaceEligibility($workspace_eligibility_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppEnvironmentsApi->workspaceEligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_eligibility_request** | [**\Wodby\Api\Model\WorkspaceEligibilityRequest**](../Model/WorkspaceEligibilityRequest.md)|  | |

### Return type

[**\Wodby\Api\Model\WorkspaceEligibility200Response**](../Model/WorkspaceEligibility200Response.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
