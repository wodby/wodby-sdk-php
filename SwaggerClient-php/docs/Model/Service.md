# # Service

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**title** | **string** |  |
**type** | **string** |  |
**status** | **string** |  |
**external** | **bool** |  |
**public** | **bool** |  |
**rev_id** | **int** |  |
**latest_rev_number** | **int** |  |
**org_id** | **int** |  |
**ownership_scope** | **string** | org when the organization owns the resource, project when one project owns it. |
**owner_project_id** | **int** |  | [optional]
**available_to_all_projects** | **bool** | True when every project in the organization can use the resource without a project share. |
**settings** | [**\Wodby\Api\Model\ServiceSettings**](ServiceSettings.md) |  | [optional]
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
