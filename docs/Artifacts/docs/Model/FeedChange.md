# FeedChange

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**changeType** | **string** | The type of operation. | [optional] 
**feed** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed**](Feed.md) | The state of the feed after a after a create, update, or delete operation completed. | [optional] 
**feedContinuationToken** | **int** | A token that identifies the next change in the log of changes. | [optional] 
**latestPackageContinuationToken** | **int** | A token that identifies the latest package change for this feed.  This can be used to quickly determine if there have been any changes to packages in a specific feed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


