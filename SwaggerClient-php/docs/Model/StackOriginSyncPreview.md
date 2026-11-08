# # StackOriginSyncPreview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**previous_version** | **string** |  |
**version** | **string** |  |
**service_updates** | [**\Wodby\Api\Model\StackOriginSyncServiceUpdate[]**](StackOriginSyncServiceUpdate.md) | Stack services the sync has to update to the service version the origin uses. The sync needs updateStackServices to update them. |
**error** | **string** | Why the sync would fail. Null when it would go through once the listed stack services may be updated. |
**changes** | [**\Wodby\Api\Model\LogLine[]**](LogLine.md) | What the sync would change, as its task log will list it. Empty when it would fail. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
