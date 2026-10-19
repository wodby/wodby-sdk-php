# Wodby\Api\AppPortsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAppPortSetting()**](AppPortsApi.md#deleteAppPortSetting) | **DELETE** /app-ports/{id}/settings/{name} | Delete app port setting |
| [**getAppEndpoint()**](AppPortsApi.md#getAppEndpoint) | **GET** /app-endpoints/{id} | Get app endpoint |
| [**getAppPort()**](AppPortsApi.md#getAppPort) | **GET** /app-ports/{id} | Get app port |
| [**listAppEndpoints()**](AppPortsApi.md#listAppEndpoints) | **GET** /app-endpoints | List app endpoints |
| [**listAppPortSettings()**](AppPortsApi.md#listAppPortSettings) | **GET** /app-ports/{id}/settings | List app port settings |
| [**listAppPorts()**](AppPortsApi.md#listAppPorts) | **GET** /app-ports | List app ports |
| [**publishAppPort()**](AppPortsApi.md#publishAppPort) | **POST** /app-ports/{id}/actions/publish | Publish app port |
| [**replaceAppPortSettings()**](AppPortsApi.md#replaceAppPortSettings) | **PUT** /app-ports/{id}/settings | Replace app port settings |
| [**setAppPortSetting()**](AppPortsApi.md#setAppPortSetting) | **PUT** /app-ports/{id}/settings/{name} | Set app port setting |
| [**unpublishAppPort()**](AppPortsApi.md#unpublishAppPort) | **POST** /app-ports/{id}/actions/unpublish | Unpublish app port |
| [**updateAppPort()**](AppPortsApi.md#updateAppPort) | **PUT** /app-ports/{id} | Update app port |


## `deleteAppPortSetting()`

```php
deleteAppPortSetting($id, $name): \Wodby\Api\Model\OperationResult
```

Delete app port setting

Removes a named app port setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppPortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = new \Wodby\Api\Model\\Wodby\Api\Model\AppPortSettingName(); // \Wodby\Api\Model\AppPortSettingName

try {
    $result = $apiInstance->deleteAppPortSetting($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPortsApi->deleteAppPortSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | [**\Wodby\Api\Model\AppPortSettingName**](../Model/.md)|  | |

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

## `getAppEndpoint()`

```php
getAppEndpoint($id): \Wodby\Api\Model\AppEndpoint
```

Get app endpoint

Returns one app endpoint with its route and port IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppPortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppEndpoint($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPortsApi->getAppEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppEndpoint**](../Model/AppEndpoint.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppPort()`

```php
getAppPort($id): \Wodby\Api\Model\AppPort
```

Get app port

Returns the app port identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppPortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppPort($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPortsApi->getAppPort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppPort**](../Model/AppPort.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppEndpoints()`

```php
listAppEndpoints($app_environment_id): \Wodby\Api\Model\AppEndpoint[]
```

List app endpoints

Returns the endpoints of an app environment. An endpoint groups the routes and ports of one app service endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppPortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_environment_id = 56; // int

try {
    $result = $apiInstance->listAppEndpoints($app_environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPortsApi->listAppEndpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_environment_id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppEndpoint[]**](../Model/AppEndpoint.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppPortSettings()`

```php
listAppPortSettings($id): \Wodby\Api\Model\AppPortSetting[]
```

List app port settings

Returns the settings of an app port.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppPortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppPortSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPortsApi->listAppPortSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppPortSetting[]**](../Model/AppPortSetting.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppPorts()`

```php
listAppPorts($app_instance_id): \Wodby\Api\Model\AppPort[]
```

List app ports

Returns app ports matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppPortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_instance_id = 56; // int

try {
    $result = $apiInstance->listAppPorts($app_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPortsApi->listAppPorts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_instance_id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppPort[]**](../Model/AppPort.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishAppPort()`

```php
publishAppPort($id, $update_app_port_input): \Wodby\Api\Model\AppPort
```

Publish app port

Exposes the app port on the cluster's public address. Leave publicPort out to pick a free port. Returns the port.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppPortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_app_port_input = new \Wodby\Api\Model\UpdateAppPortInput(); // \Wodby\Api\Model\UpdateAppPortInput

try {
    $result = $apiInstance->publishAppPort($id, $update_app_port_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPortsApi->publishAppPort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_app_port_input** | [**\Wodby\Api\Model\UpdateAppPortInput**](../Model/UpdateAppPortInput.md)|  | [optional] |

### Return type

[**\Wodby\Api\Model\AppPort**](../Model/AppPort.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceAppPortSettings()`

```php
replaceAppPortSettings($id, $app_port_settings_input): \Wodby\Api\Model\AppPortSetting[]
```

Replace app port settings

Replaces all settings of an app port. A setting left out is removed. Returns the stored settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppPortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_port_settings_input = new \Wodby\Api\Model\AppPortSettingsInput(); // \Wodby\Api\Model\AppPortSettingsInput

try {
    $result = $apiInstance->replaceAppPortSettings($id, $app_port_settings_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPortsApi->replaceAppPortSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_port_settings_input** | [**\Wodby\Api\Model\AppPortSettingsInput**](../Model/AppPortSettingsInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppPortSetting[]**](../Model/AppPortSetting.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAppPortSetting()`

```php
setAppPortSetting($id, $name, $set_string_value_input): \Wodby\Api\Model\AppPortSetting
```

Set app port setting

Creates or updates a named app port setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppPortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = new \Wodby\Api\Model\\Wodby\Api\Model\AppPortSettingName(); // \Wodby\Api\Model\AppPortSettingName
$set_string_value_input = new \Wodby\Api\Model\SetStringValueInput(); // \Wodby\Api\Model\SetStringValueInput

try {
    $result = $apiInstance->setAppPortSetting($id, $name, $set_string_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPortsApi->setAppPortSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | [**\Wodby\Api\Model\AppPortSettingName**](../Model/.md)|  | |
| **set_string_value_input** | [**\Wodby\Api\Model\SetStringValueInput**](../Model/SetStringValueInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppPortSetting**](../Model/AppPortSetting.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unpublishAppPort()`

```php
unpublishAppPort($id): \Wodby\Api\Model\AppPort
```

Unpublish app port

Stops exposing the app port on the cluster's public address and returns the port.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppPortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->unpublishAppPort($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPortsApi->unpublishAppPort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppPort**](../Model/AppPort.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppPort()`

```php
updateAppPort($id, $update_app_port_input): \Wodby\Api\Model\AppPort
```

Update app port

Changes the public port of an app port and returns it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppPortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_app_port_input = new \Wodby\Api\Model\UpdateAppPortInput(); // \Wodby\Api\Model\UpdateAppPortInput

try {
    $result = $apiInstance->updateAppPort($id, $update_app_port_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPortsApi->updateAppPort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_app_port_input** | [**\Wodby\Api\Model\UpdateAppPortInput**](../Model/UpdateAppPortInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppPort**](../Model/AppPort.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
