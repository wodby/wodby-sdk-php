# # AppServiceBuildConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**title** | **string** |  |
**managed** | **bool** |  |
**main** | **bool** |  |
**image** | **string** |  |
**dockerfile** | **string** |  | [optional]
**dockerignore** | **string** |  | [optional]
**copy_from** | **string** | Build context subdirectory to copy, relative to the CI --from path. Empty means the whole context. |
**copy_to** | **string** | Image subdirectory to copy into, relative to the CI --to path. Empty means the image working directory. |
**args** | [**\Wodby\Api\Model\AppServiceBuildArg[]**](AppServiceBuildArg.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
