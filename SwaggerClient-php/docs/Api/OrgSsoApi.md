# Wodby\Api\OrgSsoApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrgSSOProvider()**](OrgSsoApi.md#createOrgSSOProvider) | **POST** /org-sso-providers | Create organization SSO provider |
| [**deleteOrgSSOProvider()**](OrgSsoApi.md#deleteOrgSSOProvider) | **DELETE** /org-sso-providers/{id} | Delete organization SSO provider |
| [**getOrgSSOProvider()**](OrgSsoApi.md#getOrgSSOProvider) | **GET** /org-sso-providers/{id} | Get organization SSO provider |
| [**listOrgSSOProviders()**](OrgSsoApi.md#listOrgSSOProviders) | **GET** /org-sso-providers | List organization SSO providers |
| [**updateOrgSSOProvider()**](OrgSsoApi.md#updateOrgSSOProvider) | **PUT** /org-sso-providers/{id} | Update organization SSO provider |
| [**verifyOrgSSODomain()**](OrgSsoApi.md#verifyOrgSSODomain) | **POST** /org-sso-providers/{id}/actions/verify-domain | Verify SSO domain |


## `createOrgSSOProvider()`

```php
createOrgSSOProvider($org_sso_provider_input): \Wodby\Api\Model\OrgSSOProvider
```

Create organization SSO provider

Adds an OIDC, GitHub or SAML single sign-on provider. The client secret is write-only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgSsoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_sso_provider_input = new \Wodby\Api\Model\OrgSSOProviderInput(); // \Wodby\Api\Model\OrgSSOProviderInput

try {
    $result = $apiInstance->createOrgSSOProvider($org_sso_provider_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgSsoApi->createOrgSSOProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_sso_provider_input** | [**\Wodby\Api\Model\OrgSSOProviderInput**](../Model/OrgSSOProviderInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OrgSSOProvider**](../Model/OrgSSOProvider.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrgSSOProvider()`

```php
deleteOrgSSOProvider($id): \Wodby\Api\Model\OperationResult
```

Delete organization SSO provider

Deletes a single sign-on provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgSsoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->deleteOrgSSOProvider($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgSsoApi->deleteOrgSSOProvider: ', $e->getMessage(), PHP_EOL;
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

## `getOrgSSOProvider()`

```php
getOrgSSOProvider($id): \Wodby\Api\Model\OrgSSOProvider
```

Get organization SSO provider

Returns one single sign-on provider with its domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgSsoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getOrgSSOProvider($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgSsoApi->getOrgSSOProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OrgSSOProvider**](../Model/OrgSSOProvider.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrgSSOProviders()`

```php
listOrgSSOProviders($org_id): \Wodby\Api\Model\OrgSSOProvider[]
```

List organization SSO providers

Returns the single sign-on providers of the organization with their domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgSsoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 56; // int | Optional for API-key requests; defaults to the API key's organization. If provided, it must match the key's organization.

try {
    $result = $apiInstance->listOrgSSOProviders($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgSsoApi->listOrgSSOProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **int**| Optional for API-key requests; defaults to the API key&#39;s organization. If provided, it must match the key&#39;s organization. | [optional] |

### Return type

[**\Wodby\Api\Model\OrgSSOProvider[]**](../Model/OrgSSOProvider.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrgSSOProvider()`

```php
updateOrgSSOProvider($id, $org_sso_provider_input): \Wodby\Api\Model\OrgSSOProvider
```

Update organization SSO provider

Replaces the provider settings. Leave clientSecret out to keep the stored secret.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgSsoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$org_sso_provider_input = new \Wodby\Api\Model\OrgSSOProviderInput(); // \Wodby\Api\Model\OrgSSOProviderInput

try {
    $result = $apiInstance->updateOrgSSOProvider($id, $org_sso_provider_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgSsoApi->updateOrgSSOProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **org_sso_provider_input** | [**\Wodby\Api\Model\OrgSSOProviderInput**](../Model/OrgSSOProviderInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OrgSSOProvider**](../Model/OrgSSOProvider.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyOrgSSODomain()`

```php
verifyOrgSSODomain($id, $verify_org_sso_domain_input): \Wodby\Api\Model\OrgSSODomain
```

Verify SSO domain

Checks the DNS TXT record that proves the organization owns one of the provider's email domains and returns the domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgSsoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$verify_org_sso_domain_input = new \Wodby\Api\Model\VerifyOrgSSODomainInput(); // \Wodby\Api\Model\VerifyOrgSSODomainInput

try {
    $result = $apiInstance->verifyOrgSSODomain($id, $verify_org_sso_domain_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgSsoApi->verifyOrgSSODomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **verify_org_sso_domain_input** | [**\Wodby\Api\Model\VerifyOrgSSODomainInput**](../Model/VerifyOrgSSODomainInput.md)|  | |

### Return type

[**\Wodby\Api\Model\OrgSSODomain**](../Model/OrgSSODomain.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
