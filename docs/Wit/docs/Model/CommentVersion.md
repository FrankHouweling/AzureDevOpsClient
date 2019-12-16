# CommentVersion

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
**isDeleted** | **bool** | Indicates if the comment has been deleted at this version. | [optional] 
**modifiedBy** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef**](IdentityRef.md) | IdentityRef of the user who modified the comment at this version. | [optional] 
**modifiedDate** | [**\DateTime**](\DateTime.md) | The modification date of the comment for this version. | [optional] 
**renderedText** | **string** | The rendered content of the comment at this version. | [optional] 
**text** | **string** | The text of the comment at this version. | [optional] 
**version** | **int** | The version number. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


