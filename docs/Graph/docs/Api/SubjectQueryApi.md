# FrankHouweling\AzureDevOpsClient\Graph\SubjectQueryApi

All URIs are relative to *https://vssps.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subjectQueryQuery**](SubjectQueryApi.md#subjectQueryQuery) | **POST** /{organization}/_apis/graph/subjectquery | 


# **subjectQueryQuery**
> \FrankHouweling\AzureDevOpsClient\Graph\Model\GraphSubject[] subjectQueryQuery($organization, $body, $apiVersion)



Search for Azure Devops users, or/and groups. Results will be returned in a batch with no more than 100 graph subjects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Graph\Api\SubjectQueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Graph\Model\GraphSubjectQuery(); // \FrankHouweling\AzureDevOpsClient\Graph\Model\GraphSubjectQuery | The query that we'll be using to search includes the following: Query: the search term. The search will be prefix matching only. SubjectKind: \"User\" or \"Group\" can be specified, both or either ScopeDescriptor: Non-default scope can be specified, i.e. project scope descriptor
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subjectQueryQuery($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubjectQueryApi->subjectQueryQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Graph\Model\GraphSubjectQuery**](../Model/GraphSubjectQuery.md)| The query that we&#39;ll be using to search includes the following: Query: the search term. The search will be prefix matching only. SubjectKind: \&quot;User\&quot; or \&quot;Group\&quot; can be specified, both or either ScopeDescriptor: Non-default scope can be specified, i.e. project scope descriptor |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Graph\Model\GraphSubject[]**](../Model/GraphSubject.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

