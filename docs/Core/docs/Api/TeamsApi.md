# AzureDevOpsClient\Core\TeamsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamsCreate**](TeamsApi.md#teamsCreate) | **POST** /{organization}/_apis/projects/{projectId}/teams | 
[**teamsDelete**](TeamsApi.md#teamsDelete) | **DELETE** /{organization}/_apis/projects/{projectId}/teams/{teamId} | 
[**teamsGet**](TeamsApi.md#teamsGet) | **GET** /{organization}/_apis/projects/{projectId}/teams/{teamId} | 
[**teamsGetAllTeams**](TeamsApi.md#teamsGetAllTeams) | **GET** /{organization}/_apis/teams | 
[**teamsGetTeamMembersWithExtendedProperties**](TeamsApi.md#teamsGetTeamMembersWithExtendedProperties) | **GET** /{organization}/_apis/projects/{projectId}/teams/{teamId}/members | 
[**teamsGetTeams**](TeamsApi.md#teamsGetTeams) | **GET** /{organization}/_apis/projects/{projectId}/teams | 
[**teamsUpdate**](TeamsApi.md#teamsUpdate) | **PATCH** /{organization}/_apis/projects/{projectId}/teams/{teamId} | 


# **teamsCreate**
> \AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam teamsCreate($organization, $body, $projectId, $apiVersion)



Create a team in a team project.  Possible failure scenarios Invalid project name/ID (project doesn't exist) 404 Invalid team name or description 400 Team already exists 400 Insufficient privileges 400

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Core\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam(); // \AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam | The team data used to create the team.
$projectId = "projectId_example"; // string | The name or ID (GUID) of the team project in which to create the team.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->teamsCreate($organization, $body, $projectId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam**](../Model/WebApiTeam.md)| The team data used to create the team. |
 **projectId** | **string**| The name or ID (GUID) of the team project in which to create the team. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam**](../Model/WebApiTeam.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsDelete**
> teamsDelete($organization, $projectId, $teamId, $apiVersion)



Delete a team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Core\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$projectId = "projectId_example"; // string | The name or ID (GUID) of the team project containing the team to delete.
$teamId = "teamId_example"; // string | The name or ID of the team to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $apiInstance->teamsDelete($organization, $projectId, $teamId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **projectId** | **string**| The name or ID (GUID) of the team project containing the team to delete. |
 **teamId** | **string**| The name or ID of the team to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsGet**
> \AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam teamsGet($organization, $projectId, $teamId, $apiVersion, $expandIdentity)



Get a specific team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Core\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$projectId = "projectId_example"; // string | The name or ID (GUID) of the team project containing the team.
$teamId = "teamId_example"; // string | The name or ID (GUID) of the team.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$expandIdentity = true; // bool | A value indicating whether or not to expand Identity information in the result WebApiTeam object.

try {
    $result = $apiInstance->teamsGet($organization, $projectId, $teamId, $apiVersion, $expandIdentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **projectId** | **string**| The name or ID (GUID) of the team project containing the team. |
 **teamId** | **string**| The name or ID (GUID) of the team. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **expandIdentity** | **bool**| A value indicating whether or not to expand Identity information in the result WebApiTeam object. | [optional]

### Return type

[**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam**](../Model/WebApiTeam.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsGetAllTeams**
> \AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam[] teamsGetAllTeams($organization, $apiVersion, $mine, $top, $skip, $expandIdentity)



Get a list of all teams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Core\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$mine = true; // bool | If true, then return all teams requesting user is member. Otherwise return all teams user has read access.
$top = 56; // int | Maximum number of teams to return.
$skip = 56; // int | Number of teams to skip.
$expandIdentity = true; // bool | A value indicating whether or not to expand Identity information in the result WebApiTeam object.

try {
    $result = $apiInstance->teamsGetAllTeams($organization, $apiVersion, $mine, $top, $skip, $expandIdentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamsGetAllTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **mine** | **bool**| If true, then return all teams requesting user is member. Otherwise return all teams user has read access. | [optional]
 **top** | **int**| Maximum number of teams to return. | [optional]
 **skip** | **int**| Number of teams to skip. | [optional]
 **expandIdentity** | **bool**| A value indicating whether or not to expand Identity information in the result WebApiTeam object. | [optional]

### Return type

[**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam[]**](../Model/WebApiTeam.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsGetTeamMembersWithExtendedProperties**
> \AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\TeamMember[] teamsGetTeamMembersWithExtendedProperties($organization, $projectId, $teamId, $apiVersion, $top, $skip)



Get a list of members for a specific team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Core\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$projectId = "projectId_example"; // string | The name or ID (GUID) of the team project the team belongs to.
$teamId = "teamId_example"; // string | The name or ID (GUID) of the team .
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$top = 56; // int | 
$skip = 56; // int | 

try {
    $result = $apiInstance->teamsGetTeamMembersWithExtendedProperties($organization, $projectId, $teamId, $apiVersion, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamsGetTeamMembersWithExtendedProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **projectId** | **string**| The name or ID (GUID) of the team project the team belongs to. |
 **teamId** | **string**| The name or ID (GUID) of the team . |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **top** | **int**|  | [optional]
 **skip** | **int**|  | [optional]

### Return type

[**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsGetTeams**
> \AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam[] teamsGetTeams($organization, $projectId, $apiVersion, $mine, $top, $skip, $expandIdentity)



Get a list of teams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Core\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$projectId = "projectId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$mine = true; // bool | If true return all the teams requesting user is member, otherwise return all the teams user has read access.
$top = 56; // int | Maximum number of teams to return.
$skip = 56; // int | Number of teams to skip.
$expandIdentity = true; // bool | A value indicating whether or not to expand Identity information in the result WebApiTeam object.

try {
    $result = $apiInstance->teamsGetTeams($organization, $projectId, $apiVersion, $mine, $top, $skip, $expandIdentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamsGetTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **projectId** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **mine** | **bool**| If true return all the teams requesting user is member, otherwise return all the teams user has read access. | [optional]
 **top** | **int**| Maximum number of teams to return. | [optional]
 **skip** | **int**| Number of teams to skip. | [optional]
 **expandIdentity** | **bool**| A value indicating whether or not to expand Identity information in the result WebApiTeam object. | [optional]

### Return type

[**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam[]**](../Model/WebApiTeam.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsUpdate**
> \AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam teamsUpdate($organization, $body, $projectId, $teamId, $apiVersion)



Update a team's name and/or description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Core\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam(); // \AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam | 
$projectId = "projectId_example"; // string | The name or ID (GUID) of the team project containing the team to update.
$teamId = "teamId_example"; // string | The name of ID of the team to update.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->teamsUpdate($organization, $body, $projectId, $teamId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->teamsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam**](../Model/WebApiTeam.md)|  |
 **projectId** | **string**| The name or ID (GUID) of the team project containing the team to update. |
 **teamId** | **string**| The name of ID of the team to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\WebApiTeam**](../Model/WebApiTeam.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

