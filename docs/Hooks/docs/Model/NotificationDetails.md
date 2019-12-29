# NotificationDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completedDate** | [**\DateTime**](\DateTime.md) | Gets or sets the time that this notification was completed (response received from the consumer) | [optional] 
**consumerActionId** | **string** | Gets or sets this notification detail&#39;s consumer action identifier. | [optional] 
**consumerId** | **string** | Gets or sets this notification detail&#39;s consumer identifier. | [optional] 
**consumerInputs** | **map[string,string]** | Gets or sets this notification detail&#39;s consumer inputs. | [optional] 
**dequeuedDate** | [**\DateTime**](\DateTime.md) | Gets or sets the time that this notification was dequeued for processing | [optional] 
**errorDetail** | **string** | Gets or sets this notification detail&#39;s error detail. | [optional] 
**errorMessage** | **string** | Gets or sets this notification detail&#39;s error message. | [optional] 
**event** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Event**](Event.md) | Gets or sets this notification detail&#39;s event content. | [optional] 
**eventType** | **string** | Gets or sets this notification detail&#39;s event type. | [optional] 
**processedDate** | [**\DateTime**](\DateTime.md) | Gets or sets the time that this notification was finished processing (just before the request is sent to the consumer) | [optional] 
**publisherId** | **string** | Gets or sets this notification detail&#39;s publisher identifier. | [optional] 
**publisherInputs** | **map[string,string]** | Gets or sets this notification detail&#39;s publisher inputs. | [optional] 
**queuedDate** | [**\DateTime**](\DateTime.md) | Gets or sets the time that this notification was queued (created) | [optional] 
**request** | **string** | Gets or sets this notification detail&#39;s request. | [optional] 
**requestAttempts** | **int** | Number of requests attempted to be sent to the consumer | [optional] 
**requestDuration** | **double** | Duration of the request to the consumer in seconds | [optional] 
**response** | **string** | Gets or sets this notification detail&#39;s response. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


