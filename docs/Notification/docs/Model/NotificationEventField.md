# NotificationEventField

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fieldType** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationEventFieldType**](NotificationEventFieldType.md) | Gets or sets the type of this field. | [optional] 
**id** | **string** | Gets or sets the unique identifier of this field. | [optional] 
**name** | **string** | Gets or sets the name of this field. | [optional] 
**path** | **string** | Gets or sets the path to the field in the event object. This path can be either Json Path or XPath, depending on if the event will be serialized into Json or XML | [optional] 
**supportedScopes** | **string[]** | Gets or sets the scopes that this field supports. If not specified then the event type scopes apply. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


