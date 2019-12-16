# TestPlanCreateParams

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**areaPath** | **string** | Area of the test plan. | [optional] 
**buildDefinition** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\BuildDefinitionReference**](BuildDefinitionReference.md) | The Build Definition that generates a build associated with this test plan. | [optional] 
**buildId** | **int** | Build to be tested. | [optional] 
**description** | **string** | Description of the test plan. | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | End date for the test plan. | [optional] 
**iteration** | **string** | Iteration path of the test plan. | [optional] 
**name** | **string** | Name of the test plan. | [optional] 
**owner** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef**](IdentityRef.md) | Owner of the test plan. | [optional] 
**releaseEnvironmentDefinition** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\ReleaseEnvironmentDefinitionReference**](ReleaseEnvironmentDefinitionReference.md) | Release Environment to be used to deploy the build and run automated tests from this test plan. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Start date for the test plan. | [optional] 
**state** | **string** | State of the test plan. | [optional] 
**testOutcomeSettings** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestOutcomeSettings**](TestOutcomeSettings.md) | Value to configure how same tests across test suites under a test plan need to behave | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


