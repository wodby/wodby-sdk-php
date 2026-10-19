# # CloudMachineType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**cpu** | **int** |  | [optional]
**mem** | **int** |  | [optional]
**disk** | **int** |  | [optional]
**shared_cpu** | **bool** |  | [optional]
**available** | **bool** |  | [optional]
**family** | **string** |  | [optional]
**min_storage_size** | **int** |  | [optional]
**max_storage_size** | **int** |  | [optional]
**min_iops** | **int** |  | [optional]
**max_iops** | **int** |  | [optional]
**default_iops** | **int** |  | [optional]
**storage_options** | **array[]** |  | [optional]
**gpus** | [**\Wodby\Api\Model\CloudGPU[]**](CloudGPU.md) | Provider-reported devices. This does not guarantee driver setup or spare capacity. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
