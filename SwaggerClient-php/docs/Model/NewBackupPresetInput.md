# # NewBackupPresetInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_instance_id** | **int** |  | [optional]
**app_service_id** | **int** |  | [optional]
**database_id** | **int** |  | [optional]
**database_db_id** | **int** |  | [optional]
**org_id** | **int** | Optional for API-key requests; defaults to the API key&#39;s organization when no more specific target is provided. | [optional]
**env_id** | **int** |  | [optional]
**backup_name** | **string** |  | [optional]
**integration_id** | **int** | Use 0 for Wodby Blob Storage. Free subscriptions may create only an automatic preset that is disabled. |
**bucket** | **string** | Must be empty for Wodby Blob Storage. |
**storage_class** | **string** |  | [optional]
**disabled** | **bool** |  |
**override** | **bool** |  |
**auto** | **bool** |  | [optional]
**crontab** | **string** |  | [optional]
**time_window** | [**\Wodby\Api\Model\AutomationTimeWindowInput**](AutomationTimeWindowInput.md) |  | [optional]
**duration** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
