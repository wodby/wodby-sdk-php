# Wodby\Api\ProjectMembershipsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProjectMemberships()**](ProjectMembershipsApi.md#createProjectMemberships) | **POST** /project-memberships | Add project members |
| [**deleteProjectMembership()**](ProjectMembershipsApi.md#deleteProjectMembership) | **DELETE** /project-memberships/{id} | Remove project membership |
| [**listProjectMemberships()**](ProjectMembershipsApi.md#listProjectMemberships) | **GET** /project-memberships | List project memberships |
| [**updateProjectMembership()**](ProjectMembershipsApi.md#updateProjectMembership) | **PUT** /project-memberships/{id} | Update project membership |


## `createProjectMemberships()`

```php
createProjectMemberships($new_project_memberships_input): \Wodby\Api\Model\ProjectMembership[]
```

Add project members

Gives organization members or teams the same role in a project. Returns the created memberships.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProjectMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_project_memberships_input = new \Wodby\Api\Model\NewProjectMembershipsInput(); // \Wodby\Api\Model\NewProjectMembershipsInput

try {
    $result = $apiInstance->createProjectMemberships($new_project_memberships_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembershipsApi->createProjectMemberships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_project_memberships_input** | [**\Wodby\Api\Model\NewProjectMembershipsInput**](../Model/NewProjectMembershipsInput.md)|  | |

### Return type

[**\Wodby\Api\Model\ProjectMembership[]**](../Model/ProjectMembership.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProjectMembership()`

```php
deleteProjectMembership($id): \Wodby\Api\Model\OperationResult
```

Remove project membership

Removes a member or team from a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProjectMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteProjectMembership($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembershipsApi->deleteProjectMembership: ', $e->getMessage(), PHP_EOL;
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

## `listProjectMemberships()`

```php
listProjectMemberships($project_id): \Wodby\Api\Model\ProjectMembership[]
```

List project memberships

Returns the members and teams with a role in a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProjectMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 56; // int

try {
    $result = $apiInstance->listProjectMemberships($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembershipsApi->listProjectMemberships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\ProjectMembership[]**](../Model/ProjectMembership.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectMembership()`

```php
updateProjectMembership($id, $project_membership_role_input): \Wodby\Api\Model\ProjectMembership
```

Update project membership

Changes the project role of a member or team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProjectMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$project_membership_role_input = new \Wodby\Api\Model\ProjectMembershipRoleInput(); // \Wodby\Api\Model\ProjectMembershipRoleInput

try {
    $result = $apiInstance->updateProjectMembership($id, $project_membership_role_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembershipsApi->updateProjectMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **project_membership_role_input** | [**\Wodby\Api\Model\ProjectMembershipRoleInput**](../Model/ProjectMembershipRoleInput.md)|  | |

### Return type

[**\Wodby\Api\Model\ProjectMembership**](../Model/ProjectMembership.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
