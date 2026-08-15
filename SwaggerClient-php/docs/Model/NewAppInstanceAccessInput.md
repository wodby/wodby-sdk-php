# # NewAppInstanceAccessInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**integration_id** | **int** |  |
**mode** | **string** |  |
**scope** | **string** |  |
**settings** | [**\Wodby\Api\Model\AppAccessSettingInput[]**](AppAccessSettingInput.md) |  | [optional]
**host** | **string** | Required only when the selected provider uses a customer-assigned hostname. | [optional]
**endpoints** | [**\Wodby\Api\Model\NewAppInstanceAccessEndpointInput[]**](NewAppInstanceAccessEndpointInput.md) | HTTP endpoints selected during creation. Used only with SELECTED_ENDPOINTS scope; older clients may omit it to select the main endpoint. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
