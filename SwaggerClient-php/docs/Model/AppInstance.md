# # AppInstance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**title** | **string** |  |
**status** | **string** |  |
**main_domain** | **string** |  | [optional]
**app_id** | **int** |  |
**cluster_id** | **int** |  |
**env_id** | **int** |  |
**stack_id** | **int** |  |
**stack_rev_id** | **int** |  |
**stack_name** | **string** |  |
**stack_title** | **string** |  |
**stack_icon** | **string** |  |
**stack_rev_number** | **int** |  |
**stack_version** | **string** |  |
**access** | [**\Wodby\Api\Model\AppAccess**](AppAccess.md) |  | [optional]
**routing_mode** | **string** |  |
**routing_pending** | **bool** |  |
**configuration_ready** | **bool** |  |
**configuration_issues** | [**\Wodby\Api\Model\AppServiceConfigurationIssue[]**](AppServiceConfigurationIssue.md) |  |
**settings** | [**\Wodby\Api\Model\AppInstanceSettings**](AppInstanceSettings.md) |  | [optional]
**health** | [**\Wodby\Api\Model\AppInstanceHealth**](AppInstanceHealth.md) |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
