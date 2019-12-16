# FrankHouweling\AzureDevOpsClient\ProcessDefinitions\GroupsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add**](GroupsApi.md#add) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups | 
[**editGroup**](GroupsApi.md#editGroup) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups/{groupId} | 
[**removeGroup**](GroupsApi.md#removeGroup) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups/{groupId} | 
[**setGroupInSection**](GroupsApi.md#setGroupInSection) | **PUT** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups/{groupId} | 


# **add**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group add($organization, $body, $processId, $witRefName, $pageId, $sectionId, $apiVersion)



Adds a group to the work item form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group | The group
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$pageId = "pageId_example"; // string | The ID of the page to add the group to
$sectionId = "sectionId_example"; // string | The ID of the section to add the group to
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->add($organization, $body, $processId, $witRefName, $pageId, $sectionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->add: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group**](../Model/Group.md)| The group |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **pageId** | **string**| The ID of the page to add the group to |
 **sectionId** | **string**| The ID of the section to add the group to |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group**](../Model/Group.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editGroup**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group editGroup($organization, $body, $processId, $witRefName, $pageId, $sectionId, $groupId, $apiVersion)



Updates a group in the work item form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group | The updated group
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$pageId = "pageId_example"; // string | The ID of the page the group is in
$sectionId = "sectionId_example"; // string | The ID of the section the group is in
$groupId = "groupId_example"; // string | The ID of the group
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->editGroup($organization, $body, $processId, $witRefName, $pageId, $sectionId, $groupId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->editGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group**](../Model/Group.md)| The updated group |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **pageId** | **string**| The ID of the page the group is in |
 **sectionId** | **string**| The ID of the section the group is in |
 **groupId** | **string**| The ID of the group |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group**](../Model/Group.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeGroup**
> removeGroup($organization, $processId, $witRefName, $pageId, $sectionId, $groupId, $apiVersion)



Removes a group from the work item form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\GroupsApi(
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
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $apiInstance->removeGroup($organization, $processId, $witRefName, $pageId, $sectionId, $groupId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->removeGroup: ', $e->getMessage(), PHP_EOL;
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
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setGroupInSection**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group setGroupInSection($organization, $body, $processId, $witRefName, $pageId, $sectionId, $groupId, $removeFromSectionId, $apiVersion)



Moves a group to a different section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group | The updated group
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$pageId = "pageId_example"; // string | The ID of the page the group is in
$sectionId = "sectionId_example"; // string | The ID of the section the group is in
$groupId = "groupId_example"; // string | The ID of the group
$removeFromSectionId = "removeFromSectionId_example"; // string | ID of the section to remove the group from
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->setGroupInSection($organization, $body, $processId, $witRefName, $pageId, $sectionId, $groupId, $removeFromSectionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->setGroupInSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group**](../Model/Group.md)| The updated group |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **pageId** | **string**| The ID of the page the group is in |
 **sectionId** | **string**| The ID of the section the group is in |
 **groupId** | **string**| The ID of the group |
 **removeFromSectionId** | **string**| ID of the section to remove the group from |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\Group**](../Model/Group.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

