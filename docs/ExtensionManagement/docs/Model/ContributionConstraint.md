# ContributionConstraint

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group** | **int** | An optional property that can be specified to group constraints together. All constraints within a group are AND&#39;d together (all must be evaluate to True in order for the contribution to be included). Different groups of constraints are OR&#39;d (only one group needs to evaluate to True for the contribution to be included). | [optional] 
**id** | **string** | Fully qualified identifier of a shared constraint | [optional] 
**inverse** | **bool** | If true, negate the result of the filter (include the contribution if the applied filter returns false instead of true) | [optional] 
**name** | **string** | Name of the IContributionFilter plugin | [optional] 
**properties** | [**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\JObject**](JObject.md) | Properties that are fed to the contribution filter class | [optional] 
**relationships** | **string[]** | Constraints can be optionally be applied to one or more of the relationships defined in the contribution. If no relationships are defined then all relationships are associated with the constraint. This means the default behaviour will eliminate the contribution from the tree completely if the constraint is applied. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


