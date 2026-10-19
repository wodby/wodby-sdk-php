# # Stack

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**title** | **string** |  |
**icon** | **string** |  |
**status** | **string** |  |
**outdated** | **bool** |  |
**public** | **bool** |  |
**rev_id** | **int** |  |
**draft_rev_id** | **int** |  | [optional]
**latest_rev_number** | **int** |  |
**git_repo_id** | **int** |  | [optional]
**git_repo_remote_id** | **string** |  | [optional]
**git_repo_ref** | **string** |  | [optional]
**git_repo_ref_type** | **string** |  | [optional]
**origin_stack_rev_id** | **int** |  | [optional]
**origin_stack_rev_stack_id** | **int** |  | [optional]
**origin_stack_rev_name** | **string** |  | [optional]
**origin_stack_rev_number** | **int** |  | [optional]
**origin_stack_rev_version** | **string** |  | [optional]
**origin_stack_rev_created_at** | **\DateTime** |  | [optional]
**org_id** | **int** |  |
**ownership_scope** | **string** | org when the organization owns the resource, project when one project owns it. |
**owner_project_id** | **int** |  | [optional]
**available_to_all_projects** | **bool** | True when every project in the organization can use the resource without a project share. |
**settings** | [**\Wodby\Api\Model\StackSettings**](StackSettings.md) |  | [optional]
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
