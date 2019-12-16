# ReleaseGates

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deploymentJobs** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\DeploymentJob[]**](DeploymentJob.md) | Contains the gates job details of each evaluation. | [optional] 
**id** | **int** | ID of release gates. | [optional] 
**ignoredGates** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\IgnoredGate[]**](IgnoredGate.md) | List of ignored gates. | [optional] 
**lastModifiedOn** | [**\DateTime**](\DateTime.md) | Gates last modified time. | [optional] 
**runPlanId** | **string** | Run plan ID of the gates. | [optional] 
**stabilizationCompletedOn** | [**\DateTime**](\DateTime.md) | Gates stabilization completed date and time. | [optional] 
**startedOn** | [**\DateTime**](\DateTime.md) | Gates evaluation started time. | [optional] 
**status** | **string** | Status of release gates. | [optional] 
**succeedingSince** | [**\DateTime**](\DateTime.md) | Date and time at which all gates executed successfully. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


