# Wodby\Api\IntegrationKindsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**integrationKindsIdDatabaseMachineTypesGet()**](IntegrationKindsApi.md#integrationKindsIdDatabaseMachineTypesGet) | **GET** /integration-kinds/{id}/database-machine-types | List database machine types |
| [**integrationKindsIdDatabaseRegionsGet()**](IntegrationKindsApi.md#integrationKindsIdDatabaseRegionsGet) | **GET** /integration-kinds/{id}/database-regions | List database regions |
| [**integrationKindsIdDatabaseSettingsGet()**](IntegrationKindsApi.md#integrationKindsIdDatabaseSettingsGet) | **GET** /integration-kinds/{id}/database-settings | Get database settings |
| [**integrationKindsIdDatabaseTypesGet()**](IntegrationKindsApi.md#integrationKindsIdDatabaseTypesGet) | **GET** /integration-kinds/{id}/database-types | List database types |
| [**integrationKindsIdDatabaseVersionsGet()**](IntegrationKindsApi.md#integrationKindsIdDatabaseVersionsGet) | **GET** /integration-kinds/{id}/database-versions | List database versions |


## `integrationKindsIdDatabaseMachineTypesGet()`

```php
integrationKindsIdDatabaseMachineTypesGet($id, $db_type, $version, $ha, $region, $zone): array[]
```

List database machine types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationKindsIdDatabaseMachineTypesGet($id, $db_type, $version, $ha, $region, $zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationKindsApi->integrationKindsIdDatabaseMachineTypesGet: ', $e->getMessage(), PHP_EOL;
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

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationKindsIdDatabaseRegionsGet()`

```php
integrationKindsIdDatabaseRegionsGet($id, $db_type, $version, $ha): array[]
```

List database regions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationKindsIdDatabaseRegionsGet($id, $db_type, $version, $ha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationKindsApi->integrationKindsIdDatabaseRegionsGet: ', $e->getMessage(), PHP_EOL;
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

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationKindsIdDatabaseSettingsGet()`

```php
integrationKindsIdDatabaseSettingsGet($id, $db_type): array<string,mixed>
```

Get database settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationKindsIdDatabaseSettingsGet($id, $db_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationKindsApi->integrationKindsIdDatabaseSettingsGet: ', $e->getMessage(), PHP_EOL;
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

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationKindsIdDatabaseTypesGet()`

```php
integrationKindsIdDatabaseTypesGet($id): \Wodby\Api\Model\DatabaseType[]
```

List database types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationKindsIdDatabaseTypesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationKindsApi->integrationKindsIdDatabaseTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\DatabaseType[]**](../Model/DatabaseType.md)

### Authorization

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationKindsIdDatabaseVersionsGet()`

```php
integrationKindsIdDatabaseVersionsGet($id, $db_type): \Wodby\Api\Model\DatabaseVersion[]
```

List database versions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

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
    $result = $apiInstance->integrationKindsIdDatabaseVersionsGet($id, $db_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationKindsApi->integrationKindsIdDatabaseVersionsGet: ', $e->getMessage(), PHP_EOL;
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

[accessTokenHeader](../../README.md#accessTokenHeader), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
