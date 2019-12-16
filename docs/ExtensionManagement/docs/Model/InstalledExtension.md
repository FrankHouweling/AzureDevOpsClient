# InstalledExtension

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**baseUri** | **string** | Uri used as base for other relative uri&#39;s defined in extension | [optional] 
**constraints** | [**\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ContributionConstraint[]**](ContributionConstraint.md) | List of shared constraints defined by this extension | [optional] 
**contributions** | [**\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\Contribution[]**](Contribution.md) | List of contributions made by this extension | [optional] 
**contributionTypes** | [**\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ContributionType[]**](ContributionType.md) | List of contribution types defined by this extension | [optional] 
**demands** | **string[]** | List of explicit demands required by this extension | [optional] 
**eventCallbacks** | [**\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallbackCollection**](ExtensionEventCallbackCollection.md) | Collection of endpoints that get called when particular extension events occur | [optional] 
**fallbackBaseUri** | **string** | Secondary location that can be used as base for other relative uri&#39;s defined in extension | [optional] 
**language** | **string** | Language Culture Name set by the Gallery | [optional] 
**licensing** | [**\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionLicensing**](ExtensionLicensing.md) | How this extension behaves with respect to licensing | [optional] 
**manifestVersion** | **double** | Version of the extension manifest format/content | [optional] 
**restrictedTo** | **string[]** | Default user claims applied to all contributions (except the ones which have been specified restrictedTo explicitly) to control the visibility of a contribution. | [optional] 
**scopes** | **string[]** | List of all oauth scopes required by this extension | [optional] 
**serviceInstanceType** | **string** | The ServiceInstanceType(Guid) of the VSTS service that must be available to an account in order for the extension to be installed | [optional] 
**extensionId** | **string** | The friendly extension id for this extension - unique for a given publisher. | [optional] 
**extensionName** | **string** | The display name of the extension. | [optional] 
**files** | [**\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionFile[]**](ExtensionFile.md) | This is the set of files available from the extension. | [optional] 
**flags** | **string** | Extension flags relevant to contribution consumers | [optional] 
**installState** | [**\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtensionState**](InstalledExtensionState.md) | Information about this particular installation of the extension | [optional] 
**lastPublished** | [**\DateTime**](\DateTime.md) | This represents the date/time the extensions was last updated in the gallery. This doesnt mean this version was updated the value represents changes to any and all versions of the extension. | [optional] 
**publisherId** | **string** | Unique id of the publisher of this extension | [optional] 
**publisherName** | **string** | The display name of the publisher | [optional] 
**registrationId** | **string** | Unique id for this extension (the same id is used for all versions of a single extension) | [optional] 
**version** | **string** | Version of this extension | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


