# TestPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**area** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Area of the test plan. | [optional] 
**build** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Build to be tested. | [optional] 
**buildDefinition** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | The Build Definition that generates a build associated with this test plan. | [optional] 
**description** | **string** | Description of the test plan. | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | End date for the test plan. | [optional] 
**id** | **int** | ID of the test plan. | [optional] 
**iteration** | **string** | Iteration path of the test plan. | [optional] 
**name** | **string** | Name of the test plan. | [optional] 
**owner** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\IdentityRef**](IdentityRef.md) | Owner of the test plan. | [optional] 
**previousBuild** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) |  | [optional] 
**project** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Project which contains the test plan. | [optional] 
**releaseEnvironmentDefinition** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ReleaseEnvironmentDefinitionReference**](ReleaseEnvironmentDefinitionReference.md) | Release Environment to be used to deploy the build and run automated tests from this test plan. | [optional] 
**revision** | **int** | Revision of the test plan. | [optional] 
**rootSuite** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Root test suite of the test plan. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Start date for the test plan. | [optional] 
**state** | **string** | State of the test plan. | [optional] 
**testOutcomeSettings** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\TestOutcomeSettings**](TestOutcomeSettings.md) | Value to configure how same tests across test suites under a test plan need to behave | [optional] 
**updatedBy** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\IdentityRef**](IdentityRef.md) |  | [optional] 
**updatedDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**url** | **string** | URL of the test plan resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


