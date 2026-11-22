# # KubernetesEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Warning or Normal. |
**reason** | **string** |  |
**message** | **string** | The event&#39;s message with known secret values masked. |
**object_kind** | **string** | Kind of the object the event is about, such as Pod or PersistentVolumeClaim. |
**object_name** | **string** |  |
**app_service_id** | **int** | The app service the object belongs to. Null for objects no app service defines, or ones Wodby can&#39;t attribute. |
**source** | **string** | The component that reported the event, such as kubelet or default-scheduler. |
**count** | **int** | How many times the event occurred. |
**first_seen** | **\DateTime** |  |
**last_seen** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
