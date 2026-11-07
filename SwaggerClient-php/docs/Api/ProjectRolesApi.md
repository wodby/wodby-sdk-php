# Wodby\Api\ProjectRolesApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProjectRole()**](ProjectRolesApi.md#createProjectRole) | **POST** /project-roles | Create custom project role |
| [**deleteProjectRole()**](ProjectRolesApi.md#deleteProjectRole) | **DELETE** /project-roles/{id} | Delete custom project role |
| [**getProjectRole()**](ProjectRolesApi.md#getProjectRole) | **GET** /project-roles/{id} | Get custom project role |
| [**listProjectPermissions()**](ProjectRolesApi.md#listProjectPermissions) | **GET** /project-permissions | List project permissions |
| [**listProjectRoles()**](ProjectRolesApi.md#listProjectRoles) | **GET** /project-roles | List project roles |
| [**updateProjectRole()**](ProjectRolesApi.md#updateProjectRole) | **PUT** /project-roles/{id} | Update custom project role |


## `createProjectRole()`

```php
createProjectRole($project_role_input): \Wodby\Api\Model\ProjectRole
```

Create custom project role

Adds a custom project role to the organization. Organization owners and admins only. project.view is always granted, and env.view and env.logs are granted in every environment type, because every project member can see the project's environments and read their logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_role_input = new \Wodby\Api\Model\ProjectRoleInput(); // \Wodby\Api\Model\ProjectRoleInput

try {
    $result = $apiInstance->createProjectRole($project_role_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->createProjectRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_role_input** | [**\Wodby\Api\Model\ProjectRoleInput**](../Model/ProjectRoleInput.md)|  | |

### Return type

[**\Wodby\Api\Model\ProjectRole**](../Model/ProjectRole.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProjectRole()`

```php
deleteProjectRole($id): \Wodby\Api\Model\OperationResult
```

Delete custom project role

Deletes a custom project role that no project membership holds. Organization owners and admins only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteProjectRole($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->deleteProjectRole: ', $e->getMessage(), PHP_EOL;
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

## `getProjectRole()`

```php
getProjectRole($id): \Wodby\Api\Model\ProjectRole
```

Get custom project role

Returns a custom project role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getProjectRole($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->getProjectRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\ProjectRole**](../Model/ProjectRole.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProjectPermissions()`

```php
listProjectPermissions(): \Wodby\Api\Model\ProjectPermission[]
```

List project permissions

Returns every permission a project role can grant, in display order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listProjectPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->listProjectPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Wodby\Api\Model\ProjectPermission[]**](../Model/ProjectPermission.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProjectRoles()`

```php
listProjectRoles($org_id): \Wodby\Api\Model\ProjectRole[]
```

List project roles

Returns the system project roles from least to most access, then the organization's custom roles by title, with the permissions each grants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->listProjectRoles($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->listProjectRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\ProjectRole[]**](../Model/ProjectRole.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectRole()`

```php
updateProjectRole($id, $project_role_input): \Wodby\Api\Model\ProjectRole
```

Update custom project role

Replaces a custom role's name, title, description and permissions. Every membership holding the role changes at once. A role that teams hold cannot get project.manage. Organization owners and admins only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$project_role_input = new \Wodby\Api\Model\ProjectRoleInput(); // \Wodby\Api\Model\ProjectRoleInput

try {
    $result = $apiInstance->updateProjectRole($id, $project_role_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->updateProjectRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **project_role_input** | [**\Wodby\Api\Model\ProjectRoleInput**](../Model/ProjectRoleInput.md)|  | |

### Return type

[**\Wodby\Api\Model\ProjectRole**](../Model/ProjectRole.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
