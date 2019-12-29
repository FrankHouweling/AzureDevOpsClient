# FrankHouweling\AzureDevOpsClient\Git\BlobsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**blobsGetBlob**](BlobsApi.md#blobsGetBlob) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/blobs/{sha1} | 
[**blobsGetBlobsZip**](BlobsApi.md#blobsGetBlobsZip) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/blobs | 


# **blobsGetBlob**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitBlobRef blobsGetBlob($organization, $repositoryId, $sha1, $project, $apiVersion, $download, $fileName, $format, $resolveLfs)



Get a single blob.  Repositories have both a name and an identifier. Identifiers are globally unique, but several projects may contain a repository of the same name. You don't need to include the project if you specify a repository by ID. However, if you specify a repository by name, you must also specify the project (by name or ID).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\BlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$sha1 = "sha1_example"; // string | SHA1 hash of the file. You can get the SHA1 of a file using the \"Git/Items/Get Item\" endpoint.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$download = true; // bool | If true, prompt for a download rather than rendering in a browser. Note: this value defaults to true if $format is zip
$fileName = "fileName_example"; // string | Provide a fileName to use for a download.
$format = "format_example"; // string | Options: json, zip, text, octetstream. If not set, defaults to the MIME type set in the Accept header.
$resolveLfs = true; // bool | If true, try to resolve a blob to its LFS contents, if it's an LFS pointer file. Only compatible with octet-stream Accept headers or $format types

try {
    $result = $apiInstance->blobsGetBlob($organization, $repositoryId, $sha1, $project, $apiVersion, $download, $fileName, $format, $resolveLfs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobsApi->blobsGetBlob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The name or ID of the repository. |
 **sha1** | **string**| SHA1 hash of the file. You can get the SHA1 of a file using the \&quot;Git/Items/Get Item\&quot; endpoint. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **download** | **bool**| If true, prompt for a download rather than rendering in a browser. Note: this value defaults to true if $format is zip | [optional]
 **fileName** | **string**| Provide a fileName to use for a download. | [optional]
 **format** | **string**| Options: json, zip, text, octetstream. If not set, defaults to the MIME type set in the Accept header. | [optional]
 **resolveLfs** | **bool**| If true, try to resolve a blob to its LFS contents, if it&#39;s an LFS pointer file. Only compatible with octet-stream Accept headers or $format types | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitBlobRef**](../Model/GitBlobRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blobsGetBlobsZip**
> string blobsGetBlobsZip($organization, $body, $repositoryId, $project, $apiVersion, $filename)



Gets one or more blobs in a zip file download.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\BlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\Git\Model\string[]()); // string[] | Blob IDs (SHA1 hashes) to be returned in the zip file.
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$filename = "filename_example"; // string | 

try {
    $result = $apiInstance->blobsGetBlobsZip($organization, $body, $repositoryId, $project, $apiVersion, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobsApi->blobsGetBlobsZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | **string[]**| Blob IDs (SHA1 hashes) to be returned in the zip file. |
 **repositoryId** | **string**| The name or ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **filename** | **string**|  | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

