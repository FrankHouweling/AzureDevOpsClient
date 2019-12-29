# Comment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\ReferenceLinks**](ReferenceLinks.md) | Link references to related REST resources. | [optional] 
**url** | **string** |  | [optional] 
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef**](IdentityRef.md) | IdentityRef of the creator of the comment. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | The creation date of the comment. | [optional] 
**createdOnBehalfDate** | [**\DateTime**](\DateTime.md) | Effective Date/time value for adding the comment. Can be optionally different from CreatedDate. | [optional] 
**createdOnBehalfOf** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef**](IdentityRef.md) | Identity on whose behalf this comment has been added. Can be optionally different from CreatedBy. | [optional] 
**id** | **int** | The id assigned to the comment. | [optional] 
**isDeleted** | **bool** | Indicates if the comment has been deleted. | [optional] 
**mentions** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\CommentMention[]**](CommentMention.md) | The mentions of the comment. | [optional] 
**modifiedBy** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef**](IdentityRef.md) | IdentityRef of the user who last modified the comment. | [optional] 
**modifiedDate** | [**\DateTime**](\DateTime.md) | The last modification date of the comment. | [optional] 
**reactions** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\CommentReaction[]**](CommentReaction.md) | The reactions of the comment. | [optional] 
**text** | **string** | The text of the comment. | [optional] 
**version** | **int** | The current version of the comment. | [optional] 
**workItemId** | **int** | The id of the work item this comment belongs to. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


