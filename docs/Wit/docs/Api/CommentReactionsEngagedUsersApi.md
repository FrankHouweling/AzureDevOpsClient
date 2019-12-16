# FrankHouweling\AzureDevOpsClient\Wit\CommentReactionsEngagedUsersApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**commentReactionsEngagedUsersList**](CommentReactionsEngagedUsersApi.md#commentReactionsEngagedUsersList) | **GET** /{organization}/{project}/_apis/wit/workItems/{workItemId}/comments/{commentId}/reactions/{reactionType}/users | 


# **commentReactionsEngagedUsersList**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef[] commentReactionsEngagedUsersList($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion, $top, $skip)



Get users who reacted on the comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\CommentReactionsEngagedUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$workItemId = 56; // int | WorkItem ID.
$commentId = 56; // int | Comment ID.
$reactionType = "reactionType_example"; // string | Type of the reaction.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$top = 56; // int | 
$skip = 56; // int | 

try {
    $result = $apiInstance->commentReactionsEngagedUsersList($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentReactionsEngagedUsersApi->commentReactionsEngagedUsersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **workItemId** | **int**| WorkItem ID. |
 **commentId** | **int**| Comment ID. |
 **reactionType** | **string**| Type of the reaction. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **top** | **int**|  | [optional]
 **skip** | **int**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef[]**](../Model/IdentityRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

