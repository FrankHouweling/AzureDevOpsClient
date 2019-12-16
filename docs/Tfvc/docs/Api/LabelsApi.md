# AzureDevOpsClient\Tfvc\LabelsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**labelsGet**](LabelsApi.md#labelsGet) | **GET** /{organization}/{project}/_apis/tfvc/labels/{labelId} | 
[**labelsGetLabelItems**](LabelsApi.md#labelsGetLabelItems) | **GET** /{organization}/_apis/tfvc/labels/{labelId}/items | 
[**labelsList**](LabelsApi.md#labelsList) | **GET** /{organization}/{project}/_apis/tfvc/labels | 


# **labelsGet**
> \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcLabel labelsGet($organization, $labelId, $project, $apiVersion, $requestDataIncludeLinks, $requestDataItemLabelFilter, $requestDataLabelScope, $requestDataMaxItemCount, $requestDataName, $requestDataOwner)



Get a single deep label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Tfvc\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$labelId = "labelId_example"; // string | Unique identifier of label
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$requestDataIncludeLinks = true; // bool | Whether to include the _links field on the shallow references
$requestDataItemLabelFilter = "requestDataItemLabelFilter_example"; // string | maxItemCount
$requestDataLabelScope = "requestDataLabelScope_example"; // string | maxItemCount
$requestDataMaxItemCount = 56; // int | maxItemCount
$requestDataName = "requestDataName_example"; // string | maxItemCount
$requestDataOwner = "requestDataOwner_example"; // string | maxItemCount

try {
    $result = $apiInstance->labelsGet($organization, $labelId, $project, $apiVersion, $requestDataIncludeLinks, $requestDataItemLabelFilter, $requestDataLabelScope, $requestDataMaxItemCount, $requestDataName, $requestDataOwner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->labelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **labelId** | **string**| Unique identifier of label |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **requestDataIncludeLinks** | **bool**| Whether to include the _links field on the shallow references | [optional]
 **requestDataItemLabelFilter** | **string**| maxItemCount | [optional]
 **requestDataLabelScope** | **string**| maxItemCount | [optional]
 **requestDataMaxItemCount** | **int**| maxItemCount | [optional]
 **requestDataName** | **string**| maxItemCount | [optional]
 **requestDataOwner** | **string**| maxItemCount | [optional]

### Return type

[**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcLabel**](../Model/TfvcLabel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **labelsGetLabelItems**
> \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcItem[] labelsGetLabelItems($organization, $labelId, $apiVersion, $top, $skip)



Get items under a label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Tfvc\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$labelId = "labelId_example"; // string | Unique identifier of label
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$top = 56; // int | Max number of items to return
$skip = 56; // int | Number of items to skip

try {
    $result = $apiInstance->labelsGetLabelItems($organization, $labelId, $apiVersion, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->labelsGetLabelItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **labelId** | **string**| Unique identifier of label |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **top** | **int**| Max number of items to return | [optional]
 **skip** | **int**| Number of items to skip | [optional]

### Return type

[**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcItem[]**](../Model/TfvcItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **labelsList**
> \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcLabelRef[] labelsList($organization, $project, $apiVersion, $requestDataIncludeLinks, $requestDataItemLabelFilter, $requestDataLabelScope, $requestDataMaxItemCount, $requestDataName, $requestDataOwner, $top, $skip)



Get a collection of shallow label references.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Tfvc\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$requestDataIncludeLinks = true; // bool | Whether to include the _links field on the shallow references
$requestDataItemLabelFilter = "requestDataItemLabelFilter_example"; // string | labelScope, name, owner, and itemLabelFilter
$requestDataLabelScope = "requestDataLabelScope_example"; // string | labelScope, name, owner, and itemLabelFilter
$requestDataMaxItemCount = 56; // int | labelScope, name, owner, and itemLabelFilter
$requestDataName = "requestDataName_example"; // string | labelScope, name, owner, and itemLabelFilter
$requestDataOwner = "requestDataOwner_example"; // string | labelScope, name, owner, and itemLabelFilter
$top = 56; // int | Max number of labels to return, defaults to 100 when undefined
$skip = 56; // int | Number of labels to skip

try {
    $result = $apiInstance->labelsList($organization, $project, $apiVersion, $requestDataIncludeLinks, $requestDataItemLabelFilter, $requestDataLabelScope, $requestDataMaxItemCount, $requestDataName, $requestDataOwner, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->labelsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **requestDataIncludeLinks** | **bool**| Whether to include the _links field on the shallow references | [optional]
 **requestDataItemLabelFilter** | **string**| labelScope, name, owner, and itemLabelFilter | [optional]
 **requestDataLabelScope** | **string**| labelScope, name, owner, and itemLabelFilter | [optional]
 **requestDataMaxItemCount** | **int**| labelScope, name, owner, and itemLabelFilter | [optional]
 **requestDataName** | **string**| labelScope, name, owner, and itemLabelFilter | [optional]
 **requestDataOwner** | **string**| labelScope, name, owner, and itemLabelFilter | [optional]
 **top** | **int**| Max number of labels to return, defaults to 100 when undefined | [optional]
 **skip** | **int**| Number of labels to skip | [optional]

### Return type

[**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcLabelRef[]**](../Model/TfvcLabelRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

