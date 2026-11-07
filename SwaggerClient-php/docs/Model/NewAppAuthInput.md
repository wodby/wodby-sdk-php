# # NewAppAuthInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_instance_id** | **int** |  |
**app_service_ids** | **int[]** | App services to protect. Omit or pass an empty list to protect the whole app environment. | [optional]
**app_service_id** | **int** | Single-service scope. Ignored when appServiceIds is supplied. | [optional]
**app_route_id** | **int** | Route scope. The owning app service is derived from the route. | [optional]
**login** | **string** | Defaults to wodby. Ignored for exemptions. | [optional]
**password** | **string** | Omit to let Wodby generate a password, which you reveal in the dashboard. Ignored for exemptions. | [optional]
**realm** | **string** |  | [optional]
**exempt** | **bool** | Switch basic auth off for the given app services or route even when a wider entry covers them. Requires appServiceIds or appRouteId. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
