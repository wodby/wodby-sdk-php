# # NewBackupInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_service_id** | **int** |  | [optional]
**database_db_id** | **int** |  | [optional]
**backup_preset_id** | **int** | Associates a one-off backup with the preset used to populate its destination and options. | [optional]
**backup_name** | **string** |  | [optional]
**integration_id** | **int** | Use 0 for Wodby Blob Storage. |
**bucket** | **string** | Must be empty for Wodby Blob Storage. |
**storage_class** | **string** |  | [optional]
**blob_storage_region** | **string** | Wodby Blob Storage region. Omit to use Europe; must be omitted for third-party storage. | [optional] [default to 'eu']
**options** | [**\Wodby\Api\Model\BackupOption[]**](BackupOption.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
