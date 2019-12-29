# InputDescriptor

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dependencyInputIds** | **string[]** | The ids of all inputs that the value of this input is dependent on. | [optional] 
**description** | **string** | Description of what this input is used for | [optional] 
**groupName** | **string** | The group localized name to which this input belongs and can be shown as a header for the container that will include all the inputs in the group. | [optional] 
**hasDynamicValueInformation** | **bool** | If true, the value information for this input is dynamic and should be fetched when the value of dependency inputs change. | [optional] 
**id** | **string** | Identifier for the subscription input | [optional] 
**inputMode** | **string** | Mode in which the value of this input should be entered | [optional] 
**isConfidential** | **bool** | Gets whether this input is confidential, such as for a password or application key | [optional] 
**name** | **string** | Localized name which can be shown as a label for the subscription input | [optional] 
**properties** | **map[string,object]** | Custom properties for the input which can be used by the service provider | [optional] 
**type** | **string** | Underlying data type for the input value. When this value is specified, InputMode, Validation and Values are optional. | [optional] 
**useInDefaultDescription** | **bool** | Gets whether this input is included in the default generated action description. | [optional] 
**validation** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\InputValidation**](InputValidation.md) | Information to use to validate this input&#39;s value | [optional] 
**valueHint** | **string** | A hint for input value. It can be used in the UI as the input placeholder. | [optional] 
**values** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\InputValues**](InputValues.md) | Information about possible values for this input | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


