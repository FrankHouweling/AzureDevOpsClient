# PublisherEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**diagnostics** | **map[string,string]** | Add key/value pairs which will be stored with a published notification in the SH service DB.  This key/value pairs are for diagnostic purposes only and will have not effect on the delivery of a notification. | [optional] 
**event** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Event**](Event.md) | The event being published | [optional] 
**isFilteredEvent** | **bool** | Gets or sets flag for filtered events | [optional] 
**notificationData** | **map[string,string]** | Additional data that needs to be sent as part of notification to complement the Resource data in the Event | [optional] 
**otherResourceVersions** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\VersionedResource[]**](VersionedResource.md) | Gets or sets the array of older supported resource versions. | [optional] 
**publisherInputFilters** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\InputFilter[]**](InputFilter.md) | Optional publisher-input filters which restricts the set of subscriptions which are triggered by the event | [optional] 
**subscription** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription**](Subscription.md) | Gets or sets matched hooks subscription which caused this event. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


