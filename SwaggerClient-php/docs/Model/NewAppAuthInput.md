# # NewAppAuthInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_instance_id** | **int** |  |
**app_service_ids** | **int[]** | App services to protect. Omit or pass an empty list to protect the whole app instance. | [optional]
**app_service_id** | **int** | Single-service scope. Ignored when appServiceIds is supplied. | [optional]
**app_route_id** | **int** | Route scope. The owning app service is derived from the route. | [optional]
**login** | **string** |  |
**password** | **string** |  |
**realm** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
