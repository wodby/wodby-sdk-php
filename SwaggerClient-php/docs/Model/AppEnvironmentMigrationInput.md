# # AppEnvironmentMigrationInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**target_cluster_id** | **int** | Cluster of the same organization that the environment moves to. |
**volumes** | [**\Wodby\Api\Model\AppEnvironmentMigrationVolumeInput[]**](AppEnvironmentMigrationVolumeInput.md) | Target cluster storage classes for the environment&#39;s volumes. A volume left out uses its current storage class, which must exist on the target cluster. | [optional]
**existing_backup_ids** | **int[]** | Completed backups of this environment to restore instead of creating final backups. Data written after a backup was taken does not reach the target. Components without a backup listed here get a final backup. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
