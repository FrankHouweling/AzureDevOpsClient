# AgentDeploymentInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**artifactsDownloadInput** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ArtifactsDownloadInput**](ArtifactsDownloadInput.md) | Artifacts that downloaded during job execution. | [optional] 
**demands** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\Demand[]**](Demand.md) | List demands that needs to meet to execute the job. | [optional] 
**enableAccessToken** | **bool** | Indicates whether to include access token in deployment job or not. | [optional] 
**queueId** | **int** | Id of the pool on which job get executed. | [optional] 
**skipArtifactsDownload** | **bool** | Indicates whether artifacts downloaded while job execution or not. | [optional] 
**condition** | **string** | Gets or sets the job condition. | [optional] 
**jobCancelTimeoutInMinutes** | **int** | Gets or sets the job cancel timeout in minutes for deployment which are cancelled by user for this release environment. | [optional] 
**overrideInputs** | **map[string,string]** | Gets or sets the override inputs. | [optional] 
**timeoutInMinutes** | **int** | Gets or sets the job execution timeout in minutes for deployment which are queued against this release environment. | [optional] 
**agentSpecification** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\AgentSpecification**](AgentSpecification.md) | Specification for an agent on which a job gets executed. | [optional] 
**imageId** | **int** | Gets or sets the image ID. | [optional] 
**parallelExecution** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ExecutionInput**](ExecutionInput.md) | Gets or sets the parallel execution input. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


