# # NewWodbyCloudClusterInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **int** | Optional for API-key requests; defaults to the API key&#39;s organization. | [optional]
**project_id** | **int** |  | [optional]
**available_to_all_projects** | **bool** | Lets every project in the organization use the new resource without a project share. Only an organization-owned resource, created without projectId, can be available to all projects. | [optional]
**demo** | **bool** | Create a free demo cluster with limited resources. |
**single_node** | **bool** |  | [optional]
**region** | **string** |  | [optional]
**machine_type** | **string** | Machine type name from GET /wodby-cloud/machine-types. | [optional]
**min_node_count** | **int** |  | [optional]
**max_node_count** | **int** |  | [optional]
**environment_policy** | [**\Wodby\Api\Model\ClusterEnvironmentPolicyInput**](ClusterEnvironmentPolicyInput.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
