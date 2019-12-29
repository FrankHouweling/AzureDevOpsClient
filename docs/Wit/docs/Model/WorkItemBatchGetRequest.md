# WorkItemBatchGetRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expand** | **string** | The expand parameters for work item attributes. Possible options are { None, Relations, Fields, Links, All } | [optional] 
**asOf** | [**\DateTime**](\DateTime.md) | AsOf UTC date time string | [optional] 
**errorPolicy** | **string** | The flag to control error policy in a bulk get work items request. Possible options are {Fail, Omit}. | [optional] 
**fields** | **string[]** | The requested fields | [optional] 
**ids** | **int[]** | The requested work item ids | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


