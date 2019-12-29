# GitAsyncRefOperationDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conflict** | **bool** | Indicates if there was a conflict generated when trying to cherry pick or revert the changes. | [optional] 
**currentCommitId** | **string** | The current commit from the list of commits that are being cherry picked or reverted. | [optional] 
**failureMessage** | **string** | Detailed information about why the cherry pick or revert failed to complete. | [optional] 
**progress** | **double** | A number between 0 and 1 indicating the percent complete of the operation. | [optional] 
**status** | **string** | Provides a status code that indicates the reason the cherry pick or revert failed. | [optional] 
**timedout** | **bool** | Indicates if the operation went beyond the maximum time allowed for a cherry pick or revert operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


