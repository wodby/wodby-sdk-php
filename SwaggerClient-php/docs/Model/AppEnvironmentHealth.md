# # AppEnvironmentHealth

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cron** | [**\Wodby\Api\Model\AppEnvironmentCronHealth**](AppEnvironmentCronHealth.md) |  |
**backups** | [**\Wodby\Api\Model\AppEnvironmentBackupHealth**](AppEnvironmentBackupHealth.md) |  |
**vulnerabilities** | [**\Wodby\Api\Model\AppEnvironmentVulnerabilityHealth**](AppEnvironmentVulnerabilityHealth.md) | Critical and high vulnerabilities in the build images the environment currently runs, from their last successful scans. Null when vulnerability scanning is unavailable for the organization. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
