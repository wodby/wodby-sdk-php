# Wodby\Api\InstanceApi

All URIs are relative to *https://api.wodby.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInstance**](InstanceApi.md#createInstance) | **POST** /instances | 
[**deleteInstance**](InstanceApi.md#deleteInstance) | **DELETE** /instances/{id} | 
[**deployInstance**](InstanceApi.md#deployInstance) | **POST** /instances/{id}/deploy | 
[**deployInstanceCodebase**](InstanceApi.md#deployInstanceCodebase) | **POST** /instances/{id}/deploy-codebase | 
[**getInstance**](InstanceApi.md#getInstance) | **GET** /instances/{id} | 
[**getInstances**](InstanceApi.md#getInstances) | **GET** /instances | 
[**upgradeInstance**](InstanceApi.md#upgradeInstance) | **POST** /instances/{id}/upgrade | 
[**upgradeInstances**](InstanceApi.md#upgradeInstances) | **POST** /instances/upgrade | 


# **createInstance**
> \Wodby\Api\Model\ResponseTaskInstance createInstance($data)



Create instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Wodby\Api\Model\RequestInstanceCreate(); // \Wodby\Api\Model\RequestInstanceCreate | 

try {
    $result = $apiInstance->createInstance($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->createInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Wodby\Api\Model\RequestInstanceCreate**](../Model/RequestInstanceCreate.md)|  |

### Return type

[**\Wodby\Api\Model\ResponseTaskInstance**](../Model/ResponseTaskInstance.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInstance**
> \Wodby\Api\Model\ResponseTask deleteInstance($id)



Delete application instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Instance ID

try {
    $result = $apiInstance->deleteInstance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->deleteInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Instance ID |

### Return type

[**\Wodby\Api\Model\ResponseTask**](../Model/ResponseTask.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deployInstance**
> \Wodby\Api\Model\ResponseTask deployInstance($id, $data)



Deploy instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Instance ID
$data = new \Wodby\Api\Model\RequestInstanceDeploy(); // \Wodby\Api\Model\RequestInstanceDeploy | 

try {
    $result = $apiInstance->deployInstance($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->deployInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Instance ID |
 **data** | [**\Wodby\Api\Model\RequestInstanceDeploy**](../Model/RequestInstanceDeploy.md)|  | [optional]

### Return type

[**\Wodby\Api\Model\ResponseTask**](../Model/ResponseTask.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deployInstanceCodebase**
> \Wodby\Api\Model\ResponseTask deployInstanceCodebase($id, $data)



Deploy instance codebase

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Instance ID
$data = new \Wodby\Api\Model\RequestInstanceDeployCodebase(); // \Wodby\Api\Model\RequestInstanceDeployCodebase | 

try {
    $result = $apiInstance->deployInstanceCodebase($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->deployInstanceCodebase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Instance ID |
 **data** | [**\Wodby\Api\Model\RequestInstanceDeployCodebase**](../Model/RequestInstanceDeployCodebase.md)|  | [optional]

### Return type

[**\Wodby\Api\Model\ResponseTask**](../Model/ResponseTask.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstance**
> \Wodby\Api\Model\Instance getInstance($id)



Retrieve application instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Instance ID

try {
    $result = $apiInstance->getInstance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->getInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Instance ID |

### Return type

[**\Wodby\Api\Model\Instance**](../Model/Instance.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstances**
> \Wodby\Api\Model\Instance[] getInstances($org_id, $server_id, $app_id, $type, $name)



Retrieve instances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | Organization ID
$server_id = "server_id_example"; // string | Server ID
$app_id = "app_id_example"; // string | Application ID
$type = "type_example"; // string | Instance type
$name = "name_example"; // string | Instance name

try {
    $result = $apiInstance->getInstances($org_id, $server_id, $app_id, $type, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->getInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | [**string**](../Model/.md)| Organization ID | [optional]
 **server_id** | [**string**](../Model/.md)| Server ID | [optional]
 **app_id** | [**string**](../Model/.md)| Application ID | [optional]
 **type** | **string**| Instance type | [optional]
 **name** | **string**| Instance name | [optional]

### Return type

[**\Wodby\Api\Model\Instance[]**](../Model/Instance.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upgradeInstance**
> \Wodby\Api\Model\ResponseTask upgradeInstance($id)



Upgrade instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Instance ID

try {
    $result = $apiInstance->upgradeInstance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->upgradeInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Instance ID |

### Return type

[**\Wodby\Api\Model\ResponseTask**](../Model/ResponseTask.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upgradeInstances**
> \Wodby\Api\Model\ResponseTask upgradeInstances($data)



Upgrade instances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Wodby\Api\Model\RequestInstancesUpgrade(); // \Wodby\Api\Model\RequestInstancesUpgrade | 

try {
    $result = $apiInstance->upgradeInstances($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->upgradeInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Wodby\Api\Model\RequestInstancesUpgrade**](../Model/RequestInstancesUpgrade.md)|  |

### Return type

[**\Wodby\Api\Model\ResponseTask**](../Model/ResponseTask.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

