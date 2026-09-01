# Wodby\Api\ClustersApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCluster()**](ClustersApi.md#createCluster) | **POST** /clusters | Create cluster |
| [**deleteCluster()**](ClustersApi.md#deleteCluster) | **DELETE** /clusters/{id} | Delete cluster |
| [**getCluster()**](ClustersApi.md#getCluster) | **GET** /clusters/{id} | Get cluster |
| [**getClusterByName()**](ClustersApi.md#getClusterByName) | **GET** /clusters/by-name/{name} | Get cluster by name |
| [**getClusterInfraAppUpgradeChangelog()**](ClustersApi.md#getClusterInfraAppUpgradeChangelog) | **GET** /cluster-infra-app-upgrade-changelogs/{id} | Preview cluster infrastructure app upgrades |
| [**getKubernetesVersionUpgradePlan()**](ClustersApi.md#getKubernetesVersionUpgradePlan) | **GET** /cluster-kubernetes-version-upgrade-plans/{id} | Get Kubernetes version upgrade plan |
| [**listClusters()**](ClustersApi.md#listClusters) | **GET** /clusters | List clusters |
| [**updateCluster()**](ClustersApi.md#updateCluster) | **PUT** /clusters/{id} | Update cluster |
| [**updateClusterEnvironmentPolicy()**](ClustersApi.md#updateClusterEnvironmentPolicy) | **PUT** /clusters/environment-policy/{id} | Update cluster environment policy |
| [**updateClusterSettings()**](ClustersApi.md#updateClusterSettings) | **PUT** /clusters/settings/{id} | Update cluster settings |
| [**upgradeClusterInfra()**](ClustersApi.md#upgradeClusterInfra) | **POST** /clusters/{id}/actions/upgrade-infra | Upgrade cluster infrastructure |
| [**upgradeClusterInfraApps()**](ClustersApi.md#upgradeClusterInfraApps) | **POST** /clusters/{id}/actions/upgrade-infra-apps | Upgrade cluster infrastructure app stacks |


## `createCluster()`

```php
createCluster($new_cluster_input): \Wodby\Api\Model\Cluster
```

Create cluster

Creates a cluster and returns the created resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_cluster_input = new \Wodby\Api\Model\NewClusterInput(); // \Wodby\Api\Model\NewClusterInput

try {
    $result = $apiInstance->createCluster($new_cluster_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->createCluster: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_cluster_input** | [**\Wodby\Api\Model\NewClusterInput**](../Model/NewClusterInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Cluster**](../Model/Cluster.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCluster()`

```php
deleteCluster($id, $force): \Wodby\Api\Model\OperationResult
```

Delete cluster

Deletes the cluster and returns the operation result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$force = false; // bool

try {
    $result = $apiInstance->deleteCluster($id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->deleteCluster: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **force** | **bool**|  | [optional] [default to false] |

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

## `getCluster()`

```php
getCluster($id): \Wodby\Api\Model\Cluster
```

Get cluster

Returns the cluster identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getCluster($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->getCluster: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Cluster**](../Model/Cluster.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClusterByName()`

```php
getClusterByName($name, $org_id): \Wodby\Api\Model\Cluster
```

Get cluster by name

Returns the cluster identified by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->getClusterByName($name, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->getClusterByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\Cluster**](../Model/Cluster.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClusterInfraAppUpgradeChangelog()`

```php
getClusterInfraAppUpgradeChangelog($id, $app_instance_id): \Wodby\Api\Model\ClusterInfraAppUpgradeChangelog[]
```

Preview cluster infrastructure app upgrades

Returns stack and service revision changes for infrastructure apps on the cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_instance_id = 56; // int

try {
    $result = $apiInstance->getClusterInfraAppUpgradeChangelog($id, $app_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->getClusterInfraAppUpgradeChangelog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_instance_id** | **int**|  | [optional] |

### Return type

[**\Wodby\Api\Model\ClusterInfraAppUpgradeChangelog[]**](../Model/ClusterInfraAppUpgradeChangelog.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKubernetesVersionUpgradePlan()`

```php
getKubernetesVersionUpgradePlan($id): \Wodby\Api\Model\KubernetesVersionUpgradePlan
```

Get Kubernetes version upgrade plan

Returns supported Kubernetes upgrade targets, blockers, and warnings for a cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getKubernetesVersionUpgradePlan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->getKubernetesVersionUpgradePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\KubernetesVersionUpgradePlan**](../Model/KubernetesVersionUpgradePlan.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listClusters()`

```php
listClusters($org_id, $project_ids, $integration_id, $environment_id): \Wodby\Api\Model\Cluster[]
```

List clusters

Returns clusters matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.
$project_ids = 'project_ids_example'; // string | Comma-separated project ids
$integration_id = 56; // int
$environment_id = 56; // int

try {
    $result = $apiInstance->listClusters($org_id, $project_ids, $integration_id, $environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->listClusters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |
| **project_ids** | **string**| Comma-separated project ids | [optional] |
| **integration_id** | **int**|  | [optional] |
| **environment_id** | **int**|  | [optional] |

### Return type

[**\Wodby\Api\Model\Cluster[]**](../Model/Cluster.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCluster()`

```php
updateCluster($id, $update_title_request): \Wodby\Api\Model\Cluster
```

Update cluster

Updates the cluster and returns the updated resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_title_request = new \Wodby\Api\Model\UpdateTitleRequest(); // \Wodby\Api\Model\UpdateTitleRequest

try {
    $result = $apiInstance->updateCluster($id, $update_title_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->updateCluster: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_title_request** | [**\Wodby\Api\Model\UpdateTitleRequest**](../Model/UpdateTitleRequest.md)|  | |

### Return type

[**\Wodby\Api\Model\Cluster**](../Model/Cluster.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClusterEnvironmentPolicy()`

```php
updateClusterEnvironmentPolicy($id, $cluster_environment_policy_input): \Wodby\Api\Model\Cluster
```

Update cluster environment policy

Updates the cluster's environment type and allowed environment-type scope. Scope reductions that conflict with existing non-infrastructure app environments are rejected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$cluster_environment_policy_input = new \Wodby\Api\Model\ClusterEnvironmentPolicyInput(); // \Wodby\Api\Model\ClusterEnvironmentPolicyInput

try {
    $result = $apiInstance->updateClusterEnvironmentPolicy($id, $cluster_environment_policy_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->updateClusterEnvironmentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **cluster_environment_policy_input** | [**\Wodby\Api\Model\ClusterEnvironmentPolicyInput**](../Model/ClusterEnvironmentPolicyInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Cluster**](../Model/Cluster.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClusterSettings()`

```php
updateClusterSettings($id, $cluster_settings_input): \Wodby\Api\Model\Cluster
```

Update cluster settings

Updates cluster settings and returns the updated cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$cluster_settings_input = new \Wodby\Api\Model\ClusterSettingsInput(); // \Wodby\Api\Model\ClusterSettingsInput

try {
    $result = $apiInstance->updateClusterSettings($id, $cluster_settings_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->updateClusterSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **cluster_settings_input** | [**\Wodby\Api\Model\ClusterSettingsInput**](../Model/ClusterSettingsInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Cluster**](../Model/Cluster.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upgradeClusterInfra()`

```php
upgradeClusterInfra($id): \Wodby\Api\Model\OperationResult
```

Upgrade cluster infrastructure

Starts a cluster infrastructure upgrade task and returns the task identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->upgradeClusterInfra($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->upgradeClusterInfra: ', $e->getMessage(), PHP_EOL;
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

## `upgradeClusterInfraApps()`

```php
upgradeClusterInfraApps($id): \Wodby\Api\Model\OperationResult
```

Upgrade cluster infrastructure app stacks

Starts a cluster infrastructure app stack upgrade task and returns the task identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->upgradeClusterInfraApps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->upgradeClusterInfraApps: ', $e->getMessage(), PHP_EOL;
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
