# # ClusterMetrics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**cluster_id** | **int** |  |
**nodes_total** | **int** |  |
**nodes_ready** | **int** |  |
**cpu** | [**\Wodby\Api\Model\KubeCPUMetrics**](KubeCPUMetrics.md) |  |
**memory** | [**\Wodby\Api\Model\KubeMemoryMetrics**](KubeMemoryMetrics.md) |  |
**kube_cpu_cap** | [**\Wodby\Api\Model\CapacityMetricsFloat**](CapacityMetricsFloat.md) |  |
**kube_memory_cap** | [**\Wodby\Api\Model\CapacityMetrics**](CapacityMetrics.md) |  |
**kube_pods_cap** | [**\Wodby\Api\Model\CapacityMetrics**](CapacityMetrics.md) |  |
**host_disk** | [**\Wodby\Api\Model\NodeDiskMetrics**](NodeDiskMetrics.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
