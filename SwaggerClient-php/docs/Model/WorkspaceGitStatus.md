# # WorkspaceGitStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **bool** | False when the state cannot be read; reason explains why and the other fields are omitted. |
**reason** | **string** |  | [optional]
**branch** | **string** | Current branch; omitted for a detached HEAD. | [optional]
**upstream** | **string** | Upstream branch that the current branch tracks. | [optional]
**ahead** | **int** | Commits on the current branch that its upstream does not have. | [optional]
**behind** | **int** | Commits on the upstream that the current branch does not have. | [optional]
**commit** | **string** | HEAD commit; omitted before the first commit. | [optional]
**commit_subject** | **string** |  | [optional]
**committed_at** | **\DateTime** |  | [optional]
**changes** | [**\Wodby\Api\Model\WorkspaceGitChange[]**](WorkspaceGitChange.md) | Uncommitted changes, including untracked files. |
**truncated** | **bool** | True when more changes exist than listed. |
**checked_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
