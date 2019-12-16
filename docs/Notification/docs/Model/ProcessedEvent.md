# ProcessedEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actors** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\EventActor[]**](EventActor.md) | All of the users that were associated with this event and their role. | [optional] 
**allowedChannels** | **string** |  | [optional] 
**artifactUri** | **string** |  | [optional] 
**deliveryIdentities** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\ProcessingIdentities**](ProcessingIdentities.md) |  | [optional] 
**evaluations** | [**map[string,\FrankHouweling\AzureDevOpsClient\Notification\Model\SubscriptionEvaluation]**](SubscriptionEvaluation.md) | Evaluations for each user | [optional] 
**eventId** | **int** |  | [optional] 
**exclusions** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\EventActor[]**](EventActor.md) | Which members were excluded from evaluation (only applies to ActorMatcher subscriptions) | [optional] 
**inclusions** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\EventActor[]**](EventActor.md) | Which members were included for evaluation (only applies to ActorMatcher subscriptions) | [optional] 
**notifications** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\GeneratedNotification[]**](GeneratedNotification.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


