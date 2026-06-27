# Wodby\Api\StackServicesApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStackService()**](StackServicesApi.md#createStackService) | **POST** /stack-services | Create stack service |
| [**deleteStackService()**](StackServicesApi.md#deleteStackService) | **DELETE** /stack-services/{id} | Delete stack service |
| [**listStackServices()**](StackServicesApi.md#listStackServices) | **GET** /stack-services | List stack services |
| [**updateStackService()**](StackServicesApi.md#updateStackService) | **PUT** /stack-services/{id} | Update stack service |


## `createStackService()`

```php
createStackService($new_stack_service_input): \Wodby\Api\Model\StackService
```

Create stack service

Creates a stack service and returns the created resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_stack_service_input = new \Wodby\Api\Model\NewStackServiceInput(); // \Wodby\Api\Model\NewStackServiceInput

try {
    $result = $apiInstance->createStackService($new_stack_service_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->createStackService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_stack_service_input** | [**\Wodby\Api\Model\NewStackServiceInput**](../Model/NewStackServiceInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackService**](../Model/StackService.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStackService()`

```php
deleteStackService($id): \Wodby\Api\Model\OperationResult
```

Delete stack service

Deletes the stack service and returns the operation result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteStackService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->deleteStackService: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackServices()`

```php
listStackServices($stack_rev_id): \Wodby\Api\Model\StackService[]
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


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stack_rev_id = 56; // int

try {
    $result = $apiInstance->listStackServices($stack_rev_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->listStackServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stack_rev_id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackService[]**](../Model/StackService.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStackService()`

```php
updateStackService($id, $stack_service_input): \Wodby\Api\Model\StackService
```

Update stack service

Updates the stack service and returns the updated resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$stack_service_input = new \Wodby\Api\Model\StackServiceInput(); // \Wodby\Api\Model\StackServiceInput

try {
    $result = $apiInstance->updateStackService($id, $stack_service_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->updateStackService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **stack_service_input** | [**\Wodby\Api\Model\StackServiceInput**](../Model/StackServiceInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackService**](../Model/StackService.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
