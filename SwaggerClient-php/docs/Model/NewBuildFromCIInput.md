# # NewBuildFromCIInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_service_id** | **int** |  |
**git_commit_sha** | **string** |  |
**git_ref** | **string** |  |
**git_ref_type** | **string** |  |
**build_num** | **int** |  |
**build_id** | **string** |  |
**workflow** | **string** |  | [optional]
**git_commit_author_name** | **string** |  | [optional]
**git_commit_author_email** | **string** |  | [optional]
**git_commit_message** | **string** |  | [optional]
**provider** | **string** |  |
**post_deployment** | **string** |  | [optional]
**pre_deployment** | **string** | Content of the repository&#39;s .wodby/pre-deployment.yml. A deployment of this build runs these scripts with the new version before rolling the app service out. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
