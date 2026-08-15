# # TasksResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\Wodby\Api\Model\Task[]**](Task.md) |  |
**tree_items** | [**\Wodby\Api\Model\TaskTreeItem[]**](TaskTreeItem.md) | Bounded current-page roots and authorized descendants for tree view, linked by parentId. | [optional]
**tree_truncated** | **bool** | True when treeItems omitted visible descendants after reaching the 250-item response limit. Always false for flat view. |
**total_count** | **int** |  |
**next_page** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
