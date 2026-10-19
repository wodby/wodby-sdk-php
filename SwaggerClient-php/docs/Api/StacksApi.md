# Wodby\Api\StacksApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStack()**](StacksApi.md#createStack) | **POST** /stacks | Create stack |
| [**createStackAnnotation()**](StacksApi.md#createStackAnnotation) | **POST** /stacks/{id}/configuration/annotations | Create stack annotation |
| [**createStackEnvVar()**](StacksApi.md#createStackEnvVar) | **POST** /stacks/{id}/configuration/env-vars | Create stack env var |
| [**createStackFromManifest()**](StacksApi.md#createStackFromManifest) | **POST** /stacks/actions/create-from-manifest | Create stack from manifest |
| [**createStackHelmValue()**](StacksApi.md#createStackHelmValue) | **POST** /stacks/{id}/configuration/helm-values | Create stack Helm value |
| [**createStackToken()**](StacksApi.md#createStackToken) | **POST** /stacks/{id}/configuration/tokens | Create stack token |
| [**deleteStack()**](StacksApi.md#deleteStack) | **DELETE** /stacks/{id} | Delete stack |
| [**deleteStackAnnotation()**](StacksApi.md#deleteStackAnnotation) | **DELETE** /stack-annotations/{id} | Delete stack annotation |
| [**deleteStackEnvVar()**](StacksApi.md#deleteStackEnvVar) | **DELETE** /stack-env-vars/{id} | Delete stack env var |
| [**deleteStackHelmValue()**](StacksApi.md#deleteStackHelmValue) | **DELETE** /stack-helm-values/{id} | Delete stack Helm value |
| [**deleteStackToken()**](StacksApi.md#deleteStackToken) | **DELETE** /stack-tokens/{id} | Delete stack token |
| [**discardStackDraft()**](StacksApi.md#discardStackDraft) | **POST** /stacks/{id}/actions/discard-draft | Discard stack draft |
| [**duplicateStack()**](StacksApi.md#duplicateStack) | **POST** /stacks/{id}/actions/duplicate | Duplicate stack |
| [**getStack()**](StacksApi.md#getStack) | **GET** /stacks/{id} | Get stack |
| [**getStackByName()**](StacksApi.md#getStackByName) | **GET** /stacks/by-name/{name} | Get stack by name |
| [**getStackOriginSyncChangelog()**](StacksApi.md#getStackOriginSyncChangelog) | **GET** /stack-origin-sync-changelogs/{id} | Preview stack origin synchronization |
| [**getStackRevision()**](StacksApi.md#getStackRevision) | **GET** /stack-revisions/{id} | Get stack revision |
| [**getStackServiceUpdateChangelog()**](StacksApi.md#getStackServiceUpdateChangelog) | **GET** /stack-service-update-changelogs/{id} | Preview stack service revision updates |
| [**getStackSharing()**](StacksApi.md#getStackSharing) | **GET** /stacks/sharing/{id} | Get stack sharing |
| [**ignoreStackServiceRevision()**](StacksApi.md#ignoreStackServiceRevision) | **POST** /stacks/{id}/actions/ignore-service-revision | Ignore stack service revision |
| [**importStacks()**](StacksApi.md#importStacks) | **POST** /stacks/actions/import | Import stacks from Git |
| [**listInfraStacks()**](StacksApi.md#listInfraStacks) | **GET** /catalog/infra-stacks | List infrastructure stacks |
| [**listPublicStacks()**](StacksApi.md#listPublicStacks) | **GET** /catalog/stacks | List public catalog stacks |
| [**listStackAnnotations()**](StacksApi.md#listStackAnnotations) | **GET** /stack-revisions/{id}/annotations | List stack annotations |
| [**listStackEnvVars()**](StacksApi.md#listStackEnvVars) | **GET** /stack-revisions/{id}/env-vars | List stack env vars |
| [**listStackHelmValues()**](StacksApi.md#listStackHelmValues) | **GET** /stack-revisions/{id}/helm-values | List stack Helm values |
| [**listStackRevisionServices()**](StacksApi.md#listStackRevisionServices) | **GET** /stack-revisions/{id}/services | List stack services |
| [**listStackTokens()**](StacksApi.md#listStackTokens) | **GET** /stack-revisions/{id}/tokens | List stack tokens |
| [**listStacks()**](StacksApi.md#listStacks) | **GET** /stacks | List stacks |
| [**publishStackDraft()**](StacksApi.md#publishStackDraft) | **POST** /stacks/{id}/actions/publish-draft | Publish stack draft |
| [**scaffoldStackFromHelmChart()**](StacksApi.md#scaffoldStackFromHelmChart) | **POST** /stacks/actions/scaffold-from-helm-chart | Scaffold stack from Helm chart |
| [**syncStackWithOrigin()**](StacksApi.md#syncStackWithOrigin) | **POST** /stacks/{id}/actions/sync-origin | Sync stack with origin |
| [**updateStack()**](StacksApi.md#updateStack) | **PUT** /stacks/{id} | Rename stack |
| [**updateStackEnvVar()**](StacksApi.md#updateStackEnvVar) | **PUT** /stack-env-vars/{id} | Update stack env var |
| [**updateStackFromGit()**](StacksApi.md#updateStackFromGit) | **POST** /stacks/{id}/actions/update-from-git | Update stack from git |
| [**updateStackHelmValue()**](StacksApi.md#updateStackHelmValue) | **PUT** /stack-helm-values/{id} | Update stack Helm value |
| [**updateStackServiceRevisions()**](StacksApi.md#updateStackServiceRevisions) | **POST** /stacks/{id}/actions/update-service-revisions | Update stack service revisions |
| [**updateStackSettings()**](StacksApi.md#updateStackSettings) | **PUT** /stacks/settings/{id} | Update stack settings |
| [**updateStackSharing()**](StacksApi.md#updateStackSharing) | **PUT** /stacks/sharing/{id} | Update stack sharing |
| [**updateStackToken()**](StacksApi.md#updateStackToken) | **PUT** /stack-tokens/{id} | Update stack token |
| [**validateStackManifest()**](StacksApi.md#validateStackManifest) | **POST** /stacks/actions/validate-manifest | Validate stack manifest |


## `createStack()`

```php
createStack($new_stack_input): \Wodby\Api\Model\Stack
```

Create stack

Creates a stack from catalog services without a manifest. Use POST /stacks/actions/create-from-manifest for a stack.yml.

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
$new_stack_input = new \Wodby\Api\Model\NewStackInput(); // \Wodby\Api\Model\NewStackInput

try {
    $result = $apiInstance->createStack($new_stack_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->createStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_stack_input** | [**\Wodby\Api\Model\NewStackInput**](../Model/NewStackInput.md)|  | |

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

## `createStackAnnotation()`

```php
createStackAnnotation($id, $new_stack_annotation_input): \Wodby\Api\Model\StackAnnotation
```

Create stack annotation

Adds a stack-level annotation to the stack and creates a new draft revision when needed.

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
$new_stack_annotation_input = new \Wodby\Api\Model\NewStackAnnotationInput(); // \Wodby\Api\Model\NewStackAnnotationInput

try {
    $result = $apiInstance->createStackAnnotation($id, $new_stack_annotation_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->createStackAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_stack_annotation_input** | [**\Wodby\Api\Model\NewStackAnnotationInput**](../Model/NewStackAnnotationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackAnnotation**](../Model/StackAnnotation.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStackEnvVar()`

```php
createStackEnvVar($id, $new_stack_env_var_input): \Wodby\Api\Model\StackEnvVar
```

Create stack env var

Creates a stack-wide environment variable.

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
$new_stack_env_var_input = new \Wodby\Api\Model\NewStackEnvVarInput(); // \Wodby\Api\Model\NewStackEnvVarInput

try {
    $result = $apiInstance->createStackEnvVar($id, $new_stack_env_var_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->createStackEnvVar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_stack_env_var_input** | [**\Wodby\Api\Model\NewStackEnvVarInput**](../Model/NewStackEnvVarInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackEnvVar**](../Model/StackEnvVar.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `createStackHelmValue()`

```php
createStackHelmValue($id, $new_stack_helm_value_input): \Wodby\Api\Model\StackHelmValue
```

Create stack Helm value

Adds a stack-level Helm value to the stack and creates a new draft revision when needed.

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
$new_stack_helm_value_input = new \Wodby\Api\Model\NewStackHelmValueInput(); // \Wodby\Api\Model\NewStackHelmValueInput

try {
    $result = $apiInstance->createStackHelmValue($id, $new_stack_helm_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->createStackHelmValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_stack_helm_value_input** | [**\Wodby\Api\Model\NewStackHelmValueInput**](../Model/NewStackHelmValueInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackHelmValue**](../Model/StackHelmValue.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStackToken()`

```php
createStackToken($id, $new_stack_token_input): \Wodby\Api\Model\StackToken
```

Create stack token

Adds a stack-level token to the stack and creates a new draft revision when needed.

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
$new_stack_token_input = new \Wodby\Api\Model\NewStackTokenInput(); // \Wodby\Api\Model\NewStackTokenInput

try {
    $result = $apiInstance->createStackToken($id, $new_stack_token_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->createStackToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_stack_token_input** | [**\Wodby\Api\Model\NewStackTokenInput**](../Model/NewStackTokenInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackToken**](../Model/StackToken.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStack()`

```php
deleteStack($id): \Wodby\Api\Model\OperationResult
```

Delete stack

Deletes an unused stack and returns the operation result.

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
    $result = $apiInstance->deleteStack($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->deleteStack: ', $e->getMessage(), PHP_EOL;
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

## `deleteStackAnnotation()`

```php
deleteStackAnnotation($id): \Wodby\Api\Model\OperationResult
```

Delete stack annotation

Deletes a stack-level annotation.

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
    $result = $apiInstance->deleteStackAnnotation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->deleteStackAnnotation: ', $e->getMessage(), PHP_EOL;
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

## `deleteStackEnvVar()`

```php
deleteStackEnvVar($id): \Wodby\Api\Model\OperationResult
```

Delete stack env var

Deletes a stack-wide environment variable.

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
    $result = $apiInstance->deleteStackEnvVar($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->deleteStackEnvVar: ', $e->getMessage(), PHP_EOL;
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

## `deleteStackHelmValue()`

```php
deleteStackHelmValue($id): \Wodby\Api\Model\OperationResult
```

Delete stack Helm value

Deletes a stack-level Helm value.

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
    $result = $apiInstance->deleteStackHelmValue($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->deleteStackHelmValue: ', $e->getMessage(), PHP_EOL;
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

## `deleteStackToken()`

```php
deleteStackToken($id): \Wodby\Api\Model\OperationResult
```

Delete stack token

Deletes a stack-level token.

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
    $result = $apiInstance->deleteStackToken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->deleteStackToken: ', $e->getMessage(), PHP_EOL;
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

## `discardStackDraft()`

```php
discardStackDraft($id): \Wodby\Api\Model\Stack
```

Discard stack draft

Drops the stack's unpublished draft revision and returns the stack.

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
    $result = $apiInstance->discardStackDraft($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->discardStackDraft: ', $e->getMessage(), PHP_EOL;
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

## `getStackOriginSyncChangelog()`

```php
getStackOriginSyncChangelog($id): \Wodby\Api\Model\StackOriginSyncChangelog
```

Preview stack origin synchronization

Returns the origin stack changes that would be synchronized into the stack.

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
    $result = $apiInstance->getStackOriginSyncChangelog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->getStackOriginSyncChangelog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackOriginSyncChangelog**](../Model/StackOriginSyncChangelog.md)

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

## `getStackServiceUpdateChangelog()`

```php
getStackServiceUpdateChangelog($id, $stack_service_id): \Wodby\Api\Model\StackServiceUpdateChangelog[]
```

Preview stack service revision updates

Returns eligible service revision changes for a stack, optionally limited to one stack service.

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
$stack_service_id = 56; // int

try {
    $result = $apiInstance->getStackServiceUpdateChangelog($id, $stack_service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->getStackServiceUpdateChangelog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **stack_service_id** | **int**|  | [optional] |

### Return type

[**\Wodby\Api\Model\StackServiceUpdateChangelog[]**](../Model/StackServiceUpdateChangelog.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStackSharing()`

```php
getStackSharing($id): \Wodby\Api\Model\ResourceSharing
```

Get stack sharing

Returns who owns the stack and which projects can use it.

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
    $result = $apiInstance->getStackSharing($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->getStackSharing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\ResourceSharing**](../Model/ResourceSharing.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ignoreStackServiceRevision()`

```php
ignoreStackServiceRevision($id, $ignore_stack_service_revision_input): \Wodby\Api\Model\Stack
```

Ignore stack service revision

Stops offering one service revision as an update for a stack service and its derivatives. A newer service revision is offered again. Returns the stack.

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
$ignore_stack_service_revision_input = new \Wodby\Api\Model\IgnoreStackServiceRevisionInput(); // \Wodby\Api\Model\IgnoreStackServiceRevisionInput

try {
    $result = $apiInstance->ignoreStackServiceRevision($id, $ignore_stack_service_revision_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->ignoreStackServiceRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **ignore_stack_service_revision_input** | [**\Wodby\Api\Model\IgnoreStackServiceRevisionInput**](../Model/IgnoreStackServiceRevisionInput.md)|  | |

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

## `importStacks()`

```php
importStacks($import_stacks_from_git_input): \Wodby\Api\Model\OperationResult
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
$import_stacks_from_git_input = new \Wodby\Api\Model\ImportStacksFromGitInput(); // \Wodby\Api\Model\ImportStacksFromGitInput

try {
    $result = $apiInstance->importStacks($import_stacks_from_git_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->importStacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import_stacks_from_git_input** | [**\Wodby\Api\Model\ImportStacksFromGitInput**](../Model/ImportStacksFromGitInput.md)|  | |

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

## `listInfraStacks()`

```php
listInfraStacks($provider): \Wodby\Api\Model\Stack[]
```

List infrastructure stacks

Returns the infrastructure stacks Wodby installs on clusters of a public Kubernetes provider.

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
$provider = 'provider_example'; // string | Provider name, such as aws or digitalocean.

try {
    $result = $apiInstance->listInfraStacks($provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->listInfraStacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| Provider name, such as aws or digitalocean. | |

### Return type

[**\Wodby\Api\Model\Stack[]**](../Model/Stack.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPublicStacks()`

```php
listPublicStacks(): \Wodby\Api\Model\Stack[]
```

List public catalog stacks

Returns public stacks that can be duplicated into an organization or project.

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

try {
    $result = $apiInstance->listPublicStacks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->listPublicStacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Wodby\Api\Model\Stack[]**](../Model/Stack.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackAnnotations()`

```php
listStackAnnotations($id): \Wodby\Api\Model\StackAnnotation[]
```

List stack annotations

Returns the stack-level annotations of a stack revision. They apply to every service of the stack.

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
    $result = $apiInstance->listStackAnnotations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->listStackAnnotations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackAnnotation[]**](../Model/StackAnnotation.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackEnvVars()`

```php
listStackEnvVars($id): \Wodby\Api\Model\StackEnvVar[]
```

List stack env vars

Returns stack-wide environment variables for a stack revision.

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
    $result = $apiInstance->listStackEnvVars($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->listStackEnvVars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackEnvVar[]**](../Model/StackEnvVar.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackHelmValues()`

```php
listStackHelmValues($id): \Wodby\Api\Model\StackHelmValue[]
```

List stack Helm values

Returns the stack-level Helm values of a stack revision. They apply to every service of the stack.

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
    $result = $apiInstance->listStackHelmValues($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->listStackHelmValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackHelmValue[]**](../Model/StackHelmValue.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
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

## `listStackTokens()`

```php
listStackTokens($id): \Wodby\Api\Model\StackToken[]
```

List stack tokens

Returns the stack-level tokens of a stack revision. They apply to every service of the stack.

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
    $result = $apiInstance->listStackTokens($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->listStackTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackToken[]**](../Model/StackToken.md)

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

## `updateStack()`

```php
updateStack($id, $update_stack_request): \Wodby\Api\Model\Stack
```

Rename stack

Updates the name and title of the stack identified by the request path.

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
$update_stack_request = new \Wodby\Api\Model\UpdateStackRequest(); // \Wodby\Api\Model\UpdateStackRequest

try {
    $result = $apiInstance->updateStack($id, $update_stack_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->updateStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_stack_request** | [**\Wodby\Api\Model\UpdateStackRequest**](../Model/UpdateStackRequest.md)|  | |

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

## `updateStackEnvVar()`

```php
updateStackEnvVar($id, $update_stack_env_var_input): \Wodby\Api\Model\StackEnvVar
```

Update stack env var

Updates a stack-wide environment variable.

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
$update_stack_env_var_input = new \Wodby\Api\Model\UpdateStackEnvVarInput(); // \Wodby\Api\Model\UpdateStackEnvVarInput

try {
    $result = $apiInstance->updateStackEnvVar($id, $update_stack_env_var_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->updateStackEnvVar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_stack_env_var_input** | [**\Wodby\Api\Model\UpdateStackEnvVarInput**](../Model/UpdateStackEnvVarInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackEnvVar**](../Model/StackEnvVar.md)

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

## `updateStackHelmValue()`

```php
updateStackHelmValue($id, $update_stack_helm_value_input): \Wodby\Api\Model\StackHelmValue
```

Update stack Helm value

Changes a stack-level Helm value.

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
$update_stack_helm_value_input = new \Wodby\Api\Model\UpdateStackHelmValueInput(); // \Wodby\Api\Model\UpdateStackHelmValueInput

try {
    $result = $apiInstance->updateStackHelmValue($id, $update_stack_helm_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->updateStackHelmValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_stack_helm_value_input** | [**\Wodby\Api\Model\UpdateStackHelmValueInput**](../Model/UpdateStackHelmValueInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackHelmValue**](../Model/StackHelmValue.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStackServiceRevisions()`

```php
updateStackServiceRevisions($id, $scope): \Wodby\Api\Model\OperationResult
```

Update stack service revisions

Starts a task that advances unpinned stack services to their eligible revisions.

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
$scope = 'all'; // string | Limits the update to all services or stateless services. Defaults to all.

try {
    $result = $apiInstance->updateStackServiceRevisions($id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->updateStackServiceRevisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **scope** | **string**| Limits the update to all services or stateless services. Defaults to all. | [optional] [default to &#39;all&#39;] |

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

## `updateStackSharing()`

```php
updateStackSharing($id, $resource_sharing_input): \Wodby\Api\Model\ResourceSharing
```

Update stack sharing

Changes the stack owner and replaces the projects it is shared with. It can also make an organization-owned stack available to every project. Returns the resulting sharing.

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
$resource_sharing_input = new \Wodby\Api\Model\ResourceSharingInput(); // \Wodby\Api\Model\ResourceSharingInput

try {
    $result = $apiInstance->updateStackSharing($id, $resource_sharing_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->updateStackSharing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **resource_sharing_input** | [**\Wodby\Api\Model\ResourceSharingInput**](../Model/ResourceSharingInput.md)|  | |

### Return type

[**\Wodby\Api\Model\ResourceSharing**](../Model/ResourceSharing.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStackToken()`

```php
updateStackToken($id, $update_stack_token_input): \Wodby\Api\Model\StackToken
```

Update stack token

Changes a stack-level token.

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
$update_stack_token_input = new \Wodby\Api\Model\UpdateStackTokenInput(); // \Wodby\Api\Model\UpdateStackTokenInput

try {
    $result = $apiInstance->updateStackToken($id, $update_stack_token_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StacksApi->updateStackToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_stack_token_input** | [**\Wodby\Api\Model\UpdateStackTokenInput**](../Model/UpdateStackTokenInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackToken**](../Model/StackToken.md)

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
