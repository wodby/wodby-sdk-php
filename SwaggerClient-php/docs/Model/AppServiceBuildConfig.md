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
**copy_subdir** | **string** | Resolved subdirectory this build copies, applied under both the CI --from and --to paths. Empty means the whole context. |
**args** | [**\Wodby\Api\Model\AppServiceBuildArg[]**](AppServiceBuildArg.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
