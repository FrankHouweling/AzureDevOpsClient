# Event

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdDate** | [**\DateTime**](\DateTime.md) | Gets or sets the UTC-based date and time that this event was created. | [optional] 
**detailedMessage** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\FormattedEventMessage**](FormattedEventMessage.md) | Gets or sets the detailed message associated with this event. | [optional] 
**eventType** | **string** | Gets or sets the type of this event. | [optional] 
**id** | **string** | Gets or sets the unique identifier of this event. | [optional] 
**message** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\FormattedEventMessage**](FormattedEventMessage.md) | Gets or sets the (brief) message associated with this event. | [optional] 
**publisherId** | **string** | Gets or sets the identifier of the publisher that raised this event. | [optional] 
**resource** | **object** | Gets or sets the data associated with this event. | [optional] 
**resourceContainers** | [**map[string,\FrankHouweling\AzureDevOpsClient\Hooks\Model\ResourceContainer]**](ResourceContainer.md) | Gets or sets the resource containers. | [optional] 
**resourceVersion** | **string** | Gets or sets the version of the data associated with this event. | [optional] 
**sessionToken** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\SessionToken**](SessionToken.md) | Gets or sets the Session Token that can be used in further interactions | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


