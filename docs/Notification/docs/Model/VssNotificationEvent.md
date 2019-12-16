# VssNotificationEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actors** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\EventActor[]**](EventActor.md) | Optional: A list of actors which are additional identities with corresponding roles that are relevant to the event. | [optional] 
**artifactUris** | **string[]** | Optional: A list of artifacts referenced or impacted by this event. | [optional] 
**data** | **object** | Required: The event payload.  If Data is a string, it must be in Json or XML format.  Otherwise it must have a serialization format attribute. | [optional] 
**eventType** | **string** | Required: The name of the event.  This event must be registered in the context it is being fired. | [optional] 
**expiresIn** | **string** | How long before the event expires and will be cleaned up.  The default is to use the system default. | [optional] 
**itemId** | **string** | The id of the item, artifact, extension, project, etc. | [optional] 
**processDelay** | **string** | How long to wait before processing this event.  The default is to process immediately. | [optional] 
**scopes** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\EventScope[]**](EventScope.md) | Optional: A list of scopes which are are relevant to the event. | [optional] 
**sourceEventCreatedTime** | [**\DateTime**](\DateTime.md) | This is the time the original source event for this VssNotificationEvent was created.  For example, for something like a build completion notification SourceEventCreatedTime should be the time the build finished not the time this event was raised. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


