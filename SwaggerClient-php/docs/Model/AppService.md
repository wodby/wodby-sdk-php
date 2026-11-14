# # AppService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**title** | **string** |  |
**type** | **string** |  |
**status** | **string** |  |
**replicas** | **int** |  |
**scalability** | [**\Wodby\Api\Model\AppServiceScalability**](AppServiceScalability.md) |  | [optional]
**version** | **string** |  |
**main** | **bool** |  |
**disabled** | **bool** |  |
**external** | **bool** |  |
**required** | **bool** |  |
**needs_rebuild** | **bool** |  |
**needs_redeploy** | **bool** |  |
**stack_state** | **string** |  |
**configuration_ready** | **bool** |  |
**build_source_boilerplate** | **string** |  | [optional]
**ci_policy** | **string** |  |
**effective_ci_integration_id** | **int** |  | [optional]
**configuration_issues** | [**\Wodby\Api\Model\AppServiceConfigurationIssue[]**](AppServiceConfigurationIssue.md) |  |
**app_instance_id** | **int** |  |
**service_rev_id** | **int** |  |
**parent_app_service_id** | **int** |  | [optional]
**deployment_configuration** | [**\Wodby\Api\Model\ServiceDeploymentConfiguration**](ServiceDeploymentConfiguration.md) |  |
**icon** | **string** |  | [optional]
**eol** | **bool** | True when the app service&#39;s version has reached its end of life. | [optional]
**build_source_type** | **string** | How the app service gets its source code to build, public, clone or connect. Null when it is not built from source. | [optional]
**derivative** | **string** | The service derivative the app service runs. Null for the service itself. | [optional]
**git_repo_id** | **int** |  | [optional]
**workspace_mounts** | [**\Wodby\Api\Model\AppServiceWorkspaceMount[]**](AppServiceWorkspaceMount.md) | Workspace code mounts of the service, with its settings resolved in the paths. Empty without a workspace contract. | [optional]
**database_db_id** | **int** | The database the app service uses on a provider-managed database server. | [optional]
**database_user_id** | **int** | The database user the app service connects as on a provider-managed database server. | [optional]
**customizations** | [**\Wodby\Api\Model\AppServiceCustomization[]**](AppServiceCustomization.md) | What this app environment set differently from the stack service the app service was created from, such as a setting value, an extra variable or another link target. Only names are returned, never values. Returned only by GET /app-services/{id}. | [optional]
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
