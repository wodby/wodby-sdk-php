# # ResourcesInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gpu** | [**\Wodby\Api\Model\GPUResources**](GPUResources.md) | Omitted or null preserves an existing GPU override. Count zero disables GPUs. | [optional]
**workload** | **string** |  | [optional]
**container** | **string** |  | [optional]
**preset** | **string** | Name of a Wodby preset or of a custom preset of the organization, from listResourcePresets. Its values fill the CPU and memory fields this input leaves out; the values are stored, not the preset. | [optional]
**request_cpu** | **int** |  | [optional]
**request_mem** | **int** |  | [optional]
**limit_cpu** | **int** |  | [optional]
**limit_mem** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
