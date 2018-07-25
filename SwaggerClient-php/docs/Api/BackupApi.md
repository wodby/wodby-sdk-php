# Wodby\Api\BackupApi

All URIs are relative to *https://api.wodby.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBackup**](BackupApi.md#getBackup) | **GET** /backups/{id} | 
[**getBackups**](BackupApi.md#getBackups) | **GET** /backups | 


# **getBackup**
> \Wodby\Api\Model\Backup getBackup($id)



Retrieve backup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Backup ID

try {
    $result = $apiInstance->getBackup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->getBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Backup ID |

### Return type

[**\Wodby\Api\Model\Backup**](../Model/Backup.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBackups**
> \Wodby\Api\Model\Backup[] getBackups($org_id, $instance_id, $server_id, $type, $status, $days)



Retrieve backups by instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Wodby\Api\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | Organization ID
$instance_id = "instance_id_example"; // string | Instance ID
$server_id = "server_id_example"; // string | Server ID
$type = "type_example"; // string | Backup type
$status = "status_example"; // string | Backup status
$days = 56; // int | Get backups for N days

try {
    $result = $apiInstance->getBackups($org_id, $instance_id, $server_id, $type, $status, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->getBackups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | [**string**](../Model/.md)| Organization ID | [optional]
 **instance_id** | [**string**](../Model/.md)| Instance ID | [optional]
 **server_id** | [**string**](../Model/.md)| Server ID | [optional]
 **type** | **string**| Backup type | [optional]
 **status** | **string**| Backup status | [optional]
 **days** | **int**| Get backups for N days | [optional]

### Return type

[**\Wodby\Api\Model\Backup[]**](../Model/Backup.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

