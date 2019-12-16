# AzureDevOpsClient\Work\ChartsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chartsGet**](ChartsApi.md#chartsGet) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/charts/{name} | 
[**chartsList**](ChartsApi.md#chartsList) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/charts | 
[**chartsUpdate**](ChartsApi.md#chartsUpdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/boards/{board}/charts/{name} | 


# **chartsGet**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardChart chartsGet($organization, $project, $board, $name, $team, $apiVersion)



Get a board chart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$board = "board_example"; // string | Identifier for board, either board's backlog level name (Eg:\"Stories\") or Id
$name = "name_example"; // string | The chart name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->chartsGet($organization, $project, $board, $name, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->chartsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **board** | **string**| Identifier for board, either board&#39;s backlog level name (Eg:\&quot;Stories\&quot;) or Id |
 **name** | **string**| The chart name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardChart**](../Model/BoardChart.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chartsList**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardChartReference[] chartsList($organization, $project, $board, $team, $apiVersion)



Get board charts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$board = "board_example"; // string | Identifier for board, either board's backlog level name (Eg:\"Stories\") or Id
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->chartsList($organization, $project, $board, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->chartsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **board** | **string**| Identifier for board, either board&#39;s backlog level name (Eg:\&quot;Stories\&quot;) or Id |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardChartReference[]**](../Model/BoardChartReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chartsUpdate**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardChart chartsUpdate($organization, $body, $project, $board, $name, $team, $apiVersion)



Update a board chart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardChart(); // \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardChart | 
$project = "project_example"; // string | Project ID or project name
$board = "board_example"; // string | Identifier for board, either board's backlog level name (Eg:\"Stories\") or Id
$name = "name_example"; // string | The chart name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->chartsUpdate($organization, $body, $project, $board, $name, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->chartsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardChart**](../Model/BoardChart.md)|  |
 **project** | **string**| Project ID or project name |
 **board** | **string**| Identifier for board, either board&#39;s backlog level name (Eg:\&quot;Stories\&quot;) or Id |
 **name** | **string**| The chart name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardChart**](../Model/BoardChart.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

