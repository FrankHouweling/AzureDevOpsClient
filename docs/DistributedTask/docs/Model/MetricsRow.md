# MetricsRow

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dimensions** | **string[]** | The values of the properties mentioned as &#39;Dimensions&#39; in column header. E.g. 1: For a property &#39;LastJobStatus&#39; - metrics will be provided for &#39;passed&#39;, &#39;failed&#39;, etc. E.g. 2: For a property &#39;TargetState&#39; - metrics will be provided for &#39;online&#39;, &#39;offline&#39; targets. | [optional] 
**metrics** | **string[]** | Metrics in serialized format. Should be deserialized based on the data type provided in header. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


