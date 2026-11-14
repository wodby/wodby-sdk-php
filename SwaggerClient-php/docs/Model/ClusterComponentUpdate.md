# # ClusterComponentUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** | cilium upgrades the Cilium release on a K3s cluster; provider_addon asks the provider to update an add-on. |
**name** | **string** | Identifies the update within its cluster. |
**current_version** | **string** | Absent when the update replaces a copy the provider does not manage yet. | [optional]
**target_version** | **string** |  |
**components** | **string[]** | The names of the cluster components this update changes. |
**note** | **string** | What to expect while the update runs. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
