# CommentThread

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) | Links to other related objects. | [optional] 
**comments** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\Comment[]**](Comment.md) | A list of the comments. | [optional] 
**id** | **int** | The comment thread id. | [optional] 
**identities** | [**map[string,\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef]**](IdentityRef.md) | Set of identities related to this thread | [optional] 
**isDeleted** | **bool** | Specify if the thread is deleted which happens when all comments are deleted. | [optional] 
**lastUpdatedDate** | [**\DateTime**](\DateTime.md) | The time this thread was last updated. | [optional] 
**properties** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\PropertiesCollection**](PropertiesCollection.md) | Optional properties associated with the thread as a collection of key-value pairs. | [optional] 
**publishedDate** | [**\DateTime**](\DateTime.md) | The time this thread was published. | [optional] 
**status** | **string** | The status of the comment thread. | [optional] 
**threadContext** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\CommentThreadContext**](CommentThreadContext.md) | Specify thread context such as position in left/right file. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


