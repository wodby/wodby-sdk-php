# # NewAppRouteInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_service_id** | **int** |  |
**disabled** | **bool** | Creates the custom domain disabled. Disabled domains do not require custom-domain feature access until enabled. | [optional]
**main** | **bool** |  |
**primary** | **bool** |  |
**port** | **int** |  |
**host** | **string** |  |
**path** | **string** |  | [optional]
**path_type** | **string** |  | [optional]
**action** | **string** | SERVE sends requests to the selected app service. BACKEND is accepted for backwards compatibility. | [optional]
**redirect_scheme** | **string** |  | [optional]
**redirect_host** | **string** |  | [optional]
**redirect_path** | **string** |  | [optional]
**redirect_status_code** | **int** |  | [optional]
**hsts** | **bool** | Enables HTTP Strict Transport Security for a serve route when TLS is active. | [optional]
**letsencrypt** | **bool** |  | [optional]
**tls** | [**\Wodby\Api\Model\AppRouteTLSInput**](AppRouteTLSInput.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
