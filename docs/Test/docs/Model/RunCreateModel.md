# RunCreateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**automated** | **bool** | true if test run is automated, false otherwise. By default it will be false. | [optional] 
**build** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | An abstracted reference to the build that it belongs. | [optional] 
**buildDropLocation** | **string** | Drop location of the build used for test run. | [optional] 
**buildFlavor** | **string** | Flavor of the build used for test run. (E.g: Release, Debug) | [optional] 
**buildPlatform** | **string** | Platform of the build used for test run. (E.g.: x86, amd64) | [optional] 
**buildReference** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\BuildConfiguration**](BuildConfiguration.md) | BuildReference of the test run. | [optional] 
**comment** | **string** | Comments entered by those analyzing the run. | [optional] 
**completeDate** | **string** | Completed date time of the run. | [optional] 
**configurationIds** | **int[]** | IDs of the test configurations associated with the run. | [optional] 
**controller** | **string** | Name of the test controller used for automated run. | [optional] 
**customTestFields** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\CustomTestField[]**](CustomTestField.md) | Additional properties of test Run. | [optional] 
**dtlAutEnvironment** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | An abstracted reference to DtlAutEnvironment. | [optional] 
**dtlTestEnvironment** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | An abstracted reference to DtlTestEnvironment. | [optional] 
**dueDate** | **string** | Due date and time for test run. | [optional] 
**environmentDetails** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\DtlEnvironmentDetails**](DtlEnvironmentDetails.md) |  | [optional] 
**errorMessage** | **string** | Error message associated with the run. | [optional] 
**filter** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\RunFilter**](RunFilter.md) | Filter used for discovering the Run. | [optional] 
**iteration** | **string** | The iteration in which to create the run. Root iteration of the team project will be default | [optional] 
**name** | **string** | Name of the test run. | [optional] 
**owner** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\IdentityRef**](IdentityRef.md) | Display name of the owner of the run. | [optional] 
**pipelineReference** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\PipelineReference**](PipelineReference.md) | Reference of the pipeline to which this test run belongs. PipelineReference.PipelineId should be equal to RunCreateModel.Build.Id | [optional] 
**plan** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | An abstracted reference to the plan that it belongs. | [optional] 
**pointIds** | **int[]** | IDs of the test points to use in the run. | [optional] 
**releaseEnvironmentUri** | **string** | URI of release environment associated with the run. | [optional] 
**releaseReference** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ReleaseReference**](ReleaseReference.md) | Reference to release associated with test run. | [optional] 
**releaseUri** | **string** | URI of release associated with the run. | [optional] 
**runSummary** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\RunSummaryModel[]**](RunSummaryModel.md) | Run summary for run Type &#x3D; NoConfigRun. | [optional] 
**runTimeout** | **string** | Timespan till the run times out. | [optional] 
**sourceWorkflow** | **string** | SourceWorkFlow(CI/CD) of the test run. | [optional] 
**startDate** | **string** | Start date time of the run. | [optional] 
**state** | **string** | The state of the run. Type TestRunState Valid states - Unspecified ,NotStarted, InProgress, Completed, Waiting, Aborted, NeedsInvestigation | [optional] 
**tags** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\TestTag[]**](TestTag.md) | Tags to attach with the test run, maximum of 5 tags can be added to run. | [optional] 
**testConfigurationsMapping** | **string** | TestConfigurationMapping of the test run. | [optional] 
**testEnvironmentId** | **string** | ID of the test environment associated with the run. | [optional] 
**testSettings** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | An abstracted reference to the test settings resource. | [optional] 
**type** | **string** | Type of the run(RunType) Valid Values : (Unspecified, Normal, Blocking, Web, MtrRunInitiatedFromWeb, RunWithDtlEnv, NoConfigRun) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


