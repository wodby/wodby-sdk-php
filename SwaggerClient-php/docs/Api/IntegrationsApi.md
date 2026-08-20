# Wodby\Api\IntegrationsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**configureIntegration()**](IntegrationsApi.md#configureIntegration) | **PUT** /integrations/configuration/{id} | Configure integration |
| [**createIntegration()**](IntegrationsApi.md#createIntegration) | **POST** /integrations | Create integration |
| [**deleteIntegration()**](IntegrationsApi.md#deleteIntegration) | **DELETE** /integrations/{id} | Delete integration |
| [**getAppAccessProviderOptions()**](IntegrationsApi.md#getAppAccessProviderOptions) | **GET** /integrations/{id}/options/app-access | Get app-access provider options |
| [**getIntegration()**](IntegrationsApi.md#getIntegration) | **GET** /integrations/{id} | Get integration |
| [**getIntegrationKubeSettings()**](IntegrationsApi.md#getIntegrationKubeSettings) | **GET** /integrations/{id}/options/kube-settings | Get Kubernetes settings |
| [**getIntegrationRemoteGitRepoFilePresence()**](IntegrationsApi.md#getIntegrationRemoteGitRepoFilePresence) | **GET** /integrations/{id}/options/remote-git-repo-file | Check a remote Git repository file |
| [**listIntegrationKubeMachineTypes()**](IntegrationsApi.md#listIntegrationKubeMachineTypes) | **GET** /integrations/{id}/options/kube-machine-types | List Kubernetes machine types |
| [**listIntegrationKubeRegions()**](IntegrationsApi.md#listIntegrationKubeRegions) | **GET** /integrations/{id}/options/kube-regions | List Kubernetes regions |
| [**listIntegrationKubeVersions()**](IntegrationsApi.md#listIntegrationKubeVersions) | **GET** /integrations/{id}/options/kube-versions | List Kubernetes versions |
| [**listIntegrationKubeZones()**](IntegrationsApi.md#listIntegrationKubeZones) | **GET** /integrations/{id}/options/kube-zones | List Kubernetes zones |
| [**listIntegrationRemoteGitRepoBranches()**](IntegrationsApi.md#listIntegrationRemoteGitRepoBranches) | **GET** /integrations/{id}/options/remote-git-repo-branches | List remote Git repository branches |
| [**listIntegrationRemoteGitRepoTags()**](IntegrationsApi.md#listIntegrationRemoteGitRepoTags) | **GET** /integrations/{id}/options/remote-git-repo-tags | List remote Git repository tags |
| [**listIntegrationRemoteGitRepos()**](IntegrationsApi.md#listIntegrationRemoteGitRepos) | **GET** /integrations/{id}/options/remote-git-repos | List remote Git repositories |
| [**listIntegrationScopes()**](IntegrationsApi.md#listIntegrationScopes) | **GET** /integrations/{id}/options/scopes | List integration scopes |
| [**listIntegrationStorageBuckets()**](IntegrationsApi.md#listIntegrationStorageBuckets) | **GET** /integrations/{id}/options/storage-buckets | List storage buckets |
| [**listIntegrationStorageClasses()**](IntegrationsApi.md#listIntegrationStorageClasses) | **GET** /integrations/{id}/options/storage-classes | List storage classes |
| [**listIntegrations()**](IntegrationsApi.md#listIntegrations) | **GET** /integrations | List integrations |
| [**resolveIntegration()**](IntegrationsApi.md#resolveIntegration) | **POST** /integrations/actions/resolve | Resolve or create integration |
| [**searchIntegrations()**](IntegrationsApi.md#searchIntegrations) | **POST** /integrations/actions/search | Search integrations |
| [**testIntegrationPermissions()**](IntegrationsApi.md#testIntegrationPermissions) | **POST** /integrations/{id}/actions/test-permissions | Test integration permissions |
| [**updateIntegration()**](IntegrationsApi.md#updateIntegration) | **PUT** /integrations/{id} | Update integration |
| [**updateIntegrationEnvironmentPolicy()**](IntegrationsApi.md#updateIntegrationEnvironmentPolicy) | **PUT** /integrations/environment-policy/{id} | Update integration environment policy |
| [**validateAppAccessHostname()**](IntegrationsApi.md#validateAppAccessHostname) | **POST** /integrations/{id}/actions/validate-app-access-hostname | Validate an app-access hostname |


## `configureIntegration()`

```php
configureIntegration($id, $update_integration_input): \Wodby\Api\Model\IntegrationConfigurationResult
```

Configure integration

Atomically updates integration metadata, adds selected kinds, merges field values, and returns any background activation or permission-test task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_integration_input = new \Wodby\Api\Model\UpdateIntegrationInput(); // \Wodby\Api\Model\UpdateIntegrationInput

try {
    $result = $apiInstance->configureIntegration($id, $update_integration_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->configureIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_integration_input** | [**\Wodby\Api\Model\UpdateIntegrationInput**](../Model/UpdateIntegrationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\IntegrationConfigurationResult**](../Model/IntegrationConfigurationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIntegration()`

```php
createIntegration($new_integration_input): \Wodby\Api\Model\Integration
```

Create integration

Creates an integration and returns the created resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_integration_input = new \Wodby\Api\Model\NewIntegrationInput(); // \Wodby\Api\Model\NewIntegrationInput

try {
    $result = $apiInstance->createIntegration($new_integration_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->createIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_integration_input** | [**\Wodby\Api\Model\NewIntegrationInput**](../Model/NewIntegrationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Integration**](../Model/Integration.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIntegration()`

```php
deleteIntegration($id): \Wodby\Api\Model\OperationResult
```

Delete integration

Deletes the integration and returns the operation result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteIntegration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->deleteIntegration: ', $e->getMessage(), PHP_EOL;
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

## `getAppAccessProviderOptions()`

```php
getAppAccessProviderOptions($id): \Wodby\Api\Model\AppAccessProviderOptions
```

Get app-access provider options

Returns supported app-access modes, scopes, fields, and hostname behavior for the integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppAccessProviderOptions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getAppAccessProviderOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppAccessProviderOptions**](../Model/AppAccessProviderOptions.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegration()`

```php
getIntegration($id): \Wodby\Api\Model\Integration
```

Get integration

Returns the integration identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getIntegration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Integration**](../Model/Integration.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegrationKubeSettings()`

```php
getIntegrationKubeSettings($id): array<string,mixed>
```

Get Kubernetes settings

Returns the Kubernetes settings identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getIntegrationKubeSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationKubeSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**array<string,mixed>**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegrationRemoteGitRepoFilePresence()`

```php
getIntegrationRemoteGitRepoFilePresence($id, $remote_git_repo_id, $path, $ref): \Wodby\Api\Model\RemoteGitRepoFilePresence
```

Check a remote Git repository file

Returns whether a file exists at an exact repository ref through the selected Git integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$remote_git_repo_id = 'remote_git_repo_id_example'; // string
$path = 'path_example'; // string
$ref = 'ref_example'; // string

try {
    $result = $apiInstance->getIntegrationRemoteGitRepoFilePresence($id, $remote_git_repo_id, $path, $ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationRemoteGitRepoFilePresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **remote_git_repo_id** | **string**|  | |
| **path** | **string**|  | |
| **ref** | **string**|  | |

### Return type

[**\Wodby\Api\Model\RemoteGitRepoFilePresence**](../Model/RemoteGitRepoFilePresence.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationKubeMachineTypes()`

```php
listIntegrationKubeMachineTypes($id, $location): array[]
```

List Kubernetes machine types

Returns Kubernetes machine types matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$location = 'location_example'; // string

try {
    $result = $apiInstance->listIntegrationKubeMachineTypes($id, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listIntegrationKubeMachineTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **location** | **string**|  | |

### Return type

**array[]**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationKubeRegions()`

```php
listIntegrationKubeRegions($id): array[]
```

List Kubernetes regions

Returns Kubernetes regions matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listIntegrationKubeRegions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listIntegrationKubeRegions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**array[]**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationKubeVersions()`

```php
listIntegrationKubeVersions($id, $location): \Wodby\Api\Model\KubeVersion[]
```

List Kubernetes versions

Returns Kubernetes versions matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$location = 'location_example'; // string

try {
    $result = $apiInstance->listIntegrationKubeVersions($id, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listIntegrationKubeVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **location** | **string**|  | |

### Return type

[**\Wodby\Api\Model\KubeVersion[]**](../Model/KubeVersion.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationKubeZones()`

```php
listIntegrationKubeZones($id): array[]
```

List Kubernetes zones

Returns Kubernetes zones matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listIntegrationKubeZones($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listIntegrationKubeZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**array[]**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationRemoteGitRepoBranches()`

```php
listIntegrationRemoteGitRepoBranches($id, $remote_git_repo_id): string[]
```

List remote Git repository branches

Returns remote Git repository branches matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$remote_git_repo_id = 'remote_git_repo_id_example'; // string

try {
    $result = $apiInstance->listIntegrationRemoteGitRepoBranches($id, $remote_git_repo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listIntegrationRemoteGitRepoBranches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **remote_git_repo_id** | **string**|  | |

### Return type

**string[]**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationRemoteGitRepoTags()`

```php
listIntegrationRemoteGitRepoTags($id, $remote_git_repo_id): string[]
```

List remote Git repository tags

Returns remote Git repository tags matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$remote_git_repo_id = 'remote_git_repo_id_example'; // string

try {
    $result = $apiInstance->listIntegrationRemoteGitRepoTags($id, $remote_git_repo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listIntegrationRemoteGitRepoTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **remote_git_repo_id** | **string**|  | |

### Return type

**string[]**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationRemoteGitRepos()`

```php
listIntegrationRemoteGitRepos($id): \Wodby\Api\Model\RemoteGitRepo[]
```

List remote Git repositories

Returns remote Git repositories matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listIntegrationRemoteGitRepos($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listIntegrationRemoteGitRepos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\RemoteGitRepo[]**](../Model/RemoteGitRepo.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationScopes()`

```php
listIntegrationScopes($id): \Wodby\Api\Model\IntegrationScope[]
```

List integration scopes

Returns integration scopes matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listIntegrationScopes($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listIntegrationScopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\IntegrationScope[]**](../Model/IntegrationScope.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationStorageBuckets()`

```php
listIntegrationStorageBuckets($id): string[]
```

List storage buckets

Returns storage buckets matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listIntegrationStorageBuckets($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listIntegrationStorageBuckets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**string[]**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationStorageClasses()`

```php
listIntegrationStorageClasses($id): string[]
```

List storage classes

Returns storage classes matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listIntegrationStorageClasses($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listIntegrationStorageClasses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**string[]**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrations()`

```php
listIntegrations($org_id, $project_ids, $labels, $env_id): \Wodby\Api\Model\Integration[]
```

List integrations

Returns integrations matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.
$project_ids = 'project_ids_example'; // string | Comma-separated project ids
$labels = 'labels_example'; // string | Comma-separated labels
$env_id = 56; // int | Return only integrations allowed in this environment

try {
    $result = $apiInstance->listIntegrations($org_id, $project_ids, $labels, $env_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |
| **project_ids** | **string**| Comma-separated project ids | [optional] |
| **labels** | **string**| Comma-separated labels | [optional] |
| **env_id** | **int**| Return only integrations allowed in this environment | [optional] |

### Return type

[**\Wodby\Api\Model\Integration[]**](../Model/Integration.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resolveIntegration()`

```php
resolveIntegration($new_integration_input): \Wodby\Api\Model\ResolveIntegrationResult
```

Resolve or create integration

Reuses an accessible integration when provider, kinds, scope, environment scopes, and credential values match exactly; otherwise creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_integration_input = new \Wodby\Api\Model\NewIntegrationInput(); // \Wodby\Api\Model\NewIntegrationInput

try {
    $result = $apiInstance->resolveIntegration($new_integration_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->resolveIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_integration_input** | [**\Wodby\Api\Model\NewIntegrationInput**](../Model/NewIntegrationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\ResolveIntegrationResult**](../Model/ResolveIntegrationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchIntegrations()`

```php
searchIntegrations($search_integrations_input): \Wodby\Api\Model\Integration[]
```

Search integrations

Returns accessible integrations matching structured type, status, label, variable, project, and environment requirements.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_integrations_input = new \Wodby\Api\Model\SearchIntegrationsInput(); // \Wodby\Api\Model\SearchIntegrationsInput

try {
    $result = $apiInstance->searchIntegrations($search_integrations_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->searchIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_integrations_input** | [**\Wodby\Api\Model\SearchIntegrationsInput**](../Model/SearchIntegrationsInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Integration[]**](../Model/Integration.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testIntegrationPermissions()`

```php
testIntegrationPermissions($id): \Wodby\Api\Model\OperationResult
```

Test integration permissions

Starts the provider permission audit configured by the integration's provider revision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->testIntegrationPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->testIntegrationPermissions: ', $e->getMessage(), PHP_EOL;
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

## `updateIntegration()`

```php
updateIntegration($id, $update_integration_input): \Wodby\Api\Model\Integration
```

Update integration

Updates the integration and returns the updated resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_integration_input = new \Wodby\Api\Model\UpdateIntegrationInput(); // \Wodby\Api\Model\UpdateIntegrationInput

try {
    $result = $apiInstance->updateIntegration($id, $update_integration_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->updateIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_integration_input** | [**\Wodby\Api\Model\UpdateIntegrationInput**](../Model/UpdateIntegrationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Integration**](../Model/Integration.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIntegrationEnvironmentPolicy()`

```php
updateIntegrationEnvironmentPolicy($id, $integration_environment_policy_input): \Wodby\Api\Model\Integration
```

Update integration environment policy

Updates the associated environment and exact allowed environment scope. Scope reductions that conflict with existing references are rejected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$integration_environment_policy_input = new \Wodby\Api\Model\IntegrationEnvironmentPolicyInput(); // \Wodby\Api\Model\IntegrationEnvironmentPolicyInput

try {
    $result = $apiInstance->updateIntegrationEnvironmentPolicy($id, $integration_environment_policy_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->updateIntegrationEnvironmentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **integration_environment_policy_input** | [**\Wodby\Api\Model\IntegrationEnvironmentPolicyInput**](../Model/IntegrationEnvironmentPolicyInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Integration**](../Model/Integration.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateAppAccessHostname()`

```php
validateAppAccessHostname($id, $validate_app_access_hostname_input): \Wodby\Api\Model\ValidationResult
```

Validate an app-access hostname

Validates an app-access hostname against the provider settings of the integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$validate_app_access_hostname_input = new \Wodby\Api\Model\ValidateAppAccessHostnameInput(); // \Wodby\Api\Model\ValidateAppAccessHostnameInput

try {
    $result = $apiInstance->validateAppAccessHostname($id, $validate_app_access_hostname_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->validateAppAccessHostname: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **validate_app_access_hostname_input** | [**\Wodby\Api\Model\ValidateAppAccessHostnameInput**](../Model/ValidateAppAccessHostnameInput.md)|  | |

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
