# # ServiceManifest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**raw** | **string** |  |
**scalable** | **bool** |  |
**basic_auth** | **bool** | Whether the service asks for its public HTTP endpoints to be protected with basic auth by default. |
**labels** | **string[]** |  | [optional]
**cross_app** | **bool** | Whether links of services in other app environments, of the same app or another one, may point at this service. |
**exports** | [**\Wodby\Api\Model\ServiceManifestExport[]**](ServiceManifestExport.md) | Values the services linking to this one read as {{link.exports.&lt;name&gt;}}. |
**integrations** | [**\Wodby\Api\Model\ServiceIntegrationRequirement[]**](ServiceIntegrationRequirement.md) |  | [optional]
**links** | [**\Wodby\Api\Model\ServiceManifestLink[]**](ServiceManifestLink.md) |  | [optional]
**link_groups** | [**\Wodby\Api\Model\ServiceManifestLinkGroup[]**](ServiceManifestLinkGroup.md) | Links that are alternatives to one another. An enabled app service needs at least min of them configured. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
