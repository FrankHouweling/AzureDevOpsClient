# SubscriptionTraceEventProcessingLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**jobId** | **string** | Indicates the job Id that processed or delivered this subscription | [optional] 
**jobInstanceId** | **string** | Indicates unique instance identifier for the job that processed or delivered this subscription | [optional] 
**subscriptionId** | **string** |  | [optional] 
**activityId** | **string** | Identifier used for correlating to other diagnostics that may have been recorded elsewhere. | [optional] 
**description** | **string** |  | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**errors** | **int** |  | [optional] 
**id** | **string** | Unique instance identifier. | [optional] 
**logType** | **string** |  | [optional] 
**messages** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationDiagnosticLogMessage[]**](NotificationDiagnosticLogMessage.md) |  | [optional] 
**properties** | **map[string,string]** |  | [optional] 
**source** | **string** | This identifier depends on the logType.  For notification jobs, this will be the job Id. For subscription tracing, this will be a special root Guid with the subscription Id encoded. | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**warnings** | **int** |  | [optional] 
**channel** | **string** |  | [optional] 
**evaluationIdentities** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\ProcessingIdentities**](ProcessingIdentities.md) |  | [optional] 
**optedOut** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\DiagnosticIdentity[]**](DiagnosticIdentity.md) | Which members opted out from receiving notifications from this subscription | [optional] 
**processedEvents** | [**map[string,\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\ProcessedEvent]**](ProcessedEvent.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


