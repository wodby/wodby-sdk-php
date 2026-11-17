# # ClusterVulnerabilitiesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\Wodby\Api\Model\ClusterVulnerability[]**](ClusterVulnerability.md) |  |
**total_count** | **int** |  |
**next_page** | **int** |  | [optional]
**counts** | [**\Wodby\Api\Model\VulnerabilityCounts**](VulnerabilityCounts.md) |  |
**sources** | [**\Wodby\Api\Model\ClusterVulnerabilitySource[]**](ClusterVulnerabilitySource.md) |  |
**scanning** | **bool** | Whether a vulnerability check of the cluster is waiting or running. Until it ends, the list shows the results of the checks that finished before it. |
**restart_required** | **int** | The cluster&#39;s critical and high vulnerabilities, not ignored, that a restart of its K3s servers fixes: the fix is installed and runs after the restart. Covers the whole cluster, whatever the filter. |
**waiting_for_upstream** | **int** | The cluster&#39;s critical and high vulnerabilities, not ignored, that wait for a fix from an infrastructure image&#39;s maintainers. They aren&#39;t in counts. Covers the whole cluster, whatever the filter. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
