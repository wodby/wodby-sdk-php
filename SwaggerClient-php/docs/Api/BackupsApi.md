# Wodby\Api\BackupsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBackup()**](BackupsApi.md#createBackup) | **POST** /backups | Create backup |
| [**createBackupPreset()**](BackupsApi.md#createBackupPreset) | **POST** /backup-presets | Create backup preset |
| [**deleteBackupPreset()**](BackupsApi.md#deleteBackupPreset) | **DELETE** /backup-presets/{id} | Delete backup preset |
| [**getBackup()**](BackupsApi.md#getBackup) | **GET** /backups/{id} | Get backup |
| [**getBackupPreset()**](BackupsApi.md#getBackupPreset) | **GET** /backup-presets/{id} | Get backup preset |
| [**listBackupPresetBackups()**](BackupsApi.md#listBackupPresetBackups) | **GET** /backup-presets/{id}/backups | List backup preset backups |
| [**listBackupPresets()**](BackupsApi.md#listBackupPresets) | **GET** /backup-presets | List backup presets |
| [**listBackups()**](BackupsApi.md#listBackups) | **GET** /backups | List backups |
| [**updateBackupPreset()**](BackupsApi.md#updateBackupPreset) | **PUT** /backup-presets/{id} | Update backup preset |


## `createBackup()`

```php
createBackup($new_backup_input): \Wodby\Api\Model\OperationResult
```

Create backup

Creates a backup and returns the created resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_backup_input = new \Wodby\Api\Model\NewBackupInput(); // \Wodby\Api\Model\NewBackupInput

try {
    $result = $apiInstance->createBackup($new_backup_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->createBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_backup_input** | [**\Wodby\Api\Model\NewBackupInput**](../Model/NewBackupInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBackupPreset()`

```php
createBackupPreset($new_backup_preset_input): \Wodby\Api\Model\BackupPreset
```

Create backup preset

Creates a manual or scheduled backup preset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_backup_preset_input = new \Wodby\Api\Model\NewBackupPresetInput(); // \Wodby\Api\Model\NewBackupPresetInput

try {
    $result = $apiInstance->createBackupPreset($new_backup_preset_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->createBackupPreset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_backup_preset_input** | [**\Wodby\Api\Model\NewBackupPresetInput**](../Model/NewBackupPresetInput.md)|  | |

### Return type

[**\Wodby\Api\Model\BackupPreset**](../Model/BackupPreset.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBackupPreset()`

```php
deleteBackupPreset($id): \Wodby\Api\Model\OperationResult
```

Delete backup preset

Deletes a backup preset and its schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteBackupPreset($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->deleteBackupPreset: ', $e->getMessage(), PHP_EOL;
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

## `getBackup()`

```php
getBackup($id): \Wodby\Api\Model\Backup
```

Get backup

Returns the backup identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getBackup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Backup**](../Model/Backup.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupPreset()`

```php
getBackupPreset($id): \Wodby\Api\Model\BackupPreset
```

Get backup preset

Returns the backup preset identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getBackupPreset($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getBackupPreset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\BackupPreset**](../Model/BackupPreset.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBackupPresetBackups()`

```php
listBackupPresetBackups($id, $page, $page_size): \Wodby\Api\Model\BackupsResponse
```

List backup preset backups

Returns a paginated list of backups created from the preset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$page = 56; // int | Page number, defaults to 1
$page_size = 56; // int | Page size, defaults to 30

try {
    $result = $apiInstance->listBackupPresetBackups($id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->listBackupPresetBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **page** | **int**| Page number, defaults to 1 | [optional] |
| **page_size** | **int**| Page size, defaults to 30 | [optional] |

### Return type

[**\Wodby\Api\Model\BackupsResponse**](../Model/BackupsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBackupPresets()`

```php
listBackupPresets($app_instance_id, $app_service_id, $database_id, $database_db_id, $org_id, $backup_name, $applicable_env_id, $applicable_backup_category): \Wodby\Api\Model\BackupPreset[]
```

List backup presets

Returns backup presets matching the request filters. At least one target filter is required for user-session requests; API-key requests default to the key's organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_instance_id = 56; // int
$app_service_id = 56; // int
$database_id = 56; // int
$database_db_id = 56; // int
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.
$backup_name = 'backup_name_example'; // string
$applicable_env_id = 56; // int | Return only presets that apply to this environment.
$applicable_backup_category = 'applicable_backup_category_example'; // string | Return only presets that apply to this backup category.

try {
    $result = $apiInstance->listBackupPresets($app_instance_id, $app_service_id, $database_id, $database_db_id, $org_id, $backup_name, $applicable_env_id, $applicable_backup_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->listBackupPresets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_instance_id** | **int**|  | [optional] |
| **app_service_id** | **int**|  | [optional] |
| **database_id** | **int**|  | [optional] |
| **database_db_id** | **int**|  | [optional] |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |
| **backup_name** | **string**|  | [optional] |
| **applicable_env_id** | **int**| Return only presets that apply to this environment. | [optional] |
| **applicable_backup_category** | **string**| Return only presets that apply to this backup category. | [optional] |

### Return type

[**\Wodby\Api\Model\BackupPreset[]**](../Model/BackupPreset.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBackups()`

```php
listBackups($app_instance_id, $app_service_id, $database_id, $database_db_id, $backup_name): \Wodby\Api\Model\Backup[]
```

List backups

Returns backups matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_instance_id = 56; // int
$app_service_id = 56; // int
$database_id = 56; // int
$database_db_id = 56; // int
$backup_name = 'backup_name_example'; // string

try {
    $result = $apiInstance->listBackups($app_instance_id, $app_service_id, $database_id, $database_db_id, $backup_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->listBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_instance_id** | **int**|  | [optional] |
| **app_service_id** | **int**|  | [optional] |
| **database_id** | **int**|  | [optional] |
| **database_db_id** | **int**|  | [optional] |
| **backup_name** | **string**|  | [optional] |

### Return type

[**\Wodby\Api\Model\Backup[]**](../Model/Backup.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBackupPreset()`

```php
updateBackupPreset($id, $update_backup_preset_input): \Wodby\Api\Model\BackupPreset
```

Update backup preset

Updates a backup preset's destination and schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_backup_preset_input = new \Wodby\Api\Model\UpdateBackupPresetInput(); // \Wodby\Api\Model\UpdateBackupPresetInput

try {
    $result = $apiInstance->updateBackupPreset($id, $update_backup_preset_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->updateBackupPreset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_backup_preset_input** | [**\Wodby\Api\Model\UpdateBackupPresetInput**](../Model/UpdateBackupPresetInput.md)|  | |

### Return type

[**\Wodby\Api\Model\BackupPreset**](../Model/BackupPreset.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
