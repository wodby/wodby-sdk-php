# # AppAuth

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**app_instance_id** | **int** |  |
**scope** | [**\Wodby\Api\Model\AppAuthScope**](AppAuthScope.md) |  |
**app_service_ids** | **int[]** | App services protected by this entry. Empty unless scope is SERVICE. |
**app_service_id** | **int** | Single protected app service. Null when the entry protects several services or the whole app environment. | [optional]
**app_route_id** | **int** |  | [optional]
**login** | **string** |  |
**realm** | **string** |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
