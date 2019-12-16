# Package

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\ReferenceLinks**](ReferenceLinks.md) | Related REST links. | [optional] 
**id** | **string** | Id of the package. | [optional] 
**isCached** | **bool** | Used for legacy scenarios and may be removed in future versions. | [optional] 
**name** | **string** | The display name of the package. | [optional] 
**normalizedName** | **string** | The normalized name representing the identity of this package within its package type. | [optional] 
**protocolType** | **string** | Type of the package. | [optional] 
**starCount** | **int** | [Obsolete] - this field is unused and will be removed in a future release. | [optional] 
**url** | **string** | Url for this package. | [optional] 
**versions** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\MinimalPackageVersion[]**](MinimalPackageVersion.md) | All versions for this package within its feed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


