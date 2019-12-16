# AzureDevOpsClient\Dashboard\WidgetsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**widgetsCreate**](WidgetsApi.md#widgetsCreate) | **POST** /{organization}/{project}/{team}/_apis/dashboard/dashboards/{dashboardId}/widgets | 
[**widgetsDelete**](WidgetsApi.md#widgetsDelete) | **DELETE** /{organization}/{project}/{team}/_apis/dashboard/dashboards/{dashboardId}/widgets/{widgetId} | 
[**widgetsGetWidget**](WidgetsApi.md#widgetsGetWidget) | **GET** /{organization}/{project}/{team}/_apis/dashboard/dashboards/{dashboardId}/widgets/{widgetId} | 
[**widgetsGetWidgets**](WidgetsApi.md#widgetsGetWidgets) | **GET** /{organization}/{project}/{team}/_apis/dashboard/dashboards/{dashboardId}/widgets | 
[**widgetsReplaceWidget**](WidgetsApi.md#widgetsReplaceWidget) | **PUT** /{organization}/{project}/{team}/_apis/dashboard/dashboards/{dashboardId}/widgets/{widgetId} | 
[**widgetsReplaceWidgets**](WidgetsApi.md#widgetsReplaceWidgets) | **PUT** /{organization}/{project}/{team}/_apis/dashboard/dashboards/{dashboardId}/widgets | 
[**widgetsUpdateWidget**](WidgetsApi.md#widgetsUpdateWidget) | **PATCH** /{organization}/{project}/{team}/_apis/dashboard/dashboards/{dashboardId}/widgets/{widgetId} | 
[**widgetsUpdateWidgets**](WidgetsApi.md#widgetsUpdateWidgets) | **PATCH** /{organization}/{project}/{team}/_apis/dashboard/dashboards/{dashboardId}/widgets | 


# **widgetsCreate**
> \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget widgetsCreate($organization, $body, $project, $dashboardId, $team, $apiVersion)



Create a widget on the specified dashboard.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Dashboard\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Dashboard\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget(); // \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget | State of the widget to add
$project = "project_example"; // string | Project ID or project name
$dashboardId = "dashboardId_example"; // string | ID of dashboard the widget will be added to.
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->widgetsCreate($organization, $body, $project, $dashboardId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->widgetsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget**](../Model/Widget.md)| State of the widget to add |
 **project** | **string**| Project ID or project name |
 **dashboardId** | [**string**](../Model/.md)| ID of dashboard the widget will be added to. |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget**](../Model/Widget.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **widgetsDelete**
> \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Dashboard widgetsDelete($organization, $project, $dashboardId, $widgetId, $team, $apiVersion)



Delete the specified widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Dashboard\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Dashboard\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$dashboardId = "dashboardId_example"; // string | ID of the dashboard containing the widget.
$widgetId = "widgetId_example"; // string | ID of the widget to update.
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->widgetsDelete($organization, $project, $dashboardId, $widgetId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->widgetsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **dashboardId** | [**string**](../Model/.md)| ID of the dashboard containing the widget. |
 **widgetId** | [**string**](../Model/.md)| ID of the widget to update. |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Dashboard**](../Model/Dashboard.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **widgetsGetWidget**
> \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget widgetsGetWidget($organization, $project, $dashboardId, $widgetId, $team, $apiVersion)



Get the current state of the specified widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Dashboard\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Dashboard\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$dashboardId = "dashboardId_example"; // string | ID of the dashboard containing the widget.
$widgetId = "widgetId_example"; // string | ID of the widget to read.
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->widgetsGetWidget($organization, $project, $dashboardId, $widgetId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->widgetsGetWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **dashboardId** | [**string**](../Model/.md)| ID of the dashboard containing the widget. |
 **widgetId** | [**string**](../Model/.md)| ID of the widget to read. |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget**](../Model/Widget.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **widgetsGetWidgets**
> \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget[] widgetsGetWidgets($organization, $project, $dashboardId, $team, $apiVersion, $eTag)



Get widgets contained on the specified dashboard.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Dashboard\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Dashboard\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$dashboardId = "dashboardId_example"; // string | ID of the dashboard to read.
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$eTag = "eTag_example"; // string | Dashboard Widgets Version

try {
    $result = $apiInstance->widgetsGetWidgets($organization, $project, $dashboardId, $team, $apiVersion, $eTag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->widgetsGetWidgets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **dashboardId** | [**string**](../Model/.md)| ID of the dashboard to read. |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **eTag** | **string**| Dashboard Widgets Version | [optional]

### Return type

[**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget[]**](../Model/Widget.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **widgetsReplaceWidget**
> \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget widgetsReplaceWidget($organization, $body, $project, $dashboardId, $widgetId, $team, $apiVersion)



Override the  state of the specified widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Dashboard\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Dashboard\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget(); // \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget | State to be written for the widget.
$project = "project_example"; // string | Project ID or project name
$dashboardId = "dashboardId_example"; // string | ID of the dashboard containing the widget.
$widgetId = "widgetId_example"; // string | ID of the widget to update.
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->widgetsReplaceWidget($organization, $body, $project, $dashboardId, $widgetId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->widgetsReplaceWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget**](../Model/Widget.md)| State to be written for the widget. |
 **project** | **string**| Project ID or project name |
 **dashboardId** | [**string**](../Model/.md)| ID of the dashboard containing the widget. |
 **widgetId** | [**string**](../Model/.md)| ID of the widget to update. |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget**](../Model/Widget.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **widgetsReplaceWidgets**
> \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget[] widgetsReplaceWidgets($organization, $body, $project, $dashboardId, $team, $apiVersion, $eTag)



Replace the widgets on specified dashboard with the supplied widgets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Dashboard\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Dashboard\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget()); // \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget[] | Revised state of widgets to store for the dashboard.
$project = "project_example"; // string | Project ID or project name
$dashboardId = "dashboardId_example"; // string | ID of the Dashboard to modify.
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$eTag = "eTag_example"; // string | Dashboard Widgets Version

try {
    $result = $apiInstance->widgetsReplaceWidgets($organization, $body, $project, $dashboardId, $team, $apiVersion, $eTag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->widgetsReplaceWidgets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget[]**](../Model/Widget.md)| Revised state of widgets to store for the dashboard. |
 **project** | **string**| Project ID or project name |
 **dashboardId** | [**string**](../Model/.md)| ID of the Dashboard to modify. |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **eTag** | **string**| Dashboard Widgets Version | [optional]

### Return type

[**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget[]**](../Model/Widget.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **widgetsUpdateWidget**
> \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget widgetsUpdateWidget($organization, $body, $project, $dashboardId, $widgetId, $team, $apiVersion)



Perform a partial update of the specified widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Dashboard\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Dashboard\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget(); // \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget | Description of the widget changes to apply. All non-null fields will be replaced.
$project = "project_example"; // string | Project ID or project name
$dashboardId = "dashboardId_example"; // string | ID of the dashboard containing the widget.
$widgetId = "widgetId_example"; // string | ID of the widget to update.
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->widgetsUpdateWidget($organization, $body, $project, $dashboardId, $widgetId, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->widgetsUpdateWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget**](../Model/Widget.md)| Description of the widget changes to apply. All non-null fields will be replaced. |
 **project** | **string**| Project ID or project name |
 **dashboardId** | [**string**](../Model/.md)| ID of the dashboard containing the widget. |
 **widgetId** | [**string**](../Model/.md)| ID of the widget to update. |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget**](../Model/Widget.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **widgetsUpdateWidgets**
> \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget[] widgetsUpdateWidgets($organization, $body, $project, $dashboardId, $team, $apiVersion, $eTag)



Update the supplied widgets on the dashboard using supplied state. State of existing Widgets not passed in the widget list is preserved.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Dashboard\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Dashboard\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget()); // \AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget[] | The set of widget states to update on the dashboard.
$project = "project_example"; // string | Project ID or project name
$dashboardId = "dashboardId_example"; // string | ID of the Dashboard to modify.
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$eTag = "eTag_example"; // string | Dashboard Widgets Version

try {
    $result = $apiInstance->widgetsUpdateWidgets($organization, $body, $project, $dashboardId, $team, $apiVersion, $eTag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->widgetsUpdateWidgets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget[]**](../Model/Widget.md)| The set of widget states to update on the dashboard. |
 **project** | **string**| Project ID or project name |
 **dashboardId** | [**string**](../Model/.md)| ID of the Dashboard to modify. |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **eTag** | **string**| Dashboard Widgets Version | [optional]

### Return type

[**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget[]**](../Model/Widget.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

