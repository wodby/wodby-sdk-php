# Wodby\Api\IntegrationKindsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getIntegrationKindDatabaseSettings()**](IntegrationKindsApi.md#getIntegrationKindDatabaseSettings) | **GET** /integration-kinds/{id}/database-settings | Get database settings |
| [**listIntegrationKindDatabaseMachineTypes()**](IntegrationKindsApi.md#listIntegrationKindDatabaseMachineTypes) | **GET** /integration-kinds/{id}/database-machine-types | List database machine types |
| [**listIntegrationKindDatabaseRegions()**](IntegrationKindsApi.md#listIntegrationKindDatabaseRegions) | **GET** /integration-kinds/{id}/database-regions | List database regions |
| [**listIntegrationKindDatabaseTypes()**](IntegrationKindsApi.md#listIntegrationKindDatabaseTypes) | **GET** /integration-kinds/{id}/database-types | List database types |
| [**listIntegrationKindDatabaseVersions()**](IntegrationKindsApi.md#listIntegrationKindDatabaseVersions) | **GET** /integration-kinds/{id}/database-versions | List database versions |


## `getIntegrationKindDatabaseSettings()`

```php
getIntegrationKindDatabaseSettings($id, $db_type): array<string,mixed>
```

Get database settings

Returns the database settings identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationKindsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$db_type = 'db_type_example'; // string

try {
    $result = $apiInstance->getIntegrationKindDatabaseSettings($id, $db_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationKindsApi->getIntegrationKindDatabaseSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **db_type** | **string**|  | |

### Return type

**array<string,mixed>**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationKindDatabaseMachineTypes()`

```php
listIntegrationKindDatabaseMachineTypes($id, $db_type, $version, $ha, $region, $zone): array[]
```

List database machine types

Returns database machine types matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationKindsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$db_type = 'db_type_example'; // string
$version = 'version_example'; // string
$ha = false; // bool
$region = 'region_example'; // string
$zone = 'zone_example'; // string

try {
    $result = $apiInstance->listIntegrationKindDatabaseMachineTypes($id, $db_type, $version, $ha, $region, $zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationKindsApi->listIntegrationKindDatabaseMachineTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **db_type** | **string**|  | |
| **version** | **string**|  | |
| **ha** | **bool**|  | [optional] [default to false] |
| **region** | **string**|  | [optional] |
| **zone** | **string**|  | [optional] |

### Return type

**array[]**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationKindDatabaseRegions()`

```php
listIntegrationKindDatabaseRegions($id, $db_type, $version, $ha): array[]
```

List database regions

Returns database regions matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationKindsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$db_type = 'db_type_example'; // string
$version = 'version_example'; // string
$ha = false; // bool

try {
    $result = $apiInstance->listIntegrationKindDatabaseRegions($id, $db_type, $version, $ha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationKindsApi->listIntegrationKindDatabaseRegions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **db_type** | **string**|  | |
| **version** | **string**|  | |
| **ha** | **bool**|  | [optional] [default to false] |

### Return type

**array[]**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationKindDatabaseTypes()`

```php
listIntegrationKindDatabaseTypes($id): \Wodby\Api\Model\DatabaseType[]
```

List database types

Returns database types matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationKindsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listIntegrationKindDatabaseTypes($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationKindsApi->listIntegrationKindDatabaseTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\DatabaseType[]**](../Model/DatabaseType.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIntegrationKindDatabaseVersions()`

```php
listIntegrationKindDatabaseVersions($id, $db_type): \Wodby\Api\Model\DatabaseVersion[]
```

List database versions

Returns database versions matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\IntegrationKindsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$db_type = 'db_type_example'; // string

try {
    $result = $apiInstance->listIntegrationKindDatabaseVersions($id, $db_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationKindsApi->listIntegrationKindDatabaseVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **db_type** | **string**|  | |

### Return type

[**\Wodby\Api\Model\DatabaseVersion[]**](../Model/DatabaseVersion.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
