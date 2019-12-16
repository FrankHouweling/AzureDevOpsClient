# TestSuite

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**areaUri** | **string** | Area uri of the test suite. | [optional] 
**children** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestSuite[]**](TestSuite.md) | Child test suites of current test suite. | [optional] 
**defaultConfigurations** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[]**](ShallowReference.md) | Test suite default configuration. | [optional] 
**defaultTesters** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[]**](ShallowReference.md) | Test suite default testers. | [optional] 
**id** | **int** | Id of test suite. | [optional] 
**inheritDefaultConfigurations** | **bool** | Default configuration was inherited or not. | [optional] 
**lastError** | **string** | Last error for test suite. | [optional] 
**lastPopulatedDate** | [**\DateTime**](\DateTime.md) | Last populated date. | [optional] 
**lastUpdatedBy** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef**](IdentityRef.md) | IdentityRef of user who has updated test suite recently. | [optional] 
**lastUpdatedDate** | [**\DateTime**](\DateTime.md) | Last update date. | [optional] 
**name** | **string** | Name of test suite. | [optional] 
**parent** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Test suite parent shallow reference. | [optional] 
**plan** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Test plan to which the test suite belongs. | [optional] 
**project** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Test suite project shallow reference. | [optional] 
**queryString** | **string** | Test suite query string, for dynamic suites. | [optional] 
**requirementId** | **int** | Test suite requirement id. | [optional] 
**revision** | **int** | Test suite revision. | [optional] 
**state** | **string** | State of test suite. | [optional] 
**suites** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[]**](ShallowReference.md) | List of shallow reference of suites. | [optional] 
**suiteType** | **string** | Test suite type. | [optional] 
**testCaseCount** | **int** | Test cases count. | [optional] 
**testCasesUrl** | **string** | Test case url. | [optional] 
**text** | **string** | Used in tree view. If test suite is root suite then, it is name of plan otherwise title of the suite. | [optional] 
**url** | **string** | Url of test suite. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


