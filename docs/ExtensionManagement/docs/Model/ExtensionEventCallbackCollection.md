# ExtensionEventCallbackCollection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**postDisable** | [**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback**](ExtensionEventCallback.md) | Optional.  Defines an endpoint that gets called via a POST request to notify that an extension disable has occurred. | [optional] 
**postEnable** | [**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback**](ExtensionEventCallback.md) | Optional.  Defines an endpoint that gets called via a POST request to notify that an extension enable has occurred. | [optional] 
**postInstall** | [**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback**](ExtensionEventCallback.md) | Optional.  Defines an endpoint that gets called via a POST request to notify that an extension install has completed. | [optional] 
**postUninstall** | [**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback**](ExtensionEventCallback.md) | Optional.  Defines an endpoint that gets called via a POST request to notify that an extension uninstall has occurred. | [optional] 
**postUpdate** | [**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback**](ExtensionEventCallback.md) | Optional.  Defines an endpoint that gets called via a POST request to notify that an extension update has occurred. | [optional] 
**preInstall** | [**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback**](ExtensionEventCallback.md) | Optional.  Defines an endpoint that gets called via a POST request to notify that an extension install is about to occur.  Response indicates whether to proceed or abort. | [optional] 
**versionCheck** | [**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback**](ExtensionEventCallback.md) | For multi-version extensions, defines an endpoint that gets called via an OPTIONS request to determine the particular version of the extension to be used | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


