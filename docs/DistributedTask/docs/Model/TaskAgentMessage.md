# TaskAgentMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**body** | **string** | Gets or sets the body of the message. If the &lt;c&gt;IV&lt;/c&gt; property is provided the body will need to be decrypted using the &lt;c&gt;TaskAgentSession.EncryptionKey&lt;/c&gt; value in addition to the &lt;c&gt;IV&lt;/c&gt;. | [optional] 
**iv** | **string[]** | Gets or sets the initialization vector used to encrypt this message. | [optional] 
**messageId** | **int** | Gets or sets the message identifier. | [optional] 
**messageType** | **string** | Gets or sets the message type, describing the data contract found in &lt;c&gt;TaskAgentMessage.Body&lt;/c&gt;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


