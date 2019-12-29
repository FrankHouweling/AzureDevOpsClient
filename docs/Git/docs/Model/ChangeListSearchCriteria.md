# ChangeListSearchCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**compareVersion** | **string** | If provided, a version descriptor to compare against base | [optional] 
**excludeDeletes** | **bool** | If true, don&#39;t include delete history entries | [optional] 
**followRenames** | **bool** | Whether or not to follow renames for the given item being queried | [optional] 
**fromDate** | **string** | If provided, only include history entries created after this date (string) | [optional] 
**fromVersion** | **string** | If provided, a version descriptor for the earliest change list to include | [optional] 
**itemPath** | **string** | Path of item to search under. If the itemPaths memebr is used then it will take precedence over this. | [optional] 
**itemPaths** | **string[]** | List of item paths to search under. If this member is used then itemPath will be ignored. | [optional] 
**itemVersion** | **string** | Version of the items to search | [optional] 
**skip** | **int** | Number of results to skip (used when clicking more...) | [optional] 
**toDate** | **string** | If provided, only include history entries created before this date (string) | [optional] 
**top** | **int** | If provided, the maximum number of history entries to return | [optional] 
**toVersion** | **string** | If provided, a version descriptor for the latest change list to include | [optional] 
**user** | **string** | Alias or display name of user who made the changes | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


