# WidgetMetadata

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowedSizes** | [**\FrankHouweling\AzureDevOpsClient\Dashboard\Model\WidgetSize[]**](WidgetSize.md) | Sizes supported by the Widget. | [optional] 
**analyticsServiceRequired** | **bool** | Opt-in boolean that indicates if the widget requires the Analytics Service to function. Widgets requiring the analytics service are hidden from the catalog if the Analytics Service is not available. | [optional] 
**catalogIconUrl** | **string** | Resource for an icon in the widget catalog. | [optional] 
**catalogInfoUrl** | **string** | Opt-in URL string pointing at widget information. Defaults to extension marketplace URL if omitted | [optional] 
**configurationContributionId** | **string** | The id of the underlying contribution defining the supplied Widget custom configuration UI. Null if custom configuration UI is not available. | [optional] 
**configurationContributionRelativeId** | **string** | The relative id of the underlying contribution defining the supplied Widget custom configuration UI. Null if custom configuration UI is not available. | [optional] 
**configurationRequired** | **bool** | Indicates if the widget requires configuration before being added to dashboard. | [optional] 
**contentUri** | **string** | Uri for the widget content to be loaded from . | [optional] 
**contributionId** | **string** | The id of the underlying contribution defining the supplied Widget. | [optional] 
**defaultSettings** | **string** | Optional default settings to be copied into widget settings. | [optional] 
**description** | **string** | Summary information describing the widget. | [optional] 
**isEnabled** | **bool** | Widgets can be disabled by the app store.  We&#39;ll need to gracefully handle for: - persistence (Allow) - Requests (Tag as disabled, and provide context) | [optional] 
**isNameConfigurable** | **bool** | Opt-out boolean that indicates if the widget supports widget name/title configuration. Widgets ignoring the name should set it to false in the manifest. | [optional] 
**isVisibleFromCatalog** | **bool** | Opt-out boolean indicating if the widget is hidden from the catalog. Commonly, this is used to allow developers to disable creation of a deprecated widget. A widget must have a functional default state, or have a configuration experience, in order to be visible from the catalog. | [optional] 
**keywords** | **string[]** | Keywords associated with this widget, non-filterable and invisible | [optional] 
**lightboxOptions** | [**\FrankHouweling\AzureDevOpsClient\Dashboard\Model\LightboxOptions**](LightboxOptions.md) | Opt-in properties for customizing widget presentation in a \&quot;lightbox\&quot; dialog. | [optional] 
**loadingImageUrl** | **string** | Resource for a loading placeholder image on dashboard | [optional] 
**name** | **string** | User facing name of the widget type. Each widget must use a unique value here. | [optional] 
**publisherName** | **string** | Publisher Name of this kind of widget. | [optional] 
**supportedScopes** | **object[]** | Data contract required for the widget to function and to work in its container. | [optional] 
**tags** | **string[]** | Tags associated with this widget, visible on each widget and filterable. | [optional] 
**targets** | **string[]** | Contribution target IDs | [optional] 
**typeId** | **string** | Deprecated: locally unique developer-facing id of this kind of widget. ContributionId provides a globally unique identifier for widget types. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


