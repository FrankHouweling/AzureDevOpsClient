# FrankHouweling\AzureDevOpsClient\Work\BoardparentsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**boardparentsList**](BoardparentsApi.md#boardparentsList) | **GET** /{organization}/{project}/{team}/_apis/work/boards/boardparents | 


# **boardparentsList**
> \FrankHouweling\AzureDevOpsClient\Work\Model\ParentChildWIMap[] boardparentsList($organization, $project, $childBacklogContextCategoryRefName, $workitemIds, $team, $apiVersion)



Returns the list of parent field filter model for the given list of workitem ids

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\BoardparentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$childBacklogContextCategoryRefName = "childBacklogContextCategoryRefName_example"; // string | 
$workitemIds = "workitemIds_example"; // string | 
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->boardparentsList($organization, $project, $childBacklogContextCategoryRefName, $workitemIds, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardparentsApi->boardparentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **childBacklogContextCategoryRefName** | **string**|  |
 **workitemIds** | **string**|  |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\ParentChildWIMap[]**](../Model/ParentChildWIMap.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

