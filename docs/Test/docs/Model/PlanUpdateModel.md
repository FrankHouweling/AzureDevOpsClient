# PlanUpdateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**area** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Area path to which the test plan belongs. This should be set to area path of the team that works on this test plan. | [optional] 
**build** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Build ID of the build whose quality is tested by the tests in this test plan. For automated testing, this build ID is used to find the test binaries that contain automated test methods. | [optional] 
**buildDefinition** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | The Build Definition that generates a build associated with this test plan. | [optional] 
**configurationIds** | **int[]** | IDs of configurations to be applied when new test suites and test cases are added to the test plan. | [optional] 
**description** | **string** | Description of the test plan. | [optional] 
**endDate** | **string** | End date for the test plan. | [optional] 
**iteration** | **string** | Iteration path assigned to the test plan. This indicates when the target iteration by which the testing in this plan is supposed to be complete and the product is ready to be released. | [optional] 
**name** | **string** | Name of the test plan. | [optional] 
**owner** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\IdentityRef**](IdentityRef.md) | Owner of the test plan. | [optional] 
**releaseEnvironmentDefinition** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ReleaseEnvironmentDefinitionReference**](ReleaseEnvironmentDefinitionReference.md) | Release Environment to be used to deploy the build and run automated tests from this test plan. | [optional] 
**startDate** | **string** | Start date for the test plan. | [optional] 
**state** | **string** | State of the test plan. | [optional] 
**testOutcomeSettings** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\TestOutcomeSettings**](TestOutcomeSettings.md) | Test Outcome settings | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


