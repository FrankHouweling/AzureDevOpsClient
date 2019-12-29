# AccessControlEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow** | **int** | The set of permission bits that represent the actions that the associated descriptor is allowed to perform. | [optional] 
**deny** | **int** | The set of permission bits that represent the actions that the associated descriptor is not allowed to perform. | [optional] 
**descriptor** | [**\FrankHouweling\AzureDevOpsClient\ComponentGovernance\Model\IdentityDescriptor**](IdentityDescriptor.md) | The descriptor for the user this AccessControlEntry applies to. | [optional] 
**extendedInfo** | [**\FrankHouweling\AzureDevOpsClient\ComponentGovernance\Model\AceExtendedInformation**](AceExtendedInformation.md) | This value, when set, reports the inherited and effective information for the associated descriptor. This value is only set on AccessControlEntries returned by the QueryAccessControlList(s) call when its includeExtendedInfo parameter is set to true. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


