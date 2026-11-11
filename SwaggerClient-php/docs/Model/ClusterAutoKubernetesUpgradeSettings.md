# # ClusterAutoKubernetesUpgradeSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** |  |
**allow_patch** | **bool** |  |
**allow_minor** | **bool** |  |
**minor_only_after_end_of_life** | **bool** | Holds an allowed minor upgrade until the current minor reaches upstream end of life. |
**time_window** | [**\Wodby\Api\Model\AutomationTimeWindow**](AutomationTimeWindow.md) | When an upgrade may start. Absent means any time. | [optional]
**include_component_updates** | **bool** | Also applies the cluster&#39;s component updates when there is no version upgrade to start, under the same policy and window. On by default. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
