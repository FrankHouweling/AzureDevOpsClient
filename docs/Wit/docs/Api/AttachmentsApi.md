# FrankHouweling\AzureDevOpsClient\Wit\AttachmentsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachmentsCreate**](AttachmentsApi.md#attachmentsCreate) | **POST** /{organization}/{project}/_apis/wit/attachments | 
[**attachmentsGet**](AttachmentsApi.md#attachmentsGet) | **GET** /{organization}/{project}/_apis/wit/attachments/{id} | 
[**attachmentsUploadChunk**](AttachmentsApi.md#attachmentsUploadChunk) | **PUT** /{organization}/{project}/_apis/wit/attachments/{id} | 


# **attachmentsCreate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\AttachmentReference attachmentsCreate($organization, $body, $project, $apiVersion, $fileName, $uploadType, $areaPath)



Uploads an attachment.  On accounts with higher attachment upload limits (>130MB), you will need to use chunked upload. To upload an attachment in multiple chunks, you first need to [**Start a Chunked Upload**](#start_a_chunked_upload) and then follow the example from the **Upload Chunk** section.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = "body_example"; // string | Stream to upload
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$fileName = "fileName_example"; // string | The name of the file
$uploadType = "uploadType_example"; // string | Attachment upload type: Simple or Chunked
$areaPath = "areaPath_example"; // string | Target project Area Path

try {
    $result = $apiInstance->attachmentsCreate($organization, $body, $project, $apiVersion, $fileName, $uploadType, $areaPath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | **string**| Stream to upload |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **fileName** | **string**| The name of the file | [optional]
 **uploadType** | **string**| Attachment upload type: Simple or Chunked | [optional]
 **areaPath** | **string**| Target project Area Path | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\AttachmentReference**](../Model/AttachmentReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGet**
> string attachmentsGet($organization, $id, $project, $apiVersion, $fileName, $download)



Downloads an attachment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = "id_example"; // string | Attachment ID
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$fileName = "fileName_example"; // string | Name of the file
$download = true; // bool | If set to <c>true</c> always download attachment

try {
    $result = $apiInstance->attachmentsGet($organization, $id, $project, $apiVersion, $fileName, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | [**string**](../Model/.md)| Attachment ID |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **fileName** | **string**| Name of the file | [optional]
 **download** | **bool**| If set to &lt;c&gt;true&lt;/c&gt; always download attachment | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsUploadChunk**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\AttachmentReference attachmentsUploadChunk($organization, $body, $id, $contentRangeHeader, $project, $apiVersion, $fileName)



Uploads an attachment chunk.  Before performing [**Upload a Chunk**](#upload_a_chunk), make sure to have an attachment id returned in **Start a Chunked Upload** example on **Create** section. Specify the byte range of the chunk using Content-Length. For example: \"Content - Length\": \"bytes 0 - 39999 / 50000\" for the first 40000 bytes of a 50000 byte file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = "body_example"; // string | Stream to upload
$id = "id_example"; // string | The id of the attachment
$contentRangeHeader = "contentRangeHeader_example"; // string | starting and ending byte positions for chunked file upload, format is \"Content-Range\": \"bytes 0-10000/50000\"
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$fileName = "fileName_example"; // string | 

try {
    $result = $apiInstance->attachmentsUploadChunk($organization, $body, $id, $contentRangeHeader, $project, $apiVersion, $fileName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsUploadChunk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | **string**| Stream to upload |
 **id** | [**string**](../Model/.md)| The id of the attachment |
 **contentRangeHeader** | **string**| starting and ending byte positions for chunked file upload, format is \&quot;Content-Range\&quot;: \&quot;bytes 0-10000/50000\&quot; |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **fileName** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\AttachmentReference**](../Model/AttachmentReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

