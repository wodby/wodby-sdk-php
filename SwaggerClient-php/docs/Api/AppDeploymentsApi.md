# Wodby\Api\AppDeploymentsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAppDeployment()**](AppDeploymentsApi.md#createAppDeployment) | **POST** /app-deployments | Create deployment |
| [**createAppDeploymentFromCi()**](AppDeploymentsApi.md#createAppDeploymentFromCi) | **POST** /app-deployments/from-ci | Create deployment from CI |
| [**getAppDeployment()**](AppDeploymentsApi.md#getAppDeployment) | **GET** /app-deployments/{id} | Get deployment |
| [**listAppDeployments()**](AppDeploymentsApi.md#listAppDeployments) | **GET** /app-deployments | List app deployments |
| [**redeployAppDeployment()**](AppDeploymentsApi.md#redeployAppDeployment) | **POST** /app-deployments/{id}/redeploy | Redeploy deployment |


## `createAppDeployment()`

```php
createAppDeployment($create_deployment_request): \Wodby\Api\Model\AppDeployment
```

Create deployment

Creates a deployment and returns the created resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppDeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_deployment_request = new \Wodby\Api\Model\CreateDeploymentRequest(); // \Wodby\Api\Model\CreateDeploymentRequest

try {
    $result = $apiInstance->createAppDeployment($create_deployment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppDeploymentsApi->createAppDeployment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_deployment_request** | [**\Wodby\Api\Model\CreateDeploymentRequest**](../Model/CreateDeploymentRequest.md)|  | |

### Return type

[**\Wodby\Api\Model\AppDeployment**](../Model/AppDeployment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAppDeploymentFromCi()`

```php
createAppDeploymentFromCi($deployment_from_ci_input): \Wodby\Api\Model\AppDeployment
```

Create deployment from CI

Creates a deployment from a CI workflow request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure API key authorization: ciAccessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppDeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_from_ci_input = new \Wodby\Api\Model\DeploymentFromCIInput(); // \Wodby\Api\Model\DeploymentFromCIInput

try {
    $result = $apiInstance->createAppDeploymentFromCi($deployment_from_ci_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppDeploymentsApi->createAppDeploymentFromCi: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deployment_from_ci_input** | [**\Wodby\Api\Model\DeploymentFromCIInput**](../Model/DeploymentFromCIInput.md)|  | |

### Return type

[**\Wodby\Api\Model\AppDeployment**](../Model/AppDeployment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [ciAccessTokenHeader](../../README.md#ciAccessTokenHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppDeployment()`

```php
getAppDeployment($id): \Wodby\Api\Model\AppDeployment
```

Get deployment

Returns the deployment identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppDeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAppDeployment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppDeploymentsApi->getAppDeployment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppDeployment**](../Model/AppDeployment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAppDeployments()`

```php
listAppDeployments($app_instance_id, $page, $page_size): \Wodby\Api\Model\AppDeploymentsResponse
```

List app deployments

Returns app deployments matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppDeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_instance_id = 56; // int
$page = 56; // int | Page number, defaults to 1
$page_size = 56; // int | Page size, defaults to 30

try {
    $result = $apiInstance->listAppDeployments($app_instance_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppDeploymentsApi->listAppDeployments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_instance_id** | **int**|  | |
| **page** | **int**| Page number, defaults to 1 | [optional] |
| **page_size** | **int**| Page size, defaults to 30 | [optional] |

### Return type

[**\Wodby\Api\Model\AppDeploymentsResponse**](../Model/AppDeploymentsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeployAppDeployment()`

```php
redeployAppDeployment($id): \Wodby\Api\Model\AppDeployment
```

Redeploy deployment

Creates a redeployment task for an existing deployment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppDeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->redeployAppDeployment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppDeploymentsApi->redeployAppDeployment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\AppDeployment**](../Model/AppDeployment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
