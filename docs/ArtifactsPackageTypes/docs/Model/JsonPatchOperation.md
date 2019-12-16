# JsonPatchOperation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | The path to copy from for the Move/Copy operation. | [optional] 
**op** | **string** | The patch operation | [optional] 
**path** | **string** | The path for the operation. In the case of an array, a zero based index can be used to specify the position in the array (e.g. /biscuits/0/name). The \&quot;-\&quot; character can be used instead of an index to insert at the end of the array (e.g. /biscuits/-). | [optional] 
**value** | **object** | The value for the operation. This is either a primitive or a JToken. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


