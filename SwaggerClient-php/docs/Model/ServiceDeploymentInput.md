# # ServiceDeploymentInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**image** | **string** |  |
**unmanaged_image** | **bool** | Set by the CI build when the image was produced from a Dockerfile that does not derive from the service image. | [optional]
**dockerfile_path** | **string** | Repository path of an author-provided Dockerfile, reported by the CI build. | [optional]
**dockerfile_hash** | **string** | SHA-256 of the Dockerfile that produced the image, reported by the CI build. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
