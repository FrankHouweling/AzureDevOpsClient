# GitImportRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) | Links to related resources. | [optional] 
**detailedStatus** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportStatusDetail**](GitImportStatusDetail.md) | Detailed status of the import, including the current step and an error message, if applicable. | [optional] 
**importRequestId** | **int** | The unique identifier for this import request. | [optional] 
**parameters** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequestParameters**](GitImportRequestParameters.md) | Parameters for creating the import request. | [optional] 
**repository** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitRepository**](GitRepository.md) | The target repository for this import. | [optional] 
**status** | **string** | Current status of the import. | [optional] 
**url** | **string** | A link back to this import request resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


