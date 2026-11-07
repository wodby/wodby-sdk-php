# # OrgUsageReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period** | [**\Wodby\Api\Model\OrgUsagePeriod**](OrgUsagePeriod.md) |  |
**amount** | **float** | Total of all projects at the public list price in USD. |
**invoice_amount** | **float** | What the invoices charged for the report&#39;s items in the period, in USD before tax. Null while it is unknown: for the current period, a period that was not invoiced, or while an invoice is a draft. |
**projects** | [**\Wodby\Api\Model\OrgUsageProject[]**](OrgUsageProject.md) | Projects ordered by title, with the organization row last. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
