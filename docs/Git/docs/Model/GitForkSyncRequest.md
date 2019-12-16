# GitForkSyncRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) | Collection of related links | [optional] 
**detailedStatus** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitForkOperationStatusDetail**](GitForkOperationStatusDetail.md) |  | [optional] 
**operationId** | **int** | Unique identifier for the operation. | [optional] 
**source** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GlobalGitRepositoryKey**](GlobalGitRepositoryKey.md) | Fully-qualified identifier for the source repository. | [optional] 
**sourceToTargetRefs** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\SourceToTargetRef[]**](SourceToTargetRef.md) | If supplied, the set of ref mappings to use when performing a \&quot;sync\&quot; or create. If missing, all refs will be synchronized. | [optional] 
**status** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


