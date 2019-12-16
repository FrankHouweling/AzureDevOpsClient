# FrankHouweling\AzureDevOpsClient\Git\PushesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pushesCreate**](PushesApi.md#pushesCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pushes | 
[**pushesGet**](PushesApi.md#pushesGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pushes/{pushId} | 
[**pushesList**](PushesApi.md#pushesList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pushes | 


# **pushesCreate**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitPush pushesCreate($organization, $body, $repositoryId, $project, $apiVersion)



Push changes to the repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PushesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\GitPush(); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitPush | 
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->pushesCreate($organization, $body, $repositoryId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushesApi->pushesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPush**](../Model/GitPush.md)|  |
 **repositoryId** | **string**| The name or ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPush**](../Model/GitPush.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushesGet**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitPush pushesGet($organization, $repositoryId, $pushId, $project, $apiVersion, $includeCommits, $includeRefUpdates)



Retrieves a particular push.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PushesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$pushId = 56; // int | ID of the push.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$includeCommits = 56; // int | The number of commits to include in the result.
$includeRefUpdates = true; // bool | If true, include the list of refs that were updated by the push.

try {
    $result = $apiInstance->pushesGet($organization, $repositoryId, $pushId, $project, $apiVersion, $includeCommits, $includeRefUpdates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushesApi->pushesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The name or ID of the repository. |
 **pushId** | **int**| ID of the push. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **includeCommits** | **int**| The number of commits to include in the result. | [optional]
 **includeRefUpdates** | **bool**| If true, include the list of refs that were updated by the push. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPush**](../Model/GitPush.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushesList**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitPush[] pushesList($organization, $repositoryId, $project, $apiVersion, $skip, $top, $searchCriteriaFromDate, $searchCriteriaIncludeLinks, $searchCriteriaIncludeRefUpdates, $searchCriteriaPusherId, $searchCriteriaRefName, $searchCriteriaToDate)



Retrieves pushes associated with the specified repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PushesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$skip = 56; // int | Number of pushes to skip.
$top = 56; // int | Number of pushes to return.
$searchCriteriaFromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search criteria attributes: fromDate, toDate, pusherId, refName, includeRefUpdates or includeLinks. fromDate: Start date to search from. toDate: End date to search to. pusherId: Identity of the person who submitted the push. refName: Branch name to consider. includeRefUpdates: If true, include the list of refs that were updated by the push. includeLinks: Whether to include the _links field on the shallow references.
$searchCriteriaIncludeLinks = true; // bool | Whether to include the _links field on the shallow references
$searchCriteriaIncludeRefUpdates = true; // bool | Search criteria attributes: fromDate, toDate, pusherId, refName, includeRefUpdates or includeLinks. fromDate: Start date to search from. toDate: End date to search to. pusherId: Identity of the person who submitted the push. refName: Branch name to consider. includeRefUpdates: If true, include the list of refs that were updated by the push. includeLinks: Whether to include the _links field on the shallow references.
$searchCriteriaPusherId = "searchCriteriaPusherId_example"; // string | Search criteria attributes: fromDate, toDate, pusherId, refName, includeRefUpdates or includeLinks. fromDate: Start date to search from. toDate: End date to search to. pusherId: Identity of the person who submitted the push. refName: Branch name to consider. includeRefUpdates: If true, include the list of refs that were updated by the push. includeLinks: Whether to include the _links field on the shallow references.
$searchCriteriaRefName = "searchCriteriaRefName_example"; // string | Search criteria attributes: fromDate, toDate, pusherId, refName, includeRefUpdates or includeLinks. fromDate: Start date to search from. toDate: End date to search to. pusherId: Identity of the person who submitted the push. refName: Branch name to consider. includeRefUpdates: If true, include the list of refs that were updated by the push. includeLinks: Whether to include the _links field on the shallow references.
$searchCriteriaToDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search criteria attributes: fromDate, toDate, pusherId, refName, includeRefUpdates or includeLinks. fromDate: Start date to search from. toDate: End date to search to. pusherId: Identity of the person who submitted the push. refName: Branch name to consider. includeRefUpdates: If true, include the list of refs that were updated by the push. includeLinks: Whether to include the _links field on the shallow references.

try {
    $result = $apiInstance->pushesList($organization, $repositoryId, $project, $apiVersion, $skip, $top, $searchCriteriaFromDate, $searchCriteriaIncludeLinks, $searchCriteriaIncludeRefUpdates, $searchCriteriaPusherId, $searchCriteriaRefName, $searchCriteriaToDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushesApi->pushesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The name or ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **skip** | **int**| Number of pushes to skip. | [optional]
 **top** | **int**| Number of pushes to return. | [optional]
 **searchCriteriaFromDate** | **\DateTime**| Search criteria attributes: fromDate, toDate, pusherId, refName, includeRefUpdates or includeLinks. fromDate: Start date to search from. toDate: End date to search to. pusherId: Identity of the person who submitted the push. refName: Branch name to consider. includeRefUpdates: If true, include the list of refs that were updated by the push. includeLinks: Whether to include the _links field on the shallow references. | [optional]
 **searchCriteriaIncludeLinks** | **bool**| Whether to include the _links field on the shallow references | [optional]
 **searchCriteriaIncludeRefUpdates** | **bool**| Search criteria attributes: fromDate, toDate, pusherId, refName, includeRefUpdates or includeLinks. fromDate: Start date to search from. toDate: End date to search to. pusherId: Identity of the person who submitted the push. refName: Branch name to consider. includeRefUpdates: If true, include the list of refs that were updated by the push. includeLinks: Whether to include the _links field on the shallow references. | [optional]
 **searchCriteriaPusherId** | [**string**](../Model/.md)| Search criteria attributes: fromDate, toDate, pusherId, refName, includeRefUpdates or includeLinks. fromDate: Start date to search from. toDate: End date to search to. pusherId: Identity of the person who submitted the push. refName: Branch name to consider. includeRefUpdates: If true, include the list of refs that were updated by the push. includeLinks: Whether to include the _links field on the shallow references. | [optional]
 **searchCriteriaRefName** | **string**| Search criteria attributes: fromDate, toDate, pusherId, refName, includeRefUpdates or includeLinks. fromDate: Start date to search from. toDate: End date to search to. pusherId: Identity of the person who submitted the push. refName: Branch name to consider. includeRefUpdates: If true, include the list of refs that were updated by the push. includeLinks: Whether to include the _links field on the shallow references. | [optional]
 **searchCriteriaToDate** | **\DateTime**| Search criteria attributes: fromDate, toDate, pusherId, refName, includeRefUpdates or includeLinks. fromDate: Start date to search from. toDate: End date to search to. pusherId: Identity of the person who submitted the push. refName: Branch name to consider. includeRefUpdates: If true, include the list of refs that were updated by the push. includeLinks: Whether to include the _links field on the shallow references. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPush[]**](../Model/GitPush.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

