# FeedChangesResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**count** | **int** | The number of changes in this set. | [optional] 
**feedChanges** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedChange[]**](FeedChange.md) | A container that encapsulates the state of the feed after a create, update, or delete. | [optional] 
**nextFeedContinuationToken** | **int** | When iterating through the log of changes this value indicates the value that should be used for the next continuation token. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


