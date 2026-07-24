# # NewAppInstanceInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **int** |  |
**instance_name** | **string** |  |
**instance_title** | **string** | Defaults to instanceName when omitted. | [optional]
**domain** | **string** | Defaults to instanceName.appName.orgDomain when omitted. | [optional]
**stack_rev_id** | **int** |  |
**services** | [**\Wodby\Api\Model\NewAppServiceInput[]**](NewAppServiceInput.md) | Defaults to the stack revision&#39;s service defaults when omitted. | [optional]
**cluster_id** | **int** |  | [optional]
**env_id** | **int** |  |
**ci_integration_id** | **int** |  | [optional]
**registry_integration_id** | **int** |  | [optional]
**settings** | [**\Wodby\Api\Model\AppInstanceSettingsInput**](AppInstanceSettingsInput.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
