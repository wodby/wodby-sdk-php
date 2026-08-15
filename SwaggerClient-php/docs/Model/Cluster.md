# # Cluster

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**title** | **string** |  |
**status** | **string** |  |
**serverless** | **bool** |  |
**demo** | **bool** |  |
**wodby** | **bool** |  |
**k3s** | **bool** |  |
**single_node** | **bool** |  |
**version** | **string** |  | [optional]
**infra_version** | **string** |  |
**min_node_count** | **int** |  | [optional]
**max_node_count** | **int** |  | [optional]
**last_nodes_ready** | **int** |  | [optional]
**last_nodes_total** | **int** |  | [optional]
**region** | **string** |  | [optional]
**zone** | **string** |  | [optional]
**ips** | **string[]** |  | [optional]
**hostname** | **string** |  | [optional]
**integration_id** | **int** |  | [optional]
**org_id** | **int** |  |
**ownership_scope** | **string** |  |
**owner_project_id** | **int** |  | [optional]
**capabilities** | [**\Wodby\Api\Model\ClusterCapabilities**](ClusterCapabilities.md) |  |
**settings** | [**\Wodby\Api\Model\ClusterSettings**](ClusterSettings.md) |  | [optional]
**storage_classes** | [**\Wodby\Api\Model\StorageClass[]**](StorageClass.md) |  | [optional]
**storage_classes_observed_at** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
