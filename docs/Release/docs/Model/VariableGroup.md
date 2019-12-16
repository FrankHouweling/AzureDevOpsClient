# VariableGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity who created. | [optional] 
**createdOn** | [**\DateTime**](\DateTime.md) | Gets date on which it got created. | [optional] 
**description** | **string** | Gets or sets description. | [optional] 
**id** | **int** | Gets the unique identifier of this field. | [optional] 
**isShared** | **bool** | Denotes if a variable group is shared with other project or not. | [optional] 
**modifiedBy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity who modified. | [optional] 
**modifiedOn** | [**\DateTime**](\DateTime.md) | Gets date on which it got modified. | [optional] 
**name** | **string** | Gets or sets name. | [optional] 
**providerData** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\VariableGroupProviderData**](VariableGroupProviderData.md) | Gets or sets provider data. | [optional] 
**type** | **string** | Gets or sets type. | [optional] 
**variableGroupProjectReferences** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\VariableGroupProjectReference[]**](VariableGroupProjectReference.md) | all project references where the variable group is shared with other projects. | [optional] 
**variables** | [**map[string,\FrankHouweling\AzureDevOpsClient\Release\Model\VariableValue]**](VariableValue.md) | Gets and sets the dictionary of variables. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


