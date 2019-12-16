# TestRun

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
**abortMessage** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\TestRunAbortMessage**](TestRunAbortMessage.md) | Message associated to state change, contains details of infrastructure error. | [optional] 
**autInitializationError** | **bool** | true if aut counter collection could not start due to some critical error for this run. | [optional] 
**chargeable** | **bool** | Whether run is chargeable or not Its chargeable once we configured agent and sent start signal | [optional] 
**chargedVUserminutes** | **int** | Whether run is chargeable or not The Charged VUser Minutes for the RUN | [optional] 
**description** | **string** | Test run description. | [optional] 
**executionFinishedDate** | [**\DateTime**](\DateTime.md) | Gets the time when the test run execution finished | [optional] 
**executionStartedDate** | [**\DateTime**](\DateTime.md) | Gets the time when the test run warmup finished(if warmup was specified) and load test started | [optional] 
**queuedDate** | [**\DateTime**](\DateTime.md) | Gets the time when the test run was queued | [optional] 
**retentionState** | **string** | Retention state of the run | [optional] 
**runSourceIdentifier** | **string** |  | [optional] 
**runSourceUrl** | **string** | The uri to the run source. | [optional] 
**startedBy** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef**](IdentityRef.md) | Vss User identity who created the test run. | [optional] 
**startedDate** | [**\DateTime**](\DateTime.md) | When the test run started execution. | [optional] 
**stoppedBy** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef**](IdentityRef.md) | Vss User identity who created the test run. | [optional] 
**subState** | **string** | SubState is more granular description of the state | [optional] 
**supersedeRunSettings** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\OverridableRunSettings**](OverridableRunSettings.md) |  | [optional] 
**testDrop** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\TestDropRef**](TestDropRef.md) | Drop associated with this test run | [optional] 
**testSettings** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\TestSettings**](TestSettings.md) | The Test settings for the test run | [optional] 
**warmUpStartedDate** | [**\DateTime**](\DateTime.md) | Gets the time when the test run warmup started | [optional] 
**webResultUrl** | **string** | The uri to the vso detailed result. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


