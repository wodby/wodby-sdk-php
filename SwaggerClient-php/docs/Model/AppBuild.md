# # AppBuild

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**number** | **int** | App environment build-launch number. Build records created by the same Wodby CI launch share this number. |
**status** | **string** |  |
**app_instance_id** | **int** |  |
**app_service_id** | **int** |  |
**task_id** | **int** |  | [optional]
**task** | [**\Wodby\Api\Model\Task**](Task.md) |  | [optional]
**app_service_builds** | [**\Wodby\Api\Model\AppServiceBuild[]**](AppServiceBuild.md) |  |
**git_ref_type** | **string** |  |
**git_ref** | **string** |  |
**commit_hash** | **string** |  |
**commit_message** | **string** |  |
**author_name** | **string** |  | [optional]
**author_email** | **string** |  | [optional]
**workflow** | **string** | CI workflow that produced an externally built image. Empty for Wodby CI builds. |
**stack_rev_id** | **int** | Stack revision the build was made for. | [optional]
**git_repo_id** | **int** |  | [optional]
**ci_integration_id** | **int** |  | [optional]
**registry_integration_id** | **int** |  | [optional]
**image_void_status** | **string** | Whether the build&#39;s images were voided and can no longer be deployed. |
**can_void_images** | **bool** | True when the build&#39;s images can be voided now. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**started_at** | **\DateTime** |  | [optional]
**ended_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
