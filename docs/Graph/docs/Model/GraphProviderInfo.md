# GraphProviderInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**descriptor** | **string** | The descriptor is the primary way to reference the graph subject while the system is running. This field will uniquely identify the same graph subject across both Accounts and Organizations. | [optional] 
**domain** | **string** | This represents the name of the container of origin for a graph member. (For MSA this is \&quot;Windows Live ID\&quot;, for AAD the tenantID of the directory.) | [optional] 
**origin** | **string** | The type of source provider for the origin identifier (ex: \&quot;aad\&quot;, \&quot;msa\&quot;) | [optional] 
**originId** | **string** | The unique identifier from the system of origin. (For MSA this is the PUID in hex notation, for AAD this is the object id.) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


