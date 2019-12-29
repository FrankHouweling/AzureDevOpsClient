# NotificationsQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**associatedSubscriptions** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription[]**](Subscription.md) | The subscriptions associated with the notifications returned from the query | [optional] 
**includeDetails** | **bool** | If true, we will return all notification history for the query provided; otherwise, the summary is returned. | [optional] 
**maxCreatedDate** | [**\DateTime**](\DateTime.md) | Optional maximum date at which the notification was created | [optional] 
**maxResults** | **int** | Optional maximum number of overall results to include | [optional] 
**maxResultsPerSubscription** | **int** | Optional maximum number of results for each subscription. Only takes effect when a list of subscription ids is supplied in the query. | [optional] 
**minCreatedDate** | [**\DateTime**](\DateTime.md) | Optional minimum date at which the notification was created | [optional] 
**publisherId** | **string** | Optional publisher id to restrict the results to | [optional] 
**results** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Notification[]**](Notification.md) | Results from the query | [optional] 
**resultType** | **string** | Optional notification result type to filter results to | [optional] 
**status** | **string** | Optional notification status to filter results to | [optional] 
**subscriptionIds** | **string[]** | Optional list of subscription ids to restrict the results to | [optional] 
**summary** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\NotificationSummary[]**](NotificationSummary.md) | Summary of notifications - the count of each result type (success, fail, ..). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


