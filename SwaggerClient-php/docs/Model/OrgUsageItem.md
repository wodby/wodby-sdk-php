# # OrgUsageItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item** | **string** |  |
**title** | **string** |  |
**quantity** | **float** | Usage in unit over the period. |
**unit** | **string** | service-hour, minute, GB-hour, or USD for Wodby Cloud usage. |
**amount** | **float** | Quantity at the public list price in USD, before included usage and discounts. |
**invoice_share** | **float** | This entry&#39;s share of what the invoices charged for the item&#39;s usage in the period, in USD before tax: the invoiced amount after included usage, discounts, and prorations, split between projects in proportion to amount. An item invoiced without recorded usage is shared to the organization row. Null while the invoiced amount is unknown. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
