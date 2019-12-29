# CloneOperationInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cloneStatistics** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\CloneStatistics**](CloneStatistics.md) | Clone Statistics | [optional] 
**completionDate** | [**\DateTime**](\DateTime.md) | If the operation is complete, the DateTime of completion. If operation is not complete, this is DateTime.MaxValue | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | DateTime when the operation was started | [optional] 
**destinationObject** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Shallow reference of the destination | [optional] 
**destinationPlan** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Shallow reference of the destination | [optional] 
**destinationProject** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Shallow reference of the destination | [optional] 
**message** | **string** | If the operation has Failed, Message contains the reason for failure. Null otherwise. | [optional] 
**opId** | **int** | The ID of the operation | [optional] 
**resultObjectType** | **string** | The type of the object generated as a result of the Clone operation | [optional] 
**sourceObject** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Shallow reference of the source | [optional] 
**sourcePlan** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Shallow reference of the source | [optional] 
**sourceProject** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference**](ShallowReference.md) | Shallow reference of the source | [optional] 
**state** | **string** | Current state of the operation. When State reaches Succeeded or Failed, the operation is complete | [optional] 
**url** | **string** | Url for getting the clone information | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


