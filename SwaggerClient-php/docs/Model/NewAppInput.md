# # NewAppInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **int** | Optional for API-key requests; defaults to the API key&#39;s organization. | [optional]
**name** | **string** |  |
**title** | **string** | Defaults to name when omitted. | [optional]
**instance_name** | **string** |  |
**instance_title** | **string** | Defaults to instanceName when omitted. | [optional]
**domain** | **string** | Defaults to instanceName.name.orgDomain when omitted. | [optional]
**project_id** | **int** |  | [optional]
**stack_rev_id** | **int** |  |
**services** | [**\Wodby\Api\Model\NewAppServiceInput[]**](NewAppServiceInput.md) | Defaults to the stack revision&#39;s service defaults when omitted. | [optional]
**cluster_id** | **int** |  | [optional]
**env_id** | **int** |  |
**ci_integration_id** | **int** |  | [optional]
**registry_integration_id** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
