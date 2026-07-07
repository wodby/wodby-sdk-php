# Wodby\Api\StacksApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStackFromManifest()**](StacksApi.md#createStackFromManifest) | **POST** /stacks/actions/create-from-manifest | Create stack from manifest |
| [**duplicateStack()**](StacksApi.md#duplicateStack) | **POST** /stacks/{id}/actions/duplicate | Duplicate stack |
| [**getStack()**](StacksApi.md#getStack) | **GET** /stacks/{id} | Get stack |
| [**getStackByName()**](StacksApi.md#getStackByName) | **GET** /stacks/by-name/{name} | Get stack by name |
| [**getStackRevision()**](StacksApi.md#getStackRevision) | **GET** /stack-revisions/{id} | Get stack revision |
| [**importStacks()**](StacksApi.md#importStacks) | **POST** /stacks/actions/import | Import stacks from Git |
| [**listStackRevisionServices()**](StacksApi.md#listStackRevisionServices) | **GET** /stack-revisions/{id}/services | List stack services |
| [**listStacks()**](StacksApi.md#listStacks) | **GET** /stacks | List stacks |
| [**publishStackDraft()**](StacksApi.md#publishStackDraft) | **POST** /stacks/{id}/actions/publish-draft | Publish stack draft |
| [**scaffoldStackFromHelmChart()**](StacksApi.md#scaffoldStackFromHelmChart) | **POST** /stacks/actions/scaffold-from-helm-chart | Scaffold stack from Helm chart |
| [**syncStackWithOrigin()**](StacksApi.md#syncStackWithOrigin) | **POST** /stacks/{id}/actions/sync-origin | Sync stack with origin |
| [**updateStackFromGit()**](StacksApi.md#updateStackFromGit) | **POST** /stacks/{id}/actions/update-from-git | Update stack from git |
| [**updateStackSettings()**](StacksApi.md#updateStackSettings) | **PUT** /stacks/settings/{id} | Update stack settings |
| [**validateStackManifest()**](StacksApi.md#validateStackManifest) | **POST** /stacks/actions/validate-manifest | Validate stack manifest |


## `createStackFromManifest()`

```php
createStackFromManifest($manifest_from_yaml_input): \Wodby\Api\Model\Stack
```

Create stack from manifest

Creates a non-Git Wodby stack from a stack manifest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manifest_from_yaml_input = new \Wodby\Api\Model\ManifestFromYAMLInput(); // \Wodby\Api\Model\ManifestFromYAMLInput

try {
    $result = $apiInstance->createStackFromManifest($manifest_from_yaml_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->createStackFromManifest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **manifest_from_yaml_input** | [**\Wodby\Api\Model\ManifestFromYAMLInput**](../Model/ManifestFromYAMLInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Stack**](../Model/Stack.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `duplicateStack()`

```php
duplicateStack($id, $duplicate_stack_request): \Wodby\Api\Model\Stack
```

Duplicate stack

Duplicates the stack into the target organization or project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$duplicate_stack_request = new \Wodby\Api\Model\DuplicateStackRequest(); // \Wodby\Api\Model\DuplicateStackRequest

try {
    $result = $apiInstance->duplicateStack($id, $duplicate_stack_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->duplicateStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **duplicate_stack_request** | [**\Wodby\Api\Model\DuplicateStackRequest**](../Model/DuplicateStackRequest.md)|  | |

### Return type

[**\Wodby\Api\Model\Stack**](../Model/Stack.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStack()`

```php
getStack($id): \Wodby\Api\Model\Stack
```

Get stack

Returns the stack identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getStack($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->getStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Stack**](../Model/Stack.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStackByName()`

```php
getStackByName($name, $rev_number): \Wodby\Api\Model\Stack
```

Get stack by name

Returns the stack identified by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$rev_number = 56; // int

try {
    $result = $apiInstance->getStackByName($name, $rev_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->getStackByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **rev_number** | **int**|  | [optional] |

### Return type

[**\Wodby\Api\Model\Stack**](../Model/Stack.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStackRevision()`

```php
getStackRevision($id): \Wodby\Api\Model\StackRevision
```

Get stack revision

Returns the stack revision identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getStackRevision($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->getStackRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackRevision**](../Model/StackRevision.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importStacks()`

```php
importStacks($import_catalog_from_git_input): \Wodby\Api\Model\OperationResult
```

Import stacks from Git

Starts a task that imports stacks from a Git repository.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_catalog_from_git_input = new \Wodby\Api\Model\ImportCatalogFromGitInput(); // \Wodby\Api\Model\ImportCatalogFromGitInput

try {
    $result = $apiInstance->importStacks($import_catalog_from_git_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->importStacks: ', $e->getMessage(), PHP_EOL;
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

## `listStackRevisionServices()`

```php
listStackRevisionServices($id): \Wodby\Api\Model\StackService[]
```

List stack services

Returns stack services matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listStackRevisionServices($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->listStackRevisionServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackService[]**](../Model/StackService.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStacks()`

```php
listStacks($org_id, $project_ids, $search, $page, $page_size): \Wodby\Api\Model\StacksResponse
```

List stacks

Returns stacks matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.
$project_ids = 'project_ids_example'; // string | Comma-separated project ids
$search = 'search_example'; // string
$page = 56; // int | Page number, defaults to 1
$page_size = 56; // int | Page size, defaults to 30

try {
    $result = $apiInstance->listStacks($org_id, $project_ids, $search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->listStacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |
| **project_ids** | **string**| Comma-separated project ids | [optional] |
| **search** | **string**|  | [optional] |
| **page** | **int**| Page number, defaults to 1 | [optional] |
| **page_size** | **int**| Page size, defaults to 30 | [optional] |

### Return type

[**\Wodby\Api\Model\StacksResponse**](../Model/StacksResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishStackDraft()`

```php
publishStackDraft($id): \Wodby\Api\Model\Stack
```

Publish stack draft

Publishes the current stack draft as the active stack revision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->publishStackDraft($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->publishStackDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Stack**](../Model/Stack.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scaffoldStackFromHelmChart()`

```php
scaffoldStackFromHelmChart($helm_chart_stack_scaffold_input): \Wodby\Api\Model\HelmChartStackScaffoldResponse
```

Scaffold stack from Helm chart

Renders a Helm chart and returns best-effort Wodby service and stack manifests for review and validation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$helm_chart_stack_scaffold_input = new \Wodby\Api\Model\HelmChartStackScaffoldInput(); // \Wodby\Api\Model\HelmChartStackScaffoldInput

try {
    $result = $apiInstance->scaffoldStackFromHelmChart($helm_chart_stack_scaffold_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->scaffoldStackFromHelmChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **helm_chart_stack_scaffold_input** | [**\Wodby\Api\Model\HelmChartStackScaffoldInput**](../Model/HelmChartStackScaffoldInput.md)|  | |

### Return type

[**\Wodby\Api\Model\HelmChartStackScaffoldResponse**](../Model/HelmChartStackScaffoldResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncStackWithOrigin()`

```php
syncStackWithOrigin($id, $stack_sync_options_input): \Wodby\Api\Model\Stack
```

Sync stack with origin

Syncs the stack with its origin stack revision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$stack_sync_options_input = new \Wodby\Api\Model\StackSyncOptionsInput(); // \Wodby\Api\Model\StackSyncOptionsInput

try {
    $result = $apiInstance->syncStackWithOrigin($id, $stack_sync_options_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->syncStackWithOrigin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **stack_sync_options_input** | [**\Wodby\Api\Model\StackSyncOptionsInput**](../Model/StackSyncOptionsInput.md)|  | [optional] |

### Return type

[**\Wodby\Api\Model\Stack**](../Model/Stack.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStackFromGit()`

```php
updateStackFromGit($id, $update_stack_from_git_request): \Wodby\Api\Model\OperationResult
```

Update stack from git

Starts a task that updates the stack from its configured Git source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_stack_from_git_request = new \Wodby\Api\Model\UpdateStackFromGitRequest(); // \Wodby\Api\Model\UpdateStackFromGitRequest

try {
    $result = $apiInstance->updateStackFromGit($id, $update_stack_from_git_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->updateStackFromGit: ', $e->getMessage(), PHP_EOL;
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

## `updateStackSettings()`

```php
updateStackSettings($id, $stack_settings_input): \Wodby\Api\Model\Stack
```

Update stack settings

Updates stack settings and returns the updated stack.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$stack_settings_input = new \Wodby\Api\Model\StackSettingsInput(); // \Wodby\Api\Model\StackSettingsInput

try {
    $result = $apiInstance->updateStackSettings($id, $stack_settings_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->updateStackSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **stack_settings_input** | [**\Wodby\Api\Model\StackSettingsInput**](../Model/StackSettingsInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Stack**](../Model/Stack.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateStackManifest()`

```php
validateStackManifest($manifest_from_yaml_input): \Wodby\Api\Model\ManifestValidationResponse
```

Validate stack manifest

Validates a Wodby stack manifest without creating a stack.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manifest_from_yaml_input = new \Wodby\Api\Model\ManifestFromYAMLInput(); // \Wodby\Api\Model\ManifestFromYAMLInput

try {
    $result = $apiInstance->validateStackManifest($manifest_from_yaml_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->validateStackManifest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **manifest_from_yaml_input** | [**\Wodby\Api\Model\ManifestFromYAMLInput**](../Model/ManifestFromYAMLInput.md)|  | |

### Return type

[**\Wodby\Api\Model\ManifestValidationResponse**](../Model/ManifestValidationResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
