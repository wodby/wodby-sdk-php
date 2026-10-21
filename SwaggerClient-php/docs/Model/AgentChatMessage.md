# # AgentChatMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**role** | **string** | A tool message is a call&#39;s result, or a call that waits; a summary replaced earlier messages for the model. |
**content** | **string** |  |
**tool** | **string** | For a tool message, the Wodby tool the call is for. ask_user is a question from the agent. | [optional]
**tool_arguments** | **array<string,mixed>** | For a tool message, the call&#39;s arguments. For ask_user, the question, its options (label, description, recommended) and whether several may be chosen. The recommended options come first and their labels end with (Recommended). | [optional]
**approval** | **string** | Set on a call that changes something or asks a question. |
**tool_destructive** | **bool** | True for a call that deletes, overwrites, upgrades or interrupts something, or runs a command in a container. |
**tool_targets** | [**\Wodby\Api\Model\AgentChatToolTarget[]**](AgentChatToolTarget.md) | For a call that waits for approval, what its ID arguments refer to, as far as the user may see them, each with the argument it names. |
**is_error** | **bool** |  |
**created_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
