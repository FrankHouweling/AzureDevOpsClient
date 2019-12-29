# FrankHouweling\AzureDevOpsClient\Work\TeamsettingsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamsettingsGet**](TeamsettingsApi.md#teamsettingsGet) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings | 
[**teamsettingsUpdate**](TeamsettingsApi.md#teamsettingsUpdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/teamsettings | 


# **teamsettingsGet**
> \FrankHouweling\AzureDevOpsClient\Work\Model\TeamSetting teamsettingsGet($organization, $project, $team, $apiVersion)



Get a team's settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\TeamsettingsApi(
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
    $result = $apiInstance->teamsettingsGet($organization, $project, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsettingsApi->teamsettingsGet: ', $e->getMessage(), PHP_EOL;
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

[**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamSetting**](../Model/TeamSetting.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsettingsUpdate**
> \FrankHouweling\AzureDevOpsClient\Work\Model\TeamSetting teamsettingsUpdate($organization, $body, $project, $team, $apiVersion)



Update a team's settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\TeamsettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Work\Model\TeamSettingsPatch(); // \FrankHouweling\AzureDevOpsClient\Work\Model\TeamSettingsPatch | TeamSettings changes
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->teamsettingsUpdate($organization, $body, $project, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsettingsApi->teamsettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamSettingsPatch**](../Model/TeamSettingsPatch.md)| TeamSettings changes |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamSetting**](../Model/TeamSetting.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

