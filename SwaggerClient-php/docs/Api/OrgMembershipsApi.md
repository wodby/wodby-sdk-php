# Wodby\Api\OrgMembershipsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOrgMembership()**](OrgMembershipsApi.md#deleteOrgMembership) | **DELETE** /org-memberships/{id} | Remove organization member |
| [**getOrgMembership()**](OrgMembershipsApi.md#getOrgMembership) | **GET** /org-memberships/{id} | Get org membership |
| [**inviteOrgMember()**](OrgMembershipsApi.md#inviteOrgMember) | **POST** /org-memberships | Invite organization member |
| [**listOrgMemberships()**](OrgMembershipsApi.md#listOrgMemberships) | **GET** /org-memberships | List org memberships |
| [**updateOrgMembership()**](OrgMembershipsApi.md#updateOrgMembership) | **PUT** /org-memberships/{id} | Update organization member role |


## `deleteOrgMembership()`

```php
deleteOrgMembership($id): \Wodby\Api\Model\OperationResult
```

Remove organization member

Removes a member or a pending invitation from the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteOrgMembership($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgMembershipsApi->deleteOrgMembership: ', $e->getMessage(), PHP_EOL;
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

## `getOrgMembership()`

```php
getOrgMembership($id): \Wodby\Api\Model\OrgMembership
```

Get org membership

Returns the org membership identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getOrgMembership($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgMembershipsApi->getOrgMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OrgMembership**](../Model/OrgMembership.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteOrgMember()`

```php
inviteOrgMember($invite_org_member_input): \Wodby\Api\Model\OrgMembership
```

Invite organization member

Invites a person by email with an organization role, optionally adding them to teams and projects. The membership has the invited status until they accept.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_org_member_input = new \Wodby\Api\Model\InviteOrgMemberInput(); // \Wodby\Api\Model\InviteOrgMemberInput

try {
    $result = $apiInstance->inviteOrgMember($invite_org_member_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgMembershipsApi->inviteOrgMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_org_member_input** | [**\Wodby\Api\Model\InviteOrgMemberInput**](../Model/InviteOrgMemberInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OrgMembership**](../Model/OrgMembership.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrgMemberships()`

```php
listOrgMemberships($org_id): \Wodby\Api\Model\OrgMembership[]
```

List org memberships

Returns org memberships matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->listOrgMemberships($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgMembershipsApi->listOrgMemberships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\OrgMembership[]**](../Model/OrgMembership.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrgMembership()`

```php
updateOrgMembership($id, $org_membership_role_input): \Wodby\Api\Model\OrgMembership
```

Update organization member role

Changes the organization role of a member and returns the membership.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgMembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$org_membership_role_input = new \Wodby\Api\Model\OrgMembershipRoleInput(); // \Wodby\Api\Model\OrgMembershipRoleInput

try {
    $result = $apiInstance->updateOrgMembership($id, $org_membership_role_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgMembershipsApi->updateOrgMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **org_membership_role_input** | [**\Wodby\Api\Model\OrgMembershipRoleInput**](../Model/OrgMembershipRoleInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OrgMembership**](../Model/OrgMembership.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
