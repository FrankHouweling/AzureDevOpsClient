# FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\UserEntitlementsApi

All URIs are relative to *https://vsaex.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userEntitlementsAdd**](UserEntitlementsApi.md#userEntitlementsAdd) | **POST** /{organization}/_apis/userentitlements | 
[**userEntitlementsDelete**](UserEntitlementsApi.md#userEntitlementsDelete) | **DELETE** /{organization}/_apis/userentitlements/{userId} | 
[**userEntitlementsGet**](UserEntitlementsApi.md#userEntitlementsGet) | **GET** /{organization}/_apis/userentitlements/{userId} | 
[**userEntitlementsSearchUserEntitlements**](UserEntitlementsApi.md#userEntitlementsSearchUserEntitlements) | **GET** /{organization}/_apis/userentitlements | 
[**userEntitlementsUpdateUserEntitlement**](UserEntitlementsApi.md#userEntitlementsUpdateUserEntitlement) | **PATCH** /{organization}/_apis/userentitlements/{userId} | 
[**userEntitlementsUpdateUserEntitlements**](UserEntitlementsApi.md#userEntitlementsUpdateUserEntitlements) | **PATCH** /{organization}/_apis/userentitlements | 


# **userEntitlementsAdd**
> \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlementsPostResponse userEntitlementsAdd($organization, $body, $apiVersion)



Add a user, assign license and extensions and make them a member of a project group in an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Api\UserEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlement(); // \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlement | UserEntitlement object specifying License, Extensions and Project/Team groups the user should be added to.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->userEntitlementsAdd($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEntitlementsApi->userEntitlementsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlement**](../Model/UserEntitlement.md)| UserEntitlement object specifying License, Extensions and Project/Team groups the user should be added to. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlementsPostResponse**](../Model/UserEntitlementsPostResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userEntitlementsDelete**
> userEntitlementsDelete($organization, $userId, $apiVersion)



Delete a user from the account.  The delete operation includes unassigning Extensions and Licenses and removing the user from all project memberships. The user would continue to have access to the account if she is member of an AAD group, that is added directly to the account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Api\UserEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$userId = "userId_example"; // string | ID of the user.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $apiInstance->userEntitlementsDelete($organization, $userId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling UserEntitlementsApi->userEntitlementsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **userId** | [**string**](../Model/.md)| ID of the user. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userEntitlementsGet**
> \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlement userEntitlementsGet($organization, $userId, $apiVersion)



Get User Entitlement for a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Api\UserEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$userId = "userId_example"; // string | ID of the user.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->userEntitlementsGet($organization, $userId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEntitlementsApi->userEntitlementsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **userId** | [**string**](../Model/.md)| ID of the user. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlement**](../Model/UserEntitlement.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userEntitlementsSearchUserEntitlements**
> \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\PagedGraphMemberList userEntitlementsSearchUserEntitlements($organization, $apiVersion, $continuationToken, $select, $filter, $orderBy)



Get a paged set of user entitlements matching the filter and sort criteria built with properties that match the select input.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Api\UserEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$continuationToken = "continuationToken_example"; // string | Continuation token for getting the next page of data set. If null is passed, gets the first page.
$select = "select_example"; // string | Comma (\",\") separated list of properties to select in the result entitlements. names of the properties are - 'Projects, 'Extensions' and 'Grouprules'.
$filter = "filter_example"; // string | Equality operators relating to searching user entitlements seperated by and clauses. Valid filters include: licenseId, licenseStatus, userType, and name. licenseId: filters based on license assignment using license names. i.e. licenseId eq 'Account-Stakeholder' or licenseId eq 'Account-Express'. licenseStatus: filters based on license status. currently only supports disabled. i.e. licenseStatus eq 'Disabled'. To get disabled basic licenses, you would pass (licenseId eq 'Account-Express' and licenseStatus eq 'Disabled') userType: filters off identity type. Suppored types are member or guest i.e. userType eq 'member'. name: filters on if the user's display name or email contians given input. i.e. get all users with \"test\" in email or displayname is \"name eq 'test'\". A valid query could be: (licenseId eq 'Account-Stakeholder' or (licenseId eq 'Account-Express' and licenseStatus eq 'Disabled')) and name eq 'test' and userType eq 'guest'.
$orderBy = "orderBy_example"; // string | PropertyName and Order (separated by a space ( )) to sort on (e.g. lastAccessed desc). Order defaults to ascending. valid properties to order by are dateCreated, lastAccessed, and name

try {
    $result = $apiInstance->userEntitlementsSearchUserEntitlements($organization, $apiVersion, $continuationToken, $select, $filter, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEntitlementsApi->userEntitlementsSearchUserEntitlements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **continuationToken** | **string**| Continuation token for getting the next page of data set. If null is passed, gets the first page. | [optional]
 **select** | **string**| Comma (\&quot;,\&quot;) separated list of properties to select in the result entitlements. names of the properties are - &#39;Projects, &#39;Extensions&#39; and &#39;Grouprules&#39;. | [optional]
 **filter** | **string**| Equality operators relating to searching user entitlements seperated by and clauses. Valid filters include: licenseId, licenseStatus, userType, and name. licenseId: filters based on license assignment using license names. i.e. licenseId eq &#39;Account-Stakeholder&#39; or licenseId eq &#39;Account-Express&#39;. licenseStatus: filters based on license status. currently only supports disabled. i.e. licenseStatus eq &#39;Disabled&#39;. To get disabled basic licenses, you would pass (licenseId eq &#39;Account-Express&#39; and licenseStatus eq &#39;Disabled&#39;) userType: filters off identity type. Suppored types are member or guest i.e. userType eq &#39;member&#39;. name: filters on if the user&#39;s display name or email contians given input. i.e. get all users with \&quot;test\&quot; in email or displayname is \&quot;name eq &#39;test&#39;\&quot;. A valid query could be: (licenseId eq &#39;Account-Stakeholder&#39; or (licenseId eq &#39;Account-Express&#39; and licenseStatus eq &#39;Disabled&#39;)) and name eq &#39;test&#39; and userType eq &#39;guest&#39;. | [optional]
 **orderBy** | **string**| PropertyName and Order (separated by a space ( )) to sort on (e.g. lastAccessed desc). Order defaults to ascending. valid properties to order by are dateCreated, lastAccessed, and name | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\PagedGraphMemberList**](../Model/PagedGraphMemberList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userEntitlementsUpdateUserEntitlement**
> \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlementsPatchResponse userEntitlementsUpdateUserEntitlement($organization, $body, $userId, $apiVersion)



Edit the entitlements (License, Extensions, Projects, Teams etc) for a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Api\UserEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\JsonPatchDocument(); // \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\JsonPatchDocument | JsonPatchDocument containing the operations to perform on the user.
$userId = "userId_example"; // string | ID of the user.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->userEntitlementsUpdateUserEntitlement($organization, $body, $userId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEntitlementsApi->userEntitlementsUpdateUserEntitlement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| JsonPatchDocument containing the operations to perform on the user. |
 **userId** | [**string**](../Model/.md)| ID of the user. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlementsPatchResponse**](../Model/UserEntitlementsPatchResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userEntitlementsUpdateUserEntitlements**
> \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlementOperationReference userEntitlementsUpdateUserEntitlements($organization, $body, $apiVersion, $doNotSendInviteForNewUsers)



Edit the entitlements (License, Extensions, Projects, Teams etc) for one or more users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Api\UserEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\JsonPatchDocument(); // \FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\JsonPatchDocument | JsonPatchDocument containing the operations to perform.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$doNotSendInviteForNewUsers = true; // bool | Whether to send email invites to new users or not

try {
    $result = $apiInstance->userEntitlementsUpdateUserEntitlements($organization, $body, $apiVersion, $doNotSendInviteForNewUsers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEntitlementsApi->userEntitlementsUpdateUserEntitlements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| JsonPatchDocument containing the operations to perform. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **doNotSendInviteForNewUsers** | **bool**| Whether to send email invites to new users or not | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlementOperationReference**](../Model/UserEntitlementOperationReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

