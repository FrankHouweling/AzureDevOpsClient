# NotificationSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\ReferenceLinks**](ReferenceLinks.md) | Links to related resources, APIs, and views for the subscription. | [optional] 
**adminSettings** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionAdminSettings**](SubscriptionAdminSettings.md) | Admin-managed settings for the subscription. Only applies when the subscriber is a group. | [optional] 
**channel** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\ISubscriptionChannel**](ISubscriptionChannel.md) | Channel for delivering notifications triggered by the subscription. | [optional] 
**description** | **string** | Description of the subscription. Typically describes filter criteria which helps identity the subscription. | [optional] 
**diagnostics** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionDiagnostics**](SubscriptionDiagnostics.md) | Diagnostics for this subscription. | [optional] 
**extendedProperties** | **map[string,string]** | Any extra properties like detailed description for different contexts, user/group contexts | [optional] 
**filter** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\ISubscriptionFilter**](ISubscriptionFilter.md) | Matching criteria for the subscription. ExpressionFilter | [optional] 
**flags** | **string** | Read-only indicators that further describe the subscription. | [optional] 
**id** | **string** | Subscription identifier. | [optional] 
**lastModifiedBy** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\IdentityRef**](IdentityRef.md) | User that last modified (or created) the subscription. | [optional] 
**modifiedDate** | [**\DateTime**](\DateTime.md) | Date when the subscription was last modified. If the subscription has not been updated since it was created, this value will indicate when the subscription was created. | [optional] 
**permissions** | **string** | The permissions the user have for this subscriptions. | [optional] 
**scope** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionScope**](SubscriptionScope.md) | The container in which events must be published from in order to be matched by the subscription. If empty, the scope is the current host (typically an account or project collection). For example, a subscription scoped to project A will not produce notifications for events published from project B. | [optional] 
**status** | **string** | Status of the subscription. Typically indicates whether the subscription is enabled or not. | [optional] 
**statusMessage** | **string** | Message that provides more details about the status of the subscription. | [optional] 
**subscriber** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\IdentityRef**](IdentityRef.md) | User or group that will receive notifications for events matching the subscription&#39;s filter criteria. | [optional] 
**url** | **string** | REST API URL of the subscriotion. | [optional] 
**userSettings** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionUserSettings**](SubscriptionUserSettings.md) | User-managed settings for the subscription. Only applies when the subscriber is a group. Typically used to indicate whether the calling user is opted in or out of a group subscription. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


