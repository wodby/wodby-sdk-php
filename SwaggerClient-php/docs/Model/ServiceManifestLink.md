# # ServiceManifestLink

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**title** | **string** |  |
**required** | **bool** |  |
**selectors** | [**\Wodby\Api\Model\ServiceManifestLinkSelector[]**](ServiceManifestLinkSelector.md) | The services the link may point at. A target must match one selector. | [optional]
**custom** | **bool** | Whether the link accepts a custom target, whose values a user enters instead of choosing a target service. |
**cross_app** | **bool** | Whether the link may point at a service of another app environment that accepts it. Across environments the link reads only the target&#39;s exports. |
**values** | [**\Wodby\Api\Model\ServiceManifestLinkValue[]**](ServiceManifestLinkValue.md) | The values the link hands to the service, whatever it points at. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
