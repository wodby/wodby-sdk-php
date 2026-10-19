# # ResourceSharingInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ownership_scope** | **string** | org to make the organization the owner, project to make one project the owner. |
**owner_project_id** | **int** | Project that becomes the owner. Required when ownershipScope is project. | [optional]
**shared_projects** | [**\Wodby\Api\Model\ProjectShareInput[]**](ProjectShareInput.md) | The complete list of project shares. A project left out loses its share. The owning project always keeps write access. You need write access to every project whose share you add or remove. |
**available_to_all_projects** | **bool** | Lets every project in the organization use the resource without a project share. Only organization-owned clusters, integrations, services and stacks can be available to all projects. Omit it to keep the current setting. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
