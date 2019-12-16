# Comment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  | [optional] 
**artifactId** | **string** | The id of the artifact this comment belongs to | [optional] 
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\Wiki\Model\IdentityRef**](IdentityRef.md) | IdentityRef of the creator of the comment. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | The creation date of the comment. | [optional] 
**id** | **int** | The id assigned to the comment. | [optional] 
**isDeleted** | **bool** | Indicates if the comment has been deleted. | [optional] 
**mentions** | [**\FrankHouweling\AzureDevOpsClient\Wiki\Model\CommentMention[]**](CommentMention.md) | The mentions of the comment. | [optional] 
**modifiedBy** | [**\FrankHouweling\AzureDevOpsClient\Wiki\Model\IdentityRef**](IdentityRef.md) | IdentityRef of the user who last modified the comment. | [optional] 
**modifiedDate** | [**\DateTime**](\DateTime.md) | The last modification date of the comment. | [optional] 
**parentId** | **int** | The comment id of the parent comment, if any | [optional] 
**reactions** | [**\FrankHouweling\AzureDevOpsClient\Wiki\Model\CommentReaction[]**](CommentReaction.md) | The reactions on the comment. | [optional] 
**renderedText** | **string** | The rendered text of the comment | [optional] 
**replies** | [**\FrankHouweling\AzureDevOpsClient\Wiki\Model\CommentList**](CommentList.md) | Replies for this comment | [optional] 
**state** | **string** | Indicates the current state of the comment | [optional] 
**text** | **string** | The plaintext/markdown version of the comment | [optional] 
**version** | **int** | The current version of the comment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


