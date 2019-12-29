# MinimalPackageVersion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**directUpstreamSourceId** | **string** | Upstream source this package was ingested from. | [optional] 
**id** | **string** | Id for the package. | [optional] 
**isCachedVersion** | **bool** | [Obsolete] Used for legacy scenarios and may be removed in future versions. | [optional] 
**isDeleted** | **bool** | True if this package has been deleted. | [optional] 
**isLatest** | **bool** | True if this is the latest version of the package by package type sort order. | [optional] 
**isListed** | **bool** | (NuGet Only) True if this package is listed. | [optional] 
**normalizedVersion** | **string** | Normalized version using normalization rules specific to a package type. | [optional] 
**packageDescription** | **string** | Package description. | [optional] 
**publishDate** | [**\DateTime**](\DateTime.md) | UTC Date the package was published to the service. | [optional] 
**storageId** | **string** | Internal storage id. | [optional] 
**version** | **string** | Display version. | [optional] 
**views** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView[]**](FeedView.md) | List of views containing this package version. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


