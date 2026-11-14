# # ClusterNode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**ready** | **bool** |  |
**schedulable** | **bool** | Whether the node accepts new pods. A node being drained, recycled or upgraded doesn&#39;t. |
**version** | **string** | The node&#39;s Kubernetes version, as its kubelet reports it. |
**machine_type** | **string** | The provider&#39;s machine type of the node, such as m6i.large, when the node reports it. | [optional]
**zone** | **string** | The availability zone of the node, when the node reports it. | [optional]
**gpu_node_pool** | **bool** | Whether the node belongs to the cluster&#39;s GPU node pool. |
**internal_ip** | **string** |  | [optional]
**external_ip** | **string** |  | [optional]
**capacity** | [**\Wodby\Api\Model\NodeCapacity**](NodeCapacity.md) |  |
**created_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
