# # GPUResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resource_name** | **string** | Qualified device-plugin resource name, such as nvidia.com/gpu or amd.com/gpu. Native and reserved Kubernetes resource names are rejected. |
**count** | **int** | Device count per container replica. Kubernetes requests and limits are equal; zero explicitly disables GPUs. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
