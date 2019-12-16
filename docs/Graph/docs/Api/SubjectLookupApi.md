# FrankHouweling\AzureDevOpsClient\Graph\SubjectLookupApi

All URIs are relative to *https://vssps.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subjectLookupLookupSubjects**](SubjectLookupApi.md#subjectLookupLookupSubjects) | **POST** /{organization}/_apis/graph/subjectlookup | 


# **subjectLookupLookupSubjects**
> map[string,\FrankHouweling\AzureDevOpsClient\Graph\Model\GraphSubject] subjectLookupLookupSubjects($organization, $body, $apiVersion)



Resolve descriptors to users, groups or scopes (Subjects) in a batch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Graph\Api\SubjectLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Graph\Model\GraphSubjectLookup(); // \FrankHouweling\AzureDevOpsClient\Graph\Model\GraphSubjectLookup | A list of descriptors that specifies a subset of subjects to retrieve. Each descriptor uniquely identifies the subject across all instance scopes, but only at a single point in time.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subjectLookupLookupSubjects($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubjectLookupApi->subjectLookupLookupSubjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Graph\Model\GraphSubjectLookup**](../Model/GraphSubjectLookup.md)| A list of descriptors that specifies a subset of subjects to retrieve. Each descriptor uniquely identifies the subject across all instance scopes, but only at a single point in time. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**map[string,\FrankHouweling\AzureDevOpsClient\Graph\Model\GraphSubject]**](../Model/GraphSubject.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

