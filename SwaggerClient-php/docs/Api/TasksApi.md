# Wodby\Api\TasksApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelTask()**](TasksApi.md#cancelTask) | **POST** /tasks/{id}/cancel | Cancel task |
| [**getTask()**](TasksApi.md#getTask) | **GET** /tasks/{id} | Get task |
| [**listTasks()**](TasksApi.md#listTasks) | **GET** /tasks | List tasks |
| [**repeatTask()**](TasksApi.md#repeatTask) | **POST** /tasks/{id}/repeat | Repeat task |


## `cancelTask()`

```php
cancelTask($id): \Wodby\Api\Model\OperationResult
```

Cancel task

Requests cancellation for the task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->cancelTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->cancelTask: ', $e->getMessage(), PHP_EOL;
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

## `getTask()`

```php
getTask($id): \Wodby\Api\Model\Task
```

Get task

Returns the task identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTask: ', $e->getMessage(), PHP_EOL;
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

## `listTasks()`

```php
listTasks($scope, $org_id, $project_ids, $view, $without_origin, $statuses, $names, $search, $app_id, $app_instance_id, $stack_id, $database_id, $cluster_id, $service_id, $integration_id, $provider_id, $page, $page_size): \Wodby\Api\Model\TasksResponse
```

List tasks

Returns tasks matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scope = 'scope_example'; // string
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.
$project_ids = 'project_ids_example'; // string | Comma-separated project ids
$view = 'view_example'; // string | Return matching tasks as a flat page or as filter-scoped task trees. Tree responses support user, organization, project, and resource filters, keep paginated roots in items, and include current-page tree nodes in treeItems. Root pages are capped at 100 tasks. Tree responses include up to 250 authorized tasks and set treeTruncated when additional visible descendants exist; exceeding the 10-level depth limit still returns 422.
$without_origin = True; // bool | Deprecated compatibility alias for view=tree
$statuses = 'statuses_example'; // string | Comma-separated task statuses
$names = 'names_example'; // string | Comma-separated exact task names
$search = 'search_example'; // string
$app_id = 56; // int
$app_instance_id = 56; // int
$stack_id = 56; // int
$database_id = 56; // int
$cluster_id = 56; // int
$service_id = 56; // int
$integration_id = 56; // int
$provider_id = 56; // int
$page = 56; // int | Page number, defaults to 1
$page_size = 56; // int | Page size, defaults to 30

try {
    $result = $apiInstance->listTasks($scope, $org_id, $project_ids, $view, $without_origin, $statuses, $names, $search, $app_id, $app_instance_id, $stack_id, $database_id, $cluster_id, $service_id, $integration_id, $provider_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->listTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scope** | **string**|  | [optional] |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |
| **project_ids** | **string**| Comma-separated project ids | [optional] |
| **view** | **string**| Return matching tasks as a flat page or as filter-scoped task trees. Tree responses support user, organization, project, and resource filters, keep paginated roots in items, and include current-page tree nodes in treeItems. Root pages are capped at 100 tasks. Tree responses include up to 250 authorized tasks and set treeTruncated when additional visible descendants exist; exceeding the 10-level depth limit still returns 422. | [optional] |
| **without_origin** | **bool**| Deprecated compatibility alias for view&#x3D;tree | [optional] |
| **statuses** | **string**| Comma-separated task statuses | [optional] |
| **names** | **string**| Comma-separated exact task names | [optional] |
| **search** | **string**|  | [optional] |
| **app_id** | **int**|  | [optional] |
| **app_instance_id** | **int**|  | [optional] |
| **stack_id** | **int**|  | [optional] |
| **database_id** | **int**|  | [optional] |
| **cluster_id** | **int**|  | [optional] |
| **service_id** | **int**|  | [optional] |
| **integration_id** | **int**|  | [optional] |
| **provider_id** | **int**|  | [optional] |
| **page** | **int**| Page number, defaults to 1 | [optional] |
| **page_size** | **int**| Page size, defaults to 30 | [optional] |

### Return type

[**\Wodby\Api\Model\TasksResponse**](../Model/TasksResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `repeatTask()`

```php
repeatTask($id, $repeat_task_request): \Wodby\Api\Model\OperationResult
```

Repeat task

Creates a repeated run for the task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$repeat_task_request = new \Wodby\Api\Model\RepeatTaskRequest(); // \Wodby\Api\Model\RepeatTaskRequest

try {
    $result = $apiInstance->repeatTask($id, $repeat_task_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->repeatTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **repeat_task_request** | [**\Wodby\Api\Model\RepeatTaskRequest**](../Model/RepeatTaskRequest.md)|  | |

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
