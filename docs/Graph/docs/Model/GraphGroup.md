# GraphGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | This represents the name of the container of origin for a graph member. (For MSA this is \&quot;Windows Live ID\&quot;, for AD the name of the domain, for AAD the tenantID of the directory, for VSTS groups the ScopeId, etc) | [optional] 
**mailAddress** | **string** | The email address of record for a given graph member. This may be different than the principal name. | [optional] 
**principalName** | **string** | This is the PrincipalName of this graph member from the source provider. The source provider may change this field over time and it is not guaranteed to be immutable for the life of the graph member by VSTS. | [optional] 
**legacyDescriptor** | **string** | [Internal Use Only] The legacy descriptor is here in case you need to access old version IMS using identity descriptor. | [optional] 
**origin** | **string** | The type of source provider for the origin identifier (ex:AD, AAD, MSA) | [optional] 
**originId** | **string** | The unique identifier from the system of origin. Typically a sid, object id or Guid. Linking and unlinking operations can cause this value to change for a user because the user is not backed by a different provider and has a different unique id in the new provider. | [optional] 
**subjectKind** | **string** | This field identifies the type of the graph subject (ex: Group, Scope, User). | [optional] 
**links** | [**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\ReferenceLinks**](ReferenceLinks.md) | This field contains zero or more interesting links about the graph subject. These links may be invoked to obtain additional relationships or more detailed information about this graph subject. | [optional] 
**descriptor** | **string** | The descriptor is the primary way to reference the graph subject while the system is running. This field will uniquely identify the same graph subject across both Accounts and Organizations. | [optional] 
**displayName** | **string** | This is the non-unique display name of the graph subject. To change this field, you must alter its value in the source provider. | [optional] 
**url** | **string** | This url is the full route to the source resource of this graph subject. | [optional] 
**description** | **string** | A short phrase to help human readers disambiguate groups with similar names | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


