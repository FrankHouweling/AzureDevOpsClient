# WorkItemQueryClause

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clauses** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemQueryClause[]**](WorkItemQueryClause.md) | Child clauses if the current clause is a logical operator | [optional] 
**field** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemFieldReference**](WorkItemFieldReference.md) | Field associated with condition | [optional] 
**fieldValue** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemFieldReference**](WorkItemFieldReference.md) | Right side of the condition when a field to field comparison | [optional] 
**isFieldValue** | **bool** | Determines if this is a field to field comparison | [optional] 
**logicalOperator** | **string** | Logical operator separating the condition clause | [optional] 
**operator** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemFieldOperation**](WorkItemFieldOperation.md) | The field operator | [optional] 
**value** | **string** | Right side of the condition when a field to value comparison | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


