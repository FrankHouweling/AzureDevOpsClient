# Comment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) | Links to other related objects. | [optional] 
**author** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef**](IdentityRef.md) | The author of the comment. | [optional] 
**commentType** | **string** | The comment type at the time of creation. | [optional] 
**content** | **string** | The comment content. | [optional] 
**id** | **int** | The comment ID. IDs start at 1 and are unique to a pull request. | [optional] 
**isDeleted** | **bool** | Whether or not this comment was soft-deleted. | [optional] 
**lastContentUpdatedDate** | [**\DateTime**](\DateTime.md) | The date the comment&#39;s content was last updated. | [optional] 
**lastUpdatedDate** | [**\DateTime**](\DateTime.md) | The date the comment was last updated. | [optional] 
**parentCommentId** | **int** | The ID of the parent comment. This is used for replies. | [optional] 
**publishedDate** | [**\DateTime**](\DateTime.md) | The date the comment was first published. | [optional] 
**usersLiked** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef[]**](IdentityRef.md) | A list of the users who have liked this comment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


