# # App

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**title** | **string** |  |
**status** | **string** |  |
**cluster_app** | **bool** |  |
**org_id** | **int** |  |
**ownership_scope** | **string** |  |
**owner_project_id** | **int** |  | [optional]
**settings** | [**\Wodby\Api\Model\AppSettings**](AppSettings.md) |  | [optional]
**creatable_environment_types** | **string[]** | Environment types the caller can create app environments of. Returned by getApp and getAppByName only. | [optional]
**previews_available** | **bool** | Whether pull request preview environments can work for this app: one of its environments has an enabled service connected to a branch of its own Git repository. Returned by getApp and getAppByName only. | [optional]
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
