# WidgetResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**allowedSizes** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\WidgetSize[]**](WidgetSize.md) | Refers to the allowed sizes for the widget. This gets populated when user wants to configure the widget | [optional] 
**areSettingsBlockedForUser** | **bool** | Read-Only Property from Dashboard Service. Indicates if settings are blocked for the current user. | [optional] 
**artifactId** | **string** | Refers to unique identifier of a feature artifact. Used for pinning+unpinning a specific artifact. | [optional] 
**configurationContributionId** | **string** |  | [optional] 
**configurationContributionRelativeId** | **string** |  | [optional] 
**contentUri** | **string** |  | [optional] 
**contributionId** | **string** | The id of the underlying contribution defining the supplied Widget Configuration. | [optional] 
**dashboard** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Dashboard**](Dashboard.md) | Optional partial dashboard content, to support exchanging dashboard-level version ETag for widget-level APIs | [optional] 
**eTag** | **string** |  | [optional] 
**id** | **string** |  | [optional] 
**isEnabled** | **bool** |  | [optional] 
**isNameConfigurable** | **bool** |  | [optional] 
**lightboxOptions** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\LightboxOptions**](LightboxOptions.md) |  | [optional] 
**loadingImageUrl** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**position** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\WidgetPosition**](WidgetPosition.md) |  | [optional] 
**settings** | **string** |  | [optional] 
**settingsVersion** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\SemanticVersion**](SemanticVersion.md) |  | [optional] 
**size** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\WidgetSize**](WidgetSize.md) |  | [optional] 
**typeId** | **string** |  | [optional] 
**url** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


