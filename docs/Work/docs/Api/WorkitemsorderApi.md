# FrankHouweling\AzureDevOpsClient\Work\WorkitemsorderApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workitemsorderReorderBacklogWorkItems**](WorkitemsorderApi.md#workitemsorderReorderBacklogWorkItems) | **PATCH** /{organization}/{project}/{team}/_apis/work/workitemsorder | 
[**workitemsorderReorderIterationWorkItems**](WorkitemsorderApi.md#workitemsorderReorderIterationWorkItems) | **PATCH** /{organization}/{project}/{team}/_apis/work/iterations/{iterationId}/workitemsorder | 


# **workitemsorderReorderBacklogWorkItems**
> \FrankHouweling\AzureDevOpsClient\Work\Model\ReorderResult[] workitemsorderReorderBacklogWorkItems($organization, $body, $project, $team, $apiVersion)



Reorder Product Backlog/Boards Work Items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\WorkitemsorderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Work\Model\ReorderOperation(); // \FrankHouweling\AzureDevOpsClient\Work\Model\ReorderOperation | 
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->workitemsorderReorderBacklogWorkItems($organization, $body, $project, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkitemsorderApi->workitemsorderReorderBacklogWorkItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\ReorderOperation**](../Model/ReorderOperation.md)|  |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\ReorderResult[]**](../Model/ReorderResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workitemsorderReorderIterationWorkItems**
> \FrankHouweling\AzureDevOpsClient\Work\Model\ReorderResult[] workitemsorderReorderIterationWorkItems($organization, $body, $project, $team, $iterationId, $apiVersion)



Reorder Sprint Backlog/Taskboard Work Items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\WorkitemsorderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Work\Model\ReorderOperation(); // \FrankHouweling\AzureDevOpsClient\Work\Model\ReorderOperation | 
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$iterationId = "iterationId_example"; // string | The id of the iteration
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->workitemsorderReorderIterationWorkItems($organization, $body, $project, $team, $iterationId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkitemsorderApi->workitemsorderReorderIterationWorkItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\ReorderOperation**](../Model/ReorderOperation.md)|  |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **iterationId** | [**string**](../Model/.md)| The id of the iteration |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\ReorderResult[]**](../Model/ReorderResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

