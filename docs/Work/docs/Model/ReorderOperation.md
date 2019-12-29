# ReorderOperation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ids** | **int[]** | IDs of the work items to be reordered.  Must be valid WorkItem Ids. | [optional] 
**iterationPath** | **string** | IterationPath for reorder operation. This is only used when we reorder from the Iteration Backlog | [optional] 
**nextId** | **int** | ID of the work item that should be after the reordered items. Can use 0 to specify the end of the list. | [optional] 
**parentId** | **int** | Parent ID for all of the work items involved in this operation. Can use 0 to indicate the items don&#39;t have a parent. | [optional] 
**previousId** | **int** | ID of the work item that should be before the reordered items. Can use 0 to specify the beginning of the list. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


