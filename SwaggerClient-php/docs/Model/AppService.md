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
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
