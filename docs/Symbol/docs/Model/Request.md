# Request

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdBy** | **string** | The ID of user who created this item. Optional. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | The date time when this item is created. Optional. | [optional] 
**id** | **string** | An identifier for this item. Optional. | [optional] 
**storageETag** | **string** | An opaque ETag used to synchronize with the version stored at server end. Optional. | [optional] 
**url** | **string** | A URI which can be used to retrieve this item in its raw format. Optional. Note this is distinguished from other URIs that are present in a derived resource. | [optional] 
**description** | **string** | An optional human-facing description. | [optional] 
**expirationDate** | [**\DateTime**](\DateTime.md) | An optional expiration date for the request. The request will become inaccessible and get deleted after the date, regardless of its status.  On an HTTP POST, if expiration date is null/missing, the server will assign a default expiration data (30 days unless overwridden in the registry at the account level). On PATCH, if expiration date is null/missing, the behavior is to not change whatever the request&#39;s current expiration date is. | [optional] 
**name** | **string** | A human-facing name for the request. Required on POST, ignored on PATCH. | [optional] 
**status** | **string** | The status for this request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


