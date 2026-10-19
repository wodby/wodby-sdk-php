# # AppDeployment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**number** | **int** |  |
**status** | **string** | Overall result, including the routing updates that follow the service rollout. |
**rollout_status** | **string** | Progress of rolling out the selected services. It does not show whether routing has finished. |
**rollout_ended_at** | **\DateTime** |  | [optional]
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
**post_deployment_scripts** | **string[]** | Post-deployment scripts that the deployment&#39;s builds provide. |
**skip_post_deployment_scripts** | **bool** | True when the deployment does not run the post-deployment scripts its builds provide. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**started_at** | **\DateTime** |  | [optional]
**ended_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
