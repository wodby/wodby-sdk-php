# Wodby\Api\ProvidersApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProviderFromManifest()**](ProvidersApi.md#createProviderFromManifest) | **POST** /providers/actions/create-from-manifest | Create provider from manifest |
| [**createVariableProvider()**](ProvidersApi.md#createVariableProvider) | **POST** /providers/actions/create-variable | Create variable provider |
| [**getProvider()**](ProvidersApi.md#getProvider) | **GET** /providers/{id} | Get provider |
| [**getProviderByName()**](ProvidersApi.md#getProviderByName) | **GET** /providers/by-name/{name} | Get provider by name |
| [**getProviderRevision()**](ProvidersApi.md#getProviderRevision) | **GET** /provider-revisions/{id} | Get provider revision |
| [**importProviders()**](ProvidersApi.md#importProviders) | **POST** /providers/actions/import | Import providers from Git |
| [**listProviders()**](ProvidersApi.md#listProviders) | **GET** /providers | List providers |
| [**updateProviderFromGit()**](ProvidersApi.md#updateProviderFromGit) | **POST** /providers/{id}/actions/update-from-git | Update provider from Git |
| [**updateProviderFromManifest()**](ProvidersApi.md#updateProviderFromManifest) | **POST** /providers/{id}/actions/update-from-manifest | Update provider from manifest |
| [**updateProviderSettings()**](ProvidersApi.md#updateProviderSettings) | **PUT** /providers/settings/{id} | Update provider settings |


## `createProviderFromManifest()`

```php
createProviderFromManifest($provider_manifest_input): \Wodby\Api\Model\Provider
```

Create provider from manifest

Creates a namespaced, versioned variable provider from manifest YAML.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_manifest_input = new \Wodby\Api\Model\ProviderManifestInput(); // \Wodby\Api\Model\ProviderManifestInput

try {
    $result = $apiInstance->createProviderFromManifest($provider_manifest_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->createProviderFromManifest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_manifest_input** | [**\Wodby\Api\Model\ProviderManifestInput**](../Model/ProviderManifestInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Provider**](../Model/Provider.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVariableProvider()`

```php
createVariableProvider($new_variable_provider_input): \Wodby\Api\Model\Provider
```

Create variable provider

Creates a private provider whose integration fields are exposed as service environment variables.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_variable_provider_input = new \Wodby\Api\Model\NewVariableProviderInput(); // \Wodby\Api\Model\NewVariableProviderInput

try {
    $result = $apiInstance->createVariableProvider($new_variable_provider_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->createVariableProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_variable_provider_input** | [**\Wodby\Api\Model\NewVariableProviderInput**](../Model/NewVariableProviderInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Provider**](../Model/Provider.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProvider()`

```php
getProvider($id): \Wodby\Api\Model\Provider
```

Get provider

Returns the provider identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getProvider($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->getProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Provider**](../Model/Provider.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderByName()`

```php
getProviderByName($name): \Wodby\Api\Model\Provider
```

Get provider by name

Returns the provider identified by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->getProviderByName($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->getProviderByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

### Return type

[**\Wodby\Api\Model\Provider**](../Model/Provider.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderRevision()`

```php
getProviderRevision($id): \Wodby\Api\Model\ProviderRevision
```

Get provider revision

Returns the provider revision identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getProviderRevision($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->getProviderRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\ProviderRevision**](../Model/ProviderRevision.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importProviders()`

```php
importProviders($import_catalog_from_git_input): \Wodby\Api\Model\OperationResult
```

Import providers from Git

Starts a task that imports provider.yml or all providers listed by index.yml from a Git repository.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_catalog_from_git_input = new \Wodby\Api\Model\ImportCatalogFromGitInput(); // \Wodby\Api\Model\ImportCatalogFromGitInput

try {
    $result = $apiInstance->importProviders($import_catalog_from_git_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->importProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import_catalog_from_git_input** | [**\Wodby\Api\Model\ImportCatalogFromGitInput**](../Model/ImportCatalogFromGitInput.md)|  | |

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

## `listProviders()`

```php
listProviders($org_id, $project_ids, $exclude_public, $search, $page, $page_size): \Wodby\Api\Model\ProvidersResponse
```

List providers

Returns providers matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.
$project_ids = 'project_ids_example'; // string | Comma-separated project ids
$exclude_public = True; // bool
$search = 'search_example'; // string
$page = 56; // int | Page number, defaults to 1
$page_size = 56; // int | Page size, defaults to 30

try {
    $result = $apiInstance->listProviders($org_id, $project_ids, $exclude_public, $search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->listProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |
| **project_ids** | **string**| Comma-separated project ids | [optional] |
| **exclude_public** | **bool**|  | [optional] |
| **search** | **string**|  | [optional] |
| **page** | **int**| Page number, defaults to 1 | [optional] |
| **page_size** | **int**| Page size, defaults to 30 | [optional] |

### Return type

[**\Wodby\Api\Model\ProvidersResponse**](../Model/ProvidersResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProviderFromGit()`

```php
updateProviderFromGit($id, $update_stack_from_git_request): \Wodby\Api\Model\OperationResult
```

Update provider from Git

Starts an update from the selected ref. Changing a shared repository ref updates all repository usages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_stack_from_git_request = new \Wodby\Api\Model\UpdateStackFromGitRequest(); // \Wodby\Api\Model\UpdateStackFromGitRequest

try {
    $result = $apiInstance->updateProviderFromGit($id, $update_stack_from_git_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->updateProviderFromGit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_stack_from_git_request** | [**\Wodby\Api\Model\UpdateStackFromGitRequest**](../Model/UpdateStackFromGitRequest.md)|  | |

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

## `updateProviderFromManifest()`

```php
updateProviderFromManifest($id, $provider_manifest_update_input): \Wodby\Api\Model\OperationResult
```

Update provider from manifest

Starts an update of a non-Git provider from versioned manifest YAML.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$provider_manifest_update_input = new \Wodby\Api\Model\ProviderManifestUpdateInput(); // \Wodby\Api\Model\ProviderManifestUpdateInput

try {
    $result = $apiInstance->updateProviderFromManifest($id, $provider_manifest_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->updateProviderFromManifest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **provider_manifest_update_input** | [**\Wodby\Api\Model\ProviderManifestUpdateInput**](../Model/ProviderManifestUpdateInput.md)|  | |

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

## `updateProviderSettings()`

```php
updateProviderSettings($id, $provider_settings_input): \Wodby\Api\Model\Provider
```

Update provider settings

Updates Git auto-update settings shared by the repository usages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$provider_settings_input = new \Wodby\Api\Model\ProviderSettingsInput(); // \Wodby\Api\Model\ProviderSettingsInput

try {
    $result = $apiInstance->updateProviderSettings($id, $provider_settings_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->updateProviderSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **provider_settings_input** | [**\Wodby\Api\Model\ProviderSettingsInput**](../Model/ProviderSettingsInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Provider**](../Model/Provider.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
