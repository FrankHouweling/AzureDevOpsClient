# VariableGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity who created the variable group. | [optional] 
**createdOn** | [**\DateTime**](\DateTime.md) | Gets or sets the time when variable group was created. | [optional] 
**description** | **string** | Gets or sets description of the variable group. | [optional] 
**id** | **int** | Gets or sets id of the variable group. | [optional] 
**isShared** | **bool** | Indicates whether variable group is shared with other projects or not. | [optional] 
**modifiedBy** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity who modified the variable group. | [optional] 
**modifiedOn** | [**\DateTime**](\DateTime.md) | Gets or sets the time when variable group was modified | [optional] 
**name** | **string** | Gets or sets name of the variable group. | [optional] 
**providerData** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\VariableGroupProviderData**](VariableGroupProviderData.md) | Gets or sets provider data. | [optional] 
**type** | **string** | Gets or sets type of the variable group. | [optional] 
**variableGroupProjectReferences** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\VariableGroupProjectReference[]**](VariableGroupProjectReference.md) | all project references where the variable group is shared with other projects. | [optional] 
**variables** | [**map[string,\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\VariableValue]**](VariableValue.md) | Gets or sets variables contained in the variable group. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


