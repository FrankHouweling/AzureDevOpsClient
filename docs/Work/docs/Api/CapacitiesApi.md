# FrankHouweling\AzureDevOpsClient\Work\CapacitiesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**capacitiesGet**](CapacitiesApi.md#capacitiesGet) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/capacities/{teamMemberId} | 
[**capacitiesList**](CapacitiesApi.md#capacitiesList) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/capacities | 
[**capacitiesReplaceCapacitiesWithIdentityRef**](CapacitiesApi.md#capacitiesReplaceCapacitiesWithIdentityRef) | **PUT** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/capacities | 
[**capacitiesUpdate**](CapacitiesApi.md#capacitiesUpdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/capacities/{teamMemberId} | 


# **capacitiesGet**
> \FrankHouweling\AzureDevOpsClient\Work\Model\TeamMemberCapacityIdentityRef capacitiesGet($organization, $project, $iterationId, $teamMemberId, $team, $apiVersion)



Get a team member's capacity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\CapacitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$iterationId = "iterationId_example"; // string | ID of the iteration
$teamMemberId = "teamMemberId_example"; // string | ID of the team member
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->capacitiesGet($organization, $project, $iterationId, $teamMemberId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacitiesApi->capacitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **iterationId** | [**string**](../Model/.md)| ID of the iteration |
 **teamMemberId** | [**string**](../Model/.md)| ID of the team member |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamMemberCapacityIdentityRef**](../Model/TeamMemberCapacityIdentityRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **capacitiesList**
> \FrankHouweling\AzureDevOpsClient\Work\Model\TeamMemberCapacityIdentityRef[] capacitiesList($organization, $project, $iterationId, $team, $apiVersion)



Get a team's capacity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\CapacitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$iterationId = "iterationId_example"; // string | ID of the iteration
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->capacitiesList($organization, $project, $iterationId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacitiesApi->capacitiesList: ', $e->getMessage(), PHP_EOL;
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
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamMemberCapacityIdentityRef[]**](../Model/TeamMemberCapacityIdentityRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **capacitiesReplaceCapacitiesWithIdentityRef**
> \FrankHouweling\AzureDevOpsClient\Work\Model\TeamMemberCapacityIdentityRef[] capacitiesReplaceCapacitiesWithIdentityRef($organization, $body, $project, $iterationId, $team, $apiVersion)



Replace a team's capacity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\CapacitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\Work\Model\TeamMemberCapacityIdentityRef()); // \FrankHouweling\AzureDevOpsClient\Work\Model\TeamMemberCapacityIdentityRef[] | Team capacity to replace
$project = "project_example"; // string | Project ID or project name
$iterationId = "iterationId_example"; // string | ID of the iteration
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->capacitiesReplaceCapacitiesWithIdentityRef($organization, $body, $project, $iterationId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacitiesApi->capacitiesReplaceCapacitiesWithIdentityRef: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamMemberCapacityIdentityRef[]**](../Model/TeamMemberCapacityIdentityRef.md)| Team capacity to replace |
 **project** | **string**| Project ID or project name |
 **iterationId** | [**string**](../Model/.md)| ID of the iteration |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamMemberCapacityIdentityRef[]**](../Model/TeamMemberCapacityIdentityRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **capacitiesUpdate**
> \FrankHouweling\AzureDevOpsClient\Work\Model\TeamMemberCapacityIdentityRef capacitiesUpdate($organization, $body, $project, $iterationId, $teamMemberId, $team, $apiVersion)



Update a team member's capacity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\CapacitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Work\Model\CapacityPatch(); // \FrankHouweling\AzureDevOpsClient\Work\Model\CapacityPatch | Updated capacity
$project = "project_example"; // string | Project ID or project name
$iterationId = "iterationId_example"; // string | ID of the iteration
$teamMemberId = "teamMemberId_example"; // string | ID of the team member
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->capacitiesUpdate($organization, $body, $project, $iterationId, $teamMemberId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacitiesApi->capacitiesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\CapacityPatch**](../Model/CapacityPatch.md)| Updated capacity |
 **project** | **string**| Project ID or project name |
 **iterationId** | [**string**](../Model/.md)| ID of the iteration |
 **teamMemberId** | [**string**](../Model/.md)| ID of the team member |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamMemberCapacityIdentityRef**](../Model/TeamMemberCapacityIdentityRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

