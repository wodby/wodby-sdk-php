# # Task

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**title** | **string** |  |
**compact_title** | **string** |  |
**execution_scope** | **string** |  |
**status** | **string** |  |
**progress** | **int** |  |
**silent** | **bool** |  |
**system** | **bool** |  |
**user_id** | **int** |  |
**user** | [**\Wodby\Api\Model\User**](User.md) |  | [optional]
**org_id** | **int** |  | [optional]
**project_ids** | **int[]** |  | [optional]
**app_id** | **int** |  | [optional]
**app_instance_id** | **int** |  | [optional]
**app_service_id** | **int** |  | [optional]
**cluster_id** | **int** |  | [optional]
**database_id** | **int** |  | [optional]
**integration_id** | **int** |  | [optional]
**service_id** | **int** |  | [optional]
**stack_id** | **int** |  | [optional]
**provider_id** | **int** |  | [optional]
**origin_task_id** | **int** |  | [optional]
**spawned_task_ids** | **int[]** |  | [optional]
**repeated_task_id** | **int** |  | [optional]
**jobs** | [**\Wodby\Api\Model\TaskJob[]**](TaskJob.md) |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**started_at** | **\DateTime** |  | [optional]
**ended_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
