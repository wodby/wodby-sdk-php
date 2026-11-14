# # StackService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**title** | **string** |  |
**type** | **string** |  |
**main** | **bool** |  |
**disabled** | **bool** |  |
**required** | **bool** |  |
**basic_auth_override** | **string** | Whether the stack overrides the service&#39;s basic auth default. |
**basic_auth_default** | **bool** | Whether new app services of this stack service get their own basic auth entry by default. Always false without a public HTTP endpoint. |
**replicas** | **int** |  |
**service_rev_pinned** | **bool** |  |
**outdated** | **bool** |  |
**icon** | **string** |  | [optional]
**eol** | **bool** | True when the version of the stack service&#39;s default option has reached its end of life. | [optional]
**derivative** | **string** | The service derivative the stack service runs. Null for the service itself. | [optional]
**parent_stack_service_id** | **int** | The stack service this derivative stack service belongs to. Null for the service itself. | [optional]
**service_rev_id** | **int** |  |
**service_rev_name** | **string** |  |
**service_rev_title** | **string** |  |
**service_rev_version** | **string** |  |
**build_source_integration_id** | **int** |  | [optional]
**build_source_remote_repo_id** | **string** |  | [optional]
**options** | [**\Wodby\Api\Model\StackServiceOption[]**](StackServiceOption.md) |  | [optional]
**settings** | [**\Wodby\Api\Model\StackServiceSetting[]**](StackServiceSetting.md) |  | [optional]
**containers** | [**\Wodby\Api\Model\StackServiceContainer[]**](StackServiceContainer.md) |  | [optional]
**deployment_configuration** | [**\Wodby\Api\Model\ServiceDeploymentConfiguration**](ServiceDeploymentConfiguration.md) |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
