# TestRunBasic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef**](IdentityRef.md) | Vss User identity who created the test run. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | Gets the creation time of the test run | [optional] 
**deletedBy** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef**](IdentityRef.md) | Vss User identity who deleted the test run. | [optional] 
**deletedDate** | [**\DateTime**](\DateTime.md) | Gets the deleted time of the test run | [optional] 
**finishedDate** | [**\DateTime**](\DateTime.md) | Gets the finish time of the test run | [optional] 
**id** | **string** | Gets the unique identifier for the test run definition. | [optional] 
**loadGenerationGeoLocations** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\LoadGenerationGeoLocation[]**](LoadGenerationGeoLocation.md) |  | [optional] 
**loadTestFileName** | **string** | Gets the load test file of the test run definition. | [optional] 
**name** | **string** | Gets the name of the test run definition. | [optional] 
**runNumber** | **int** | Gets the number of the test run (unique within a tenant) | [optional] 
**runSource** | **string** | Test run source like Ibiza,VSO,BuildVNext, etc. | [optional] 
**runSpecificDetails** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\LoadTestRunDetails**](LoadTestRunDetails.md) | Run specific details. | [optional] 
**runType** | **string** | Run type like VisualStudioLoadTest or JMeterLoadTest | [optional] 
**state** | **string** | State of the test run. | [optional] 
**url** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


