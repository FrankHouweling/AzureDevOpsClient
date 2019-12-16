# AzureDevOpsClient\Work\CardrulesettingsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cardrulesettingsGet**](CardrulesettingsApi.md#cardrulesettingsGet) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/cardrulesettings | 
[**cardrulesettingsUpdateBoardCardRuleSettings**](CardrulesettingsApi.md#cardrulesettingsUpdateBoardCardRuleSettings) | **PATCH** /{organization}/{project}/{team}/_apis/work/boards/{board}/cardrulesettings | 
[**cardrulesettingsUpdateTaskboardCardRuleSettings**](CardrulesettingsApi.md#cardrulesettingsUpdateTaskboardCardRuleSettings) | **PATCH** /{organization}/{project}/{team}/_apis/work/taskboard/cardrulesettings | 


# **cardrulesettingsGet**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardCardRuleSettings cardrulesettingsGet($organization, $project, $board, $team, $apiVersion)



Get board card Rule settings for the board id or board by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\CardrulesettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$board = "board_example"; // string | 
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->cardrulesettingsGet($organization, $project, $board, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardrulesettingsApi->cardrulesettingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **board** | **string**|  |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardCardRuleSettings**](../Model/BoardCardRuleSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cardrulesettingsUpdateBoardCardRuleSettings**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardCardRuleSettings cardrulesettingsUpdateBoardCardRuleSettings($organization, $body, $project, $board, $team, $apiVersion)



Update board card Rule settings for the board id or board by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\CardrulesettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardCardRuleSettings(); // \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardCardRuleSettings | 
$project = "project_example"; // string | Project ID or project name
$board = "board_example"; // string | 
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->cardrulesettingsUpdateBoardCardRuleSettings($organization, $body, $project, $board, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardrulesettingsApi->cardrulesettingsUpdateBoardCardRuleSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardCardRuleSettings**](../Model/BoardCardRuleSettings.md)|  |
 **project** | **string**| Project ID or project name |
 **board** | **string**|  |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardCardRuleSettings**](../Model/BoardCardRuleSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cardrulesettingsUpdateTaskboardCardRuleSettings**
> cardrulesettingsUpdateTaskboardCardRuleSettings($organization, $body, $project, $team, $apiVersion)



Update taskboard card Rule settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Work\Api\CardrulesettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardCardRuleSettings(); // \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardCardRuleSettings | 
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $apiInstance->cardrulesettingsUpdateTaskboardCardRuleSettings($organization, $body, $project, $team, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling CardrulesettingsApi->cardrulesettingsUpdateTaskboardCardRuleSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\BoardCardRuleSettings**](../Model/BoardCardRuleSettings.md)|  |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

