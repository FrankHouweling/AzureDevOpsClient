# FrankHouweling\AzureDevOpsClient\Processes\ControlsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controlsCreate**](ControlsApi.md#controlsCreate) | **POST** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/layout/groups/{groupId}/controls | 
[**controlsMoveControlToGroup**](ControlsApi.md#controlsMoveControlToGroup) | **PUT** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/layout/groups/{groupId}/controls/{controlId} | 
[**controlsRemoveControlFromGroup**](ControlsApi.md#controlsRemoveControlFromGroup) | **DELETE** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/layout/groups/{groupId}/controls/{controlId} | 
[**controlsUpdate**](ControlsApi.md#controlsUpdate) | **PATCH** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/layout/groups/{groupId}/controls/{controlId} | 


# **controlsCreate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\Control controlsCreate($organization, $body, $processId, $witRefName, $groupId, $apiVersion)



Creates a control in a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\ControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\Control(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\Control | The control.
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$groupId = "groupId_example"; // string | The ID of the group to add the control to.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->controlsCreate($organization, $body, $processId, $witRefName, $groupId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlsApi->controlsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\Control**](../Model/Control.md)| The control. |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **groupId** | **string**| The ID of the group to add the control to. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\Control**](../Model/Control.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlsMoveControlToGroup**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\Control controlsMoveControlToGroup($organization, $body, $processId, $witRefName, $groupId, $controlId, $apiVersion, $removeFromGroupId)



Moves a control to a specified group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\ControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\Control(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\Control | The control.
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$groupId = "groupId_example"; // string | The ID of the group to move the control to.
$controlId = "controlId_example"; // string | The ID of the control.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$removeFromGroupId = "removeFromGroupId_example"; // string | The group ID to remove the control from.

try {
    $result = $apiInstance->controlsMoveControlToGroup($organization, $body, $processId, $witRefName, $groupId, $controlId, $apiVersion, $removeFromGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlsApi->controlsMoveControlToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\Control**](../Model/Control.md)| The control. |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **groupId** | **string**| The ID of the group to move the control to. |
 **controlId** | **string**| The ID of the control. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **removeFromGroupId** | **string**| The group ID to remove the control from. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\Control**](../Model/Control.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlsRemoveControlFromGroup**
> controlsRemoveControlFromGroup($organization, $processId, $witRefName, $groupId, $controlId, $apiVersion)



Removes a control from the work item form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\ControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$groupId = "groupId_example"; // string | The ID of the group.
$controlId = "controlId_example"; // string | The ID of the control to remove.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->controlsRemoveControlFromGroup($organization, $processId, $witRefName, $groupId, $controlId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling ControlsApi->controlsRemoveControlFromGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **groupId** | **string**| The ID of the group. |
 **controlId** | **string**| The ID of the control to remove. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controlsUpdate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\Control controlsUpdate($organization, $body, $processId, $witRefName, $groupId, $controlId, $apiVersion)



Updates a control on the work item form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\ControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\Control(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\Control | The updated control.
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$groupId = "groupId_example"; // string | The ID of the group.
$controlId = "controlId_example"; // string | The ID of the control.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->controlsUpdate($organization, $body, $processId, $witRefName, $groupId, $controlId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlsApi->controlsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\Control**](../Model/Control.md)| The updated control. |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **groupId** | **string**| The ID of the group. |
 **controlId** | **string**| The ID of the control. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\Control**](../Model/Control.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

