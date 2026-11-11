# # StackSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**git_auto_update** | [**\Wodby\Api\Model\GitAutoUpdateSettings**](GitAutoUpdateSettings.md) |  | [optional]
**auto_service_revision_update** | [**\Wodby\Api\Model\StackAutoServiceRevisionUpdateSettings**](StackAutoServiceRevisionUpdateSettings.md) |  | [optional]
**auto_origin_stack_update** | [**\Wodby\Api\Model\StackAutoOriginUpdateSettings**](StackAutoOriginUpdateSettings.md) |  | [optional]
**git_service_updates** | **string** | What an automatic update from Git, started by a push, does with existing stack services whose stack.yml reference has no version: latest moves them to the service&#39;s latest version, auto_update_settings (the default) moves them only as far as the stack&#39;s service auto update settings allow, and keep keeps their version. Manual updates move them to the latest version unless the update&#39;s serviceUpdates says otherwise. Versioned references, pinned stack services and new ones resolve the same way in every mode, and a stack service whose stack.yml configures something only a newer version has always moves to it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
