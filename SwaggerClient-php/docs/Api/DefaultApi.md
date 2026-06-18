# Wodby\Api\DefaultApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOpenApiJson()**](DefaultApi.md#getOpenApiJson) | **GET** /openapi.json | Get OpenAPI JSON |
| [**getOpenApiYaml()**](DefaultApi.md#getOpenApiYaml) | **GET** /openapi.yaml | Get OpenAPI YAML |


## `getOpenApiJson()`

```php
getOpenApiJson(): object
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
    $result = $apiInstance->getOpenApiJson();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOpenApiJson: ', $e->getMessage(), PHP_EOL;
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

## `getOpenApiYaml()`

```php
getOpenApiYaml(): string
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
    $result = $apiInstance->getOpenApiYaml();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOpenApiYaml: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/yaml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
