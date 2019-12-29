# TestSubResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | Comment in sub result. | [optional] 
**completedDate** | [**\DateTime**](\DateTime.md) | Time when test execution completed. | [optional] 
**computerName** | **string** | Machine where test executed. | [optional] 
**configuration** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\ShallowReference**](ShallowReference.md) | Reference to test configuration. | [optional] 
**customFields** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\CustomTestField[]**](CustomTestField.md) | Additional properties of sub result. | [optional] 
**displayName** | **string** | Name of sub result. | [optional] 
**durationInMs** | **int** | Duration of test execution. | [optional] 
**errorMessage** | **string** | Error message in sub result. | [optional] 
**id** | **int** | ID of sub result. | [optional] 
**lastUpdatedDate** | [**\DateTime**](\DateTime.md) | Time when result last updated. | [optional] 
**outcome** | **string** | Outcome of sub result. | [optional] 
**parentId** | **int** | Immediate parent ID of sub result. | [optional] 
**resultGroupType** | **string** | Hierarchy type of the result, default value of None means its leaf node. | [optional] 
**sequenceId** | **int** | Index number of sub result. | [optional] 
**stackTrace** | **string** | Stacktrace. | [optional] 
**startedDate** | [**\DateTime**](\DateTime.md) | Time when test execution started. | [optional] 
**subResults** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestSubResult[]**](TestSubResult.md) | List of sub results inside a sub result, if ResultGroupType is not None, it holds corresponding type sub results. | [optional] 
**testResult** | [**\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestCaseResultIdentifier**](TestCaseResultIdentifier.md) | Reference to test result. | [optional] 
**url** | **string** | Url of sub result. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


