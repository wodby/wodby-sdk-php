# Wodby\Api\IntegrationsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**integrationsByNameNameGet()**](IntegrationsApi.md#integrationsByNameNameGet) | **GET** /integrations/by-name/{name} | Get integration by name |
| [**integrationsGet()**](IntegrationsApi.md#integrationsGet) | **GET** /integrations | List integrations |
| [**integrationsIdDelete()**](IntegrationsApi.md#integrationsIdDelete) | **DELETE** /integrations/{id} | Delete integration |
| [**integrationsIdKubeMachineTypesGet()**](IntegrationsApi.md#integrationsIdKubeMachineTypesGet) | **GET** /integrations/{id}/kube-machine-types | List Kubernetes machine types |
| [**integrationsIdKubeRegionsGet()**](IntegrationsApi.md#integrationsIdKubeRegionsGet) | **GET** /integrations/{id}/kube-regions | List Kubernetes regions |
| [**integrationsIdKubeSettingsGet()**](IntegrationsApi.md#integrationsIdKubeSettingsGet) | **GET** /integrations/{id}/kube-settings | Get Kubernetes settings |
| [**integrationsIdKubeVersionsGet()**](IntegrationsApi.md#integrationsIdKubeVersionsGet) | **GET** /integrations/{id}/kube-versions | List Kubernetes versions |
| [**integrationsIdKubeZonesGet()**](IntegrationsApi.md#integrationsIdKubeZonesGet) | **GET** /integrations/{id}/kube-zones | List Kubernetes zones |
| [**integrationsIdPut()**](IntegrationsApi.md#integrationsIdPut) | **PUT** /integrations/{id} | Update integration |
| [**integrationsIdRemoteGitRepoBranchesGet()**](IntegrationsApi.md#integrationsIdRemoteGitRepoBranchesGet) | **GET** /integrations/{id}/remote-git-repo-branches | List remote Git repository branches |
| [**integrationsIdRemoteGitRepoTagsGet()**](IntegrationsApi.md#integrationsIdRemoteGitRepoTagsGet) | **GET** /integrations/{id}/remote-git-repo-tags | List remote Git repository tags |
| [**integrationsIdRemoteGitReposGet()**](IntegrationsApi.md#integrationsIdRemoteGitReposGet) | **GET** /integrations/{id}/remote-git-repos | List remote Git repositories |
| [**integrationsIdScopesGet()**](IntegrationsApi.md#integrationsIdScopesGet) | **GET** /integrations/{id}/scopes | List integration scopes |
| [**integrationsIdStorageBucketsGet()**](IntegrationsApi.md#integrationsIdStorageBucketsGet) | **GET** /integrations/{id}/storage-buckets | List storage buckets |
| [**integrationsIdStorageClassesGet()**](IntegrationsApi.md#integrationsIdStorageClassesGet) | **GET** /integrations/{id}/storage-classes | List storage classes |
| [**integrationsPost()**](IntegrationsApi.md#integrationsPost) | **POST** /integrations | Create integration |


## `integrationsByNameNameGet()`

```php
integrationsByNameNameGet($name, $org_id): \Wodby\Api\Model\Integration
```

Get integration by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
$name = 'name_example'; // string
$org_id = 56; // int

try {
    $result = $apiInstance->integrationsByNameNameGet($name, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsByNameNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **org_id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Integration**](../Model/Integration.md)

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsGet()`

```php
integrationsGet($org_id, $project_ids, $labels): \Wodby\Api\Model\Integration[]
```

List integrations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
$org_id = 56; // int
$project_ids = 'project_ids_example'; // string | Comma-separated project ids
$labels = 'labels_example'; // string | Comma-separated labels

try {
    $result = $apiInstance->integrationsGet($org_id, $project_ids, $labels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **int**|  | |
| **project_ids** | **string**| Comma-separated project ids | [optional] |
| **labels** | **string**| Comma-separated labels | [optional] |

### Return type

[**\Wodby\Api\Model\Integration[]**](../Model/Integration.md)

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdDelete()`

```php
integrationsIdDelete($id): \Wodby\Api\Model\OperationResult
```

Delete integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdKubeMachineTypesGet()`

```php
integrationsIdKubeMachineTypesGet($id, $location): array[]
```

List Kubernetes machine types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdKubeMachineTypesGet($id, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdKubeMachineTypesGet: ', $e->getMessage(), PHP_EOL;
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

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdKubeRegionsGet()`

```php
integrationsIdKubeRegionsGet($id): array[]
```

List Kubernetes regions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdKubeRegionsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdKubeRegionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**array[]**

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdKubeSettingsGet()`

```php
integrationsIdKubeSettingsGet($id): array<string,mixed>
```

Get Kubernetes settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdKubeSettingsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdKubeSettingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**array<string,mixed>**

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdKubeVersionsGet()`

```php
integrationsIdKubeVersionsGet($id, $location): \Wodby\Api\Model\KubeVersion[]
```

List Kubernetes versions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdKubeVersionsGet($id, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdKubeVersionsGet: ', $e->getMessage(), PHP_EOL;
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

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdKubeZonesGet()`

```php
integrationsIdKubeZonesGet($id): array[]
```

List Kubernetes zones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdKubeZonesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdKubeZonesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**array[]**

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdPut()`

```php
integrationsIdPut($id, $update_integration_input): \Wodby\Api\Model\Integration
```

Update integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdPut($id, $update_integration_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdPut: ', $e->getMessage(), PHP_EOL;
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

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdRemoteGitRepoBranchesGet()`

```php
integrationsIdRemoteGitRepoBranchesGet($id, $remote_git_repo_id): string[]
```

List remote Git repository branches

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdRemoteGitRepoBranchesGet($id, $remote_git_repo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdRemoteGitRepoBranchesGet: ', $e->getMessage(), PHP_EOL;
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

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdRemoteGitRepoTagsGet()`

```php
integrationsIdRemoteGitRepoTagsGet($id, $remote_git_repo_id): string[]
```

List remote Git repository tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdRemoteGitRepoTagsGet($id, $remote_git_repo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdRemoteGitRepoTagsGet: ', $e->getMessage(), PHP_EOL;
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

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdRemoteGitReposGet()`

```php
integrationsIdRemoteGitReposGet($id): \Wodby\Api\Model\RemoteGitRepo[]
```

List remote Git repositories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdRemoteGitReposGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdRemoteGitReposGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\RemoteGitRepo[]**](../Model/RemoteGitRepo.md)

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdScopesGet()`

```php
integrationsIdScopesGet($id): \Wodby\Api\Model\IntegrationScope[]
```

List integration scopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdScopesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdScopesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\IntegrationScope[]**](../Model/IntegrationScope.md)

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdStorageBucketsGet()`

```php
integrationsIdStorageBucketsGet($id): string[]
```

List storage buckets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdStorageBucketsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdStorageBucketsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**string[]**

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsIdStorageClassesGet()`

```php
integrationsIdStorageClassesGet($id): string[]
```

List storage classes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsIdStorageClassesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsIdStorageClassesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**string[]**

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationsPost()`

```php
integrationsPost($new_integration_input): \Wodby\Api\Model\Integration
```

Create integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationsPost($new_integration_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->integrationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_integration_input** | [**\Wodby\Api\Model\NewIntegrationInput**](../Model/NewIntegrationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Integration**](../Model/Integration.md)

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
