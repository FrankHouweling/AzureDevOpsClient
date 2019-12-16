# FrankHouweling\AzureDevOpsClient\Work\ChartimagesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chartimagesGetBoardChartImage**](ChartimagesApi.md#chartimagesGetBoardChartImage) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/chartimages/{name} | 
[**chartimagesGetIterationChartImage**](ChartimagesApi.md#chartimagesGetIterationChartImage) | **GET** /{organization}/{project}/{team}/_apis/work/iterations/{iterationId}/chartimages/{name} | 
[**chartimagesGetIterationsChartImage**](ChartimagesApi.md#chartimagesGetIterationsChartImage) | **GET** /{organization}/{project}/{team}/_apis/work/iterations/chartimages/{name} | 


# **chartimagesGetBoardChartImage**
> string chartimagesGetBoardChartImage($organization, $project, $team, $board, $name, $apiVersion, $width, $height, $showDetails, $title)



Get a board chart image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\ChartimagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$board = "board_example"; // string | Identifier for board, either board's backlog level name (e.g. \"Issues\") or Id.
$name = "name_example"; // string | The chart name. e.g. CumulativeFlow.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$width = 56; // int | The width of the chart in pixels. Must be greater than 0.
$height = 56; // int | The height of the chart in pixels. Must be greater than 0.
$showDetails = true; // bool | Whether or not the chart should include detailed information (e.g. axis labels, titles, trend lines, etc.).
$title = "title_example"; // string | The title of the chart. Can only be dislayed if ShowLabels is true.

try {
    $result = $apiInstance->chartimagesGetBoardChartImage($organization, $project, $team, $board, $name, $apiVersion, $width, $height, $showDetails, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartimagesApi->chartimagesGetBoardChartImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **board** | **string**| Identifier for board, either board&#39;s backlog level name (e.g. \&quot;Issues\&quot;) or Id. |
 **name** | **string**| The chart name. e.g. CumulativeFlow. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **width** | **int**| The width of the chart in pixels. Must be greater than 0. | [optional]
 **height** | **int**| The height of the chart in pixels. Must be greater than 0. | [optional]
 **showDetails** | **bool**| Whether or not the chart should include detailed information (e.g. axis labels, titles, trend lines, etc.). | [optional]
 **title** | **string**| The title of the chart. Can only be dislayed if ShowLabels is true. | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chartimagesGetIterationChartImage**
> string chartimagesGetIterationChartImage($organization, $project, $team, $iterationId, $name, $apiVersion, $width, $height, $showDetails, $title)



Get an iteration chart image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\ChartimagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$iterationId = "iterationId_example"; // string | ID of the iteration.
$name = "name_example"; // string | The chart name. e.g. Burndown.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$width = 56; // int | The width of the chart in pixels. Must be greater than 0.
$height = 56; // int | The height of the chart in pixels. Must be greater than 0.
$showDetails = true; // bool | Whether or not the chart should include detailed information (e.g. axis labels, titles, trend lines, etc.)
$title = "title_example"; // string | The title of the chart. Can only be dislayed if ShowLabels is true.

try {
    $result = $apiInstance->chartimagesGetIterationChartImage($organization, $project, $team, $iterationId, $name, $apiVersion, $width, $height, $showDetails, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartimagesApi->chartimagesGetIterationChartImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **iterationId** | [**string**](../Model/.md)| ID of the iteration. |
 **name** | **string**| The chart name. e.g. Burndown. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **width** | **int**| The width of the chart in pixels. Must be greater than 0. | [optional]
 **height** | **int**| The height of the chart in pixels. Must be greater than 0. | [optional]
 **showDetails** | **bool**| Whether or not the chart should include detailed information (e.g. axis labels, titles, trend lines, etc.) | [optional]
 **title** | **string**| The title of the chart. Can only be dislayed if ShowLabels is true. | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chartimagesGetIterationsChartImage**
> string chartimagesGetIterationsChartImage($organization, $project, $team, $name, $apiVersion, $iterationsNumber, $width, $height, $showDetails, $title)



Get an iterations chart image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\ChartimagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$name = "name_example"; // string | The chart name. e.g. Velocity.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$iterationsNumber = 56; // int | Number of iterations the chart is for.
$width = 56; // int | The width of the chart in pixels. Must be greater than 0.
$height = 56; // int | The height of the chart in pixels. Must be greater than 0.
$showDetails = true; // bool | Whether or not the chart should include detailed information (e.g. axis labels, titles, trend lines, etc.)
$title = "title_example"; // string | The title of the chart. Can only be dislayed if ShowLabels is true.

try {
    $result = $apiInstance->chartimagesGetIterationsChartImage($organization, $project, $team, $name, $apiVersion, $iterationsNumber, $width, $height, $showDetails, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartimagesApi->chartimagesGetIterationsChartImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **name** | **string**| The chart name. e.g. Velocity. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **iterationsNumber** | **int**| Number of iterations the chart is for. | [optional]
 **width** | **int**| The width of the chart in pixels. Must be greater than 0. | [optional]
 **height** | **int**| The height of the chart in pixels. Must be greater than 0. | [optional]
 **showDetails** | **bool**| Whether or not the chart should include detailed information (e.g. axis labels, titles, trend lines, etc.) | [optional]
 **title** | **string**| The title of the chart. Can only be dislayed if ShowLabels is true. | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

