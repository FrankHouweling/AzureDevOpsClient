# ReleaseGatesPhase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deploymentJobs** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\DeploymentJob[]**](DeploymentJob.md) | Deployment jobs of the phase. | [optional] 
**errorLog** | **string** | Phase execution error logs. | [optional] 
**manualInterventions** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ManualIntervention[]**](ManualIntervention.md) | List of manual intervention tasks execution information in phase. | [optional] 
**name** | **string** | Name of the phase. | [optional] 
**phaseId** | **string** | ID of the phase. | [optional] 
**phaseType** | **string** | Type of the phase. | [optional] 
**rank** | **int** | Rank of the phase. | [optional] 
**runPlanId** | **string** | Run Plan ID of the phase. | [optional] 
**startedOn** | [**\DateTime**](\DateTime.md) | Phase start time. | [optional] 
**status** | **string** | Status of the phase. | [optional] 
**ignoredGates** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\IgnoredGate[]**](IgnoredGate.md) | List of ignored gates. | [optional] 
**stabilizationCompletedOn** | [**\DateTime**](\DateTime.md) | Date and time at which stabilization of gates completed. | [optional] 
**succeedingSince** | [**\DateTime**](\DateTime.md) | Date and time at which all gates executed successfully. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


