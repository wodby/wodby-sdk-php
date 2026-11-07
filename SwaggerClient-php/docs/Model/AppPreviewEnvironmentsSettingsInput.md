# # AppPreviewEnvironmentsSettingsInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** |  |
**base_app_environment_id** | **int** |  | [optional]
**environment_type** | **string** |  | [optional]
**imports** | [**\Wodby\Api\Model\AppPreviewImport[]**](AppPreviewImport.md) |  | [optional]
**build_drafts** | **bool** |  | [optional]
**run_cron_jobs** | **bool** | Omitted keeps the stored value; apps that never set it do not run cron jobs in previews. | [optional]
**max_concurrent** | **int** |  | [optional]
**idle_ttl_days** | **int** |  | [optional]
**basic_auth** | **bool** | Protect every preview with basic auth and one shared generated password. Defaults to true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
