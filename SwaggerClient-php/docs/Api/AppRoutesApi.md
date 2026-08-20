# Wodby\Api\AppRoutesApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAppRoute()**](AppRoutesApi.md#createAppRoute) | **POST** /app-routes | Create app route |
| [**deleteAppRoute()**](AppRoutesApi.md#deleteAppRoute) | **DELETE** /app-routes/{id} | Delete app route |
| [**deleteAppRouteSetting()**](AppRoutesApi.md#deleteAppRouteSetting) | **DELETE** /app-routes/{id}/settings/{name} | Delete app route setting |
| [**getAppRoute()**](AppRoutesApi.md#getAppRoute) | **GET** /app-routes/{id} | Get app route |
| [**listAppRouteSettings()**](AppRoutesApi.md#listAppRouteSettings) | **GET** /app-routes/{id}/settings | List app route settings |
| [**listAppRoutes()**](AppRoutesApi.md#listAppRoutes) | **GET** /app-routes | List app routes |
| [**retryAppRouteCertificate()**](AppRoutesApi.md#retryAppRouteCertificate) | **POST** /app-routes/{id}/actions/retry-certificate | Retry app route certificate |
| [**setAppRouteSetting()**](AppRoutesApi.md#setAppRouteSetting) | **PUT** /app-routes/{id}/settings/{name} | Set app route setting |
| [**updateAppRoute()**](AppRoutesApi.md#updateAppRoute) | **PUT** /app-routes/{id} | Update app route |


## `createAppRoute()`

```php
createAppRoute($new_app_route_input): \Wodby\Api\Model\AppRoute
```

Create app route

Creates an app route and returns the created resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_app_route_input = new \Wodby\Api\Model\NewAppRouteInput(); // \Wodby\Api\Model\NewAppRouteInput

try {
    $result = $apiInstance->createAppRoute($new_app_route_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRoutesApi->createAppRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_app_route_input** | [**\Wodby\Api\Model\NewAppRouteInput**](../Model/NewAppRouteInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppRoute**](../Model/AppRoute.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppRoute()`

```php
deleteAppRoute($id): \Wodby\Api\Model\OperationResult
```

Delete app route

Deletes a customer route and returns the operation result. Wodby-managed technical routes cannot be deleted; disable them instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteAppRoute($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRoutesApi->deleteAppRoute: ', $e->getMessage(), PHP_EOL;
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

## `deleteAppRouteSetting()`

```php
deleteAppRouteSetting($id, $name): \Wodby\Api\Model\OperationResult
```

Delete app route setting

Deletes a named app route setting and restores any applicable default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = new \Wodby\Api\Model\\Wodby\Api\Model\AppRouteSettingName(); // \Wodby\Api\Model\AppRouteSettingName

try {
    $result = $apiInstance->deleteAppRouteSetting($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRoutesApi->deleteAppRouteSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | [**\Wodby\Api\Model\AppRouteSettingName**](../Model/.md)|  | |

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

## `getAppRoute()`

```php
getAppRoute($id): \Wodby\Api\Model\AppRoute
```

Get app route

Returns the app route identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppRoute($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRoutesApi->getAppRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppRoute**](../Model/AppRoute.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppRouteSettings()`

```php
listAppRouteSettings($id): \Wodby\Api\Model\AppRouteSetting[]
```

List app route settings

Returns route-specific setting overrides. Inherited app-instance defaults are not included.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppRouteSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRoutesApi->listAppRouteSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppRouteSetting[]**](../Model/AppRouteSetting.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppRoutes()`

```php
listAppRoutes($app_instance_id): \Wodby\Api\Model\AppRoute[]
```

List app routes

Returns app routes matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_instance_id = 56; // int

try {
    $result = $apiInstance->listAppRoutes($app_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRoutesApi->listAppRoutes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_instance_id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppRoute[]**](../Model/AppRoute.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryAppRouteCertificate()`

```php
retryAppRouteCertificate($id): \Wodby\Api\Model\OperationResult
```

Retry app route certificate

Starts certificate reconciliation again for a route whose managed certificate issuance failed or stalled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->retryAppRouteCertificate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRoutesApi->retryAppRouteCertificate: ', $e->getMessage(), PHP_EOL;
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

## `setAppRouteSetting()`

```php
setAppRouteSetting($id, $name, $set_string_value_input): \Wodby\Api\Model\AppRouteSetting
```

Set app route setting

Creates or updates a named app route setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = new \Wodby\Api\Model\\Wodby\Api\Model\AppRouteSettingName(); // \Wodby\Api\Model\AppRouteSettingName
$set_string_value_input = new \Wodby\Api\Model\SetStringValueInput(); // \Wodby\Api\Model\SetStringValueInput

try {
    $result = $apiInstance->setAppRouteSetting($id, $name, $set_string_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRoutesApi->setAppRouteSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | [**\Wodby\Api\Model\AppRouteSettingName**](../Model/.md)|  | |
| **set_string_value_input** | [**\Wodby\Api\Model\SetStringValueInput**](../Model/SetStringValueInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppRouteSetting**](../Model/AppRouteSetting.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppRoute()`

```php
updateAppRoute($id, $update_app_route_input): \Wodby\Api\Model\AppRoute
```

Update app route

Updates the app route and returns the updated resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_app_route_input = new \Wodby\Api\Model\UpdateAppRouteInput(); // \Wodby\Api\Model\UpdateAppRouteInput

try {
    $result = $apiInstance->updateAppRoute($id, $update_app_route_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRoutesApi->updateAppRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_app_route_input** | [**\Wodby\Api\Model\UpdateAppRouteInput**](../Model/UpdateAppRouteInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppRoute**](../Model/AppRoute.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
