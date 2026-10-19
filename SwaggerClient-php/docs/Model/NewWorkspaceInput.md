# # NewWorkspaceInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**branch** | **string** |  |
**storage_class_name** | **string** | Storage class for the workspace code and home volumes. Every Pod that mounts the code then runs on one node. Omit both storage fields to use the cluster&#39;s default storage class. Not allowed with storageServiceName. | [optional]
**storage_service_name** | **string** | Enabled storage service in the selected stack that shares the workspace files across nodes. Not allowed with storageClassName. | [optional]
**code_size** | **int** |  | [optional] [default to 10]
**home_size** | **int** |  | [optional] [default to 5]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
