# AuditStream

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consumerInputs** | **map[string,string]** | Inputs used to communicate with external service. Inputs could be url, a connection string, a token, etc. | [optional] 
**consumerType** | **string** | Type of the consumer, i.e. splunk, azureEventHub, etc. | [optional] 
**createdTime** | [**\DateTime**](\DateTime.md) | The time when the stream was created | [optional] 
**displayName** | **string** | Used to identify individual streams | [optional] 
**id** | **int** | Unique stream identifier | [optional] 
**status** | **string** | Status of the stream, Enabled, Disabled | [optional] 
**statusReason** | **string** | Reason for the current stream status, i.e. Disabled by the system, Invalid credentials, etc. | [optional] 
**updatedTime** | [**\DateTime**](\DateTime.md) | The time when the stream was last updated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


