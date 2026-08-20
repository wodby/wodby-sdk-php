# # Org

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**title** | **string** |  |
**domain** | **string** |  |
**default_time_zone** | **string** |  |
**ci_integration_id** | **int** | Effective default CI integration ID. Zero selects the built-in Wodby CI service. |
**registry_integration_id** | **int** | Effective default registry integration ID. Zero selects the built-in Wodby registry service. |
**capabilities** | [**\Wodby\Api\Model\OrgCapabilities**](OrgCapabilities.md) |  | [optional]
**subscription** | [**\Wodby\Api\Model\OrgSubscription**](OrgSubscription.md) | Billing summary. Omitted when the caller does not have billing-view access. | [optional]
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
