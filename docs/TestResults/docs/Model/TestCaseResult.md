# TestCaseResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**afnStripId** | **int** | Test attachment ID of action recording. | [optional] 
**area** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | Reference to area path of test. | [optional] 
**associatedBugs** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference[]**](ShallowReference.md) | Reference to bugs linked to test result. | [optional] 
**automatedTestId** | **string** | ID representing test method in a dll. | [optional] 
**automatedTestName** | **string** | Fully qualified name of test executed. | [optional] 
**automatedTestStorage** | **string** | Container to which test belongs. | [optional] 
**automatedTestType** | **string** | Type of automated test. | [optional] 
**automatedTestTypeId** | **string** | TypeId of automated test. | [optional] 
**build** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | Shallow reference to build associated with test result. | [optional] 
**buildReference** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\BuildReference**](BuildReference.md) | Reference to build associated with test result. | [optional] 
**comment** | **string** | Comment in a test result with maxSize&#x3D; 1000 chars. | [optional] 
**completedDate** | [**\DateTime**](\DateTime.md) | Time when test execution completed. Completed date should be greater than StartedDate. | [optional] 
**computerName** | **string** | Machine name where test executed. | [optional] 
**configuration** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | Reference to test configuration. Type ShallowReference. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | Timestamp when test result created. | [optional] 
**customFields** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\CustomTestField[]**](CustomTestField.md) | Additional properties of test result. | [optional] 
**durationInMs** | **double** | Duration of test execution in milliseconds. If not provided value will be set as CompletedDate - StartedDate | [optional] 
**errorMessage** | **string** | Error message in test execution. | [optional] 
**failingSince** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\FailingSince**](FailingSince.md) | Information when test results started failing. | [optional] 
**failureType** | **string** | Failure type of test result. Valid Value&#x3D; (Known Issue, New Issue, Regression, Unknown, None) | [optional] 
**id** | **int** | ID of a test result. | [optional] 
**iterationDetails** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestIterationDetailsModel[]**](TestIterationDetailsModel.md) | Test result details of test iterations used only for Manual Testing. | [optional] 
**lastUpdatedBy** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\IdentityRef**](IdentityRef.md) | Reference to identity last updated test result. | [optional] 
**lastUpdatedDate** | [**\DateTime**](\DateTime.md) | Last updated datetime of test result. | [optional] 
**outcome** | **string** | Test outcome of test result. Valid values &#x3D; (Unspecified, None, Passed, Failed, Inconclusive, Timeout, Aborted, Blocked, NotExecuted, Warning, Error, NotApplicable, Paused, InProgress, NotImpacted) | [optional] 
**owner** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\IdentityRef**](IdentityRef.md) | Reference to test owner. | [optional] 
**priority** | **int** | Priority of test executed. | [optional] 
**project** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | Reference to team project. | [optional] 
**release** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | Shallow reference to release associated with test result. | [optional] 
**releaseReference** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ReleaseReference**](ReleaseReference.md) | Reference to release associated with test result. | [optional] 
**resetCount** | **int** | ResetCount. | [optional] 
**resolutionState** | **string** | Resolution state of test result. | [optional] 
**resolutionStateId** | **int** | ID of resolution state. | [optional] 
**resultGroupType** | **string** | Hierarchy type of the result, default value of None means its leaf node. | [optional] 
**revision** | **int** | Revision number of test result. | [optional] 
**runBy** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\IdentityRef**](IdentityRef.md) | Reference to identity executed the test. | [optional] 
**stackTrace** | **string** | Stacktrace with maxSize&#x3D; 1000 chars. | [optional] 
**startedDate** | [**\DateTime**](\DateTime.md) | Time when test execution started. | [optional] 
**state** | **string** | State of test result. Type TestRunState. | [optional] 
**subResults** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestSubResult[]**](TestSubResult.md) | List of sub results inside a test result, if ResultGroupType is not None, it holds corresponding type sub results. | [optional] 
**testCase** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | Reference to the test executed. | [optional] 
**testCaseReferenceId** | **int** | Reference ID of test used by test result. Type TestResultMetaData | [optional] 
**testCaseRevision** | **int** | TestCaseRevision Number. | [optional] 
**testCaseTitle** | **string** | Name of test. | [optional] 
**testPlan** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | Reference to test plan test case workitem is part of. | [optional] 
**testPoint** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | Reference to the test point executed. | [optional] 
**testRun** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | Reference to test run. | [optional] 
**testSuite** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | Reference to test suite test case workitem is part of. | [optional] 
**url** | **string** | Url of test result. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


