# CommentList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  | [optional] 
**comments** | [**\FrankHouweling\AzureDevOpsClient\Wiki\Model\Comment[]**](Comment.md) | List of comments in the current batch. | [optional] 
**continuationToken** | **string** | A string token that can be used to retrieving next page of comments if available. Otherwise null. | [optional] 
**count** | **int** | The count of comments in the current batch. | [optional] 
**nextPage** | **string** | Uri to the next page of comments if it is available. Otherwise null. | [optional] 
**totalCount** | **int** | Total count of comments on a work item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


