# # NewAppInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **int** | Optional for API-key requests; defaults to the API key&#39;s organization. | [optional]
**name** | **string** |  |
**title** | **string** | Defaults to name when omitted. | [optional]
**environment_name** | **string** | Required for the canonical app environment contract. | [optional]
**environment_title** | **string** | Defaults to environmentName when omitted. | [optional]
**environment_type** | **string** | Required for the canonical app environment contract. | [optional]
**instance_name** | **string** | Legacy alternative to environmentName. Requires envId and cannot be combined with canonical app environment fields. | [optional]
**instance_title** | **string** | Legacy alternative to environmentTitle. Defaults to instanceName when omitted. | [optional]
**domain** | **string** | Defaults to environmentName.name.orgDomain for the canonical contract, or instanceName.name.orgDomain for the legacy contract. | [optional]
**project_id** | **int** |  | [optional]
**stack_rev_id** | **int** |  |
**services** | [**\Wodby\Api\Model\NewAppServiceInput[]**](NewAppServiceInput.md) | Defaults to the stack revision&#39;s service defaults when omitted. | [optional]
**cluster_id** | **int** |  | [optional]
**env_id** | **int** | Legacy environment entity ID. Required with instanceName and cannot be combined with canonical app environment fields. | [optional]
**ci_integration_id** | **int** | Omit or use null to inherit the organization default, use 0 for the built-in CI service, or use an accessible CI integration ID. A project-owned integration must be shared with the app&#39;s project. | [optional]
**registry_integration_id** | **int** | Omit or use null to inherit the organization default, use 0 for the built-in registry, or use an accessible registry integration ID. A project-owned integration must be shared with the app&#39;s project. | [optional]
**defer_initial_deployment** | **bool** | Defers the automatic initial build and deployment while preserving app environment initialization. Intended for automation that configures the environment before explicitly starting its first build. | [optional] [default to false]
**settings** | [**\Wodby\Api\Model\AppEnvironmentSettingsInput**](AppEnvironmentSettingsInput.md) |  | [optional]
**access** | [**\Wodby\Api\Model\NewAppEnvironmentAccessInput**](NewAppEnvironmentAccessInput.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
