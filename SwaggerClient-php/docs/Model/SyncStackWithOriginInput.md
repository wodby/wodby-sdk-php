# # SyncStackWithOriginInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delete_stack_helm_values** | **bool** |  | [optional]
**delete_stack_env_vars** | **bool** |  | [optional]
**delete_stack_tokens** | **bool** |  | [optional]
**delete_stack_annotations** | **bool** |  | [optional]
**delete_stack_services** | **bool** |  | [optional]
**delete_stack_services_configuration** | **bool** |  | [optional]
**update_stack_services** | **bool** | Let the sync update existing stack services to the service version the origin uses when the origin&#39;s changes need it. Without it, such a sync fails with an error that lists those stack services. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
