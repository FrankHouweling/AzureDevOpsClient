# DebugEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdBy** | **string** | The ID of user who created this item. Optional. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | The date time when this item is created. Optional. | [optional] 
**id** | **string** | An identifier for this item. Optional. | [optional] 
**storageETag** | **string** | An opaque ETag used to synchronize with the version stored at server end. Optional. | [optional] 
**url** | **string** | A URI which can be used to retrieve this item in its raw format. Optional. Note this is distinguished from other URIs that are present in a derived resource. | [optional] 
**blobDetails** | [**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\JsonBlobIdentifierWithBlocks**](JsonBlobIdentifierWithBlocks.md) | Details of the blob formatted to be deserialized for symbol service. | [optional] 
**blobIdentifier** | [**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\JsonBlobIdentifier**](JsonBlobIdentifier.md) | A blob identifier of the symbol file to upload to this debug entry. This property is mostly used during creation of debug entry (a.k.a. symbol publishing) to allow the server to query the existence of the blob. | [optional] 
**blobUri** | **string** | The URI to get the symbol file. Provided by the server, the URI contains authentication information and is readily accessible by plain HTTP GET request. The client is recommended to retrieve the file as soon as it can since the URI will expire in a short period. | [optional] 
**clientKey** | **string** | A key the client (debugger, for example) uses to find the debug entry. Note it is not unique for each different symbol file as it does not distinguish between those which only differ by information level. | [optional] 
**informationLevel** | **string** | The information level this debug entry contains. | [optional] 
**requestId** | **string** | The identifier of symbol request to which this debug entry belongs. | [optional] 
**status** | **string** | The status of debug entry. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


