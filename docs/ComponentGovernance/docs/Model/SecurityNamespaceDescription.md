# SecurityNamespaceDescription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actions** | [**\FrankHouweling\AzureDevOpsClient\ComponentGovernance\Model\ActionDefinition[]**](ActionDefinition.md) | The list of actions that this Security Namespace is responsible for securing. | [optional] 
**dataspaceCategory** | **string** | This is the dataspace category that describes where the security information for this SecurityNamespace should be stored. | [optional] 
**displayName** | **string** | This localized name for this namespace. | [optional] 
**elementLength** | **int** | If the security tokens this namespace will be operating on need to be split on certain character lengths to determine its elements, that length should be specified here. If not, this value will be -1. | [optional] 
**extensionType** | **string** | This is the type of the extension that should be loaded from the plugins directory for extending this security namespace. | [optional] 
**isRemotable** | **bool** | If true, the security namespace is remotable, allowing another service to proxy the namespace. | [optional] 
**name** | **string** | This non-localized for this namespace. | [optional] 
**namespaceId** | **string** | The unique identifier for this namespace. | [optional] 
**readPermission** | **int** | The permission bits needed by a user in order to read security data on the Security Namespace. | [optional] 
**separatorValue** | **string** | If the security tokens this namespace will be operating on need to be split on certain characters to determine its elements that character should be specified here. If not, this value will be the null character. | [optional] 
**structureValue** | **int** | Used to send information about the structure of the security namespace over the web service. | [optional] 
**systemBitMask** | **int** | The bits reserved by system store | [optional] 
**useTokenTranslator** | **bool** | If true, the security service will expect an ISecurityDataspaceTokenTranslator plugin to exist for this namespace | [optional] 
**writePermission** | **int** | The permission bits needed by a user in order to modify security data on the Security Namespace. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


