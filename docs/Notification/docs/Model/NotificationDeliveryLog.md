# NotificationDeliveryLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**result** | **string** |  | [optional] 
**stats** | **map[string,object]** |  | [optional] 
**activityId** | **string** | Identifier used for correlating to other diagnostics that may have been recorded elsewhere. | [optional] 
**description** | **string** |  | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**errors** | **int** |  | [optional] 
**id** | **string** | Unique instance identifier. | [optional] 
**logType** | **string** |  | [optional] 
**messages** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationDiagnosticLogMessage[]**](NotificationDiagnosticLogMessage.md) |  | [optional] 
**properties** | **map[string,string]** |  | [optional] 
**source** | **string** | This identifier depends on the logType.  For notification jobs, this will be the job Id. For subscription tracing, this will be a special root Guid with the subscription Id encoded. | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**warnings** | **int** |  | [optional] 
**batches** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationBatch[]**](NotificationBatch.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


