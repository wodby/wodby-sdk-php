# # OrgUsageProject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project_id** | **int** | Null for usage of organization-owned resources and usage without a project. |
**name** | **string** | The project name, empty for the organization row and deleted projects. |
**title** | **string** |  |
**deleted** | **bool** | The project no longer exists. Its recorded usage stays in the report. |
**amount** | **float** | Total of the items at the public list price in USD. |
**invoice_share** | **float** | Total of the items&#39; invoice shares in USD before tax, null while the invoiced amount is unknown. |
**items** | [**\Wodby\Api\Model\OrgUsageItem[]**](OrgUsageItem.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
