# NotificationSubscriptionUpdateParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adminSettings** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionAdminSettings**](SubscriptionAdminSettings.md) | Admin-managed settings for the subscription. Only applies to subscriptions where the subscriber is a group. | [optional] 
**channel** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\ISubscriptionChannel**](ISubscriptionChannel.md) | Channel for delivering notifications triggered by the subscription. | [optional] 
**description** | **string** | Updated description for the subscription. Typically describes filter criteria which helps identity the subscription. | [optional] 
**filter** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\ISubscriptionFilter**](ISubscriptionFilter.md) | Matching criteria for the subscription. ExpressionFilter | [optional] 
**scope** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionScope**](SubscriptionScope.md) | The container in which events must be published from in order to be matched by the new subscription. If not specified, defaults to the current host (typically the current account or project collection). For example, a subscription scoped to project A will not produce notifications for events published from project B. | [optional] 
**status** | **string** | Updated status for the subscription. Typically used to enable or disable a subscription. | [optional] 
**statusMessage** | **string** | Optional message that provides more details about the updated status. | [optional] 
**userSettings** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionUserSettings**](SubscriptionUserSettings.md) | User-managed settings for the subscription. Only applies to subscriptions where the subscriber is a group. Typically used to opt-in or opt-out a user from a group subscription. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


