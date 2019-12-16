# TestPlanUpdateParams

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**areaPath** | **string** | Area of the test plan. | [optional] 
**buildDefinition** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\BuildDefinitionReference**](BuildDefinitionReference.md) | The Build Definition that generates a build associated with this test plan. | [optional] 
**buildId** | **int** | Build to be tested. | [optional] 
**description** | **string** | Description of the test plan. | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | End date for the test plan. | [optional] 
**iteration** | **string** | Iteration path of the test plan. | [optional] 
**name** | **string** | Name of the test plan. | [optional] 
**owner** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\IdentityRef**](IdentityRef.md) | Owner of the test plan. | [optional] 
**releaseEnvironmentDefinition** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\ReleaseEnvironmentDefinitionReference**](ReleaseEnvironmentDefinitionReference.md) | Release Environment to be used to deploy the build and run automated tests from this test plan. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Start date for the test plan. | [optional] 
**state** | **string** | State of the test plan. | [optional] 
**testOutcomeSettings** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestOutcomeSettings**](TestOutcomeSettings.md) | Value to configure how same tests across test suites under a test plan need to behave | [optional] 
**revision** | **int** | Revision of the test plan. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


