# AzureDevOpsClient\Build\LeasesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leasesAdd**](LeasesApi.md#leasesAdd) | **POST** /{organization}/{project}/_apis/build/retention/leases | 
[**leasesDelete**](LeasesApi.md#leasesDelete) | **DELETE** /{organization}/{project}/_apis/build/retention/leases | 
[**leasesGet**](LeasesApi.md#leasesGet) | **GET** /{organization}/{project}/_apis/build/retention/leases/{leaseId} | 
[**leasesGetRetentionLeasesByUserId**](LeasesApi.md#leasesGetRetentionLeasesByUserId) | **GET** /{organization}/{project}/_apis/build/retention/leases | 


# **leasesAdd**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\RetentionLease[] leasesAdd($organization, $body, $project, $apiVersion)



Adds new leases for pipeline runs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\LeasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\NewRetentionLease()); // \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\NewRetentionLease[] | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->leasesAdd($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeasesApi->leasesAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\NewRetentionLease[]**](../Model/NewRetentionLease.md)|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\RetentionLease[]**](../Model/RetentionLease.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leasesDelete**
> leasesDelete($organization, $project, $ids, $apiVersion)



Removes specific retention leases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\LeasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$ids = "ids_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->leasesDelete($organization, $project, $ids, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling LeasesApi->leasesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **ids** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leasesGet**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\RetentionLease leasesGet($organization, $project, $leaseId, $apiVersion)



Returns the details of the retention lease given a lease id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\LeasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$leaseId = 56; // int | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->leasesGet($organization, $project, $leaseId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeasesApi->leasesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **leaseId** | **int**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\RetentionLease**](../Model/RetentionLease.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leasesGetRetentionLeasesByUserId**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\RetentionLease[] leasesGetRetentionLeasesByUserId($organization, $project, $userOwnerId, $apiVersion, $definitionId, $runId)



Returns any leases owned by the specified user, optionally scoped to a single pipeline definition and run.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\LeasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$userOwnerId = "userOwnerId_example"; // string | The user id to search for.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$definitionId = 56; // int | An optional parameter to limit the search to a specific pipeline definition.
$runId = 56; // int | An optional parameter to limit the search to a single pipeline run. Requires definitionId.

try {
    $result = $apiInstance->leasesGetRetentionLeasesByUserId($organization, $project, $userOwnerId, $apiVersion, $definitionId, $runId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeasesApi->leasesGetRetentionLeasesByUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **userOwnerId** | [**string**](../Model/.md)| The user id to search for. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **definitionId** | **int**| An optional parameter to limit the search to a specific pipeline definition. | [optional]
 **runId** | **int**| An optional parameter to limit the search to a single pipeline run. Requires definitionId. | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\RetentionLease[]**](../Model/RetentionLease.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

