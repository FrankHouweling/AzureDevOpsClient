# AzureDevOpsClient\Tfvc\BranchesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**branchesGetBranchRefs**](BranchesApi.md#branchesGetBranchRefs) | **GET** /{organization}/{project}/_apis/tfvc/branches | 


# **branchesGetBranchRefs**
> \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcBranchRef[] branchesGetBranchRefs($organization, $scopePath, $project, $apiVersion, $includeDeleted, $includeLinks)



Get branch hierarchies below the specified scopePath

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Tfvc\Api\BranchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$scopePath = "scopePath_example"; // string | Full path to the branch.  Default: $/ Examples: $/, $/MyProject, $/MyProject/SomeFolder.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeDeleted = true; // bool | Return deleted branches. Default: False
$includeLinks = true; // bool | Return links. Default: False

try {
    $result = $apiInstance->branchesGetBranchRefs($organization, $scopePath, $project, $apiVersion, $includeDeleted, $includeLinks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->branchesGetBranchRefs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **scopePath** | **string**| Full path to the branch.  Default: $/ Examples: $/, $/MyProject, $/MyProject/SomeFolder. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeDeleted** | **bool**| Return deleted branches. Default: False | [optional]
 **includeLinks** | **bool**| Return links. Default: False | [optional]

### Return type

[**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcBranchRef[]**](../Model/TfvcBranchRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

