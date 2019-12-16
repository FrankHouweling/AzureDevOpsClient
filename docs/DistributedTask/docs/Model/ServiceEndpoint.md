# ServiceEndpoint

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**administratorsGroup** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity reference for the administrators group of the service endpoint. | [optional] 
**authorization** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\EndpointAuthorization**](EndpointAuthorization.md) | Gets or sets the authorization data for talking to the endpoint. | [optional] 
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity reference for the user who created the Service endpoint. | [optional] 
**data** | **map[string,string]** |  | [optional] 
**description** | **string** | Gets or sets the description of endpoint. | [optional] 
**groupScopeId** | **string** |  | [optional] 
**id** | **string** | Gets or sets the identifier of this endpoint. | [optional] 
**isReady** | **bool** | EndPoint state indicator | [optional] 
**isShared** | **bool** | Indicates whether service endpoint is shared with other projects or not. | [optional] 
**name** | **string** | Gets or sets the friendly name of the endpoint. | [optional] 
**operationStatus** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\JObject**](JObject.md) | Error message during creation/deletion of endpoint | [optional] 
**owner** | **string** | Gets or sets the owner of the endpoint. | [optional] 
**readersGroup** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity reference for the readers group of the service endpoint. | [optional] 
**type** | **string** | Gets or sets the type of the endpoint. | [optional] 
**url** | **string** | Gets or sets the url of the endpoint. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


