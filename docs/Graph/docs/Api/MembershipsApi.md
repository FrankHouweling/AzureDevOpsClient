# FrankHouweling\AzureDevOpsClient\Graph\MembershipsApi

All URIs are relative to *https://vssps.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**membershipsAdd**](MembershipsApi.md#membershipsAdd) | **PUT** /{organization}/_apis/graph/memberships/{subjectDescriptor}/{containerDescriptor} | 
[**membershipsCheckMembershipExistence**](MembershipsApi.md#membershipsCheckMembershipExistence) | **HEAD** /{organization}/_apis/graph/memberships/{subjectDescriptor}/{containerDescriptor} | 
[**membershipsGet**](MembershipsApi.md#membershipsGet) | **GET** /{organization}/_apis/graph/memberships/{subjectDescriptor}/{containerDescriptor} | 
[**membershipsList**](MembershipsApi.md#membershipsList) | **GET** /{organization}/_apis/graph/Memberships/{subjectDescriptor} | 
[**membershipsRemoveMembership**](MembershipsApi.md#membershipsRemoveMembership) | **DELETE** /{organization}/_apis/graph/memberships/{subjectDescriptor}/{containerDescriptor} | 


# **membershipsAdd**
> \FrankHouweling\AzureDevOpsClient\Graph\Model\GraphMembership membershipsAdd($organization, $subjectDescriptor, $containerDescriptor, $apiVersion)



Create a new membership between a container and subject.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Graph\Api\MembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$subjectDescriptor = "subjectDescriptor_example"; // string | A descriptor to a group or user that can be the child subject in the relationship.
$containerDescriptor = "containerDescriptor_example"; // string | A descriptor to a group that can be the container in the relationship.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->membershipsAdd($organization, $subjectDescriptor, $containerDescriptor, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipsApi->membershipsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **subjectDescriptor** | **string**| A descriptor to a group or user that can be the child subject in the relationship. |
 **containerDescriptor** | **string**| A descriptor to a group that can be the container in the relationship. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Graph\Model\GraphMembership**](../Model/GraphMembership.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipsCheckMembershipExistence**
> membershipsCheckMembershipExistence($organization, $subjectDescriptor, $containerDescriptor, $apiVersion)



Check to see if a membership relationship between a container and subject exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Graph\Api\MembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$subjectDescriptor = "subjectDescriptor_example"; // string | The group or user that is a child subject of the relationship.
$containerDescriptor = "containerDescriptor_example"; // string | The group that is the container in the relationship.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->membershipsCheckMembershipExistence($organization, $subjectDescriptor, $containerDescriptor, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling MembershipsApi->membershipsCheckMembershipExistence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **subjectDescriptor** | **string**| The group or user that is a child subject of the relationship. |
 **containerDescriptor** | **string**| The group that is the container in the relationship. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipsGet**
> \FrankHouweling\AzureDevOpsClient\Graph\Model\GraphMembership membershipsGet($organization, $subjectDescriptor, $containerDescriptor, $apiVersion)



Get a membership relationship between a container and subject.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Graph\Api\MembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$subjectDescriptor = "subjectDescriptor_example"; // string | A descriptor to the child subject in the relationship.
$containerDescriptor = "containerDescriptor_example"; // string | A descriptor to the container in the relationship.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->membershipsGet($organization, $subjectDescriptor, $containerDescriptor, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipsApi->membershipsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **subjectDescriptor** | **string**| A descriptor to the child subject in the relationship. |
 **containerDescriptor** | **string**| A descriptor to the container in the relationship. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Graph\Model\GraphMembership**](../Model/GraphMembership.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipsList**
> \FrankHouweling\AzureDevOpsClient\Graph\Model\GraphMembership[] membershipsList($organization, $subjectDescriptor, $apiVersion, $direction, $depth)



Get all the memberships where this descriptor is a member in the relationship.  The default value for direction is 'up' meaning return all memberships where the subject is a member (e.g. all groups the subject is a member of).  Alternatively, passing the direction as 'down' will return all memberships where the subject is a container (e.g. all members of the subject group).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Graph\Api\MembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$subjectDescriptor = "subjectDescriptor_example"; // string | Fetch all direct memberships of this descriptor.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$direction = "direction_example"; // string | Defaults to Up.
$depth = 56; // int | The maximum number of edges to traverse up or down the membership tree. Currently the only supported value is '1'.

try {
    $result = $apiInstance->membershipsList($organization, $subjectDescriptor, $apiVersion, $direction, $depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipsApi->membershipsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **subjectDescriptor** | **string**| Fetch all direct memberships of this descriptor. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **direction** | **string**| Defaults to Up. | [optional]
 **depth** | **int**| The maximum number of edges to traverse up or down the membership tree. Currently the only supported value is &#39;1&#39;. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Graph\Model\GraphMembership[]**](../Model/GraphMembership.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipsRemoveMembership**
> membershipsRemoveMembership($organization, $subjectDescriptor, $containerDescriptor, $apiVersion)



Deletes a membership between a container and subject.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Graph\Api\MembershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$subjectDescriptor = "subjectDescriptor_example"; // string | A descriptor to a group or user that is the child subject in the relationship.
$containerDescriptor = "containerDescriptor_example"; // string | A descriptor to a group that is the container in the relationship.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->membershipsRemoveMembership($organization, $subjectDescriptor, $containerDescriptor, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling MembershipsApi->membershipsRemoveMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **subjectDescriptor** | **string**| A descriptor to a group or user that is the child subject in the relationship. |
 **containerDescriptor** | **string**| A descriptor to a group that is the container in the relationship. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

