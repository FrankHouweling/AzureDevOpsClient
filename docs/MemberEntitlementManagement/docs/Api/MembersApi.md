# FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\MembersApi

All URIs are relative to *https://vsaex.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**membersAdd**](MembersApi.md#membersAdd) | **PUT** /{organization}/_apis/GroupEntitlements/{groupId}/members/{memberId} | 
[**membersGet**](MembersApi.md#membersGet) | **GET** /{organization}/_apis/GroupEntitlements/{groupId}/members | 
[**membersRemoveMemberFromGroup**](MembersApi.md#membersRemoveMemberFromGroup) | **DELETE** /{organization}/_apis/GroupEntitlements/{groupId}/members/{memberId} | 


# **membersAdd**
> membersAdd($organization, $groupId, $memberId, $apiVersion)



Add a member to a Group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$groupId = "groupId_example"; // string | Id of the Group.
$memberId = "memberId_example"; // string | Id of the member to add.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->membersAdd($organization, $groupId, $memberId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->membersAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **groupId** | [**string**](../Model/.md)| Id of the Group. |
 **memberId** | [**string**](../Model/.md)| Id of the member to add. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membersGet**
> \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\PagedGraphMemberList membersGet($organization, $groupId, $apiVersion, $maxResults, $pagingToken)



Get direct members of a Group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$groupId = "groupId_example"; // string | Id of the Group.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$maxResults = 56; // int | Maximum number of results to retrieve.
$pagingToken = "pagingToken_example"; // string | Paging Token from the previous page fetched. If the 'pagingToken' is null, the results would be fetched from the beginning of the Members List.

try {
    $result = $apiInstance->membersGet($organization, $groupId, $apiVersion, $maxResults, $pagingToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->membersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **groupId** | [**string**](../Model/.md)| Id of the Group. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **maxResults** | **int**| Maximum number of results to retrieve. | [optional]
 **pagingToken** | **string**| Paging Token from the previous page fetched. If the &#39;pagingToken&#39; is null, the results would be fetched from the beginning of the Members List. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\PagedGraphMemberList**](../Model/PagedGraphMemberList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membersRemoveMemberFromGroup**
> membersRemoveMemberFromGroup($organization, $groupId, $memberId, $apiVersion)



Remove a member from a Group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$groupId = "groupId_example"; // string | Id of the group.
$memberId = "memberId_example"; // string | Id of the member to remove.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->membersRemoveMemberFromGroup($organization, $groupId, $memberId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->membersRemoveMemberFromGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **groupId** | [**string**](../Model/.md)| Id of the group. |
 **memberId** | [**string**](../Model/.md)| Id of the member to remove. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

