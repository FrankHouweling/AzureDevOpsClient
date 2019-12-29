# FrankHouweling\AzureDevOpsClient\Artifacts\RetentionPoliciesApi

All URIs are relative to *https://feeds.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retentionPoliciesDeleteRetentionPolicy**](RetentionPoliciesApi.md#retentionPoliciesDeleteRetentionPolicy) | **DELETE** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/retentionpolicies | 
[**retentionPoliciesGetRetentionPolicy**](RetentionPoliciesApi.md#retentionPoliciesGetRetentionPolicy) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/retentionpolicies | 
[**retentionPoliciesSetRetentionPolicy**](RetentionPoliciesApi.md#retentionPoliciesSetRetentionPolicy) | **PUT** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/retentionpolicies | 


# **retentionPoliciesDeleteRetentionPolicy**
> retentionPoliciesDeleteRetentionPolicy($organization, $feedId, $project, $apiVersion)



Delete the retention policy for a feed.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\RetentionPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->retentionPoliciesDeleteRetentionPolicy($organization, $feedId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling RetentionPoliciesApi->retentionPoliciesDeleteRetentionPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
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

# **retentionPoliciesGetRetentionPolicy**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedRetentionPolicy retentionPoliciesGetRetentionPolicy($organization, $feedId, $project, $apiVersion)



Get the retention policy for a feed.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\RetentionPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->retentionPoliciesGetRetentionPolicy($organization, $feedId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetentionPoliciesApi->retentionPoliciesGetRetentionPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedRetentionPolicy**](../Model/FeedRetentionPolicy.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retentionPoliciesSetRetentionPolicy**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedRetentionPolicy retentionPoliciesSetRetentionPolicy($organization, $body, $feedId, $project, $apiVersion)



Set the retention policy for a feed.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\RetentionPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedRetentionPolicy(); // \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedRetentionPolicy | Feed retention policy.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->retentionPoliciesSetRetentionPolicy($organization, $body, $feedId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetentionPoliciesApi->retentionPoliciesSetRetentionPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedRetentionPolicy**](../Model/FeedRetentionPolicy.md)| Feed retention policy. |
 **feedId** | **string**| Name or ID of the feed. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedRetentionPolicy**](../Model/FeedRetentionPolicy.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

