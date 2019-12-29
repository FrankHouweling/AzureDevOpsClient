# TaskAgentSession

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentReference**](TaskAgentReference.md) | Gets or sets the agent which is the target of the session. | [optional] 
**encryptionKey** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentSessionKey**](TaskAgentSessionKey.md) | Gets the key used to encrypt message traffic for this session. | [optional] 
**ownerName** | **string** | Gets or sets the owner name of this session. Generally this will be the machine of origination. | [optional] 
**sessionId** | **string** | Gets the unique identifier for this session. | [optional] 
**systemCapabilities** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


