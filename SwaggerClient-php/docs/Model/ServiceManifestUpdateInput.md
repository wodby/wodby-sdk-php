# # ServiceManifestUpdateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | Optional service revision version; defaults to the current service version. | [optional]
**manifest_yaml** | **string** | Complete Wodby service.yml manifest content. |
**files** | **array<string,string>** | Optional referenced file contents keyed by manifest-relative path, for example Dockerfile or configs/app.conf. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
