# TestActionResultModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | Comment in result. | [optional] 
**completedDate** | [**\DateTime**](\DateTime.md) | Time when execution completed. | [optional] 
**durationInMs** | **double** | Duration of execution. | [optional] 
**errorMessage** | **string** | Error message in result. | [optional] 
**outcome** | **string** | Test outcome of result. | [optional] 
**startedDate** | [**\DateTime**](\DateTime.md) | Time when execution started. | [optional] 
**actionPath** | **string** | Path identifier test step in test case workitem. | [optional] 
**iterationId** | **int** | Iteration ID of test action result. | [optional] 
**sharedStepModel** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\SharedStepModel**](SharedStepModel.md) | Reference to shared step workitem. | [optional] 
**stepIdentifier** | **string** | This is step Id of test case. For shared step, it is step Id of shared step in test case workitem; step Id in shared step. Example: TestCase workitem has two steps: 1) Normal step with Id &#x3D; 1 2) Shared Step with Id &#x3D; 2. Inside shared step: a) Normal Step with Id &#x3D; 1 Value for StepIdentifier for First step: \&quot;1\&quot; Second step: \&quot;2;1\&quot; | [optional] 
**url** | **string** | Url of test action result. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


