# # UpdateAppAuthInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_service_id** | **int** | Omit with appRouteId to preserve the current scope. When supplied alone, moves the entry to service scope and clears any route scope. | [optional]
**app_route_id** | **int** | Moves the entry to route scope and must be accompanied by appServiceId. | [optional]
**login** | **string** |  |
**password** | **string** | Replaces the existing secret when supplied; omit to keep the current password. | [optional]
**realm** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
