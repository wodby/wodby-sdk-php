# # AppEnvironmentMigration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**app_environment_id** | **int** |  |
**source_cluster_id** | **int** |  |
**target_cluster_id** | **int** |  |
**task_id** | **int** | Task that runs the migration. |
**deployment_id** | **int** | Deployment that brings the environment up on the target cluster. | [optional]
**status** | **string** |  |
**phase** | **string** |  |
**components** | [**\Wodby\Api\Model\AppEnvironmentMigrationComponent[]**](AppEnvironmentMigrationComponent.md) | Services whose data the migration copies with a backup on the source and an import on the target. |
**failure_message** | **string** |  |
**retain_until** | **\DateTime** | When the retained source is removed automatically. | [optional]
**cutover_at** | **\DateTime** |  | [optional]
**ended_at** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
