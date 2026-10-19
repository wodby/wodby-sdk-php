# # NewAppServiceOverrideInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Stack service ID in the selected stack revision. |
**disabled** | **bool** |  | [optional]
**version** | **string** |  | [optional]
**build_source** | [**\Wodby\Api\Model\BuildSourceInput**](BuildSourceInput.md) |  | [optional]
**settings** | [**\Wodby\Api\Model\AppServiceSettingInput[]**](AppServiceSettingInput.md) | Service settings to set. A setting that is not named keeps its default. Use it to supply a required setting that has no default. | [optional]
**database** | [**\Wodby\Api\Model\AppServiceDatabaseInput**](AppServiceDatabaseInput.md) | The database server, and optionally the database, of a database service. Required to enable an external database service, such as a managed PostgreSQL server. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
