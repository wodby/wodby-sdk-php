# # NewAppServiceInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**disabled** | **bool** |  |
**version** | **string** |  | [optional]
**build_source** | [**\Wodby\Api\Model\BuildSourceInput**](BuildSourceInput.md) |  | [optional]
**imports** | [**\Wodby\Api\Model\ImportInput[]**](ImportInput.md) |  | [optional]
**volumes** | [**\Wodby\Api\Model\VolumeSizeInput[]**](VolumeSizeInput.md) |  | [optional]
**integrations** | [**\Wodby\Api\Model\AppServiceIntegrationInput[]**](AppServiceIntegrationInput.md) |  | [optional]
**settings** | [**\Wodby\Api\Model\AppServiceSettingInput[]**](AppServiceSettingInput.md) |  | [optional]
**database** | [**\Wodby\Api\Model\AppServiceDatabaseInput**](AppServiceDatabaseInput.md) |  | [optional]
**resources** | [**\Wodby\Api\Model\ResourcesInput**](ResourcesInput.md) |  | [optional]
**scalability** | [**\Wodby\Api\Model\ScalabilityInput**](ScalabilityInput.md) |  | [optional]
**basic_auth** | **bool** | Protect the service&#39;s public HTTP endpoints with their own basic auth and a generated password, or not. Omit to follow the stack service&#39;s basicAuthDefault. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
