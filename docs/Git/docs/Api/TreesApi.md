# AzureDevOpsClient\Git\TreesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**treesGet**](TreesApi.md#treesGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/trees/{sha1} | 


# **treesGet**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitTreeRef treesGet($organization, $repositoryId, $sha1, $project, $apiVersion, $projectId, $recursive, $fileName, $format)



The Tree endpoint returns the collection of objects underneath the specified tree. Trees are folders in a Git repository.  Repositories have both a name and an identifier. Identifiers are globally unique, but several projects may contain a repository of the same name. You don't need to include the project if you specify a repository by ID. However, if you specify a repository by name, you must also specify the project (by name or ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\TreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | Repository Id.
$sha1 = "sha1_example"; // string | SHA1 hash of the tree object.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$projectId = "projectId_example"; // string | Project Id.
$recursive = true; // bool | Search recursively. Include trees underneath this tree. Default is false.
$fileName = "fileName_example"; // string | Name to use if a .zip file is returned. Default is the object ID.
$format = "format_example"; // string | Use \"zip\". Defaults to the MIME type set in the Accept header.

try {
    $result = $apiInstance->treesGet($organization, $repositoryId, $sha1, $project, $apiVersion, $projectId, $recursive, $fileName, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreesApi->treesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| Repository Id. |
 **sha1** | **string**| SHA1 hash of the tree object. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **projectId** | **string**| Project Id. | [optional]
 **recursive** | **bool**| Search recursively. Include trees underneath this tree. Default is false. | [optional]
 **fileName** | **string**| Name to use if a .zip file is returned. Default is the object ID. | [optional]
 **format** | **string**| Use \&quot;zip\&quot;. Defaults to the MIME type set in the Accept header. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitTreeRef**](../Model/GitTreeRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

