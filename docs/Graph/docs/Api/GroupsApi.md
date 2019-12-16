# AzureDevOpsClient\Graph\GroupsApi

All URIs are relative to *https://vssps.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupsCreate**](GroupsApi.md#groupsCreate) | **POST** /{organization}/_apis/graph/groups | 
[**groupsDelete**](GroupsApi.md#groupsDelete) | **DELETE** /{organization}/_apis/graph/groups/{groupDescriptor} | 
[**groupsGet**](GroupsApi.md#groupsGet) | **GET** /{organization}/_apis/graph/groups/{groupDescriptor} | 
[**groupsList**](GroupsApi.md#groupsList) | **GET** /{organization}/_apis/graph/groups | 
[**groupsUpdate**](GroupsApi.md#groupsUpdate) | **PATCH** /{organization}/_apis/graph/groups/{groupDescriptor} | 


# **groupsCreate**
> \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphGroup groupsCreate($organization, $body, $apiVersion, $scopeDescriptor, $groupDescriptors)



Create a new Azure DevOps group or materialize an existing AAD group.  The body of the request must be a derived type of GraphGroupCreationContext:   * GraphGroupVstsCreationContext - Create a new Azure DevOps group that is not backed by an external provider.   * GraphGroupMailAddressCreationContext - Create a new group using the mail address as a reference to an existing group from an external AD or AAD backed provider.   * GraphGroupOriginIdCreationContext - Create a new group using the OriginID as a reference to a group from an external AD or AAD backed provider.   Optionally, you can add the newly created group as a member of an existing Azure DevOps group and/or specify a custom storage key for the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Graph\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphGroupCreationContext(); // \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphGroupCreationContext | The subset of the full graph group used to uniquely find the graph subject in an external provider.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$scopeDescriptor = "scopeDescriptor_example"; // string | A descriptor referencing the scope (collection, project) in which the group should be created. If omitted, will be created in the scope of the enclosing account or organization. Valid only for VSTS groups.
$groupDescriptors = "groupDescriptors_example"; // string | A comma separated list of descriptors referencing groups you want the graph group to join

try {
    $result = $apiInstance->groupsCreate($organization, $body, $apiVersion, $scopeDescriptor, $groupDescriptors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphGroupCreationContext**](../Model/GraphGroupCreationContext.md)| The subset of the full graph group used to uniquely find the graph subject in an external provider. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **scopeDescriptor** | **string**| A descriptor referencing the scope (collection, project) in which the group should be created. If omitted, will be created in the scope of the enclosing account or organization. Valid only for VSTS groups. | [optional]
 **groupDescriptors** | **string**| A comma separated list of descriptors referencing groups you want the graph group to join | [optional]

### Return type

[**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphGroup**](../Model/GraphGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsDelete**
> groupsDelete($organization, $groupDescriptor, $apiVersion)



Removes an Azure DevOps group from all of its parent groups.  The group will still be visible, but membership  checks for the group, and all descendants which derive membership through it, will return false.”

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Graph\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$groupDescriptor = "groupDescriptor_example"; // string | The descriptor of the group to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->groupsDelete($organization, $groupDescriptor, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **groupDescriptor** | **string**| The descriptor of the group to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsGet**
> \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphGroup groupsGet($organization, $groupDescriptor, $apiVersion)



Get a group by its descriptor.  The group will be returned even if it has been deleted from the account or has had all its memberships deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Graph\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$groupDescriptor = "groupDescriptor_example"; // string | The descriptor of the desired graph group.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->groupsGet($organization, $groupDescriptor, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **groupDescriptor** | **string**| The descriptor of the desired graph group. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphGroup**](../Model/GraphGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsList**
> \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphGroup[] groupsList($organization, $apiVersion, $scopeDescriptor, $subjectTypes, $continuationToken)



Gets a list of all groups in the current scope (usually organization or account).  The optional parameters are used to filter down the returned results. Returned results are in no guaranteed order.   Since the list of groups may be large, results are returned in pages of groups.  If there are more results  than can be returned in a single page, the result set will contain a continuation token for retrieval of the  next set of results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Graph\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$scopeDescriptor = "scopeDescriptor_example"; // string | Specify a non-default scope (collection, project) to search for groups.
$subjectTypes = "subjectTypes_example"; // string | A comma separated list of user subject subtypes to reduce the retrieved results, e.g. Microsoft.IdentityModel.Claims.ClaimsIdentity
$continuationToken = "continuationToken_example"; // string | An opaque data blob that allows the next page of data to resume immediately after where the previous page ended. The only reliable way to know if there is more data left is the presence of a continuation token.

try {
    $result = $apiInstance->groupsList($organization, $apiVersion, $scopeDescriptor, $subjectTypes, $continuationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **scopeDescriptor** | **string**| Specify a non-default scope (collection, project) to search for groups. | [optional]
 **subjectTypes** | **string**| A comma separated list of user subject subtypes to reduce the retrieved results, e.g. Microsoft.IdentityModel.Claims.ClaimsIdentity | [optional]
 **continuationToken** | **string**| An opaque data blob that allows the next page of data to resume immediately after where the previous page ended. The only reliable way to know if there is more data left is the presence of a continuation token. | [optional]

### Return type

[**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphGroup[]**](../Model/GraphGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsUpdate**
> \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphGroup groupsUpdate($organization, $groupDescriptor, $body, $apiVersion)



Update the properties of an Azure DevOps group.  Currently limited to only changing the description and account name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Graph\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$groupDescriptor = "groupDescriptor_example"; // string | The descriptor of the group to modify.
$body = new \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\JsonPatchDocument(); // \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\JsonPatchDocument | The JSON+Patch document containing the fields to alter.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->groupsUpdate($organization, $groupDescriptor, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **groupDescriptor** | **string**| The descriptor of the group to modify. |
 **body** | [**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| The JSON+Patch document containing the fields to alter. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphGroup**](../Model/GraphGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

