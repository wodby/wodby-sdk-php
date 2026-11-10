# # ClusterAutoKubernetesUpgradeSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** |  |
**allow_patch** | **bool** |  |
**allow_minor** | **bool** |  |
**minor_only_after_end_of_life** | **bool** | Holds an allowed minor upgrade until the current minor reaches upstream end of life. |
**time_window** | [**\Wodby\Api\Model\AutomationTimeWindow**](AutomationTimeWindow.md) | When an upgrade may start. Absent means any time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
