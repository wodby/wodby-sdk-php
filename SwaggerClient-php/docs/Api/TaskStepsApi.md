# Wodby\Api\TaskStepsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaskStepLogUrl()**](TaskStepsApi.md#getTaskStepLogUrl) | **GET** /task-steps/{id}/log-url | Get task step log URL |
| [**getTaskStepLogs()**](TaskStepsApi.md#getTaskStepLogs) | **GET** /task-steps/{id}/logs | Get task step logs |


## `getTaskStepLogUrl()`

```php
getTaskStepLogUrl($id): \Wodby\Api\Model\URLResponse
```

Get task step log URL

Returns a temporary log URL for the task step.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\TaskStepsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getTaskStepLogUrl($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskStepsApi->getTaskStepLogUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\URLResponse**](../Model/URLResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskStepLogs()`

```php
getTaskStepLogs($id, $delivery): \Wodby\Api\Model\TaskStepLogs
```

Get task step logs

Returns current inline logs for pending task steps and a temporary log URL for persisted task steps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\TaskStepsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$delivery = 'auto'; // string | Delivery mode. Auto returns a URL for persisted logs and inline lines for pending or empty logs.

try {
    $result = $apiInstance->getTaskStepLogs($id, $delivery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskStepsApi->getTaskStepLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **delivery** | **string**| Delivery mode. Auto returns a URL for persisted logs and inline lines for pending or empty logs. | [optional] [default to &#39;auto&#39;] |

### Return type

[**\Wodby\Api\Model\TaskStepLogs**](../Model/TaskStepLogs.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
