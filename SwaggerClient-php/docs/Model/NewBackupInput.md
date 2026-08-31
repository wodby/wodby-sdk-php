# # NewBackupInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_service_id** | **int** |  | [optional]
**database_db_id** | **int** |  | [optional]
**backup_name** | **string** |  | [optional]
**integration_id** | **int** | Use 0 for Wodby Blob Storage. |
**bucket** | **string** | Must be empty for Wodby Blob Storage. |
**storage_class** | **string** |  | [optional]
**options** | [**\Wodby\Api\Model\BackupOption[]**](BackupOption.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
