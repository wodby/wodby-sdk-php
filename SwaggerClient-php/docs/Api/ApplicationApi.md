# Wodby\Api\ApplicationApi

All URIs are relative to *https://api.wodby.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createApp**](ApplicationApi.md#createApp) | **POST** /apps | 
[**deleteApp**](ApplicationApi.md#deleteApp) | **DELETE** /apps/{id} | 
[**getApp**](ApplicationApi.md#getApp) | **GET** /apps/{id} | 
[**getAppDrushAliases**](ApplicationApi.md#getAppDrushAliases) | **GET** /apps/{id}/drush-aliases | 
[**getApps**](ApplicationApi.md#getApps) | **GET** /apps | 


# **createApp**
> \Wodby\Api\Model\ResponseTaskApp createApp($data)



Create application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Wodby\Api\Model\RequestAppCreate(); // \Wodby\Api\Model\RequestAppCreate | 

try {
    $result = $apiInstance->createApp($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->createApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Wodby\Api\Model\RequestAppCreate**](../Model/RequestAppCreate.md)|  |

### Return type

[**\Wodby\Api\Model\ResponseTaskApp**](../Model/ResponseTaskApp.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteApp**
> \Wodby\Api\Model\ResponseTask deleteApp($id)



Delete application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Application ID

try {
    $result = $apiInstance->deleteApp($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->deleteApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Application ID |

### Return type

[**\Wodby\Api\Model\ResponseTask**](../Model/ResponseTask.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApp**
> \Wodby\Api\Model\App getApp($id)



Retrieve application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Application ID

try {
    $result = $apiInstance->getApp($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->getApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Application ID |

### Return type

[**\Wodby\Api\Model\App**](../Model/App.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppDrushAliases**
> string getAppDrushAliases($id)



Retrieve Drupal application`s instances Drush aliases

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Application ID

try {
    $result = $apiInstance->getAppDrushAliases($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->getAppDrushAliases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Application ID |

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApps**
> \Wodby\Api\Model\App[] getApps($org_id, $name)



Retrieve applications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | Organization ID
$name = "name_example"; // string | Application name

try {
    $result = $apiInstance->getApps($org_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->getApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | [**string**](../Model/.md)| Organization ID | [optional]
 **name** | **string**| Application name | [optional]

### Return type

[**\Wodby\Api\Model\App[]**](../Model/App.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

