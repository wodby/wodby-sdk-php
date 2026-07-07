# # ManifestFromYAMLInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **int** | Optional for API-key requests; defaults to the API key&#39;s organization. | [optional]
**project_id** | **int** |  | [optional]
**version** | **string** | Optional revision version label for the generated non-Git resource. | [optional]
**manifest_yaml** | **string** | Complete Wodby service.yml or stack.yml manifest content. |
**files** | **array<string,string>** | Optional referenced file contents keyed by manifest-relative path, for example Dockerfile or configs/app.conf. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
