# AzureDevOpsClient\Build\MetricsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**metricsGetDefinitionMetrics**](MetricsApi.md#metricsGetDefinitionMetrics) | **GET** /{organization}/{project}/_apis/build/definitions/{definitionId}/metrics | 
[**metricsGetProjectMetrics**](MetricsApi.md#metricsGetProjectMetrics) | **GET** /{organization}/{project}/_apis/build/metrics/{metricAggregationType} | 


# **metricsGetDefinitionMetrics**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildMetric[] metricsGetDefinitionMetrics($organization, $project, $definitionId, $apiVersion, $minMetricsTime)



Gets build metrics for a definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | The ID of the definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$minMetricsTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date from which to calculate metrics.

try {
    $result = $apiInstance->metricsGetDefinitionMetrics($organization, $project, $definitionId, $apiVersion, $minMetricsTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetDefinitionMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**| The ID of the definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **minMetricsTime** | **\DateTime**| The date from which to calculate metrics. | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildMetric[]**](../Model/BuildMetric.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetProjectMetrics**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildMetric[] metricsGetProjectMetrics($organization, $project, $metricAggregationType, $apiVersion, $minMetricsTime)



Gets build metrics for a project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$metricAggregationType = "metricAggregationType_example"; // string | The aggregation type to use (hourly, daily).
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$minMetricsTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date from which to calculate metrics.

try {
    $result = $apiInstance->metricsGetProjectMetrics($organization, $project, $metricAggregationType, $apiVersion, $minMetricsTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metricsGetProjectMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **metricAggregationType** | **string**| The aggregation type to use (hourly, daily). |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **minMetricsTime** | **\DateTime**| The date from which to calculate metrics. | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildMetric[]**](../Model/BuildMetric.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

