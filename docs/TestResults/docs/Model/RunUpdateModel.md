# RunUpdateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**build** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | An abstracted reference to the build that it belongs. | [optional] 
**buildDropLocation** | **string** | Drop location of the build used for test run. | [optional] 
**buildFlavor** | **string** | Flavor of the build used for test run. (E.g: Release, Debug) | [optional] 
**buildPlatform** | **string** | Platform of the build used for test run. (E.g.: x86, amd64) | [optional] 
**comment** | **string** | Comments entered by those analyzing the run. | [optional] 
**completedDate** | **string** | Completed date time of the run. | [optional] 
**controller** | **string** | Name of the test controller used for automated run. | [optional] 
**deleteInProgressResults** | **bool** | true to delete inProgess Results , false otherwise. | [optional] 
**dtlAutEnvironment** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | An abstracted reference to DtlAutEnvironment. | [optional] 
**dtlEnvironment** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | An abstracted reference to DtlEnvironment. | [optional] 
**dtlEnvironmentDetails** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\DtlEnvironmentDetails**](DtlEnvironmentDetails.md) |  | [optional] 
**dueDate** | **string** | Due date and time for test run. | [optional] 
**errorMessage** | **string** | Error message associated with the run. | [optional] 
**iteration** | **string** | The iteration in which to create the run. | [optional] 
**logEntries** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestMessageLogDetails[]**](TestMessageLogDetails.md) | Log entries associated with the run. Use a comma-separated list of multiple log entry objects. { logEntry }, { logEntry }, ... | [optional] 
**name** | **string** | Name of the test run. | [optional] 
**releaseEnvironmentUri** | **string** | URI of release environment associated with the run. | [optional] 
**releaseUri** | **string** | URI of release associated with the run. | [optional] 
**runSummary** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\RunSummaryModel[]**](RunSummaryModel.md) | Run summary for run Type &#x3D; NoConfigRun. | [optional] 
**sourceWorkflow** | **string** | SourceWorkFlow(CI/CD) of the test run. | [optional] 
**startedDate** | **string** | Start date time of the run. | [optional] 
**state** | **string** | The state of the test run Below are the valid values - NotStarted, InProgress, Completed, Aborted, Waiting | [optional] 
**substate** | **string** | The types of sub states for test run. | [optional] 
**tags** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestTag[]**](TestTag.md) | Tags to attach with the test run. | [optional] 
**testEnvironmentId** | **string** | ID of the test environment associated with the run. | [optional] 
**testSettings** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | An abstracted reference to test setting resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


