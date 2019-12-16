# TestSuite

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requirementId** | **int** | Test suite requirement id. | [optional] 
**suiteType** | **string** | Test suite type. | [optional] 
**defaultConfigurations** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfigurationReference[]**](TestConfigurationReference.md) | Test suite default configurations. | [optional] 
**defaultTesters** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\IdentityRef[]**](IdentityRef.md) | Test suite default testers. | [optional] 
**inheritDefaultConfigurations** | **bool** | Default configuration was inherited or not. | [optional] 
**name** | **string** | Name of test suite. | [optional] 
**parentSuite** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestSuiteReference**](TestSuiteReference.md) | Test suite parent shallow reference. | [optional] 
**queryString** | **string** | Test suite query string, for dynamic suites. | [optional] 
**links** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\ReferenceLinks**](ReferenceLinks.md) | Links: self, testPoints, testCases, parent | [optional] 
**children** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestSuite[]**](TestSuite.md) | Child test suites of current test suite. | [optional] 
**hasChildren** | **bool** | Boolean value dictating if Child test suites are present | [optional] 
**id** | **int** | Id of test suite. | [optional] 
**lastError** | **string** | Last error for test suite. | [optional] 
**lastPopulatedDate** | [**\DateTime**](\DateTime.md) | Last populated date. | [optional] 
**lastUpdatedBy** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\IdentityRef**](IdentityRef.md) | IdentityRef of user who has updated test suite recently. | [optional] 
**lastUpdatedDate** | [**\DateTime**](\DateTime.md) | Last update date. | [optional] 
**plan** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPlanReference**](TestPlanReference.md) | Test plan to which the test suite belongs. | [optional] 
**project** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TeamProjectReference**](TeamProjectReference.md) | Test suite project shallow reference. | [optional] 
**revision** | **int** | Test suite revision. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


