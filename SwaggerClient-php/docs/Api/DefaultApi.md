# Wodby\Api\DefaultApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**openapiJsonGet()**](DefaultApi.md#openapiJsonGet) | **GET** /openapi.json | Get OpenAPI JSON |
| [**openapiYamlGet()**](DefaultApi.md#openapiYamlGet) | **GET** /openapi.yaml | Get OpenAPI YAML |


## `openapiJsonGet()`

```php
openapiJsonGet(): object
```

Get OpenAPI JSON

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Wodby\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->openapiJsonGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->openapiJsonGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openapiYamlGet()`

```php
openapiYamlGet(): string
```

Get OpenAPI YAML

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Wodby\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->openapiYamlGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->openapiYamlGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/yaml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
