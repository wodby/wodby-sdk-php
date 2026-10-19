# # Backup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**status** | **string** |  |
**app_instance_id** | **int** |  | [optional]
**app_service_id** | **int** |  | [optional]
**database_id** | **int** |  | [optional]
**database_db_id** | **int** |  | [optional]
**backup_preset_id** | **int** |  | [optional]
**manual** | **bool** |  |
**integration_id** | **int** | Storage integration that owns the backup. Null identifies Wodby&#39;s built-in blob storage. |
**blob_storage_region** | **string** | Region used by Wodby Blob Storage. Null for third-party storage and legacy backups. | [optional]
**task_id** | **int** |  | [optional]
**size** | **int** | Final stored archive size in bytes. Null when the size has not been recorded. | [optional]
**file_deleted** | **bool** | Whether the stored backup file has been permanently removed. |
**can_void_file** | **bool** | Whether the backup file can be permanently removed now. |
**options** | [**\Wodby\Api\Model\BackupOption[]**](BackupOption.md) |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**started_at** | **\DateTime** |  | [optional]
**ended_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
