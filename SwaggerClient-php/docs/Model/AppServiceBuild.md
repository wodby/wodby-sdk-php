# # AppServiceBuild

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**status** | **string** |  |
**image** | **string** |  |
**image_deleted** | **bool** |  |
**unmanaged_image** | **bool** | True when the image was built from a Dockerfile that does not derive from the service image, so it no longer tracks service image updates. |
**dockerfile_path** | **string** | Repository path of an author-provided Dockerfile. Empty when the build used a service-provided or generated Dockerfile. |
**dockerfile_hash** | **string** | SHA-256 of the Dockerfile that produced the image. Empty when the build did not report it. |
**size** | **int** |  |
**app_service_id** | **int** |  |
**previously_deployed** | **bool** |  |
**currently_deployed** | **bool** |  |
**current_build_number** | **int** |  | [optional]
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
