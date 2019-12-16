# AzureDevOpsClient\Work\TeamdaysoffApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamdaysoffGet**](TeamdaysoffApi.md#teamdaysoffGet) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/teamdaysoff | 
[**teamdaysoffUpdate**](TeamdaysoffApi.md#teamdaysoffUpdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/teamdaysoff | 


# **teamdaysoffGet**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsDaysOff teamdaysoffGet($organization, $project, $iterationId, $team, $apiVersion)



Get team's days off for an iteration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\TeamdaysoffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$iterationId = "iterationId_example"; // string | ID of the iteration
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->teamdaysoffGet($organization, $project, $iterationId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamdaysoffApi->teamdaysoffGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **iterationId** | [**string**](../Model/.md)| ID of the iteration |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsDaysOff**](../Model/TeamSettingsDaysOff.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamdaysoffUpdate**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsDaysOff teamdaysoffUpdate($organization, $body, $project, $iterationId, $team, $apiVersion)



Set a team's days off for an iteration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\TeamdaysoffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsDaysOffPatch(); // \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsDaysOffPatch | Team's days off patch containing a list of start and end dates
$project = "project_example"; // string | Project ID or project name
$iterationId = "iterationId_example"; // string | ID of the iteration
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->teamdaysoffUpdate($organization, $body, $project, $iterationId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamdaysoffApi->teamdaysoffUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsDaysOffPatch**](../Model/TeamSettingsDaysOffPatch.md)| Team&#39;s days off patch containing a list of start and end dates |
 **project** | **string**| Project ID or project name |
 **iterationId** | [**string**](../Model/.md)| ID of the iteration |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsDaysOff**](../Model/TeamSettingsDaysOff.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

