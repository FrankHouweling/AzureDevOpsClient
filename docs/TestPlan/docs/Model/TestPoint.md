# TestPoint

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | Comment associated to the Test Point | [optional] 
**configuration** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestConfigurationReference**](TestConfigurationReference.md) | Configuration associated with the Test Point | [optional] 
**id** | **int** | Id of the Test Point | [optional] 
**isActive** | **bool** | Variable to decide whether the test case is Active or not | [optional] 
**isAutomated** | **bool** | Is the Test Point for Automated Test Case or Manual | [optional] 
**lastResetToActive** | [**\DateTime**](\DateTime.md) | Last Reset to Active Time Stamp for the Test Point | [optional] 
**lastUpdatedBy** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef**](IdentityRef.md) | Last Updated details for the Test Point | [optional] 
**lastUpdatedDate** | [**\DateTime**](\DateTime.md) | Last Update Time Stamp for the Test Point | [optional] 
**links** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\ReferenceLinks**](ReferenceLinks.md) | Reference links | [optional] 
**project** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TeamProjectReference**](TeamProjectReference.md) | Project under which the Test Point is | [optional] 
**results** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPointResults**](TestPointResults.md) | Results associated to the Test Point | [optional] 
**testCaseReference** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestCaseReference**](TestCaseReference.md) | Test Case Reference | [optional] 
**tester** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef**](IdentityRef.md) | Tester associated with the Test Point | [optional] 
**testPlan** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlanReference**](TestPlanReference.md) | Test Plan under which the Test Point is | [optional] 
**testSuite** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteReference**](TestSuiteReference.md) | Test Suite under which the Test Point is | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


