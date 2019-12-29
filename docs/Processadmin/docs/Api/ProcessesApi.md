# FrankHouweling\AzureDevOpsClient\Processadmin\ProcessesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**processesExportProcessTemplate**](ProcessesApi.md#processesExportProcessTemplate) | **GET** /{organization}/_apis/work/processadmin/processes/export/{id} | 
[**processesImportProcessTemplate**](ProcessesApi.md#processesImportProcessTemplate) | **POST** /{organization}/_apis/work/processadmin/processes/import | 
[**processesImportProcessTemplateStatus**](ProcessesApi.md#processesImportProcessTemplateStatus) | **GET** /{organization}/_apis/work/processadmin/processes/status/{id} | 


# **processesExportProcessTemplate**
> string processesExportProcessTemplate($organization, $id, $apiVersion)



Returns requested process template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Processadmin\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Processadmin\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = "id_example"; // string | The ID of the process
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->processesExportProcessTemplate($organization, $id, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->processesExportProcessTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | [**string**](../Model/.md)| The ID of the process |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processesImportProcessTemplate**
> \FrankHouweling\AzureDevOpsClient\Processadmin\Model\ProcessImportResult processesImportProcessTemplate($organization, $body, $apiVersion, $ignoreWarnings, $replaceExistingTemplate)



Imports a process from zip file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Processadmin\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Processadmin\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = "body_example"; // string | Stream to upload
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$ignoreWarnings = true; // bool | Ignores validation warnings. Default value is false.
$replaceExistingTemplate = true; // bool | Replaces the existing template. Default value is true.

try {
    $result = $apiInstance->processesImportProcessTemplate($organization, $body, $apiVersion, $ignoreWarnings, $replaceExistingTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->processesImportProcessTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | **string**| Stream to upload |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **ignoreWarnings** | **bool**| Ignores validation warnings. Default value is false. | [optional]
 **replaceExistingTemplate** | **bool**| Replaces the existing template. Default value is true. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processadmin\Model\ProcessImportResult**](../Model/ProcessImportResult.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processesImportProcessTemplateStatus**
> \FrankHouweling\AzureDevOpsClient\Processadmin\Model\ProcessPromoteStatus processesImportProcessTemplateStatus($organization, $id, $apiVersion)



Tells whether promote has completed for the specified promote job ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Processadmin\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Processadmin\Api\ProcessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = "id_example"; // string | The ID of the promote job operation
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->processesImportProcessTemplateStatus($organization, $id, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessesApi->processesImportProcessTemplateStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | [**string**](../Model/.md)| The ID of the promote job operation |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processadmin\Model\ProcessPromoteStatus**](../Model/ProcessPromoteStatus.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

