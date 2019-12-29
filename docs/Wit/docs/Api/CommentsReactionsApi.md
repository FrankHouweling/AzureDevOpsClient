# FrankHouweling\AzureDevOpsClient\Wit\CommentsReactionsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**commentsReactionsCreate**](CommentsReactionsApi.md#commentsReactionsCreate) | **PUT** /{organization}/{project}/_apis/wit/workItems/{workItemId}/comments/{commentId}/reactions/{reactionType} | 
[**commentsReactionsDelete**](CommentsReactionsApi.md#commentsReactionsDelete) | **DELETE** /{organization}/{project}/_apis/wit/workItems/{workItemId}/comments/{commentId}/reactions/{reactionType} | 
[**commentsReactionsList**](CommentsReactionsApi.md#commentsReactionsList) | **GET** /{organization}/{project}/_apis/wit/workItems/{workItemId}/comments/{commentId}/reactions | 


# **commentsReactionsCreate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentReaction commentsReactionsCreate($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion)



Adds a new reaction to a comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\CommentsReactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$workItemId = 56; // int | WorkItem ID
$commentId = 56; // int | Comment ID
$reactionType = "reactionType_example"; // string | Type of the reaction
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->commentsReactionsCreate($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsReactionsApi->commentsReactionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **workItemId** | **int**| WorkItem ID |
 **commentId** | **int**| Comment ID |
 **reactionType** | **string**| Type of the reaction |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\CommentReaction**](../Model/CommentReaction.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentsReactionsDelete**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentReaction commentsReactionsDelete($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion)



Deletes an existing reaction on a comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\CommentsReactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$workItemId = 56; // int | WorkItem ID
$commentId = 56; // int | Comment ID
$reactionType = "reactionType_example"; // string | Type of the reaction
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->commentsReactionsDelete($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsReactionsApi->commentsReactionsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **workItemId** | **int**| WorkItem ID |
 **commentId** | **int**| Comment ID |
 **reactionType** | **string**| Type of the reaction |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\CommentReaction**](../Model/CommentReaction.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentsReactionsList**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentReaction[] commentsReactionsList($organization, $project, $workItemId, $commentId, $apiVersion)



Gets reactions of a comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\CommentsReactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$workItemId = 56; // int | WorkItem ID
$commentId = 56; // int | Comment ID
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->commentsReactionsList($organization, $project, $workItemId, $commentId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsReactionsApi->commentsReactionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **workItemId** | **int**| WorkItem ID |
 **commentId** | **int**| Comment ID |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\CommentReaction[]**](../Model/CommentReaction.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

