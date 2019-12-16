# NotificationEventType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventTypeCategory**](NotificationEventTypeCategory.md) |  | [optional] 
**color** | **string** | Gets or sets the color representing this event type. Example: rgb(128,245,211) or #fafafa | [optional] 
**customSubscriptionsAllowed** | **bool** |  | [optional] 
**eventPublisher** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventPublisher**](NotificationEventPublisher.md) |  | [optional] 
**fields** | [**map[string,\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventField]**](NotificationEventField.md) |  | [optional] 
**hasInitiator** | **bool** |  | [optional] 
**icon** | **string** | Gets or sets the icon representing this event type. Can be a URL or a CSS class. Example: css://some-css-class | [optional] 
**id** | **string** | Gets or sets the unique identifier of this event definition. | [optional] 
**name** | **string** | Gets or sets the name of this event definition. | [optional] 
**roles** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventRole[]**](NotificationEventRole.md) |  | [optional] 
**supportedScopes** | **string[]** | Gets or sets the scopes that this event type supports | [optional] 
**url** | **string** | Gets or sets the rest end point to get this event type details (fields, fields types) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


