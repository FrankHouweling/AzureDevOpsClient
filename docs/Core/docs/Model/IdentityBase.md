# IdentityBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customDisplayName** | **string** | The custom display name for the identity (if any). Setting this property to an empty string will clear the existing custom display name. Setting this property to null will not affect the existing persisted value (since null values do not get sent over the wire or to the database) | [optional] 
**descriptor** | [**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\IdentityDescriptor**](IdentityDescriptor.md) |  | [optional] 
**id** | **string** |  | [optional] 
**isActive** | **bool** |  | [optional] 
**isContainer** | **bool** |  | [optional] 
**masterId** | **string** |  | [optional] 
**memberIds** | **string[]** |  | [optional] 
**memberOf** | [**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\IdentityDescriptor[]**](IdentityDescriptor.md) |  | [optional] 
**members** | [**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\IdentityDescriptor[]**](IdentityDescriptor.md) |  | [optional] 
**metaTypeId** | **int** |  | [optional] 
**properties** | [**\AzureDevOpsClient\Core\AzureDevOpsClient\Core\Model\PropertiesCollection**](PropertiesCollection.md) |  | [optional] 
**providerDisplayName** | **string** | The display name for the identity as specified by the source identity provider. | [optional] 
**resourceVersion** | **int** |  | [optional] 
**socialDescriptor** | **string** |  | [optional] 
**subjectDescriptor** | **string** |  | [optional] 
**uniqueUserId** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


