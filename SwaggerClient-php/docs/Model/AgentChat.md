# # AgentChat

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**org_id** | **int** |  |
**title** | **string** |  |
**status** | **string** | idle takes a message; running is the agent working; waiting is a call that waits for approval or an answer. |
**error** | **string** | Why the last run stopped without an answer, or empty. |
**approval_mode** | [**\Wodby\Api\Model\AgentChatApprovalMode**](AgentChatApprovalMode.md) |  |
**context_tokens** | **int** | Tokens in the chat&#39;s context after the newest reply. |
**context_limit** | **int** | Context size at which the agent summarizes the chat to continue it. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
