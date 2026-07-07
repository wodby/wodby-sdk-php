# # HelmChartWorkload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** |  |
**name** | **string** |  |
**labels** | **array<string,string>** |  | [optional]
**selector** | **array<string,string>** |  | [optional]
**pod_labels** | **array<string,string>** |  | [optional]
**containers** | [**\Wodby\Api\Model\HelmChartContainer[]**](HelmChartContainer.md) |  | [optional]
**init_containers** | [**\Wodby\Api\Model\HelmChartContainer[]**](HelmChartContainer.md) |  | [optional]
**volumes** | [**\Wodby\Api\Model\HelmChartVolumeClaim[]**](HelmChartVolumeClaim.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
