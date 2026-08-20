# Wodby\Api\GitReposApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGitRepoUsages()**](GitReposApi.md#getGitRepoUsages) | **GET** /git-repos/{id}/usages | Get Git repository usages |
| [**updateGitRepoFromGit()**](GitReposApi.md#updateGitRepoFromGit) | **POST** /git-repos/{id}/actions/update-from-git | Update all Git repository usages |


## `getGitRepoUsages()`

```php
getGitRepoUsages($id): \Wodby\Api\Model\GitRepoUsages
```

Get Git repository usages

Returns every service, stack, and provider that shares the Git repository.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\GitReposApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getGitRepoUsages($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitReposApi->getGitRepoUsages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\GitRepoUsages**](../Model/GitRepoUsages.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGitRepoFromGit()`

```php
updateGitRepoFromGit($id, $update_stack_from_git_request): \Wodby\Api\Model\OperationResult
```

Update all Git repository usages

Starts one parent task that updates every service, stack, and provider sharing the selected repository to the requested ref.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\GitReposApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_stack_from_git_request = new \Wodby\Api\Model\UpdateStackFromGitRequest(); // \Wodby\Api\Model\UpdateStackFromGitRequest

try {
    $result = $apiInstance->updateGitRepoFromGit($id, $update_stack_from_git_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitReposApi->updateGitRepoFromGit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_stack_from_git_request** | [**\Wodby\Api\Model\UpdateStackFromGitRequest**](../Model/UpdateStackFromGitRequest.md)|  | |

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
