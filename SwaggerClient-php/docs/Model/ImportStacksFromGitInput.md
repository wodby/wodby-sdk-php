# # ImportStacksFromGitInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **int** | Optional for API-key requests; defaults to the API key&#39;s organization. | [optional]
**project_id** | **int** |  | [optional]
**integration_id** | **int** |  |
**remote_git_repo_id** | **string** |  |
**git_ref** | **string** |  |
**git_ref_type** | **string** |  |
**auto_update** | [**\Wodby\Api\Model\GitAutoUpdateSettingsInput**](GitAutoUpdateSettingsInput.md) |  | [optional]
**available_to_all_projects** | **bool** | Lets every project in the organization use the imported stacks without a project share. Only organization-owned stacks, imported without projectId, can be available to all projects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
