# # BackupPreset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**app_instance_id** | **int** |  | [optional]
**app_service_id** | **int** |  | [optional]
**database_id** | **int** |  | [optional]
**database_db_id** | **int** |  | [optional]
**org_id** | **int** |  | [optional]
**env_id** | **int** |  | [optional]
**env_types** | **string[]** |  |
**backup_category** | **string** |  |
**backup_name** | **string** |  | [optional]
**integration_id** | **int** |  |
**bucket** | **string** |  |
**storage_class** | **string** |  | [optional]
**options** | [**\Wodby\Api\Model\BackupOption[]**](BackupOption.md) |  |
**override** | **bool** |  |
**auto** | **bool** |  |
**disabled** | **bool** |  |
**crontab** | **string** |  | [optional]
**time_window** | [**\Wodby\Api\Model\AutomationTimeWindow**](AutomationTimeWindow.md) |  | [optional]
**duration** | **int** |  | [optional]
**next_run_at** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
