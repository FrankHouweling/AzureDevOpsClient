# IdentityRefWithVote

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**directoryAlias** | **string** | Deprecated - Can be retrieved by querying the Graph user referenced in the \&quot;self\&quot; entry of the IdentityRef \&quot;_links\&quot; dictionary | [optional] 
**id** | **string** |  | [optional] 
**imageUrl** | **string** | Deprecated - Available in the \&quot;avatar\&quot; entry of the IdentityRef \&quot;_links\&quot; dictionary | [optional] 
**inactive** | **bool** | Deprecated - Can be retrieved by querying the Graph membership state referenced in the \&quot;membershipState\&quot; entry of the GraphUser \&quot;_links\&quot; dictionary | [optional] 
**isAadIdentity** | **bool** | Deprecated - Can be inferred from the subject type of the descriptor (Descriptor.IsAadUserType/Descriptor.IsAadGroupType) | [optional] 
**isContainer** | **bool** | Deprecated - Can be inferred from the subject type of the descriptor (Descriptor.IsGroupType) | [optional] 
**isDeletedInOrigin** | **bool** |  | [optional] 
**profileUrl** | **string** | Deprecated - not in use in most preexisting implementations of ToIdentityRef | [optional] 
**uniqueName** | **string** | Deprecated - use Domain+PrincipalName instead | [optional] 
**links** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) | This field contains zero or more interesting links about the graph subject. These links may be invoked to obtain additional relationships or more detailed information about this graph subject. | [optional] 
**descriptor** | **string** | The descriptor is the primary way to reference the graph subject while the system is running. This field will uniquely identify the same graph subject across both Accounts and Organizations. | [optional] 
**displayName** | **string** | This is the non-unique display name of the graph subject. To change this field, you must alter its value in the source provider. | [optional] 
**url** | **string** | This url is the full route to the source resource of this graph subject. | [optional] 
**isFlagged** | **bool** | Indicates if this reviewer is flagged for attention on this pull request. | [optional] 
**isRequired** | **bool** | Indicates if this is a required reviewer for this pull request. &lt;br /&gt; Branches can have policies that require particular reviewers are required for pull requests. | [optional] 
**reviewerUrl** | **string** | URL to retrieve information about this identity | [optional] 
**vote** | **int** | Vote on a pull request:&lt;br /&gt; 10 - approved 5 - approved with suggestions 0 - no vote -5 - waiting for author -10 - rejected | [optional] 
**votedFor** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\IdentityRefWithVote[]**](IdentityRefWithVote.md) | Groups or teams that that this reviewer contributed to. &lt;br /&gt; Groups and teams can be reviewers on pull requests but can not vote directly.  When a member of the group or team votes, that vote is rolled up into the group or team vote.  VotedFor is a list of such votes. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


