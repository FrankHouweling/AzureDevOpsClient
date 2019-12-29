# FrankHouweling\AzureDevOpsClient\Git\AnnotatedTagsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**annotatedTagsCreate**](AnnotatedTagsApi.md#annotatedTagsCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/annotatedtags | 
[**annotatedTagsGet**](AnnotatedTagsApi.md#annotatedTagsGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/annotatedtags/{objectId} | 


# **annotatedTagsCreate**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitAnnotatedTag annotatedTagsCreate($organization, $body, $project, $repositoryId, $apiVersion)



Create an annotated tag.  Repositories have both a name and an identifier. Identifiers are globally unique, but several projects may contain a repository of the same name. You don't need to include the project if you specify a repository by ID. However, if you specify a repository by name, you must also specify the project (by name or ID).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\AnnotatedTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\GitAnnotatedTag(); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitAnnotatedTag | Object containing details of tag to be created.
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | ID or name of the repository.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->annotatedTagsCreate($organization, $body, $project, $repositoryId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnotatedTagsApi->annotatedTagsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitAnnotatedTag**](../Model/GitAnnotatedTag.md)| Object containing details of tag to be created. |
 **project** | **string**| Project ID or project name |
 **repositoryId** | **string**| ID or name of the repository. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitAnnotatedTag**](../Model/GitAnnotatedTag.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **annotatedTagsGet**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitAnnotatedTag annotatedTagsGet($organization, $project, $repositoryId, $objectId, $apiVersion)



Get an annotated tag.  Repositories have both a name and an identifier. Identifiers are globally unique, but several projects may contain a repository of the same name. You don't need to include the project if you specify a repository by ID. However, if you specify a repository by name, you must also specify the project (by name or ID).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\AnnotatedTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | ID or name of the repository.
$objectId = "objectId_example"; // string | ObjectId (Sha1Id) of tag to get.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->annotatedTagsGet($organization, $project, $repositoryId, $objectId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnotatedTagsApi->annotatedTagsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **repositoryId** | **string**| ID or name of the repository. |
 **objectId** | **string**| ObjectId (Sha1Id) of tag to get. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitAnnotatedTag**](../Model/GitAnnotatedTag.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

