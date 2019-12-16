# TestPoint

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assignedTo** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef**](IdentityRef.md) | AssignedTo. Type IdentityRef. | [optional] 
**automated** | **bool** | Automated. | [optional] 
**comment** | **string** | Comment associated with test point. | [optional] 
**configuration** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Configuration. Type ShallowReference. | [optional] 
**failureType** | **string** | Failure type of test point. | [optional] 
**id** | **int** | ID of the test point. | [optional] 
**lastResetToActive** | [**\DateTime**](\DateTime.md) | Last date when test point was reset to Active. | [optional] 
**lastResolutionStateId** | **int** | Last resolution state id of test point. | [optional] 
**lastResult** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Last result of test point. Type ShallowReference. | [optional] 
**lastResultDetails** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\LastResultDetails**](LastResultDetails.md) | Last result details of test point. Type LastResultDetails. | [optional] 
**lastResultState** | **string** | Last result state of test point. | [optional] 
**lastRunBuildNumber** | **string** | LastRun build number of test point. | [optional] 
**lastTestRun** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Last testRun of test point. Type ShallowReference. | [optional] 
**lastUpdatedBy** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef**](IdentityRef.md) | Test point last updated by. Type IdentityRef. | [optional] 
**lastUpdatedDate** | [**\DateTime**](\DateTime.md) | Last updated date of test point. | [optional] 
**outcome** | **string** | Outcome of test point. | [optional] 
**revision** | **int** | Revision number. | [optional] 
**state** | **string** | State of test point. | [optional] 
**suite** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Suite of test point. Type ShallowReference. | [optional] 
**testCase** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\WorkItemReference**](WorkItemReference.md) | TestCase associated to test point. Type WorkItemReference. | [optional] 
**testPlan** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | TestPlan of test point. Type ShallowReference. | [optional] 
**url** | **string** | Test point Url. | [optional] 
**workItemProperties** | **object[]** | Work item properties of test point. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


