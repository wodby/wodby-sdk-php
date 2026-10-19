# # WorkspaceGitDiff

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **bool** | False when the diff cannot be read; reason explains why and diff is empty. |
**reason** | **string** |  | [optional]
**path** | **string** |  |
**diff** | **string** | Unified diff of staged and unstaged changes. Empty when the file does not differ. |
**binary** | **bool** | True for a file Git does not show line by line. |
**truncated** | **bool** | True when the diff is longer than what is returned. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
