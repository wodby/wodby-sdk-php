# # NewAppEnvironmentInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**execution_mode** | **string** |  | [optional] [default to 'standard']
**workspace** | [**\Wodby\Api\Model\NewWorkspaceInput**](NewWorkspaceInput.md) |  | [optional]
**app_id** | **int** |  |
**environment_name** | **string** |  |
**environment_title** | **string** | Defaults to environmentName when omitted. | [optional]
**environment_type** | **string** |  |
**domain** | **string** | Defaults to environmentName.appName.orgDomain when omitted. | [optional]
**stack_rev_id** | **int** |  |
**services** | [**\Wodby\Api\Model\NewAppServiceInput[]**](NewAppServiceInput.md) | Defaults to the stack revision&#39;s service defaults when omitted. | [optional]
**service_overrides** | [**\Wodby\Api\Model\NewAppServiceOverrideInput[]**](NewAppServiceOverrideInput.md) | Changes to the stack revision&#39;s service defaults. Use it instead of services to set only what differs, such as the repository of a workspace. Not allowed with services. | [optional]
**cluster_id** | **int** |  | [optional]
**ci_integration_id** | **int** |  | [optional]
**registry_integration_id** | **int** |  | [optional]
**defer_initial_deployment** | **bool** |  | [optional] [default to false]
**settings** | [**\Wodby\Api\Model\AppEnvironmentSettingsInput**](AppEnvironmentSettingsInput.md) |  | [optional]
**access** | [**\Wodby\Api\Model\NewAppEnvironmentAccessInput**](NewAppEnvironmentAccessInput.md) |  | [optional]
**basic_auth** | **bool** | Protect the whole new environment with basic auth, by default with the username wodby and a generated password revealed in Wodby. Cannot be combined with access (Private App Access). | [optional]
**basic_auth_username** | **string** | Username of the environment&#39;s basic auth. Requires basicAuth. Defaults to wodby. | [optional]
**basic_auth_password** | **string** | Password of the environment&#39;s basic auth. Requires basicAuth. Omit to let Wodby generate one. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
