# Package

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Governance\Model\ReferenceLinks**](ReferenceLinks.md) | Related REST links. | [optional] 
**deprecateMessage** | **string** | Deprecated message, if any, for the package. | [optional] 
**id** | **string** | Package Id. | [optional] 
**name** | **string** | The display name of the package. | [optional] 
**permanentlyDeletedDate** | [**\DateTime**](\DateTime.md) | If and when the package was permanently deleted. | [optional] 
**sourceChain** | [**\FrankHouweling\AzureDevOpsClient\Governance\Model\UpstreamSourceInfo[]**](UpstreamSourceInfo.md) | The history of upstream sources for this package. The first source in the list is the immediate source from which this package was saved. | [optional] 
**unpublishedDate** | [**\DateTime**](\DateTime.md) | If and when the package was deleted. | [optional] 
**version** | **string** | The version of the package. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


