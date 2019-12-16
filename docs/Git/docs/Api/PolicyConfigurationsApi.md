# FrankHouweling\AzureDevOpsClient\Git\PolicyConfigurationsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**policyConfigurationsGet**](PolicyConfigurationsApi.md#policyConfigurationsGet) | **GET** /{organization}/{project}/_apis/git/policy/configurations | 


# **policyConfigurationsGet**
> \FrankHouweling\AzureDevOpsClient\Git\Model\PolicyConfiguration[] policyConfigurationsGet($organization, $project, $apiVersion, $repositoryId, $refName, $policyType, $top, $continuationToken)



Retrieve a list of policy configurations by a given set of scope/filtering criteria.  Below is a short description of how all of the query parameters interact with each other: - repositoryId set, refName set: returns all policy configurations that *apply* to a particular branch in a repository - repositoryId set, refName unset: returns all policy configurations that *apply* to a particular repository - repositoryId unset, refName unset: returns all policy configurations that are *defined* at the project level - repositoryId unset, refName set: returns all project-level branch policies, plus the project level configurations For all of the examples above, when policyType is set, it'll restrict results to the given policy type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PolicyConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$repositoryId = "repositoryId_example"; // string | The repository id.
$refName = "refName_example"; // string | The fully-qualified Git ref name (e.g. refs/heads/master).
$policyType = "policyType_example"; // string | The policy type filter.
$top = 56; // int | Maximum number of policies to return.
$continuationToken = "continuationToken_example"; // string | Pass a policy configuration ID to fetch the next page of results, up to top number of results, for this endpoint.

try {
    $result = $apiInstance->policyConfigurationsGet($organization, $project, $apiVersion, $repositoryId, $refName, $policyType, $top, $continuationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PolicyConfigurationsApi->policyConfigurationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **repositoryId** | [**string**](../Model/.md)| The repository id. | [optional]
 **refName** | **string**| The fully-qualified Git ref name (e.g. refs/heads/master). | [optional]
 **policyType** | [**string**](../Model/.md)| The policy type filter. | [optional]
 **top** | **int**| Maximum number of policies to return. | [optional]
 **continuationToken** | **string**| Pass a policy configuration ID to fetch the next page of results, up to top number of results, for this endpoint. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\PolicyConfiguration[]**](../Model/PolicyConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

