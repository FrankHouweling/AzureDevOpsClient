# WebApiConnectedService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id/Name of the connection service. For Ex: Subscription Id for Azure Connection | [optional] 
**url** | **string** |  | [optional] 
**authenticatedBy** | [**\FrankHouweling\AzureDevOpsClient\Core\Model\IdentityRef**](IdentityRef.md) | The user who did the OAuth authentication to created this service | [optional] 
**description** | **string** | Extra description on the service. | [optional] 
**friendlyName** | **string** | Friendly Name of service connection | [optional] 
**kind** | **string** | The kind of service. | [optional] 
**project** | [**\FrankHouweling\AzureDevOpsClient\Core\Model\TeamProjectReference**](TeamProjectReference.md) | The project associated with this service | [optional] 
**serviceUri** | **string** | Optional uri to connect directly to the service such as https://windows.azure.com | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


