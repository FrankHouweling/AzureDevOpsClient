# FrankHouweling\AzureDevOpsClient\Git\PullRequestReviewersApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestReviewersCreatePullRequestReviewer**](PullRequestReviewersApi.md#pullRequestReviewersCreatePullRequestReviewer) | **PUT** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/reviewers/{reviewerId} | 
[**pullRequestReviewersCreatePullRequestReviewers**](PullRequestReviewersApi.md#pullRequestReviewersCreatePullRequestReviewers) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/reviewers | 
[**pullRequestReviewersDelete**](PullRequestReviewersApi.md#pullRequestReviewersDelete) | **DELETE** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/reviewers/{reviewerId} | 
[**pullRequestReviewersGet**](PullRequestReviewersApi.md#pullRequestReviewersGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/reviewers/{reviewerId} | 
[**pullRequestReviewersList**](PullRequestReviewersApi.md#pullRequestReviewersList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/reviewers | 
[**pullRequestReviewersUpdatePullRequestReviewer**](PullRequestReviewersApi.md#pullRequestReviewersUpdatePullRequestReviewer) | **PATCH** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/reviewers/{reviewerId} | 
[**pullRequestReviewersUpdatePullRequestReviewers**](PullRequestReviewersApi.md#pullRequestReviewersUpdatePullRequestReviewers) | **PATCH** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/reviewers | 


# **pullRequestReviewersCreatePullRequestReviewer**
> \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote pullRequestReviewersCreatePullRequestReviewer($organization, $body, $repositoryId, $pullRequestId, $reviewerId, $project, $apiVersion)



Add a reviewer to a pull request or cast a vote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestReviewersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote(); // \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote | Reviewer's vote.<br />If the reviewer's ID is included here, it must match the reviewerID parameter.<br />Reviewers can set their own vote with this method.  When adding other reviewers, vote must be set to zero.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$reviewerId = "reviewerId_example"; // string | ID of the reviewer.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestReviewersCreatePullRequestReviewer($organization, $body, $repositoryId, $pullRequestId, $reviewerId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestReviewersApi->pullRequestReviewersCreatePullRequestReviewer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote**](../Model/IdentityRefWithVote.md)| Reviewer&#39;s vote.&lt;br /&gt;If the reviewer&#39;s ID is included here, it must match the reviewerID parameter.&lt;br /&gt;Reviewers can set their own vote with this method.  When adding other reviewers, vote must be set to zero. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **reviewerId** | **string**| ID of the reviewer. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote**](../Model/IdentityRefWithVote.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestReviewersCreatePullRequestReviewers**
> \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote[] pullRequestReviewersCreatePullRequestReviewers($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)



Add reviewers to a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestReviewersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef()); // \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef[] | Reviewers to add to the pull request.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestReviewersCreatePullRequestReviewers($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestReviewersApi->pullRequestReviewersCreatePullRequestReviewers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef[]**](../Model/IdentityRef.md)| Reviewers to add to the pull request. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote[]**](../Model/IdentityRefWithVote.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestReviewersDelete**
> pullRequestReviewersDelete($organization, $repositoryId, $pullRequestId, $reviewerId, $project, $apiVersion)



Remove a reviewer from a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestReviewersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$reviewerId = "reviewerId_example"; // string | ID of the reviewer to remove.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->pullRequestReviewersDelete($organization, $repositoryId, $pullRequestId, $reviewerId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestReviewersApi->pullRequestReviewersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **reviewerId** | **string**| ID of the reviewer to remove. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestReviewersGet**
> \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote pullRequestReviewersGet($organization, $repositoryId, $pullRequestId, $reviewerId, $project, $apiVersion)



Retrieve information about a particular reviewer on a pull request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestReviewersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$reviewerId = "reviewerId_example"; // string | ID of the reviewer.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestReviewersGet($organization, $repositoryId, $pullRequestId, $reviewerId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestReviewersApi->pullRequestReviewersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **reviewerId** | **string**| ID of the reviewer. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote**](../Model/IdentityRefWithVote.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestReviewersList**
> \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote[] pullRequestReviewersList($organization, $repositoryId, $pullRequestId, $project, $apiVersion)



Retrieve the reviewers for a pull request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestReviewersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestReviewersList($organization, $repositoryId, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestReviewersApi->pullRequestReviewersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote[]**](../Model/IdentityRefWithVote.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestReviewersUpdatePullRequestReviewer**
> \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote pullRequestReviewersUpdatePullRequestReviewer($organization, $body, $repositoryId, $pullRequestId, $reviewerId, $project, $apiVersion)



Edit a reviewer entry. These fields are patchable: isFlagged

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestReviewersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote(); // \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote | Reviewer data.<br />If the reviewer's ID is included here, it must match the reviewerID parameter.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$reviewerId = "reviewerId_example"; // string | ID of the reviewer.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestReviewersUpdatePullRequestReviewer($organization, $body, $repositoryId, $pullRequestId, $reviewerId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestReviewersApi->pullRequestReviewersUpdatePullRequestReviewer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote**](../Model/IdentityRefWithVote.md)| Reviewer data.&lt;br /&gt;If the reviewer&#39;s ID is included here, it must match the reviewerID parameter. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **reviewerId** | **string**| ID of the reviewer. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote**](../Model/IdentityRefWithVote.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestReviewersUpdatePullRequestReviewers**
> pullRequestReviewersUpdatePullRequestReviewers($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)



Reset the votes of multiple reviewers on a pull request.  NOTE: This endpoint only supports updating votes, but does not support updating required reviewers (use policy) or display names.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestReviewersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote()); // \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote[] | IDs of the reviewers whose votes will be reset to zero
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->pullRequestReviewersUpdatePullRequestReviewers($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestReviewersApi->pullRequestReviewersUpdatePullRequestReviewers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote[]**](../Model/IdentityRefWithVote.md)| IDs of the reviewers whose votes will be reset to zero |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

