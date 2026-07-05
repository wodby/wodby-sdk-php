# Wodby\Api\StackServicesApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStackService()**](StackServicesApi.md#createStackService) | **POST** /stack-services | Create stack service |
| [**createStackServiceAnnotation()**](StackServicesApi.md#createStackServiceAnnotation) | **POST** /stack-services/{id}/annotations | Create stack service annotation |
| [**createStackServiceCronSchedule()**](StackServicesApi.md#createStackServiceCronSchedule) | **POST** /stack-services/{id}/cron-schedules | Create stack service cron schedule |
| [**createStackServiceEnvVar()**](StackServicesApi.md#createStackServiceEnvVar) | **POST** /stack-services/{id}/env-vars | Create stack service env var |
| [**createStackServiceHelmValue()**](StackServicesApi.md#createStackServiceHelmValue) | **POST** /stack-services/{id}/helm-values | Create stack service Helm value |
| [**createStackServiceIntegration()**](StackServicesApi.md#createStackServiceIntegration) | **POST** /stack-services/{id}/integrations | Create stack service integration |
| [**createStackServiceToken()**](StackServicesApi.md#createStackServiceToken) | **POST** /stack-services/{id}/tokens | Create stack service token |
| [**deleteStackService()**](StackServicesApi.md#deleteStackService) | **DELETE** /stack-services/{id} | Delete stack service |
| [**deleteStackServiceAnnotation()**](StackServicesApi.md#deleteStackServiceAnnotation) | **DELETE** /stack-service-annotations/{id} | Delete stack service annotation |
| [**deleteStackServiceCronSchedule()**](StackServicesApi.md#deleteStackServiceCronSchedule) | **DELETE** /stack-service-cron-schedules/{id} | Delete stack service cron schedule |
| [**deleteStackServiceEnvVar()**](StackServicesApi.md#deleteStackServiceEnvVar) | **DELETE** /stack-service-env-vars/{id} | Delete stack service env var |
| [**deleteStackServiceHelmValue()**](StackServicesApi.md#deleteStackServiceHelmValue) | **DELETE** /stack-service-helm-values/{id} | Delete stack service Helm value |
| [**deleteStackServiceIntegration()**](StackServicesApi.md#deleteStackServiceIntegration) | **DELETE** /stack-service-integrations/{id} | Delete stack service integration |
| [**deleteStackServiceToken()**](StackServicesApi.md#deleteStackServiceToken) | **DELETE** /stack-service-tokens/{id} | Delete stack service token |
| [**listStackServiceAnnotations()**](StackServicesApi.md#listStackServiceAnnotations) | **GET** /stack-services/{id}/annotations | List stack service annotations |
| [**listStackServiceConfigs()**](StackServicesApi.md#listStackServiceConfigs) | **GET** /stack-services/{id}/configs | List stack service configs |
| [**listStackServiceCronSchedules()**](StackServicesApi.md#listStackServiceCronSchedules) | **GET** /stack-services/{id}/cron-schedules | List stack service cron schedules |
| [**listStackServiceEnvVars()**](StackServicesApi.md#listStackServiceEnvVars) | **GET** /stack-services/{id}/env-vars | List stack service env vars |
| [**listStackServiceHelmValues()**](StackServicesApi.md#listStackServiceHelmValues) | **GET** /stack-services/{id}/helm-values | List stack service Helm values |
| [**listStackServiceIntegrations()**](StackServicesApi.md#listStackServiceIntegrations) | **GET** /stack-services/{id}/integrations | List stack service integrations |
| [**listStackServiceLinks()**](StackServicesApi.md#listStackServiceLinks) | **GET** /stack-services/{id}/links | List stack service links |
| [**listStackServiceTokens()**](StackServicesApi.md#listStackServiceTokens) | **GET** /stack-services/{id}/tokens | List stack service tokens |
| [**listStackServiceVolumes()**](StackServicesApi.md#listStackServiceVolumes) | **GET** /stack-services/{id}/volumes | List stack service volumes |
| [**listStackServices()**](StackServicesApi.md#listStackServices) | **GET** /stack-services | List stack services |
| [**setStackServiceConfig()**](StackServicesApi.md#setStackServiceConfig) | **PUT** /stack-services/{id}/configs/{name} | Set stack service config |
| [**setStackServiceLink()**](StackServicesApi.md#setStackServiceLink) | **PUT** /stack-services/{id}/links/{name} | Set stack service link |
| [**setStackServiceOptions()**](StackServicesApi.md#setStackServiceOptions) | **PUT** /stack-services/{id}/options | Update stack service options |
| [**setStackServiceResources()**](StackServicesApi.md#setStackServiceResources) | **PUT** /stack-services/{id}/resources | Set stack service resources |
| [**setStackServiceSetting()**](StackServicesApi.md#setStackServiceSetting) | **PUT** /stack-services/{id}/settings/{name} | Set stack service setting |
| [**setStackServiceVolume()**](StackServicesApi.md#setStackServiceVolume) | **PUT** /stack-services/{id}/volumes/{name} | Set stack service volume |
| [**updateStackService()**](StackServicesApi.md#updateStackService) | **PUT** /stack-services/{id} | Update stack service |
| [**updateStackServiceCronSchedule()**](StackServicesApi.md#updateStackServiceCronSchedule) | **PUT** /stack-service-cron-schedules/{id} | Update stack service cron schedule |
| [**updateStackServiceEnvVar()**](StackServicesApi.md#updateStackServiceEnvVar) | **PUT** /stack-service-env-vars/{id} | Update stack service env var |
| [**updateStackServiceHelmValue()**](StackServicesApi.md#updateStackServiceHelmValue) | **PUT** /stack-service-helm-values/{id} | Update stack service Helm value |
| [**updateStackServiceToken()**](StackServicesApi.md#updateStackServiceToken) | **PUT** /stack-service-tokens/{id} | Update stack service token |


## `createStackService()`

```php
createStackService($new_stack_service_input): \Wodby\Api\Model\StackService
```

Create stack service

Creates a stack service and returns the created resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_stack_service_input = new \Wodby\Api\Model\NewStackServiceInput(); // \Wodby\Api\Model\NewStackServiceInput

try {
    $result = $apiInstance->createStackService($new_stack_service_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->createStackService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_stack_service_input** | [**\Wodby\Api\Model\NewStackServiceInput**](../Model/NewStackServiceInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackService**](../Model/StackService.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStackServiceAnnotation()`

```php
createStackServiceAnnotation($id, $new_stack_service_annotation_input): \Wodby\Api\Model\StackServiceAnnotation
```

Create stack service annotation

Creates an annotation for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$new_stack_service_annotation_input = new \Wodby\Api\Model\NewStackServiceAnnotationInput(); // \Wodby\Api\Model\NewStackServiceAnnotationInput

try {
    $result = $apiInstance->createStackServiceAnnotation($id, $new_stack_service_annotation_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->createStackServiceAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_stack_service_annotation_input** | [**\Wodby\Api\Model\NewStackServiceAnnotationInput**](../Model/NewStackServiceAnnotationInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackServiceAnnotation**](../Model/StackServiceAnnotation.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStackServiceCronSchedule()`

```php
createStackServiceCronSchedule($id, $new_stack_service_cron_schedule_input): \Wodby\Api\Model\StackServiceCronSchedule
```

Create stack service cron schedule

Creates a cron schedule for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$new_stack_service_cron_schedule_input = new \Wodby\Api\Model\NewStackServiceCronScheduleInput(); // \Wodby\Api\Model\NewStackServiceCronScheduleInput

try {
    $result = $apiInstance->createStackServiceCronSchedule($id, $new_stack_service_cron_schedule_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->createStackServiceCronSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_stack_service_cron_schedule_input** | [**\Wodby\Api\Model\NewStackServiceCronScheduleInput**](../Model/NewStackServiceCronScheduleInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackServiceCronSchedule**](../Model/StackServiceCronSchedule.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStackServiceEnvVar()`

```php
createStackServiceEnvVar($id, $new_stack_service_env_var_input): \Wodby\Api\Model\StackServiceEnvVar
```

Create stack service env var

Creates an environment variable for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$new_stack_service_env_var_input = new \Wodby\Api\Model\NewStackServiceEnvVarInput(); // \Wodby\Api\Model\NewStackServiceEnvVarInput

try {
    $result = $apiInstance->createStackServiceEnvVar($id, $new_stack_service_env_var_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->createStackServiceEnvVar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_stack_service_env_var_input** | [**\Wodby\Api\Model\NewStackServiceEnvVarInput**](../Model/NewStackServiceEnvVarInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackServiceEnvVar**](../Model/StackServiceEnvVar.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStackServiceHelmValue()`

```php
createStackServiceHelmValue($id, $new_stack_service_scoped_value_input): \Wodby\Api\Model\StackServiceHelmValue
```

Create stack service Helm value

Creates a Helm value override for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$new_stack_service_scoped_value_input = new \Wodby\Api\Model\NewStackServiceScopedValueInput(); // \Wodby\Api\Model\NewStackServiceScopedValueInput

try {
    $result = $apiInstance->createStackServiceHelmValue($id, $new_stack_service_scoped_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->createStackServiceHelmValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_stack_service_scoped_value_input** | [**\Wodby\Api\Model\NewStackServiceScopedValueInput**](../Model/NewStackServiceScopedValueInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackServiceHelmValue**](../Model/StackServiceHelmValue.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStackServiceIntegration()`

```php
createStackServiceIntegration($id, $integration_link_input): \Wodby\Api\Model\StackServiceIntegration
```

Create stack service integration

Links an integration to a stack service integration slot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$integration_link_input = new \Wodby\Api\Model\IntegrationLinkInput(); // \Wodby\Api\Model\IntegrationLinkInput

try {
    $result = $apiInstance->createStackServiceIntegration($id, $integration_link_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->createStackServiceIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **integration_link_input** | [**\Wodby\Api\Model\IntegrationLinkInput**](../Model/IntegrationLinkInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackServiceIntegration**](../Model/StackServiceIntegration.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStackServiceToken()`

```php
createStackServiceToken($id, $new_stack_service_token_input): \Wodby\Api\Model\StackServiceToken
```

Create stack service token

Creates a token for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$new_stack_service_token_input = new \Wodby\Api\Model\NewStackServiceTokenInput(); // \Wodby\Api\Model\NewStackServiceTokenInput

try {
    $result = $apiInstance->createStackServiceToken($id, $new_stack_service_token_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->createStackServiceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **new_stack_service_token_input** | [**\Wodby\Api\Model\NewStackServiceTokenInput**](../Model/NewStackServiceTokenInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackServiceToken**](../Model/StackServiceToken.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStackService()`

```php
deleteStackService($id): \Wodby\Api\Model\OperationResult
```

Delete stack service

Deletes the stack service and returns the operation result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteStackService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->deleteStackService: ', $e->getMessage(), PHP_EOL;
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

## `deleteStackServiceAnnotation()`

```php
deleteStackServiceAnnotation($id): \Wodby\Api\Model\OperationResult
```

Delete stack service annotation

Deletes a stack service annotation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteStackServiceAnnotation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->deleteStackServiceAnnotation: ', $e->getMessage(), PHP_EOL;
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

## `deleteStackServiceCronSchedule()`

```php
deleteStackServiceCronSchedule($id): \Wodby\Api\Model\OperationResult
```

Delete stack service cron schedule

Deletes a stack service cron schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteStackServiceCronSchedule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->deleteStackServiceCronSchedule: ', $e->getMessage(), PHP_EOL;
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

## `deleteStackServiceEnvVar()`

```php
deleteStackServiceEnvVar($id): \Wodby\Api\Model\OperationResult
```

Delete stack service env var

Deletes a stack service environment variable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteStackServiceEnvVar($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->deleteStackServiceEnvVar: ', $e->getMessage(), PHP_EOL;
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

## `deleteStackServiceHelmValue()`

```php
deleteStackServiceHelmValue($id): \Wodby\Api\Model\OperationResult
```

Delete stack service Helm value

Deletes a stack service Helm value override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteStackServiceHelmValue($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->deleteStackServiceHelmValue: ', $e->getMessage(), PHP_EOL;
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

## `deleteStackServiceIntegration()`

```php
deleteStackServiceIntegration($id): \Wodby\Api\Model\OperationResult
```

Delete stack service integration

Removes an integration link from a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteStackServiceIntegration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->deleteStackServiceIntegration: ', $e->getMessage(), PHP_EOL;
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

## `deleteStackServiceToken()`

```php
deleteStackServiceToken($id): \Wodby\Api\Model\OperationResult
```

Delete stack service token

Deletes a stack service token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteStackServiceToken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->deleteStackServiceToken: ', $e->getMessage(), PHP_EOL;
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

## `listStackServiceAnnotations()`

```php
listStackServiceAnnotations($id): \Wodby\Api\Model\StackServiceAnnotation[]
```

List stack service annotations

Returns annotations configured for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listStackServiceAnnotations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->listStackServiceAnnotations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackServiceAnnotation[]**](../Model/StackServiceAnnotation.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackServiceConfigs()`

```php
listStackServiceConfigs($id): \Wodby\Api\Model\StackServiceConfig[]
```

List stack service configs

Returns config overrides for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listStackServiceConfigs($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->listStackServiceConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackServiceConfig[]**](../Model/StackServiceConfig.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackServiceCronSchedules()`

```php
listStackServiceCronSchedules($id): \Wodby\Api\Model\StackServiceCronSchedule[]
```

List stack service cron schedules

Returns cron schedules configured for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listStackServiceCronSchedules($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->listStackServiceCronSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackServiceCronSchedule[]**](../Model/StackServiceCronSchedule.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackServiceEnvVars()`

```php
listStackServiceEnvVars($id): \Wodby\Api\Model\StackServiceEnvVar[]
```

List stack service env vars

Returns environment variables configured for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listStackServiceEnvVars($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->listStackServiceEnvVars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackServiceEnvVar[]**](../Model/StackServiceEnvVar.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackServiceHelmValues()`

```php
listStackServiceHelmValues($id): \Wodby\Api\Model\StackServiceHelmValue[]
```

List stack service Helm values

Returns Helm values configured for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listStackServiceHelmValues($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->listStackServiceHelmValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackServiceHelmValue[]**](../Model/StackServiceHelmValue.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackServiceIntegrations()`

```php
listStackServiceIntegrations($id): \Wodby\Api\Model\StackServiceIntegration[]
```

List stack service integrations

Returns integration links configured for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listStackServiceIntegrations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->listStackServiceIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackServiceIntegration[]**](../Model/StackServiceIntegration.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackServiceLinks()`

```php
listStackServiceLinks($id): \Wodby\Api\Model\StackServiceLink[]
```

List stack service links

Returns service links configured for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listStackServiceLinks($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->listStackServiceLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackServiceLink[]**](../Model/StackServiceLink.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackServiceTokens()`

```php
listStackServiceTokens($id): \Wodby\Api\Model\StackServiceToken[]
```

List stack service tokens

Returns tokens configured for a stack service without revealing secret values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listStackServiceTokens($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->listStackServiceTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackServiceToken[]**](../Model/StackServiceToken.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackServiceVolumes()`

```php
listStackServiceVolumes($id): \Wodby\Api\Model\StackServiceVolume[]
```

List stack service volumes

Returns volumes configured for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listStackServiceVolumes($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->listStackServiceVolumes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackServiceVolume[]**](../Model/StackServiceVolume.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackServices()`

```php
listStackServices($stack_rev_id): \Wodby\Api\Model\StackService[]
```

List stack services

Returns stack services matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stack_rev_id = 56; // int

try {
    $result = $apiInstance->listStackServices($stack_rev_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->listStackServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stack_rev_id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\StackService[]**](../Model/StackService.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setStackServiceConfig()`

```php
setStackServiceConfig($id, $name, $stack_service_config_input): \Wodby\Api\Model\OperationResult
```

Set stack service config

Sets a named config override for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = 'name_example'; // string
$stack_service_config_input = new \Wodby\Api\Model\StackServiceConfigInput(); // \Wodby\Api\Model\StackServiceConfigInput

try {
    $result = $apiInstance->setStackServiceConfig($id, $name, $stack_service_config_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->setStackServiceConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | **string**|  | |
| **stack_service_config_input** | [**\Wodby\Api\Model\StackServiceConfigInput**](../Model/StackServiceConfigInput.md)|  | |

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

## `setStackServiceLink()`

```php
setStackServiceLink($id, $name, $stack_service_link_input): \Wodby\Api\Model\OperationResult
```

Set stack service link

Links or unlinks another stack service for a named link slot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = 'name_example'; // string
$stack_service_link_input = new \Wodby\Api\Model\StackServiceLinkInput(); // \Wodby\Api\Model\StackServiceLinkInput

try {
    $result = $apiInstance->setStackServiceLink($id, $name, $stack_service_link_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->setStackServiceLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | **string**|  | |
| **stack_service_link_input** | [**\Wodby\Api\Model\StackServiceLinkInput**](../Model/StackServiceLinkInput.md)|  | |

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

## `setStackServiceOptions()`

```php
setStackServiceOptions($id, $stack_service_options_input): \Wodby\Api\Model\OperationResult
```

Update stack service options

Replaces stack service option settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$stack_service_options_input = new \Wodby\Api\Model\StackServiceOptionsInput(); // \Wodby\Api\Model\StackServiceOptionsInput

try {
    $result = $apiInstance->setStackServiceOptions($id, $stack_service_options_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->setStackServiceOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **stack_service_options_input** | [**\Wodby\Api\Model\StackServiceOptionsInput**](../Model/StackServiceOptionsInput.md)|  | |

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

## `setStackServiceResources()`

```php
setStackServiceResources($id, $resources_input): \Wodby\Api\Model\OperationResult
```

Set stack service resources

Sets CPU and memory requests or limits for a stack service container.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$resources_input = new \Wodby\Api\Model\ResourcesInput(); // \Wodby\Api\Model\ResourcesInput

try {
    $result = $apiInstance->setStackServiceResources($id, $resources_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->setStackServiceResources: ', $e->getMessage(), PHP_EOL;
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

## `setStackServiceSetting()`

```php
setStackServiceSetting($id, $name, $set_nullable_string_value_input): \Wodby\Api\Model\OperationResult
```

Set stack service setting

Sets or clears a named setting value for a stack service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = 'name_example'; // string
$set_nullable_string_value_input = new \Wodby\Api\Model\SetNullableStringValueInput(); // \Wodby\Api\Model\SetNullableStringValueInput

try {
    $result = $apiInstance->setStackServiceSetting($id, $name, $set_nullable_string_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->setStackServiceSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | **string**|  | |
| **set_nullable_string_value_input** | [**\Wodby\Api\Model\SetNullableStringValueInput**](../Model/SetNullableStringValueInput.md)|  | |

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

## `setStackServiceVolume()`

```php
setStackServiceVolume($id, $name, $stack_service_volume_input): \Wodby\Api\Model\OperationResult
```

Set stack service volume

Sets or clears a stack service volume size.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$name = 'name_example'; // string
$stack_service_volume_input = new \Wodby\Api\Model\StackServiceVolumeInput(); // \Wodby\Api\Model\StackServiceVolumeInput

try {
    $result = $apiInstance->setStackServiceVolume($id, $name, $stack_service_volume_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->setStackServiceVolume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **name** | **string**|  | |
| **stack_service_volume_input** | [**\Wodby\Api\Model\StackServiceVolumeInput**](../Model/StackServiceVolumeInput.md)|  | |

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

## `updateStackService()`

```php
updateStackService($id, $stack_service_input): \Wodby\Api\Model\StackService
```

Update stack service

Updates the stack service and returns the updated resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$stack_service_input = new \Wodby\Api\Model\StackServiceInput(); // \Wodby\Api\Model\StackServiceInput

try {
    $result = $apiInstance->updateStackService($id, $stack_service_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->updateStackService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **stack_service_input** | [**\Wodby\Api\Model\StackServiceInput**](../Model/StackServiceInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackService**](../Model/StackService.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStackServiceCronSchedule()`

```php
updateStackServiceCronSchedule($id, $update_stack_service_cron_schedule_input): \Wodby\Api\Model\StackServiceCronSchedule
```

Update stack service cron schedule

Updates a stack service cron schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_stack_service_cron_schedule_input = new \Wodby\Api\Model\UpdateStackServiceCronScheduleInput(); // \Wodby\Api\Model\UpdateStackServiceCronScheduleInput

try {
    $result = $apiInstance->updateStackServiceCronSchedule($id, $update_stack_service_cron_schedule_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->updateStackServiceCronSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_stack_service_cron_schedule_input** | [**\Wodby\Api\Model\UpdateStackServiceCronScheduleInput**](../Model/UpdateStackServiceCronScheduleInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackServiceCronSchedule**](../Model/StackServiceCronSchedule.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStackServiceEnvVar()`

```php
updateStackServiceEnvVar($id, $update_stack_service_env_var_input): \Wodby\Api\Model\StackServiceEnvVar
```

Update stack service env var

Updates a stack service environment variable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_stack_service_env_var_input = new \Wodby\Api\Model\UpdateStackServiceEnvVarInput(); // \Wodby\Api\Model\UpdateStackServiceEnvVarInput

try {
    $result = $apiInstance->updateStackServiceEnvVar($id, $update_stack_service_env_var_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->updateStackServiceEnvVar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_stack_service_env_var_input** | [**\Wodby\Api\Model\UpdateStackServiceEnvVarInput**](../Model/UpdateStackServiceEnvVarInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackServiceEnvVar**](../Model/StackServiceEnvVar.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStackServiceHelmValue()`

```php
updateStackServiceHelmValue($id, $update_secret_value_input): \Wodby\Api\Model\StackServiceHelmValue
```

Update stack service Helm value

Updates a stack service Helm value override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_secret_value_input = new \Wodby\Api\Model\UpdateSecretValueInput(); // \Wodby\Api\Model\UpdateSecretValueInput

try {
    $result = $apiInstance->updateStackServiceHelmValue($id, $update_secret_value_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->updateStackServiceHelmValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_secret_value_input** | [**\Wodby\Api\Model\UpdateSecretValueInput**](../Model/UpdateSecretValueInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackServiceHelmValue**](../Model/StackServiceHelmValue.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStackServiceToken()`

```php
updateStackServiceToken($id, $update_stack_service_token_input): \Wodby\Api\Model\StackServiceToken
```

Update stack service token

Updates a stack service token value, secret flag, or regex.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\StackServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_stack_service_token_input = new \Wodby\Api\Model\UpdateStackServiceTokenInput(); // \Wodby\Api\Model\UpdateStackServiceTokenInput

try {
    $result = $apiInstance->updateStackServiceToken($id, $update_stack_service_token_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackServicesApi->updateStackServiceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_stack_service_token_input** | [**\Wodby\Api\Model\UpdateStackServiceTokenInput**](../Model/UpdateStackServiceTokenInput.md)|  | |

### Return type

[**\Wodby\Api\Model\StackServiceToken**](../Model/StackServiceToken.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
