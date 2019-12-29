# FrankHouweling\AzureDevOpsClient\Work\TeamfieldvaluesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamfieldvaluesGet**](TeamfieldvaluesApi.md#teamfieldvaluesGet) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/teamfieldvalues | 
[**teamfieldvaluesUpdate**](TeamfieldvaluesApi.md#teamfieldvaluesUpdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/teamsettings/teamfieldvalues | 


# **teamfieldvaluesGet**
> \FrankHouweling\AzureDevOpsClient\Work\Model\TeamFieldValues teamfieldvaluesGet($organization, $project, $team, $apiVersion)



Get a collection of team field values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\TeamfieldvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->teamfieldvaluesGet($organization, $project, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamfieldvaluesApi->teamfieldvaluesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamFieldValues**](../Model/TeamFieldValues.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamfieldvaluesUpdate**
> \FrankHouweling\AzureDevOpsClient\Work\Model\TeamFieldValues teamfieldvaluesUpdate($organization, $body, $project, $team, $apiVersion)



Update team field values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\TeamfieldvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Work\Model\TeamFieldValuesPatch(); // \FrankHouweling\AzureDevOpsClient\Work\Model\TeamFieldValuesPatch | 
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->teamfieldvaluesUpdate($organization, $body, $project, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamfieldvaluesApi->teamfieldvaluesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamFieldValuesPatch**](../Model/TeamFieldValuesPatch.md)|  |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamFieldValues**](../Model/TeamFieldValues.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

