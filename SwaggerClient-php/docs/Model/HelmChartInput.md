# # HelmChartInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_name** | **string** | Optional chart source name to use in generated Wodby manifests. | [optional]
**source** | **string** | Optional Helm repository or OCI source URL. | [optional]
**chart** | **string** | Helm chart reference, such as bitnami/redis, oci://registry.example.com/chart, a chart archive URL, or a server-local chart path. |
**version** | **string** | Optional Helm chart version. | [optional]
**release** | **string** | Optional Helm release name used for rendering analysis. | [optional]
**namespace** | **string** | Optional Kubernetes namespace used for rendering analysis. | [optional]
**values** | **array<string,mixed>** |  | [optional]
**values_yaml** | **string** | Optional Helm values YAML. Use either values or valuesYaml, not both. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
