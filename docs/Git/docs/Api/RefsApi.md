# FrankHouweling\AzureDevOpsClient\Git\RefsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refsList**](RefsApi.md#refsList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/refs | 
[**refsUpdateRef**](RefsApi.md#refsUpdateRef) | **PATCH** /{organization}/{project}/_apis/git/repositories/{repositoryId}/refs | 
[**refsUpdateRefs**](RefsApi.md#refsUpdateRefs) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/refs | 


# **refsList**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRef[] refsList($organization, $repositoryId, $project, $apiVersion, $filter, $includeLinks, $includeStatuses, $includeMyBranches, $latestStatusesOnly, $peelTags, $filterContains, $top, $continuationToken)



Queries the provided repository for its refs and returns them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RefsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$filter = "filter_example"; // string | [optional] A filter to apply to the refs (starts with).
$includeLinks = true; // bool | [optional] Specifies if referenceLinks should be included in the result. default is false.
$includeStatuses = true; // bool | [optional] Includes up to the first 1000 commit statuses for each ref. The default value is false.
$includeMyBranches = true; // bool | [optional] Includes only branches that the user owns, the branches the user favorites, and the default branch. The default value is false. Cannot be combined with the filter parameter.
$latestStatusesOnly = true; // bool | [optional] True to include only the tip commit status for each ref. This option requires `includeStatuses` to be true. The default value is false.
$peelTags = true; // bool | [optional] Annotated tags will populate the PeeledObjectId property. default is false.
$filterContains = "filterContains_example"; // string | [optional] A filter to apply to the refs (contains).
$top = 56; // int | [optional] Maximum number of refs to return. It cannot be bigger than 1000. If it is not provided but continuationToken is, top will default to 100.
$continuationToken = "continuationToken_example"; // string | The continuation token used for pagination.

try {
    $result = $apiInstance->refsList($organization, $repositoryId, $project, $apiVersion, $filter, $includeLinks, $includeStatuses, $includeMyBranches, $latestStatusesOnly, $peelTags, $filterContains, $top, $continuationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefsApi->refsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The name or ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **filter** | **string**| [optional] A filter to apply to the refs (starts with). | [optional]
 **includeLinks** | **bool**| [optional] Specifies if referenceLinks should be included in the result. default is false. | [optional]
 **includeStatuses** | **bool**| [optional] Includes up to the first 1000 commit statuses for each ref. The default value is false. | [optional]
 **includeMyBranches** | **bool**| [optional] Includes only branches that the user owns, the branches the user favorites, and the default branch. The default value is false. Cannot be combined with the filter parameter. | [optional]
 **latestStatusesOnly** | **bool**| [optional] True to include only the tip commit status for each ref. This option requires &#x60;includeStatuses&#x60; to be true. The default value is false. | [optional]
 **peelTags** | **bool**| [optional] Annotated tags will populate the PeeledObjectId property. default is false. | [optional]
 **filterContains** | **string**| [optional] A filter to apply to the refs (contains). | [optional]
 **top** | **int**| [optional] Maximum number of refs to return. It cannot be bigger than 1000. If it is not provided but continuationToken is, top will default to 100. | [optional]
 **continuationToken** | **string**| The continuation token used for pagination. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRef[]**](../Model/GitRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refsUpdateRef**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRef refsUpdateRef($organization, $body, $repositoryId, $filter, $project, $apiVersion, $projectId)



Lock or Unlock a branch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RefsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\GitRefUpdate(); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitRefUpdate | The ref update action (lock/unlock) to perform
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$filter = "filter_example"; // string | The name of the branch to lock/unlock
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$projectId = "projectId_example"; // string | ID or name of the team project. Optional if specifying an ID for repository.

try {
    $result = $apiInstance->refsUpdateRef($organization, $body, $repositoryId, $filter, $project, $apiVersion, $projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefsApi->refsUpdateRef: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRefUpdate**](../Model/GitRefUpdate.md)| The ref update action (lock/unlock) to perform |
 **repositoryId** | **string**| The name or ID of the repository. |
 **filter** | **string**| The name of the branch to lock/unlock |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **projectId** | **string**| ID or name of the team project. Optional if specifying an ID for repository. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRef**](../Model/GitRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refsUpdateRefs**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRefUpdateResult[] refsUpdateRefs($organization, $body, $repositoryId, $project, $apiVersion, $projectId)



Creating, updating, or deleting refs(branches).  Updating a ref means making it point at a different commit than it used to. You must specify both the old and new commit to avoid race conditions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RefsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\Git\Model\GitRefUpdate()); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitRefUpdate[] | List of ref updates to attempt to perform
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$projectId = "projectId_example"; // string | ID or name of the team project. Optional if specifying an ID for repository.

try {
    $result = $apiInstance->refsUpdateRefs($organization, $body, $repositoryId, $project, $apiVersion, $projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefsApi->refsUpdateRefs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRefUpdate[]**](../Model/GitRefUpdate.md)| List of ref updates to attempt to perform |
 **repositoryId** | **string**| The name or ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **projectId** | **string**| ID or name of the team project. Optional if specifying an ID for repository. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRefUpdateResult[]**](../Model/GitRefUpdateResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

