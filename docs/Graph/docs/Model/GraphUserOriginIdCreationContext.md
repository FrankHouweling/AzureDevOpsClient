# GraphUserOriginIdCreationContext

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**storageKey** | **string** | Optional: If provided, we will use this identifier for the storage key of the created user | [optional] 
**origin** | **string** | This should be the name of the origin provider. Example: github.com | [optional] 
**originId** | **string** | This should be the object id or sid of the user from the source AD or AAD provider. Example: d47d025a-ce2f-4a79-8618-e8862ade30dd Team Services will communicate with the source provider to fill all other fields on creation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


