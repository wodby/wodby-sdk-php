# # AppServicePod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** |  |
**workload** | **string** |  |
**kube_workload_name** | **string** |  |
**node** | **string** |  | [optional]
**phase** | **string** |  |
**ready** | **bool** |  |
**terminating** | **bool** |  |
**reason** | **string** |  | [optional]
**message** | **string** |  | [optional]
**created_at** | **\DateTime** |  |
**cpu_usage** | **float** | CPU cores in use. | [optional]
**memory_usage** | **int** | Memory in use in bytes. | [optional]
**cpu_request** | **float** |  | [optional]
**memory_request** | **int** |  | [optional]
**cpu_limit** | **float** |  | [optional]
**memory_limit** | **int** |  | [optional]
**containers** | [**\Wodby\Api\Model\AppServicePodContainer[]**](AppServicePodContainer.md) |  |
**conditions** | [**\Wodby\Api\Model\AppServicePodCondition[]**](AppServicePodCondition.md) | The pod&#39;s conditions that aren&#39;t met and say why, such as PodScheduled with reason Unschedulable. Known secret values in messages are masked. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
