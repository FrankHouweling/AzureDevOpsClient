# FrankHouweling\AzureDevOpsClient\Test\SessionApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sessionCreate**](SessionApi.md#sessionCreate) | **POST** /{organization}/{project}/{team}/_apis/test/session | 
[**sessionList**](SessionApi.md#sessionList) | **GET** /{organization}/{project}/{team}/_apis/test/session | 
[**sessionUpdate**](SessionApi.md#sessionUpdate) | **PATCH** /{organization}/{project}/{team}/_apis/test/session | 


# **sessionCreate**
> \FrankHouweling\AzureDevOpsClient\Test\Model\TestSession sessionCreate($organization, $body, $project, $team, $apiVersion)



Create a test session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Test\Model\TestSession(); // \FrankHouweling\AzureDevOpsClient\Test\Model\TestSession | Test session details for creation
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->sessionCreate($organization, $body, $project, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->sessionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\TestSession**](../Model/TestSession.md)| Test session details for creation |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\TestSession**](../Model/TestSession.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionList**
> \FrankHouweling\AzureDevOpsClient\Test\Model\TestSession[] sessionList($organization, $project, $team, $apiVersion, $period, $allSessions, $includeAllProperties, $source, $includeOnlyCompletedSessions)



Get a list of test sessions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$period = 56; // int | Period in days from now, for which test sessions are fetched.
$allSessions = true; // bool | If false, returns test sessions for current user. Otherwise, it returns test sessions for all users
$includeAllProperties = true; // bool | If true, it returns all properties of the test sessions. Otherwise, it returns the skinny version.
$source = "source_example"; // string | Source of the test session.
$includeOnlyCompletedSessions = true; // bool | If true, it returns test sessions in completed state. Otherwise, it returns test sessions for all states

try {
    $result = $apiInstance->sessionList($organization, $project, $team, $apiVersion, $period, $allSessions, $includeAllProperties, $source, $includeOnlyCompletedSessions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->sessionList: ', $e->getMessage(), PHP_EOL;
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
 **period** | **int**| Period in days from now, for which test sessions are fetched. | [optional]
 **allSessions** | **bool**| If false, returns test sessions for current user. Otherwise, it returns test sessions for all users | [optional]
 **includeAllProperties** | **bool**| If true, it returns all properties of the test sessions. Otherwise, it returns the skinny version. | [optional]
 **source** | **string**| Source of the test session. | [optional]
 **includeOnlyCompletedSessions** | **bool**| If true, it returns test sessions in completed state. Otherwise, it returns test sessions for all states | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\TestSession[]**](../Model/TestSession.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionUpdate**
> \FrankHouweling\AzureDevOpsClient\Test\Model\TestSession sessionUpdate($organization, $body, $project, $team, $apiVersion)



Update a test session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Test\Model\TestSession(); // \FrankHouweling\AzureDevOpsClient\Test\Model\TestSession | Test session details for update
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->sessionUpdate($organization, $body, $project, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->sessionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\TestSession**](../Model/TestSession.md)| Test session details for update |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\TestSession**](../Model/TestSession.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

