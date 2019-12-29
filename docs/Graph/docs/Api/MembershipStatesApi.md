# FrankHouweling\AzureDevOpsClient\Graph\MembershipStatesApi

All URIs are relative to *https://vssps.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**membershipStatesGet**](MembershipStatesApi.md#membershipStatesGet) | **GET** /{organization}/_apis/graph/membershipstates/{subjectDescriptor} | 


# **membershipStatesGet**
> \FrankHouweling\AzureDevOpsClient\Graph\Model\GraphMembershipState membershipStatesGet($organization, $subjectDescriptor, $apiVersion)



Check whether a subject is active or inactive.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Graph\Api\MembershipStatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$subjectDescriptor = "subjectDescriptor_example"; // string | Descriptor of the subject (user, group, scope, etc.) to check state of
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->membershipStatesGet($organization, $subjectDescriptor, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipStatesApi->membershipStatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **subjectDescriptor** | **string**| Descriptor of the subject (user, group, scope, etc.) to check state of |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Graph\Model\GraphMembershipState**](../Model/GraphMembershipState.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

