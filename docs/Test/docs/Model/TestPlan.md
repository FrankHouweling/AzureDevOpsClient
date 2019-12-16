# TestPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**area** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Area of the test plan. | [optional] 
**build** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Build to be tested. | [optional] 
**buildDefinition** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | The Build Definition that generates a build associated with this test plan. | [optional] 
**description** | **string** | Description of the test plan. | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | End date for the test plan. | [optional] 
**id** | **int** | ID of the test plan. | [optional] 
**iteration** | **string** | Iteration path of the test plan. | [optional] 
**name** | **string** | Name of the test plan. | [optional] 
**owner** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef**](IdentityRef.md) | Owner of the test plan. | [optional] 
**previousBuild** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) |  | [optional] 
**project** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Project which contains the test plan. | [optional] 
**releaseEnvironmentDefinition** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ReleaseEnvironmentDefinitionReference**](ReleaseEnvironmentDefinitionReference.md) | Release Environment to be used to deploy the build and run automated tests from this test plan. | [optional] 
**revision** | **int** | Revision of the test plan. | [optional] 
**rootSuite** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Root test suite of the test plan. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Start date for the test plan. | [optional] 
**state** | **string** | State of the test plan. | [optional] 
**testOutcomeSettings** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestOutcomeSettings**](TestOutcomeSettings.md) | Value to configure how same tests across test suites under a test plan need to behave | [optional] 
**updatedBy** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef**](IdentityRef.md) |  | [optional] 
**updatedDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**url** | **string** | URL of the test plan resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


