# AzureDevOpsClient\Work\IterationsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**iterationsDelete**](IterationsApi.md#iterationsDelete) | **DELETE** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{id} | 
[**iterationsGet**](IterationsApi.md#iterationsGet) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{id} | 
[**iterationsGetIterationWorkItems**](IterationsApi.md#iterationsGetIterationWorkItems) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/workitems | 
[**iterationsList**](IterationsApi.md#iterationsList) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations | 
[**iterationsPostTeamIteration**](IterationsApi.md#iterationsPostTeamIteration) | **POST** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations | 


# **iterationsDelete**
> iterationsDelete($organization, $project, $id, $team, $apiVersion)



Delete a team's iteration by iterationId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\IterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$id = "id_example"; // string | ID of the iteration
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->iterationsDelete($organization, $project, $id, $team, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **id** | [**string**](../Model/.md)| ID of the iteration |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iterationsGet**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsIteration iterationsGet($organization, $project, $id, $team, $apiVersion)



Get team's iteration by iterationId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\IterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$id = "id_example"; // string | ID of the iteration
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->iterationsGet($organization, $project, $id, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **id** | [**string**](../Model/.md)| ID of the iteration |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsIteration**](../Model/TeamSettingsIteration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iterationsGetIterationWorkItems**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\IterationWorkItems iterationsGetIterationWorkItems($organization, $project, $iterationId, $team, $apiVersion)



Get work items for iteration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\IterationsApi(
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
    $result = $apiInstance->iterationsGetIterationWorkItems($organization, $project, $iterationId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsGetIterationWorkItems: ', $e->getMessage(), PHP_EOL;
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

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\IterationWorkItems**](../Model/IterationWorkItems.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iterationsList**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsIteration[] iterationsList($organization, $project, $team, $apiVersion, $timeframe)



Get a team's iterations using timeframe filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\IterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$timeframe = "timeframe_example"; // string | A filter for which iterations are returned based on relative time. Only Current is supported currently.

try {
    $result = $apiInstance->iterationsList($organization, $project, $team, $apiVersion, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsList: ', $e->getMessage(), PHP_EOL;
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
 **timeframe** | **string**| A filter for which iterations are returned based on relative time. Only Current is supported currently. | [optional]

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsIteration[]**](../Model/TeamSettingsIteration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iterationsPostTeamIteration**
> \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsIteration iterationsPostTeamIteration($organization, $body, $project, $team, $apiVersion)



Add an iteration to the team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Work\Api\IterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsIteration(); // \AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsIteration | Iteration to add
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->iterationsPostTeamIteration($organization, $body, $project, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsPostTeamIteration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsIteration**](../Model/TeamSettingsIteration.md)| Iteration to add |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\TeamSettingsIteration**](../Model/TeamSettingsIteration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

