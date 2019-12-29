# RecycleBinPackageVersion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\ReferenceLinks**](ReferenceLinks.md) | Related links | [optional] 
**author** | **string** | Package version author. | [optional] 
**deletedDate** | [**\DateTime**](\DateTime.md) | UTC date that this package version was deleted. | [optional] 
**dependencies** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageDependency[]**](PackageDependency.md) | List of dependencies for this package version. | [optional] 
**description** | **string** | Package version description. | [optional] 
**files** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageFile[]**](PackageFile.md) | Files associated with this package version, only relevant for multi-file package types. | [optional] 
**otherVersions** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\MinimalPackageVersion[]**](MinimalPackageVersion.md) | Other versions of this package. | [optional] 
**protocolMetadata** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\ProtocolMetadata**](ProtocolMetadata.md) | Extended data specific to a package type. | [optional] 
**sourceChain** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\UpstreamSource[]**](UpstreamSource.md) | List of upstream sources through which a package version moved to land in this feed. | [optional] 
**summary** | **string** | Package version summary. | [optional] 
**tags** | **string[]** | Package version tags. | [optional] 
**url** | **string** | Package version url. | [optional] 
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
**scheduledPermanentDeleteDate** | [**\DateTime**](\DateTime.md) | UTC date on which the package will automatically be removed from the recycle bin and permanently deleted. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


