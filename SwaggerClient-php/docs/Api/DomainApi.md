# Wodby\Api\DomainApi

All URIs are relative to *https://api.wodby.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDomain**](DomainApi.md#getDomain) | **GET** /domains/{id} | 
[**getDomains**](DomainApi.md#getDomains) | **GET** /domains | 


# **getDomain**
> \Wodby\Api\Model\Domain getDomain($id)



Retrieve domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Domain ID

try {
    $result = $apiInstance->getDomain($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Domain ID |

### Return type

[**\Wodby\Api\Model\Domain**](../Model/Domain.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDomains**
> \Wodby\Api\Model\Domain[] getDomains($org_id, $instance_id, $server_id, $status, $type, $name)



Retrieve domains

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | Organization ID
$instance_id = "instance_id_example"; // string | Instance ID
$server_id = "server_id_example"; // string | Server ID
$status = "status_example"; // string | Domain status
$type = "type_example"; // string | Domain type
$name = "name_example"; // string | Domain name

try {
    $result = $apiInstance->getDomains($org_id, $instance_id, $server_id, $status, $type, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->getDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | [**string**](../Model/.md)| Organization ID | [optional]
 **instance_id** | [**string**](../Model/.md)| Instance ID | [optional]
 **server_id** | [**string**](../Model/.md)| Server ID | [optional]
 **status** | **string**| Domain status | [optional]
 **type** | **string**| Domain type | [optional]
 **name** | **string**| Domain name | [optional]

### Return type

[**\Wodby\Api\Model\Domain[]**](../Model/Domain.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

