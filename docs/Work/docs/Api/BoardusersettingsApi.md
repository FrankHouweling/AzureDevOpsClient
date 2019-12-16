# AzureDevOpsClient\Work\BoardusersettingsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**boardusersettingsGet**](BoardusersettingsApi.md#boardusersettingsGet) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/boardusersettings | 
[**boardusersettingsUpdate**](BoardusersettingsApi.md#boardusersettingsUpdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/boards/{board}/boardusersettings | 


# **boardusersettingsGet**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardUserSettings boardusersettingsGet($organization, $project, $board, $team, $apiVersion)



Get board user settings for a board id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\BoardusersettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$board = "board_example"; // string | Board ID or Name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->boardusersettingsGet($organization, $project, $board, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardusersettingsApi->boardusersettingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **board** | **string**| Board ID or Name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardUserSettings**](../Model/BoardUserSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **boardusersettingsUpdate**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardUserSettings boardusersettingsUpdate($organization, $body, $project, $board, $team, $apiVersion)



Update board user settings for the board id  We don't want stakeholders to update board settings (currently just autorefresh). The BacklogManagement feature check validates this.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\BoardusersettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \stdClass; // object | 
$project = "project_example"; // string | Project ID or project name
$board = "board_example"; // string | 
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->boardusersettingsUpdate($organization, $body, $project, $board, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardusersettingsApi->boardusersettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | **object**|  |
 **project** | **string**| Project ID or project name |
 **board** | **string**|  |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardUserSettings**](../Model/BoardUserSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

