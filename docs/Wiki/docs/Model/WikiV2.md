# WikiV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mappedPath** | **string** | Folder path inside repository which is shown as Wiki. Not required for ProjectWiki type. | [optional] 
**name** | **string** | Wiki name. | [optional] 
**projectId** | **string** | ID of the project in which the wiki is to be created. | [optional] 
**repositoryId** | **string** | ID of the git repository that backs up the wiki. Not required for ProjectWiki type. | [optional] 
**type** | **string** | Type of the wiki. | [optional] 
**id** | **string** | ID of the wiki. | [optional] 
**properties** | **map[string,string]** | Properties of the wiki. | [optional] 
**remoteUrl** | **string** | Remote web url to the wiki. | [optional] 
**url** | **string** | REST url for this wiki. | [optional] 
**versions** | [**\FrankHouweling\AzureDevOpsClient\Wiki\Model\GitVersionDescriptor[]**](GitVersionDescriptor.md) | Versions of the wiki. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


