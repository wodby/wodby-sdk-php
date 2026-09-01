# Wodby\Api\AppAuthsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAppAuth()**](AppAuthsApi.md#createAppAuth) | **POST** /app-auths | Create app auth |
| [**deleteAppAuth()**](AppAuthsApi.md#deleteAppAuth) | **DELETE** /app-auths/{id} | Delete app auth |
| [**listAppAuths()**](AppAuthsApi.md#listAppAuths) | **GET** /app-auths | List app auths |
| [**updateAppAuth()**](AppAuthsApi.md#updateAppAuth) | **PUT** /app-auths/{id} | Update app auth |


## `createAppAuth()`

```php
createAppAuth($new_app_auth_input): \Wodby\Api\Model\AppAuth
```

Create app auth

Creates an HTTP basic authentication entry at instance, service, or route scope and returns only non-secret metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppAuthsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_app_auth_input = new \Wodby\Api\Model\NewAppAuthInput(); // \Wodby\Api\Model\NewAppAuthInput

try {
    $result = $apiInstance->createAppAuth($new_app_auth_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppAuthsApi->createAppAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_app_auth_input** | [**\Wodby\Api\Model\NewAppAuthInput**](../Model/NewAppAuthInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppAuth**](../Model/AppAuth.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppAuth()`

```php
deleteAppAuth($id): \Wodby\Api\Model\OperationResult
```

Delete app auth

Deletes an HTTP basic authentication entry and returns the operation result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppAuthsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteAppAuth($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppAuthsApi->deleteAppAuth: ', $e->getMessage(), PHP_EOL;
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

## `listAppAuths()`

```php
listAppAuths($app_instance_id): \Wodby\Api\Model\AppAuth[]
```

List app auths

Returns HTTP basic authentication entries for an app environment without exposing passwords or secret identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppAuthsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_instance_id = 56; // int

try {
    $result = $apiInstance->listAppAuths($app_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppAuthsApi->listAppAuths: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_instance_id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppAuth[]**](../Model/AppAuth.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppAuth()`

```php
updateAppAuth($id, $update_app_auth_input): \Wodby\Api\Model\AppAuth
```

Update app auth

Updates an HTTP basic authentication entry. Omit both scope identifiers to preserve the current scope. Supplying appServiceId moves the entry to service scope and clears any route unless appRouteId is also supplied. Recreate the entry to move it back to instance scope. Omit password to retain the existing secret.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppAuthsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_app_auth_input = new \Wodby\Api\Model\UpdateAppAuthInput(); // \Wodby\Api\Model\UpdateAppAuthInput

try {
    $result = $apiInstance->updateAppAuth($id, $update_app_auth_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppAuthsApi->updateAppAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_app_auth_input** | [**\Wodby\Api\Model\UpdateAppAuthInput**](../Model/UpdateAppAuthInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppAuth**](../Model/AppAuth.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
