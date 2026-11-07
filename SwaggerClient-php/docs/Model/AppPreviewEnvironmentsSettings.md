# # AppPreviewEnvironmentsSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** |  |
**base_app_environment_id** | **int** |  | [optional]
**environment_type** | **string** |  |
**imports** | [**\Wodby\Api\Model\AppPreviewImport[]**](AppPreviewImport.md) |  |
**build_drafts** | **bool** |  |
**run_cron_jobs** | **bool** | Run the base environment&#39;s cron jobs in every preview. When false, the default, cron jobs are copied disabled. Previews never copy backup presets and run every service with one replica. |
**max_concurrent** | **int** |  |
**idle_ttl_days** | **int** |  |
**basic_auth** | **bool** | Every preview is protected with basic auth using one generated password shared by all previews of the app. |
**basic_auth_username** | **string** | Username of the shared preview basic auth. Members reveal the password in the dashboard. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
