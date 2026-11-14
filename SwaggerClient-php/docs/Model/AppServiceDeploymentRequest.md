# # AppServiceDeploymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_service_id** | **int** |  |
**app_service_build_id** | **int** | Build image to deploy for this service: the &#x60;id&#x60; of an item in an app build&#39;s &#x60;appServiceBuilds&#x60; that belongs to this service, not the app build &#x60;id&#x60;. A derivative service may name its parent service&#39;s build. Use &#x60;0&#x60; to start a new build. Required for services with a build source. To deploy every image of an app build, use &#x60;POST /app-builds/{id}/deploy&#x60; instead. | [optional]
**skip_post_deployment** | **bool** |  | [optional]
**force** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
