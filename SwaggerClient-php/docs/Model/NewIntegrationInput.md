# # NewIntegrationInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **int** | Optional for API-key requests; defaults to the API key&#39;s organization. | [optional]
**provider_id** | **int** |  |
**title** | **string** |  |
**kinds** | **string[]** |  |
**auth** | **string** |  | [optional]
**project_id** | **int** |  | [optional]
**available_to_all_projects** | **bool** | Lets every project in the organization use the new resource without a project share. Only an organization-owned resource, created without projectId, can be available to all projects. | [optional]
**fields_input** | [**\Wodby\Api\Model\FieldInput[]**](FieldInput.md) |  | [optional]
**scope** | **string** |  | [optional]
**environment_policy** | [**\Wodby\Api\Model\IntegrationEnvironmentPolicyInput**](IntegrationEnvironmentPolicyInput.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
