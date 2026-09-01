# # UpdateAppAuthInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_service_ids** | **int[]** | App services to protect. Omit every scope field to preserve the current scope, or pass an empty list to protect the whole app environment. | [optional]
**app_service_id** | **int** | Single-service scope. Ignored when appServiceIds is supplied. | [optional]
**app_route_id** | **int** | Moves the entry to route scope. The owning app service is derived from the route. | [optional]
**login** | **string** |  |
**password** | **string** | Replaces the existing secret when supplied; omit to keep the current password. | [optional]
**realm** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
