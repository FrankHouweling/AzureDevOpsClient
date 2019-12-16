# NotificationSubscriptionCreateParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\ISubscriptionChannel**](ISubscriptionChannel.md) | Channel for delivering notifications triggered by the new subscription. | [optional] 
**description** | **string** | Brief description for the new subscription. Typically describes filter criteria which helps identity the subscription. | [optional] 
**filter** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\ISubscriptionFilter**](ISubscriptionFilter.md) | Matching criteria for the new subscription. ExpressionFilter | [optional] 
**scope** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionScope**](SubscriptionScope.md) | The container in which events must be published from in order to be matched by the new subscription. If not specified, defaults to the current host (typically an account or project collection). For example, a subscription scoped to project A will not produce notifications for events published from project B. | [optional] 
**subscriber** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\IdentityRef**](IdentityRef.md) | User or group that will receive notifications for events matching the subscription&#39;s filter criteria. If not specified, defaults to the calling user. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


