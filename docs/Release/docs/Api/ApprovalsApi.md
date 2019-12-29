# FrankHouweling\AzureDevOpsClient\Release\ApprovalsApi

All URIs are relative to *https://vsrm.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approvalsList**](ApprovalsApi.md#approvalsList) | **GET** /{organization}/{project}/_apis/release/approvals | 
[**approvalsUpdate**](ApprovalsApi.md#approvalsUpdate) | **PATCH** /{organization}/{project}/_apis/release/approvals/{approvalId} | 


# **approvalsList**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval[] approvalsList($organization, $project, $apiVersion, $assignedToFilter, $statusFilter, $releaseIdsFilter, $typeFilter, $top, $continuationToken, $queryOrder, $includeMyGroupApprovals)



Get a list of approvals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$assignedToFilter = "assignedToFilter_example"; // string | Approvals assigned to this user.
$statusFilter = "statusFilter_example"; // string | Approvals with this status. Default is 'pending'.
$releaseIdsFilter = "releaseIdsFilter_example"; // string | Approvals for release id(s) mentioned in the filter. Multiple releases can be mentioned by separating them with ',' e.g. releaseIdsFilter=1,2,3,4.
$typeFilter = "typeFilter_example"; // string | Approval with this type.
$top = 56; // int | Number of approvals to get. Default is 50.
$continuationToken = 56; // int | Gets the approvals after the continuation token provided.
$queryOrder = "queryOrder_example"; // string | Gets the results in the defined order of created approvals. Default is 'descending'.
$includeMyGroupApprovals = true; // bool | 'true' to include my group approvals. Default is 'false'.

try {
    $result = $apiInstance->approvalsList($organization, $project, $apiVersion, $assignedToFilter, $statusFilter, $releaseIdsFilter, $typeFilter, $top, $continuationToken, $queryOrder, $includeMyGroupApprovals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->approvalsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **assignedToFilter** | **string**| Approvals assigned to this user. | [optional]
 **statusFilter** | **string**| Approvals with this status. Default is &#39;pending&#39;. | [optional]
 **releaseIdsFilter** | **string**| Approvals for release id(s) mentioned in the filter. Multiple releases can be mentioned by separating them with &#39;,&#39; e.g. releaseIdsFilter&#x3D;1,2,3,4. | [optional]
 **typeFilter** | **string**| Approval with this type. | [optional]
 **top** | **int**| Number of approvals to get. Default is 50. | [optional]
 **continuationToken** | **int**| Gets the approvals after the continuation token provided. | [optional]
 **queryOrder** | **string**| Gets the results in the defined order of created approvals. Default is &#39;descending&#39;. | [optional]
 **includeMyGroupApprovals** | **bool**| &#39;true&#39; to include my group approvals. Default is &#39;false&#39;. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval[]**](../Model/ReleaseApproval.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approvalsUpdate**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval approvalsUpdate($organization, $body, $project, $approvalId, $apiVersion)



Update status of an approval

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval(); // \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval | ReleaseApproval object having status, approver and comments.
$project = "project_example"; // string | Project ID or project name
$approvalId = 56; // int | Id of the approval.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->approvalsUpdate($organization, $body, $project, $approvalId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->approvalsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval**](../Model/ReleaseApproval.md)| ReleaseApproval object having status, approver and comments. |
 **project** | **string**| Project ID or project name |
 **approvalId** | **int**| Id of the approval. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval**](../Model/ReleaseApproval.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

