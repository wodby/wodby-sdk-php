# # NewK3SClusterInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **int** | Optional for API-key requests; defaults to the API key&#39;s organization. | [optional]
**project_id** | **int** |  | [optional]
**available_to_all_projects** | **bool** | Lets every project in the organization use the new resource without a project share. Only an organization-owned resource, created without projectId, can be available to all projects. | [optional]
**name** | **string** |  |
**title** | **string** |  |
**disable_monitoring** | **bool** |  |
**auto_infrastructure_upgrade** | **bool** |  | [optional]
**environment_policy** | [**\Wodby\Api\Model\ClusterEnvironmentPolicyInput**](ClusterEnvironmentPolicyInput.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
