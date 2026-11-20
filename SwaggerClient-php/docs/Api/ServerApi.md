# Wodby\Api\ServerApi

All URIs are relative to *https://api.wodby.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServer**](ServerApi.md#createServer) | **POST** /servers | Create server
[**getServer**](ServerApi.md#getServer) | **GET** /servers/{id} | Retrieve server
[**getServerIntegrationOptions**](ServerApi.md#getServerIntegrationOptions) | **GET** /servers/integrations/{id}/options | Retrieve server integration options
[**getServerIntegrations**](ServerApi.md#getServerIntegrations) | **GET** /servers/integrations | Retrieve server integrations
[**getServers**](ServerApi.md#getServers) | **GET** /servers | Retrieve servers


# **createServer**
> \Wodby\Api\Model\ResponseTask createServer($data)

Create server

Create a server with a hosting integration, such as a connected DigitalOcean team. The integration's provider creates the machine and Wodby installs its infrastructure on it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Wodby\Api\Model\RequestServerCreate(); // \Wodby\Api\Model\RequestServerCreate | 

try {
    $result = $apiInstance->createServer($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->createServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Wodby\Api\Model\RequestServerCreate**](../Model/RequestServerCreate.md)|  |

### Return type

[**\Wodby\Api\Model\ResponseTask**](../Model/ResponseTask.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServer**
> \Wodby\Api\Model\Server getServer($id)

Retrieve server

Retrieve server

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Server ID

try {
    $result = $apiInstance->getServer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Server ID |

### Return type

[**\Wodby\Api\Model\Server**](../Model/Server.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerIntegrationOptions**
> \Wodby\Api\Model\ServerIntegrationRegion[] getServerIntegrationOptions($id)

Retrieve server integration options

Retrieve the regions and server sizes a hosting integration offers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Integration ID

try {
    $result = $apiInstance->getServerIntegrationOptions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServerIntegrationOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Integration ID |

### Return type

[**\Wodby\Api\Model\ServerIntegrationRegion[]**](../Model/ServerIntegrationRegion.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerIntegrations**
> \Wodby\Api\Model\ServerIntegration[] getServerIntegrations($org_id)

Retrieve server integrations

Retrieve an organization's integrations that can create servers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | Organization ID

try {
    $result = $apiInstance->getServerIntegrations($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServerIntegrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | [**string**](../Model/.md)| Organization ID |

### Return type

[**\Wodby\Api\Model\ServerIntegration[]**](../Model/ServerIntegration.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServers**
> \Wodby\Api\Model\Server[] getServers($org_id, $name)

Retrieve servers

Retrieve servers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | Organization ID
$name = "name_example"; // string | Server name

try {
    $result = $apiInstance->getServers($org_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | [**string**](../Model/.md)| Organization ID | [optional]
 **name** | **string**| Server name | [optional]

### Return type

[**\Wodby\Api\Model\Server[]**](../Model/Server.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

