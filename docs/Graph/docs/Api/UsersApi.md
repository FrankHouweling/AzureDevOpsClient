# AzureDevOpsClient\Graph\UsersApi

All URIs are relative to *https://vssps.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersCreate**](UsersApi.md#usersCreate) | **POST** /{organization}/_apis/graph/users | 
[**usersDelete**](UsersApi.md#usersDelete) | **DELETE** /{organization}/_apis/graph/users/{userDescriptor} | 
[**usersGet**](UsersApi.md#usersGet) | **GET** /{organization}/_apis/graph/users/{userDescriptor} | 
[**usersList**](UsersApi.md#usersList) | **GET** /{organization}/_apis/graph/users | 
[**usersUpdate**](UsersApi.md#usersUpdate) | **PATCH** /{organization}/_apis/graph/users/{userDescriptor} | 


# **usersCreate**
> \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUser usersCreate($organization, $body, $apiVersion, $groupDescriptors)



Materialize an existing AAD or MSA user into the VSTS account.  NOTE: Created users are not active in an account unless they have been explicitly assigned a parent group at creation time or have signed in   and been autolicensed through AAD group memberships.   Adding a user to an account is required before the user can be added to VSTS groups or assigned an asset.   The body of the request must be a derived type of GraphUserCreationContext:   * GraphUserMailAddressCreationContext - Create a new user using the mail address as a reference to an existing user from an external AD or AAD backed provider.   * GraphUserOriginIdCreationContext - Create a new user using the OriginID as a reference to an existing user from an external AD or AAD backed provider.   * GraphUserPrincipalNameCreationContext - Create a new user using the principal name as a reference to an existing user from an external AD or AAD backed provider.   If the user to be added corresponds to a user that was previously deleted, then that user will be restored.   Optionally, you can add the newly created user as a member of an existing VSTS group and/or specify a custom storage key for the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Graph\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUserCreationContext(); // \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUserCreationContext | The subset of the full graph user used to uniquely find the graph subject in an external provider.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$groupDescriptors = "groupDescriptors_example"; // string | A comma separated list of descriptors of groups you want the graph user to join

try {
    $result = $apiInstance->usersCreate($organization, $body, $apiVersion, $groupDescriptors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUserCreationContext**](../Model/GraphUserCreationContext.md)| The subset of the full graph user used to uniquely find the graph subject in an external provider. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **groupDescriptors** | **string**| A comma separated list of descriptors of groups you want the graph user to join | [optional]

### Return type

[**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUser**](../Model/GraphUser.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersDelete**
> usersDelete($organization, $userDescriptor, $apiVersion)



Disables a user.  The user will still be visible, but membership checks for the user will return false.”

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Graph\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$userDescriptor = "userDescriptor_example"; // string | The descriptor of the user to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->usersDelete($organization, $userDescriptor, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **userDescriptor** | **string**| The descriptor of the user to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGet**
> \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUser usersGet($organization, $userDescriptor, $apiVersion)



Get a user by its descriptor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Graph\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$userDescriptor = "userDescriptor_example"; // string | The descriptor of the desired user.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->usersGet($organization, $userDescriptor, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **userDescriptor** | **string**| The descriptor of the desired user. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUser**](../Model/GraphUser.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersList**
> \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUser[] usersList($organization, $apiVersion, $subjectTypes, $continuationToken, $scopeDescriptor)



Get a list of all users in a given scope.  Since the list of users may be large, results are returned in pages of users.  If there are more results  than can be returned in a single page, the result set will contain a continuation token for retrieval of the  next set of results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Graph\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$subjectTypes = "subjectTypes_example"; // string | A comma separated list of user subject subtypes to reduce the retrieved results, e.g. msa’, ‘aad’, ‘svc’ (service identity), ‘imp’ (imported identity), etc.
$continuationToken = "continuationToken_example"; // string | An opaque data blob that allows the next page of data to resume immediately after where the previous page ended. The only reliable way to know if there is more data left is the presence of a continuation token.
$scopeDescriptor = "scopeDescriptor_example"; // string | Specify a non-default scope (collection, project) to search for users.

try {
    $result = $apiInstance->usersList($organization, $apiVersion, $subjectTypes, $continuationToken, $scopeDescriptor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **subjectTypes** | **string**| A comma separated list of user subject subtypes to reduce the retrieved results, e.g. msa’, ‘aad’, ‘svc’ (service identity), ‘imp’ (imported identity), etc. | [optional]
 **continuationToken** | **string**| An opaque data blob that allows the next page of data to resume immediately after where the previous page ended. The only reliable way to know if there is more data left is the presence of a continuation token. | [optional]
 **scopeDescriptor** | **string**| Specify a non-default scope (collection, project) to search for users. | [optional]

### Return type

[**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUser[]**](../Model/GraphUser.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUpdate**
> \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUser usersUpdate($organization, $body, $userDescriptor, $apiVersion)



Map an existing user to a different identity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Graph\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUserUpdateContext(); // \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUserUpdateContext | The subset of the full graph user used to uniquely find the graph subject in an external provider.
$userDescriptor = "userDescriptor_example"; // string | the descriptor of the user to update
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->usersUpdate($organization, $body, $userDescriptor, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUserUpdateContext**](../Model/GraphUserUpdateContext.md)| The subset of the full graph user used to uniquely find the graph subject in an external provider. |
 **userDescriptor** | **string**| the descriptor of the user to update |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphUser**](../Model/GraphUser.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

