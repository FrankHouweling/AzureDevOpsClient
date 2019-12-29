# Notification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdDate** | [**\DateTime**](\DateTime.md) | Gets or sets date and time that this result was created. | [optional] 
**details** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\NotificationDetails**](NotificationDetails.md) | Details about this notification (if available) | [optional] 
**eventId** | **string** | The event id associated with this notification | [optional] 
**id** | **int** | The notification id | [optional] 
**modifiedDate** | [**\DateTime**](\DateTime.md) | Gets or sets date and time that this result was last modified. | [optional] 
**result** | **string** | Result of the notification | [optional] 
**status** | **string** | Status of the notification | [optional] 
**subscriberId** | **string** | The subscriber Id  associated with this notification. This is the last identity who touched in the subscription. In case of test notifications it can be the tester if the subscription is not created yet. | [optional] 
**subscriptionId** | **string** | The subscription id associated with this notification | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


