# # AppDeployment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**number** | **int** |  |
**status** | **string** |  |
**rollback_status** | **string** |  |
**post_deployment_status** | **string** |  |
**skip_rollback** | **bool** |  |
**can_cancel** | **bool** |  |
**app_instance_id** | **int** |  |
**builds** | [**\Wodby\Api\Model\AppBuild[]**](AppBuild.md) |  |
**preparation_task_id** | **int** |  | [optional]
**preparation_task** | [**\Wodby\Api\Model\Task**](Task.md) |  | [optional]
**task_id** | **int** |  | [optional]
**task** | [**\Wodby\Api\Model\Task**](Task.md) |  | [optional]
**post_deployment_task_id** | **int** |  | [optional]
**post_deployment_task** | [**\Wodby\Api\Model\Task**](Task.md) |  | [optional]
**app_service_deployments** | [**\Wodby\Api\Model\AppServiceDeployment[]**](AppServiceDeployment.md) |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**started_at** | **\DateTime** |  | [optional]
**ended_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
