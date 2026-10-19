# # WorkspaceConnection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ready** | **bool** |  |
**reason** | **string** |  |
**host** | **string** |  |
**port** | **int** |  |
**username** | **string** |  |
**working_directory** | **string** |  |
**host_key_fingerprint** | **string** |  |
**agents** | **string[]** | Coding agent commands pre-installed in the SSH runner, such as claude, codex and opencode. Empty when the runner has none. |
**git_credentials** | **bool** | True when git push and fetch in the SSH runner authenticate to the app&#39;s repository with the app&#39;s Git integration. |
**ai_credits** | **bool** | True when opencode in the SSH runner uses the organization&#39;s AI credits by default. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
