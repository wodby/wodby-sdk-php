# # ProjectRole

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Custom role ID; absent for system roles. | [optional]
**role** | **string** | The system role, or custom. |
**system** | **bool** |  |
**name** | **string** |  |
**title** | **string** |  |
**description** | **string** |  |
**project_permissions** | **string[]** |  |
**env_permissions** | **array<string,string[]>** | Environment permissions by environment type (prod, staging, test, dev, feature). |
**assignable_to_teams** | **bool** |  |
**supports_runtime_secret_reveal** | **bool** | Whether memberships with this system role can turn on runtime secret reveal. |
**membership_count** | **int** | Project memberships holding a custom role. Visible to organization owners, admins and support. |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
