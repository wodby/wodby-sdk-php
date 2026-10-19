# # Integration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**title** | **string** |  |
**status** | **string** |  |
**scope** | **string** |  | [optional]
**auth** | **string** |  | [optional]
**outdated** | **bool** |  |
**provider_rev_id** | **int** |  |
**org_id** | **int** |  |
**primary_env_id** | **int** | Legacy internal environment entity ID. Use primaryEnvType. | [optional]
**primary_env_type** | **string** |  | [optional]
**env_scope** | **string** |  |
**allowed_env_ids** | **int[]** | Legacy internal environment entity IDs. Use allowedEnvTypes. |
**allowed_env_types** | **string[]** |  |
**ownership_scope** | **string** | org when the organization owns the resource, project when one project owns it. |
**owner_project_id** | **int** |  | [optional]
**available_to_all_projects** | **bool** | True when every project in the organization can use the resource without a project share. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
