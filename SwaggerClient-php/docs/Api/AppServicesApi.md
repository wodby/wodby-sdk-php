# Wodby\Api\AppServicesApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAppServiceVolume()**](AppServicesApi.md#addAppServiceVolume) | **POST** /app-services/{id}/volumes | Add an optional app service volume |
| [**createAppServiceAnnotation()**](AppServicesApi.md#createAppServiceAnnotation) | **POST** /app-services/{id}/annotations | Create app service annotation |
| [**createAppServiceCronSchedule()**](AppServicesApi.md#createAppServiceCronSchedule) | **POST** /app-services/{id}/cron-schedules | Create app service cron schedule |
| [**createAppServiceEnvVar()**](AppServicesApi.md#createAppServiceEnvVar) | **POST** /app-services/{id}/env-vars | Create app service env var |
| [**createAppServiceHelmValue()**](AppServicesApi.md#createAppServiceHelmValue) | **POST** /app-services/{id}/helm-values | Create app service Helm value |
| [**createAppServiceIntegration()**](AppServicesApi.md#createAppServiceIntegration) | **POST** /app-services/{id}/integrations | Create app service integration |
| [**createAppServiceLogStream()**](AppServicesApi.md#createAppServiceLogStream) | **POST** /app-services/{id}/log-streams | Create app service log stream |
| [**createAppServiceToken()**](AppServicesApi.md#createAppServiceToken) | **POST** /app-services/{id}/tokens | Create app service token |
| [**deleteAppServiceAnnotation()**](AppServicesApi.md#deleteAppServiceAnnotation) | **DELETE** /app-service-annotations/{id} | Delete app service annotation |
| [**deleteAppServiceCronSchedule()**](AppServicesApi.md#deleteAppServiceCronSchedule) | **DELETE** /app-service-cron-schedules/{id} | Delete app service cron schedule |
| [**deleteAppServiceEnvVar()**](AppServicesApi.md#deleteAppServiceEnvVar) | **DELETE** /app-service-env-vars/{id} | Delete app service env var |
| [**deleteAppServiceHelmValue()**](AppServicesApi.md#deleteAppServiceHelmValue) | **DELETE** /app-service-helm-values/{id} | Delete app service Helm value |
| [**deleteAppServiceIntegration()**](AppServicesApi.md#deleteAppServiceIntegration) | **DELETE** /app-service-integrations/{id} | Delete app service integration |
| [**deleteAppServiceToken()**](AppServicesApi.md#deleteAppServiceToken) | **DELETE** /app-service-tokens/{id} | Delete app service token |
| [**getAppService()**](AppServicesApi.md#getAppService) | **GET** /app-services/{id} | Get app service |
| [**getAppServiceCronJob()**](AppServicesApi.md#getAppServiceCronJob) | **GET** /app-service-cron-jobs/{id} | Get app service cron job |
| [**keepLogStreamAlive()**](AppServicesApi.md#keepLogStreamAlive) | **POST** /log-streams/{id}/keep-alive | Keep log stream alive |
| [**listAppServiceAnnotations()**](AppServicesApi.md#listAppServiceAnnotations) | **GET** /app-services/{id}/annotations | List app service annotations |
| [**listAppServiceConfigs()**](AppServicesApi.md#listAppServiceConfigs) | **GET** /app-services/{id}/configs | List app service configs |
| [**listAppServiceContainers()**](AppServicesApi.md#listAppServiceContainers) | **GET** /app-services/{id}/containers | List app service containers |
| [**listAppServiceCronJobs()**](AppServicesApi.md#listAppServiceCronJobs) | **GET** /app-service-cron-jobs | List app service cron jobs |
| [**listAppServiceCronSchedules()**](AppServicesApi.md#listAppServiceCronSchedules) | **GET** /app-services/{id}/cron-schedules | List app service cron schedules |
| [**listAppServiceEnvVars()**](AppServicesApi.md#listAppServiceEnvVars) | **GET** /app-services/{id}/env-vars | List app service env vars |
| [**listAppServiceHelmValues()**](AppServicesApi.md#listAppServiceHelmValues) | **GET** /app-services/{id}/helm-values | List app service Helm values |
| [**listAppServiceIntegrations()**](AppServicesApi.md#listAppServiceIntegrations) | **GET** /app-services/{id}/integrations | List app service integrations |
| [**listAppServiceLinks()**](AppServicesApi.md#listAppServiceLinks) | **GET** /app-services/{id}/links | List app service links |
| [**listAppServiceSettings()**](AppServicesApi.md#listAppServiceSettings) | **GET** /app-services/{id}/settings | List app service settings |
| [**listAppServiceTokens()**](AppServicesApi.md#listAppServiceTokens) | **GET** /app-services/{id}/tokens | List app service tokens |
| [**listAppServiceVolumeStorageClasses()**](AppServicesApi.md#listAppServiceVolumeStorageClasses) | **GET** /app-services/{id}/options/volume-storage-classes | List app service volume storage-class state |
| [**listAppServiceVolumes()**](AppServicesApi.md#listAppServiceVolumes) | **GET** /app-services/{id}/volumes | List app service volumes |
| [**listAppServices()**](AppServicesApi.md#listAppServices) | **GET** /app-services | List app services |
| [**runAppServiceAction()**](AppServicesApi.md#runAppServiceAction) | **POST** /app-services/{id}/actions/{name} | Run app service action |
| [**runAppServiceCronSchedule()**](AppServicesApi.md#runAppServiceCronSchedule) | **POST** /app-service-cron-schedules/{id}/run | Run app service cron schedule |
| [**setAppServiceConfig()**](AppServicesApi.md#setAppServiceConfig) | **PUT** /app-services/{id}/configs/{name} | Set app service config |
| [**setAppServiceLink()**](AppServicesApi.md#setAppServiceLink) | **PUT** /app-services/{id}/links/{name} | Set app service link |
| [**setAppServiceResources()**](AppServicesApi.md#setAppServiceResources) | **PUT** /app-services/{id}/resources | Set app service resources |
| [**setAppServiceSetting()**](AppServicesApi.md#setAppServiceSetting) | **PUT** /app-services/{id}/settings/{name} | Set app service setting |
| [**startLogStream()**](AppServicesApi.md#startLogStream) | **POST** /log-streams/{id}/start | Start log stream |
| [**stopLogStream()**](AppServicesApi.md#stopLogStream) | **POST** /log-streams/{id}/stop | Stop log stream |
| [**updateAppService()**](AppServicesApi.md#updateAppService) | **PUT** /app-services/{id} | Update app service |
| [**updateAppServiceCronSchedule()**](AppServicesApi.md#updateAppServiceCronSchedule) | **PUT** /app-service-cron-schedules/{id} | Update app service cron schedule |
| [**updateAppServiceDatabase()**](AppServicesApi.md#updateAppServiceDatabase) | **PUT** /app-services/{id}/database | Update app service database references |
| [**updateAppServiceEnvVar()**](AppServicesApi.md#updateAppServiceEnvVar) | **PUT** /app-service-env-vars/{id} | Update app service env var |
| [**updateAppServiceHelmValue()**](AppServicesApi.md#updateAppServiceHelmValue) | **PUT** /app-service-helm-values/{id} | Update app service Helm value |
| [**updateAppServiceToken()**](AppServicesApi.md#updateAppServiceToken) | **PUT** /app-service-tokens/{id} | Update app service token |


## `addAppServiceVolume()`

```php
addAppServiceVolume($id, $add_app_service_volume_input): \Wodby\Api\Model\OperationResult
```

Add an optional app service volume

Adds a volume that is optional in the service manifest and returns the reconciliation task identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$add_app_service_volume_input = new \Wodby\Api\Model\AddAppServiceVolumeInput(); // \Wodby\Api\Model\AddAppServiceVolumeInput

try {
    $result = $apiInstance->addAppServiceVolume($id, $add_app_service_volume_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->addAppServiceVolume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **add_app_service_volume_input** | [**\Wodby\Api\Model\AddAppServiceVolumeInput**](../Model/AddAppServiceVolumeInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppServiceAnnotation()`

```php
createAppServiceAnnotation($id, $new_annotation_input): \Wodby\Api\Model\AppServiceAnnotation
```

Create app service annotation

Creates an annotation for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$new_annotation_input = new \Wodby\Api\Model\NewAnnotationInput(); // \Wodby\Api\Model\NewAnnotationInput

try {
    $result = $apiInstance->createAppServiceAnnotation($id, $new_annotation_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->createAppServiceAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_annotation_input** | [**\Wodby\Api\Model\NewAnnotationInput**](../Model/NewAnnotationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceAnnotation**](../Model/AppServiceAnnotation.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppServiceCronSchedule()`

```php
createAppServiceCronSchedule($id, $new_app_service_cron_schedule_input): \Wodby\Api\Model\AppServiceCronSchedule
```

Create app service cron schedule

Creates a cron schedule for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$new_app_service_cron_schedule_input = new \Wodby\Api\Model\NewAppServiceCronScheduleInput(); // \Wodby\Api\Model\NewAppServiceCronScheduleInput

try {
    $result = $apiInstance->createAppServiceCronSchedule($id, $new_app_service_cron_schedule_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->createAppServiceCronSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_app_service_cron_schedule_input** | [**\Wodby\Api\Model\NewAppServiceCronScheduleInput**](../Model/NewAppServiceCronScheduleInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceCronSchedule**](../Model/AppServiceCronSchedule.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppServiceEnvVar()`

```php
createAppServiceEnvVar($id, $new_app_service_env_var_input): \Wodby\Api\Model\AppServiceEnvVar
```

Create app service env var

Creates an environment variable for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$new_app_service_env_var_input = new \Wodby\Api\Model\NewAppServiceEnvVarInput(); // \Wodby\Api\Model\NewAppServiceEnvVarInput

try {
    $result = $apiInstance->createAppServiceEnvVar($id, $new_app_service_env_var_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->createAppServiceEnvVar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_app_service_env_var_input** | [**\Wodby\Api\Model\NewAppServiceEnvVarInput**](../Model/NewAppServiceEnvVarInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceEnvVar**](../Model/AppServiceEnvVar.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppServiceHelmValue()`

```php
createAppServiceHelmValue($id, $named_secret_value_input): \Wodby\Api\Model\AppServiceHelmValue
```

Create app service Helm value

Creates a Helm value override for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$named_secret_value_input = new \Wodby\Api\Model\NamedSecretValueInput(); // \Wodby\Api\Model\NamedSecretValueInput

try {
    $result = $apiInstance->createAppServiceHelmValue($id, $named_secret_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->createAppServiceHelmValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **named_secret_value_input** | [**\Wodby\Api\Model\NamedSecretValueInput**](../Model/NamedSecretValueInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceHelmValue**](../Model/AppServiceHelmValue.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppServiceIntegration()`

```php
createAppServiceIntegration($id, $integration_link_input): \Wodby\Api\Model\AppServiceIntegration
```

Create app service integration

Links an integration to an app service integration slot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$integration_link_input = new \Wodby\Api\Model\IntegrationLinkInput(); // \Wodby\Api\Model\IntegrationLinkInput

try {
    $result = $apiInstance->createAppServiceIntegration($id, $integration_link_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->createAppServiceIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **integration_link_input** | [**\Wodby\Api\Model\IntegrationLinkInput**](../Model/IntegrationLinkInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceIntegration**](../Model/AppServiceIntegration.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppServiceLogStream()`

```php
createAppServiceLogStream($id, $new_app_service_log_stream_input): \Wodby\Api\Model\LogStream
```

Create app service log stream

Creates a log stream for an app service container across all replicas or for one selected pod and returns the stream id. Log streams are available while the app instance status is ok or deploying.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$new_app_service_log_stream_input = new \Wodby\Api\Model\NewAppServiceLogStreamInput(); // \Wodby\Api\Model\NewAppServiceLogStreamInput

try {
    $result = $apiInstance->createAppServiceLogStream($id, $new_app_service_log_stream_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->createAppServiceLogStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_app_service_log_stream_input** | [**\Wodby\Api\Model\NewAppServiceLogStreamInput**](../Model/NewAppServiceLogStreamInput.md)|  | [optional] |

### Return type

[**\Wodby\Api\Model\LogStream**](../Model/LogStream.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppServiceToken()`

```php
createAppServiceToken($id, $named_secret_value_input): \Wodby\Api\Model\AppServiceToken
```

Create app service token

Creates a token for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$named_secret_value_input = new \Wodby\Api\Model\NamedSecretValueInput(); // \Wodby\Api\Model\NamedSecretValueInput

try {
    $result = $apiInstance->createAppServiceToken($id, $named_secret_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->createAppServiceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **named_secret_value_input** | [**\Wodby\Api\Model\NamedSecretValueInput**](../Model/NamedSecretValueInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceToken**](../Model/AppServiceToken.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppServiceAnnotation()`

```php
deleteAppServiceAnnotation($id): \Wodby\Api\Model\OperationResult
```

Delete app service annotation

Deletes an app service annotation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteAppServiceAnnotation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->deleteAppServiceAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppServiceCronSchedule()`

```php
deleteAppServiceCronSchedule($id): \Wodby\Api\Model\OperationResult
```

Delete app service cron schedule

Deletes an app service cron schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteAppServiceCronSchedule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->deleteAppServiceCronSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppServiceEnvVar()`

```php
deleteAppServiceEnvVar($id): \Wodby\Api\Model\OperationResult
```

Delete app service env var

Deletes an app service environment variable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteAppServiceEnvVar($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->deleteAppServiceEnvVar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppServiceHelmValue()`

```php
deleteAppServiceHelmValue($id): \Wodby\Api\Model\OperationResult
```

Delete app service Helm value

Deletes an app service Helm value override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteAppServiceHelmValue($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->deleteAppServiceHelmValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppServiceIntegration()`

```php
deleteAppServiceIntegration($id): \Wodby\Api\Model\OperationResult
```

Delete app service integration

Removes an integration link from an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteAppServiceIntegration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->deleteAppServiceIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppServiceToken()`

```php
deleteAppServiceToken($id): \Wodby\Api\Model\OperationResult
```

Delete app service token

Deletes an app service token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteAppServiceToken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->deleteAppServiceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppService()`

```php
getAppService($id): \Wodby\Api\Model\AppService
```

Get app service

Returns the app service identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->getAppService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppService**](../Model/AppService.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppServiceCronJob()`

```php
getAppServiceCronJob($id): \Wodby\Api\Model\AppServiceCronJob
```

Get app service cron job

Returns the app service cron job identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppServiceCronJob($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->getAppServiceCronJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceCronJob**](../Model/AppServiceCronJob.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keepLogStreamAlive()`

```php
keepLogStreamAlive($id): \Wodby\Api\Model\OperationResult
```

Keep log stream alive

Extends an existing log stream lease.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->keepLogStreamAlive($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->keepLogStreamAlive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceAnnotations()`

```php
listAppServiceAnnotations($id): \Wodby\Api\Model\AppServiceAnnotation[]
```

List app service annotations

Returns annotations configured for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceAnnotations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceAnnotations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceAnnotation[]**](../Model/AppServiceAnnotation.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceConfigs()`

```php
listAppServiceConfigs($id): \Wodby\Api\Model\AppServiceConfig[]
```

List app service configs

Returns config overrides for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceConfigs($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceConfig[]**](../Model/AppServiceConfig.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceContainers()`

```php
listAppServiceContainers($id): \Wodby\Api\Model\AppServiceContainer[]
```

List app service containers

Returns container resource settings for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceContainers($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceContainers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceContainer[]**](../Model/AppServiceContainer.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceCronJobs()`

```php
listAppServiceCronJobs($app_instance_id, $app_service_id, $schedule_id, $page, $page_size): \Wodby\Api\Model\AppServiceCronJobsResponse
```

List app service cron jobs

Returns app service cron jobs matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_instance_id = 56; // int
$app_service_id = 56; // int
$schedule_id = 56; // int
$page = 56; // int | Page number, defaults to 1
$page_size = 56; // int | Page size, defaults to 30

try {
    $result = $apiInstance->listAppServiceCronJobs($app_instance_id, $app_service_id, $schedule_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceCronJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_instance_id** | **int**|  | [optional] |
| **app_service_id** | **int**|  | [optional] |
| **schedule_id** | **int**|  | [optional] |
| **page** | **int**| Page number, defaults to 1 | [optional] |
| **page_size** | **int**| Page size, defaults to 30 | [optional] |

### Return type

[**\Wodby\Api\Model\AppServiceCronJobsResponse**](../Model/AppServiceCronJobsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceCronSchedules()`

```php
listAppServiceCronSchedules($id): \Wodby\Api\Model\AppServiceCronSchedule[]
```

List app service cron schedules

Returns cron schedules configured for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceCronSchedules($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceCronSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceCronSchedule[]**](../Model/AppServiceCronSchedule.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceEnvVars()`

```php
listAppServiceEnvVars($id): \Wodby\Api\Model\AppServiceEnvVar[]
```

List app service env vars

Returns environment variables configured for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceEnvVars($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceEnvVars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceEnvVar[]**](../Model/AppServiceEnvVar.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceHelmValues()`

```php
listAppServiceHelmValues($id): \Wodby\Api\Model\AppServiceHelmValue[]
```

List app service Helm values

Returns Helm values configured for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceHelmValues($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceHelmValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceHelmValue[]**](../Model/AppServiceHelmValue.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceIntegrations()`

```php
listAppServiceIntegrations($id): \Wodby\Api\Model\AppServiceIntegration[]
```

List app service integrations

Returns integration links configured for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceIntegrations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceIntegration[]**](../Model/AppServiceIntegration.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceLinks()`

```php
listAppServiceLinks($id): \Wodby\Api\Model\AppServiceLink[]
```

List app service links

Returns service links configured for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceLinks($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceLink[]**](../Model/AppServiceLink.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceSettings()`

```php
listAppServiceSettings($id): \Wodby\Api\Model\AppServiceSetting[]
```

List app service settings

Returns settings configured for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceSetting[]**](../Model/AppServiceSetting.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceTokens()`

```php
listAppServiceTokens($id): \Wodby\Api\Model\AppServiceToken[]
```

List app service tokens

Returns tokens configured for an app service without revealing secret values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceTokens($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceToken[]**](../Model/AppServiceToken.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceVolumeStorageClasses()`

```php
listAppServiceVolumeStorageClasses($id): \Wodby\Api\Model\AppServiceVolumeStorageClassState[]
```

List app service volume storage-class state

Returns configured and effective storage-class choices for each app service volume.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceVolumeStorageClasses($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceVolumeStorageClasses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceVolumeStorageClassState[]**](../Model/AppServiceVolumeStorageClassState.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServiceVolumes()`

```php
listAppServiceVolumes($id): \Wodby\Api\Model\AppServiceVolume[]
```

List app service volumes

Returns configured volume metadata together with effective Kubernetes storage-class state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listAppServiceVolumes($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServiceVolumes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppServiceVolume[]**](../Model/AppServiceVolume.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppServices()`

```php
listAppServices($app_instance_id): \Wodby\Api\Model\AppService[]
```

List app services

Returns app services matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_instance_id = 56; // int

try {
    $result = $apiInstance->listAppServices($app_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->listAppServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_instance_id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppService[]**](../Model/AppService.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runAppServiceAction()`

```php
runAppServiceAction($id, $name): \Wodby\Api\Model\OperationResult
```

Run app service action

Runs the named action for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = 'name_example'; // string

try {
    $result = $apiInstance->runAppServiceAction($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->runAppServiceAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | **string**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runAppServiceCronSchedule()`

```php
runAppServiceCronSchedule($id): \Wodby\Api\Model\Task
```

Run app service cron schedule

Runs an app service cron schedule immediately and returns the created task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->runAppServiceCronSchedule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->runAppServiceCronSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Task**](../Model/Task.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAppServiceConfig()`

```php
setAppServiceConfig($id, $name, $config_override_input): \Wodby\Api\Model\OperationResult
```

Set app service config

Sets or disables a named config override for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = 'name_example'; // string
$config_override_input = new \Wodby\Api\Model\ConfigOverrideInput(); // \Wodby\Api\Model\ConfigOverrideInput

try {
    $result = $apiInstance->setAppServiceConfig($id, $name, $config_override_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->setAppServiceConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | **string**|  | |
| **config_override_input** | [**\Wodby\Api\Model\ConfigOverrideInput**](../Model/ConfigOverrideInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAppServiceLink()`

```php
setAppServiceLink($id, $name, $app_service_link_input): \Wodby\Api\Model\OperationResult
```

Set app service link

Links or unlinks another app service for a named link slot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = 'name_example'; // string
$app_service_link_input = new \Wodby\Api\Model\AppServiceLinkInput(); // \Wodby\Api\Model\AppServiceLinkInput

try {
    $result = $apiInstance->setAppServiceLink($id, $name, $app_service_link_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->setAppServiceLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | **string**|  | |
| **app_service_link_input** | [**\Wodby\Api\Model\AppServiceLinkInput**](../Model/AppServiceLinkInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAppServiceResources()`

```php
setAppServiceResources($id, $resources_input): \Wodby\Api\Model\OperationResult
```

Set app service resources

Sets CPU and memory requests or limits for an app service container.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$resources_input = new \Wodby\Api\Model\ResourcesInput(); // \Wodby\Api\Model\ResourcesInput

try {
    $result = $apiInstance->setAppServiceResources($id, $resources_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->setAppServiceResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **resources_input** | [**\Wodby\Api\Model\ResourcesInput**](../Model/ResourcesInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAppServiceSetting()`

```php
setAppServiceSetting($id, $name, $set_string_value_input): \Wodby\Api\Model\AppServiceSetting
```

Set app service setting

Sets a named setting value for an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = 'name_example'; // string
$set_string_value_input = new \Wodby\Api\Model\SetStringValueInput(); // \Wodby\Api\Model\SetStringValueInput

try {
    $result = $apiInstance->setAppServiceSetting($id, $name, $set_string_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->setAppServiceSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | **string**|  | |
| **set_string_value_input** | [**\Wodby\Api\Model\SetStringValueInput**](../Model/SetStringValueInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceSetting**](../Model/AppServiceSetting.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startLogStream()`

```php
startLogStream($id): \Wodby\Api\Model\OperationResult
```

Start log stream

Starts an existing log stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->startLogStream($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->startLogStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopLogStream()`

```php
stopLogStream($id): \Wodby\Api\Model\OperationResult
```

Stop log stream

Stops an existing log stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->stopLogStream($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->stopLogStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppService()`

```php
updateAppService($id, $app_service_input): \Wodby\Api\Model\AppService
```

Update app service

Updates the app service and returns the updated resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_service_input = new \Wodby\Api\Model\AppServiceInput(); // \Wodby\Api\Model\AppServiceInput

try {
    $result = $apiInstance->updateAppService($id, $app_service_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->updateAppService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_service_input** | [**\Wodby\Api\Model\AppServiceInput**](../Model/AppServiceInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppService**](../Model/AppService.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppServiceCronSchedule()`

```php
updateAppServiceCronSchedule($id, $update_app_service_cron_schedule_input): \Wodby\Api\Model\AppServiceCronSchedule
```

Update app service cron schedule

Updates an app service cron schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_app_service_cron_schedule_input = new \Wodby\Api\Model\UpdateAppServiceCronScheduleInput(); // \Wodby\Api\Model\UpdateAppServiceCronScheduleInput

try {
    $result = $apiInstance->updateAppServiceCronSchedule($id, $update_app_service_cron_schedule_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->updateAppServiceCronSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_app_service_cron_schedule_input** | [**\Wodby\Api\Model\UpdateAppServiceCronScheduleInput**](../Model/UpdateAppServiceCronScheduleInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceCronSchedule**](../Model/AppServiceCronSchedule.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppServiceDatabase()`

```php
updateAppServiceDatabase($id, $update_app_service_database_input): \Wodby\Api\Model\AppService
```

Update app service database references

Updates the database DB and user references used by an app service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_app_service_database_input = new \Wodby\Api\Model\UpdateAppServiceDatabaseInput(); // \Wodby\Api\Model\UpdateAppServiceDatabaseInput

try {
    $result = $apiInstance->updateAppServiceDatabase($id, $update_app_service_database_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->updateAppServiceDatabase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_app_service_database_input** | [**\Wodby\Api\Model\UpdateAppServiceDatabaseInput**](../Model/UpdateAppServiceDatabaseInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppService**](../Model/AppService.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppServiceEnvVar()`

```php
updateAppServiceEnvVar($id, $update_app_service_env_var_input): \Wodby\Api\Model\AppServiceEnvVar
```

Update app service env var

Updates an app service environment variable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_app_service_env_var_input = new \Wodby\Api\Model\UpdateAppServiceEnvVarInput(); // \Wodby\Api\Model\UpdateAppServiceEnvVarInput

try {
    $result = $apiInstance->updateAppServiceEnvVar($id, $update_app_service_env_var_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->updateAppServiceEnvVar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_app_service_env_var_input** | [**\Wodby\Api\Model\UpdateAppServiceEnvVarInput**](../Model/UpdateAppServiceEnvVarInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceEnvVar**](../Model/AppServiceEnvVar.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppServiceHelmValue()`

```php
updateAppServiceHelmValue($id, $update_secret_value_input): \Wodby\Api\Model\AppServiceHelmValue
```

Update app service Helm value

Updates an app service Helm value override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_secret_value_input = new \Wodby\Api\Model\UpdateSecretValueInput(); // \Wodby\Api\Model\UpdateSecretValueInput

try {
    $result = $apiInstance->updateAppServiceHelmValue($id, $update_secret_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->updateAppServiceHelmValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_secret_value_input** | [**\Wodby\Api\Model\UpdateSecretValueInput**](../Model/UpdateSecretValueInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceHelmValue**](../Model/AppServiceHelmValue.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAppServiceToken()`

```php
updateAppServiceToken($id, $update_secret_value_input): \Wodby\Api\Model\AppServiceToken
```

Update app service token

Updates an app service token value or secret flag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_secret_value_input = new \Wodby\Api\Model\UpdateSecretValueInput(); // \Wodby\Api\Model\UpdateSecretValueInput

try {
    $result = $apiInstance->updateAppServiceToken($id, $update_secret_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServicesApi->updateAppServiceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_secret_value_input** | [**\Wodby\Api\Model\UpdateSecretValueInput**](../Model/UpdateSecretValueInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceToken**](../Model/AppServiceToken.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
