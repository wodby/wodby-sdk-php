# # UpdateBackupPresetInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**env_types** | **string[]** | Omit to preserve the current filter; use an empty array to clear it. | [optional]
**backup_category** | **string** | Omit to preserve the current category. | [optional]
**integration_id** | **int** | Use 0 for Wodby Blob Storage. Enabling the preset requires a paid subscription. |
**bucket** | **string** | Must be empty for Wodby Blob Storage. |
**storage_class** | **string** |  | [optional]
**options** | [**\Wodby\Api\Model\BackupOption[]**](BackupOption.md) |  | [optional]
**disabled** | **bool** |  |
**override** | **bool** |  |
**auto** | **bool** |  |
**crontab** | **string** |  | [optional]
**time_window** | [**\Wodby\Api\Model\AutomationTimeWindowInput**](AutomationTimeWindowInput.md) |  | [optional]
**duration** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
