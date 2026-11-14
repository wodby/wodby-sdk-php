# # K3SClusterNode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**role** | **string** | server runs the K3s control plane; agent is a worker node joined with the join command. |
**ready** | **bool** |  |
**schedulable** | **bool** | Whether the node accepts new pods. A node being removed or upgraded doesn&#39;t. |
**version** | **string** | The node&#39;s K3s release, such as v1.36.6+k3s1. |
**internal_ip** | **string** | The private address the node uses for cluster traffic. | [optional]
**external_ip** | **string** |  | [optional]
**local_volumes** | **string[]** | Persistent volumes stored on the node, as namespace/name of their claims. Their data stays on that server, so removing the node loses it. |
**capacity** | [**\Wodby\Api\Model\NodeCapacity**](NodeCapacity.md) |  |
**created_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
