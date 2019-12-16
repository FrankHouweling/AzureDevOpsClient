# PredefinedQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hasMore** | **bool** | Whether or not the query returned the complete set of data or if the data was truncated. | [optional] 
**id** | **string** | Id of the query | [optional] 
**name** | **string** | Localized name of the query | [optional] 
**results** | [**\AzureDevOpsClient\Work\AzureDevOpsClient\Work\Model\WorkItem[]**](WorkItem.md) | The results of the query.  This will be a set of WorkItem objects with only the &#39;id&#39; set.  The client is responsible for paging in the data as needed. | [optional] 
**url** | **string** | REST API Url to use to retrieve results for this query | [optional] 
**webUrl** | **string** | Url to use to display a page in the browser with the results of this query | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


