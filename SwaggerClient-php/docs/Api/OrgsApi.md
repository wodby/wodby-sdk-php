# Wodby\Api\OrgsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exportOrgUsageCSV()**](OrgsApi.md#exportOrgUsageCSV) | **GET** /orgs/{id}/usage/csv | Export org usage by project as CSV |
| [**getOrg()**](OrgsApi.md#getOrg) | **GET** /orgs/{id} | Get org |
| [**getOrgSubscription()**](OrgsApi.md#getOrgSubscription) | **GET** /orgs/{id}/subscription | Get org subscription |
| [**getOrgUsage()**](OrgsApi.md#getOrgUsage) | **GET** /orgs/{id}/usage | Get org usage by project |
| [**listOrgUsagePeriods()**](OrgsApi.md#listOrgUsagePeriods) | **GET** /orgs/{id}/usage/periods | List org usage periods |
| [**listOrgs()**](OrgsApi.md#listOrgs) | **GET** /orgs | List orgs |
| [**preflightAppServiceCapacity()**](OrgsApi.md#preflightAppServiceCapacity) | **POST** /orgs/{id}/actions/preflight-app-service-capacity | Preflight app-service capacity |
| [**updateOrg()**](OrgsApi.md#updateOrg) | **PUT** /orgs/{id} | Update org |
| [**updateOrgSettings()**](OrgsApi.md#updateOrgSettings) | **PUT** /orgs/{id}/settings | Update organization settings |


## `exportOrgUsageCSV()`

```php
exportOrgUsageCSV($id, $period_start): string
```

Export org usage by project as CSV

Returns the usage report as CSV with one row per project and billing item and the columns period_start, period_end, project_id, project_name, project_title, item, quantity, unit, amount_usd, and invoice_share_usd, which is empty while the invoiced amount is unknown. Requires billing-view access to the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$period_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of the billing period as listed by listOrgUsagePeriods. Defaults to the current period.

try {
    $result = $apiInstance->exportOrgUsageCSV($id, $period_start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->exportOrgUsageCSV: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **period_start** | **\DateTime**| Start of the billing period as listed by listOrgUsagePeriods. Defaults to the current period. | [optional] |

### Return type

**string**

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrg()`

```php
getOrg($id): \Wodby\Api\Model\Org
```

Get org

Returns the org identified by the request path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getOrg($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\Org**](../Model/Org.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgSubscription()`

```php
getOrgSubscription($id): \Wodby\Api\Model\OrgSubscriptionDetails
```

Get org subscription

Returns usage and pricing details for callers with billing-view access to the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getOrgSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getOrgSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OrgSubscriptionDetails**](../Model/OrgSubscriptionDetails.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgUsage()`

```php
getOrgUsage($id, $period_start): \Wodby\Api\Model\OrgUsageReport
```

Get org usage by project

Returns the organization's usage per project and billing item in one billing period, for internal chargeback. Amounts are public list prices in USD before included usage and discounts, so they show each project's share of usage. For a past period whose invoices are final, invoiceShare splits what the invoices charged per item between projects in proportion to their amounts. Usage of organization-owned resources and usage without a project is reported in one row without a project ID. Requires billing-view access to the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$period_start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of the billing period as listed by listOrgUsagePeriods. Defaults to the current period.

try {
    $result = $apiInstance->getOrgUsage($id, $period_start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getOrgUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **period_start** | **\DateTime**| Start of the billing period as listed by listOrgUsagePeriods. Defaults to the current period. | [optional] |

### Return type

[**\Wodby\Api\Model\OrgUsageReport**](../Model/OrgUsageReport.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrgUsagePeriods()`

```php
listOrgUsagePeriods($id): \Wodby\Api\Model\OrgUsagePeriod[]
```

List org usage periods

Returns the billing periods available in the usage report, newest first, including the current period. Requires billing-view access to the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->listOrgUsagePeriods($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->listOrgUsagePeriods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Wodby\Api\Model\OrgUsagePeriod[]**](../Model/OrgUsagePeriod.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrgs()`

```php
listOrgs(): \Wodby\Api\Model\Org[]
```

List orgs

Returns orgs matching the request filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listOrgs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->listOrgs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Wodby\Api\Model\Org[]**](../Model/Org.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `preflightAppServiceCapacity()`

```php
preflightAppServiceCapacity($id, $app_service_capacity_preflight_request): \Wodby\Api\Model\AppServiceCapacityPreflight
```

Preflight app-service capacity

Evaluates whether the organization can add the requested number of enabled app services under the backend's effective billing policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$app_service_capacity_preflight_request = new \Wodby\Api\Model\AppServiceCapacityPreflightRequest(); // \Wodby\Api\Model\AppServiceCapacityPreflightRequest

try {
    $result = $apiInstance->preflightAppServiceCapacity($id, $app_service_capacity_preflight_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->preflightAppServiceCapacity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_service_capacity_preflight_request** | [**\Wodby\Api\Model\AppServiceCapacityPreflightRequest**](../Model/AppServiceCapacityPreflightRequest.md)|  | |

### Return type

[**\Wodby\Api\Model\AppServiceCapacityPreflight**](../Model/AppServiceCapacityPreflight.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrg()`

```php
updateOrg($id, $update_org_request): \Wodby\Api\Model\Org
```

Update org

Updates the org and returns the updated resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_org_request = new \Wodby\Api\Model\UpdateOrgRequest(); // \Wodby\Api\Model\UpdateOrgRequest

try {
    $result = $apiInstance->updateOrg($id, $update_org_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->updateOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_org_request** | [**\Wodby\Api\Model\UpdateOrgRequest**](../Model/UpdateOrgRequest.md)|  | |

### Return type

[**\Wodby\Api\Model\Org**](../Model/Org.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrgSettings()`

```php
updateOrgSettings($id, $org_settings_input): \Wodby\Api\Model\Org
```

Update organization settings

Updates organization defaults and returns the organization. A new build image retention also applies to every app environment that still uses the previous organization value; environments with their own value keep it, and new environments inherit the new value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$org_settings_input = new \Wodby\Api\Model\OrgSettingsInput(); // \Wodby\Api\Model\OrgSettingsInput

try {
    $result = $apiInstance->updateOrgSettings($id, $org_settings_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->updateOrgSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **org_settings_input** | [**\Wodby\Api\Model\OrgSettingsInput**](../Model/OrgSettingsInput.md)|  | |

### Return type

[**\Wodby\Api\Model\Org**](../Model/Org.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
