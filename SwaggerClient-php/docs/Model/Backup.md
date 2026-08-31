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
**integration_id** | **int** | Storage integration that owns the backup. Null identifies Wodby&#39;s built-in blob storage. |
**task_id** | **int** |  | [optional]
**options** | [**\Wodby\Api\Model\BackupOption[]**](BackupOption.md) |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**started_at** | **\DateTime** |  | [optional]
**ended_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
