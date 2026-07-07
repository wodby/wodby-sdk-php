# Wodby\Api\HelmChartsApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**inspectHelmChart()**](HelmChartsApi.md#inspectHelmChart) | **POST** /helm-charts/actions/inspect | Inspect Helm chart |


## `inspectHelmChart()`

```php
inspectHelmChart($helm_chart_input): \Wodby\Api\Model\HelmChartAnalysis
```

Inspect Helm chart

Renders a Helm chart with optional values and returns detected Kubernetes resources, warnings, and chart metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\HelmChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$helm_chart_input = new \Wodby\Api\Model\HelmChartInput(); // \Wodby\Api\Model\HelmChartInput

try {
    $result = $apiInstance->inspectHelmChart($helm_chart_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelmChartsApi->inspectHelmChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **helm_chart_input** | [**\Wodby\Api\Model\HelmChartInput**](../Model/HelmChartInput.md)|  | |

### Return type

[**\Wodby\Api\Model\HelmChartAnalysis**](../Model/HelmChartAnalysis.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
