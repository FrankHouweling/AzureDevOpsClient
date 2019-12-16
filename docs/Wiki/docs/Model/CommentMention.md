# CommentMention

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  | [optional] 
**artifactId** | **string** | Id of the artifact this mention belongs to | [optional] 
**commentId** | **int** | Id of the comment associated with this mention. Nullable to support legacy mentions which can potentially have null commentId | [optional] 
**mentionedArtifact** | **string** | Value of the mentioned artifact. Expected Value varies by CommentMentionType: Person:         VSID associated with the identity Work Item:      ID of the work item Pull Request:   ID of the Pull Request | [optional] 
**type** | **string** | The context which represent where this mentioned was parsed from | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


