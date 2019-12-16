# FrankHouweling\AzureDevOpsClient\Work\ColumnsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**columnsList**](ColumnsApi.md#columnsList) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/columns | 
[**columnsUpdate**](ColumnsApi.md#columnsUpdate) | **PUT** /{organization}/{project}/{team}/_apis/work/boards/{board}/columns | 


# **columnsList**
> \FrankHouweling\AzureDevOpsClient\Work\Model\BoardColumn[] columnsList($organization, $project, $board, $team, $apiVersion)



Get columns on a board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\ColumnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$board = "board_example"; // string | Name or ID of the specific board
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->columnsList($organization, $project, $board, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ColumnsApi->columnsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **board** | **string**| Name or ID of the specific board |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\BoardColumn[]**](../Model/BoardColumn.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **columnsUpdate**
> \FrankHouweling\AzureDevOpsClient\Work\Model\BoardColumn[] columnsUpdate($organization, $body, $project, $board, $team, $apiVersion)



Update columns on a board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\ColumnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\Work\Model\BoardColumn()); // \FrankHouweling\AzureDevOpsClient\Work\Model\BoardColumn[] | List of board columns to update
$project = "project_example"; // string | Project ID or project name
$board = "board_example"; // string | Name or ID of the specific board
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->columnsUpdate($organization, $body, $project, $board, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ColumnsApi->columnsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\BoardColumn[]**](../Model/BoardColumn.md)| List of board columns to update |
 **project** | **string**| Project ID or project name |
 **board** | **string**| Name or ID of the specific board |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\BoardColumn[]**](../Model/BoardColumn.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

