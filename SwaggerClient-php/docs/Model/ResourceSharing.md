# # ResourceSharing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ownership_scope** | **string** | org when the organization owns the resource, project when one project owns it. |
**owner_project_id** | **int** | Project that owns the resource when ownershipScope is project. | [optional]
**available_to_all_projects** | **bool** | True when every project in the organization can use the resource without a project share. Only organization-owned clusters, integrations, services and stacks can be available to all projects; it is always false for other resources. |
**shared_projects** | [**\Wodby\Api\Model\ResourceProjectShare[]**](ResourceProjectShare.md) | Projects the resource is shared with that you can see. The owning project has the owner role. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
