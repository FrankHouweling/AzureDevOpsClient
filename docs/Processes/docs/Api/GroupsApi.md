# FrankHouweling\AzureDevOpsClient\Processes\GroupsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupsAdd**](GroupsApi.md#groupsAdd) | **POST** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups | 
[**groupsMoveGroupToSection**](GroupsApi.md#groupsMoveGroupToSection) | **PUT** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups/{groupId} | 
[**groupsRemoveGroup**](GroupsApi.md#groupsRemoveGroup) | **DELETE** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups/{groupId} | 
[**groupsUpdate**](GroupsApi.md#groupsUpdate) | **PATCH** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups/{groupId} | 


# **groupsAdd**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\Group groupsAdd($organization, $body, $processId, $witRefName, $pageId, $sectionId, $apiVersion)



Adds a group to the work item form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\Group(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\Group | The group.
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$pageId = "pageId_example"; // string | The ID of the page to add the group to.
$sectionId = "sectionId_example"; // string | The ID of the section to add the group to.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->groupsAdd($organization, $body, $processId, $witRefName, $pageId, $sectionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\Group**](../Model/Group.md)| The group. |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **pageId** | **string**| The ID of the page to add the group to. |
 **sectionId** | **string**| The ID of the section to add the group to. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\Group**](../Model/Group.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsMoveGroupToSection**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\Group groupsMoveGroupToSection($organization, $body, $processId, $witRefName, $pageId, $sectionId, $groupId, $removeFromSectionId, $apiVersion)



Moves a group to a different section.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\Group(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\Group | The updated group.
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$pageId = "pageId_example"; // string | The ID of the page the group is in.
$sectionId = "sectionId_example"; // string | The ID of the section the group is in.
$groupId = "groupId_example"; // string | The ID of the group.
$removeFromSectionId = "removeFromSectionId_example"; // string | ID of the section to remove the group from.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->groupsMoveGroupToSection($organization, $body, $processId, $witRefName, $pageId, $sectionId, $groupId, $removeFromSectionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsMoveGroupToSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\Group**](../Model/Group.md)| The updated group. |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **pageId** | **string**| The ID of the page the group is in. |
 **sectionId** | **string**| The ID of the section the group is in. |
 **groupId** | **string**| The ID of the group. |
 **removeFromSectionId** | **string**| ID of the section to remove the group from. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\Group**](../Model/Group.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsRemoveGroup**
> groupsRemoveGroup($organization, $processId, $witRefName, $pageId, $sectionId, $groupId, $apiVersion)



Removes a group from the work item form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$pageId = "pageId_example"; // string | The ID of the page the group is in
$sectionId = "sectionId_example"; // string | The ID of the section to the group is in
$groupId = "groupId_example"; // string | The ID of the group
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->groupsRemoveGroup($organization, $processId, $witRefName, $pageId, $sectionId, $groupId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsRemoveGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **pageId** | **string**| The ID of the page the group is in |
 **sectionId** | **string**| The ID of the section to the group is in |
 **groupId** | **string**| The ID of the group |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsUpdate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\Group groupsUpdate($organization, $body, $processId, $witRefName, $pageId, $sectionId, $groupId, $apiVersion)



Updates a group in the work item form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\Group(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\Group | The updated group.
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$pageId = "pageId_example"; // string | The ID of the page the group is in.
$sectionId = "sectionId_example"; // string | The ID of the section the group is in.
$groupId = "groupId_example"; // string | The ID of the group.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->groupsUpdate($organization, $body, $processId, $witRefName, $pageId, $sectionId, $groupId, $apiVersion);
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
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\Group**](../Model/Group.md)| The updated group. |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **pageId** | **string**| The ID of the page the group is in. |
 **sectionId** | **string**| The ID of the section the group is in. |
 **groupId** | **string**| The ID of the group. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\Group**](../Model/Group.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

