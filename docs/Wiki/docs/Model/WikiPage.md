# WikiPage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** | Content of the wiki page. | [optional] 
**gitItemPath** | **string** | Path of the git item corresponding to the wiki page stored in the backing Git repository. | [optional] 
**id** | **int** | When present, permanent identifier for the wiki page | [optional] 
**isNonConformant** | **bool** | True if a page is non-conforming, i.e. 1) if the name doesn&#39;t match page naming standards. 2) if the page does not have a valid entry in the appropriate order file. | [optional] 
**isParentPage** | **bool** | True if this page has subpages under its path. | [optional] 
**order** | **int** | Order of the wiki page, relative to other pages in the same hierarchy level. | [optional] 
**path** | **string** | Path of the wiki page. | [optional] 
**remoteUrl** | **string** | Remote web url to the wiki page. | [optional] 
**subPages** | [**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPage[]**](WikiPage.md) | List of subpages of the current page. | [optional] 
**url** | **string** | REST url for this wiki page. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


