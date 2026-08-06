# # AppBuild

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**number** | **int** | App-instance build-launch number. Build records created by the same Wodby CI launch share this number. |
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
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**started_at** | **\DateTime** |  | [optional]
**ended_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
