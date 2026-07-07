# # HelmChartAnalysis

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chart** | [**\Wodby\Api\Model\HelmChartMetadata**](HelmChartMetadata.md) |  |
**release** | **string** |  |
**namespace** | **string** |  |
**resource_count** | **int** |  |
**workloads** | [**\Wodby\Api\Model\HelmChartWorkload[]**](HelmChartWorkload.md) |  | [optional]
**services** | [**\Wodby\Api\Model\HelmChartService[]**](HelmChartService.md) |  | [optional]
**volume_claims** | [**\Wodby\Api\Model\HelmChartVolumeClaim[]**](HelmChartVolumeClaim.md) |  | [optional]
**crds** | [**\Wodby\Api\Model\HelmChartResource[]**](HelmChartResource.md) |  | [optional]
**cluster_resources** | [**\Wodby\Api\Model\HelmChartResource[]**](HelmChartResource.md) |  | [optional]
**hooks** | [**\Wodby\Api\Model\HelmChartResource[]**](HelmChartResource.md) |  | [optional]
**unsupported_kinds** | **string[]** |  | [optional]
**warnings** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
