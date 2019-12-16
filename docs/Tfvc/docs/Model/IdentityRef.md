# IdentityRef

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\ReferenceLinks**](ReferenceLinks.md) | This field contains zero or more interesting links about the graph subject. These links may be invoked to obtain additional relationships or more detailed information about this graph subject. | [optional] 
**descriptor** | **string** | The descriptor is the primary way to reference the graph subject while the system is running. This field will uniquely identify the same graph subject across both Accounts and Organizations. | [optional] 
**displayName** | **string** | This is the non-unique display name of the graph subject. To change this field, you must alter its value in the source provider. | [optional] 
**url** | **string** | This url is the full route to the source resource of this graph subject. | [optional] 
**directoryAlias** | **string** | Deprecated - Can be retrieved by querying the Graph user referenced in the \&quot;self\&quot; entry of the IdentityRef \&quot;_links\&quot; dictionary | [optional] 
**id** | **string** |  | [optional] 
**imageUrl** | **string** | Deprecated - Available in the \&quot;avatar\&quot; entry of the IdentityRef \&quot;_links\&quot; dictionary | [optional] 
**inactive** | **bool** | Deprecated - Can be retrieved by querying the Graph membership state referenced in the \&quot;membershipState\&quot; entry of the GraphUser \&quot;_links\&quot; dictionary | [optional] 
**isAadIdentity** | **bool** | Deprecated - Can be inferred from the subject type of the descriptor (Descriptor.IsAadUserType/Descriptor.IsAadGroupType) | [optional] 
**isContainer** | **bool** | Deprecated - Can be inferred from the subject type of the descriptor (Descriptor.IsGroupType) | [optional] 
**isDeletedInOrigin** | **bool** |  | [optional] 
**profileUrl** | **string** | Deprecated - not in use in most preexisting implementations of ToIdentityRef | [optional] 
**uniqueName** | **string** | Deprecated - use Domain+PrincipalName instead | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


