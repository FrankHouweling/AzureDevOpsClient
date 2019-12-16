# RefreshAuthenticationParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**endpointId** | **string** | EndpointId which needs new authentication params | [optional] 
**scope** | **int[]** | Scope of the token requested. For GitHub marketplace apps, scope contains repository Ids | [optional] 
**tokenValidityInMinutes** | **int** | The requested endpoint authentication should be valid for _ minutes. Authentication params will not be refreshed if the token contained in endpoint already has active token. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


