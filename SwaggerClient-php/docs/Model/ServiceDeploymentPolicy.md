# # ServiceDeploymentPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**strategy** | [**\Wodby\Api\Model\ServiceDeploymentStrategy**](ServiceDeploymentStrategy.md) |  | [optional]
**max_unavailable** | **string** | Absolute number or percentage, such as &#x60;0&#x60; or &#x60;25%&#x60;. | [optional]
**max_surge** | **string** | Absolute number or percentage, such as &#x60;1&#x60; or &#x60;25%&#x60;. | [optional]
**min_ready** | **string** | Go duration, such as &#x60;10s&#x60;. | [optional]
**progress_deadline** | **string** | Go duration, such as &#x60;15m&#x60;. | [optional]
**shutdown_grace_period** | **string** | Go duration, such as &#x60;11m&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
