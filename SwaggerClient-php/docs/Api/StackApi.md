# Wodby\Api\StackApi

All URIs are relative to *https://api.wodby.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStack**](StackApi.md#getStack) | **GET** /stacks/{id} | 
[**getStacks**](StackApi.md#getStacks) | **GET** /stacks | 
[**updateStackFromUpstream**](StackApi.md#updateStackFromUpstream) | **POST** /stacks/{id}/update | 
[**updateStacksFromUpstream**](StackApi.md#updateStacksFromUpstream) | **POST** /stacks/update | 


# **getStack**
> \Wodby\Api\Model\Stack getStack($id)



Retrieve stack

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\StackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Stack ID

try {
    $result = $apiInstance->getStack($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackApi->getStack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Stack ID |

### Return type

[**\Wodby\Api\Model\Stack**](../Model/Stack.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStacks**
> \Wodby\Api\Model\Stack[] getStacks($org_id)



Retrieve stacks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\StackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | Organization ID

try {
    $result = $apiInstance->getStacks($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackApi->getStacks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | [**string**](../Model/.md)| Organization ID | [optional]

### Return type

[**\Wodby\Api\Model\Stack[]**](../Model/Stack.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStackFromUpstream**
> \Wodby\Api\Model\ResponseTask updateStackFromUpstream($id)



Update official stack from upstream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\StackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Stack ID

try {
    $result = $apiInstance->updateStackFromUpstream($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackApi->updateStackFromUpstream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Stack ID |

### Return type

[**\Wodby\Api\Model\ResponseTask**](../Model/ResponseTask.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStacksFromUpstream**
> \Wodby\Api\Model\ResponseTask updateStacksFromUpstream($data)



Update official stacks from upstream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\StackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Wodby\Api\Model\RequestStacksUpdate(); // \Wodby\Api\Model\RequestStacksUpdate | 

try {
    $result = $apiInstance->updateStacksFromUpstream($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackApi->updateStacksFromUpstream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Wodby\Api\Model\RequestStacksUpdate**](../Model/RequestStacksUpdate.md)|  |

### Return type

[**\Wodby\Api\Model\ResponseTask**](../Model/ResponseTask.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

