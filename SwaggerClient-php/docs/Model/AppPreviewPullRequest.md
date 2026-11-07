# # AppPreviewPullRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** |  |
**title** | **string** |  |
**url** | **string** |  |
**remote_git_repo_id** | **string** | Remote repository of the pull request. Pass it when creating the preview environment. |
**repository_url** | **string** |  |
**head_ref** | **string** |  |
**base_ref** | **string** |  |
**author** | **string** |  |
**draft** | **bool** |  |
**from_fork** | **bool** | The head branch lives in another repository. Pull requests from forks never get preview environments. |
**updated_at** | **\DateTime** |  | [optional]
**has_preview** | **bool** | The pull request already has a preview environment, possibly one being deleted. |
**preview_app_environment_id** | **int** |  | [optional]
**skip_reason** | **string** | Why a preview environment cannot be created for this pull request now. Null when it can. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
