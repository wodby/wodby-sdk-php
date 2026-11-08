# # OrgMembership

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**user_id** | **int** |  | [optional]
**user** | [**\Wodby\Api\Model\User**](User.md) |  | [optional]
**email** | **string** |  | [optional]
**org_id** | **int** |  |
**role** | **string** |  |
**status** | **string** |  |
**joined_at** | **\DateTime** |  | [optional]
**project_memberships** | [**\Wodby\Api\Model\ProjectMembership[]**](ProjectMembership.md) | The member&#39;s project access: their direct project memberships, then the memberships of every team they belong to (those have teamId set). Returned for a single membership to organization owners, admins and support members; omitted otherwise. | [optional]
**team_memberships** | [**\Wodby\Api\Model\OrgMembershipTeamMembership[]**](OrgMembershipTeamMembership.md) | The teams the member belongs to. Returned for a single membership to organization owners, admins and support members; omitted otherwise. | [optional]
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
