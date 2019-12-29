# WorkItemQueryResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asOf** | [**\DateTime**](\DateTime.md) | The date the query was run in the context of. | [optional] 
**columns** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemFieldReference[]**](WorkItemFieldReference.md) | The columns of the query. | [optional] 
**queryResultType** | **string** | The result type | [optional] 
**queryType** | **string** | The type of the query | [optional] 
**sortColumns** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemQuerySortColumn[]**](WorkItemQuerySortColumn.md) | The sort columns of the query. | [optional] 
**workItemRelations** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemLink[]**](WorkItemLink.md) | The work item links returned by the query. | [optional] 
**workItems** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemReference[]**](WorkItemReference.md) | The work items returned by the query. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


