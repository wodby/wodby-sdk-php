# # ClusterSecurityAdvisory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advisory** | **string** | The advisory, such as CVE-2026-98432. |
**title** | **string** |  |
**state** | **string** | mitigated or not_mitigated for a K3s cluster, by the protections Wodby keeps on its server. fixed or not_fixed for a managed cluster, by the node images its provider ships. |
**action** | **string** | The operation that fixes or mitigates the advisory. Absent when nothing is needed, or when the provider has no fixed node image yet. | [optional]
**message** | **string** | Why the cluster is in this state and what to do about it. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
