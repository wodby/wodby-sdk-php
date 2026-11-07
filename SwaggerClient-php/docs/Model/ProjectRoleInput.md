# # ProjectRoleInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **int** | Used when creating a role. Optional for API-key requests; defaults to the API key&#39;s organization. | [optional]
**name** | **string** | Lowercase letters, digits, dashes or underscores; unique in the organization. |
**title** | **string** |  |
**description** | **string** |  | [optional]
**project_permissions** | **string[]** |  |
**env_permissions** | **array<string,string[]>** | Environment permissions by environment type (prod, staging, test, dev, feature). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
