# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 6.0-preview
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\BacklogconfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->backlogconfigurationGet($organization, $project, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BacklogconfigurationApi->backlogconfigurationGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://dev.azure.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BacklogconfigurationApi* | [**backlogconfigurationGet**](docs/Api/BacklogconfigurationApi.md#backlogconfigurationget) | **GET** /{organization}/{project}/{team}/_apis/work/backlogconfiguration | 
*BacklogsApi* | [**backlogsGetBacklog**](docs/Api/BacklogsApi.md#backlogsgetbacklog) | **GET** /{organization}/{project}/{team}/_apis/work/backlogs/{id} | 
*BacklogsApi* | [**backlogsGetBacklogLevelWorkItems**](docs/Api/BacklogsApi.md#backlogsgetbackloglevelworkitems) | **GET** /{organization}/{project}/{team}/_apis/work/backlogs/{backlogId}/workItems | 
*BacklogsApi* | [**backlogsList**](docs/Api/BacklogsApi.md#backlogslist) | **GET** /{organization}/{project}/{team}/_apis/work/backlogs | 
*BoardcolumnsApi* | [**boardcolumnsList**](docs/Api/BoardcolumnsApi.md#boardcolumnslist) | **GET** /{organization}/{project}/_apis/work/boardcolumns | 
*BoardparentsApi* | [**boardparentsList**](docs/Api/BoardparentsApi.md#boardparentslist) | **GET** /{organization}/{project}/{team}/_apis/work/boards/boardparents | 
*BoardrowsApi* | [**boardrowsList**](docs/Api/BoardrowsApi.md#boardrowslist) | **GET** /{organization}/{project}/_apis/work/boardrows | 
*BoardsApi* | [**boardsGet**](docs/Api/BoardsApi.md#boardsget) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{id} | 
*BoardsApi* | [**boardsList**](docs/Api/BoardsApi.md#boardslist) | **GET** /{organization}/{project}/{team}/_apis/work/boards | 
*BoardsApi* | [**boardsSetBoardOptions**](docs/Api/BoardsApi.md#boardssetboardoptions) | **PUT** /{organization}/{project}/{team}/_apis/work/boards/{id} | 
*BoardusersettingsApi* | [**boardusersettingsGet**](docs/Api/BoardusersettingsApi.md#boardusersettingsget) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/boardusersettings | 
*BoardusersettingsApi* | [**boardusersettingsUpdate**](docs/Api/BoardusersettingsApi.md#boardusersettingsupdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/boards/{board}/boardusersettings | 
*CapacitiesApi* | [**capacitiesGet**](docs/Api/CapacitiesApi.md#capacitiesget) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/capacities/{teamMemberId} | 
*CapacitiesApi* | [**capacitiesList**](docs/Api/CapacitiesApi.md#capacitieslist) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/capacities | 
*CapacitiesApi* | [**capacitiesReplaceCapacitiesWithIdentityRef**](docs/Api/CapacitiesApi.md#capacitiesreplacecapacitieswithidentityref) | **PUT** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/capacities | 
*CapacitiesApi* | [**capacitiesUpdate**](docs/Api/CapacitiesApi.md#capacitiesupdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/capacities/{teamMemberId} | 
*CardrulesettingsApi* | [**cardrulesettingsGet**](docs/Api/CardrulesettingsApi.md#cardrulesettingsget) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/cardrulesettings | 
*CardrulesettingsApi* | [**cardrulesettingsUpdateBoardCardRuleSettings**](docs/Api/CardrulesettingsApi.md#cardrulesettingsupdateboardcardrulesettings) | **PATCH** /{organization}/{project}/{team}/_apis/work/boards/{board}/cardrulesettings | 
*CardrulesettingsApi* | [**cardrulesettingsUpdateTaskboardCardRuleSettings**](docs/Api/CardrulesettingsApi.md#cardrulesettingsupdatetaskboardcardrulesettings) | **PATCH** /{organization}/{project}/{team}/_apis/work/taskboard/cardrulesettings | 
*CardsettingsApi* | [**cardsettingsGet**](docs/Api/CardsettingsApi.md#cardsettingsget) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/cardsettings | 
*CardsettingsApi* | [**cardsettingsUpdateBoardCardSettings**](docs/Api/CardsettingsApi.md#cardsettingsupdateboardcardsettings) | **PUT** /{organization}/{project}/{team}/_apis/work/boards/{board}/cardsettings | 
*CardsettingsApi* | [**cardsettingsUpdateTaskboardCardSettings**](docs/Api/CardsettingsApi.md#cardsettingsupdatetaskboardcardsettings) | **PUT** /{organization}/{project}/{team}/_apis/work/taskboard/cardsettings | 
*ChartimagesApi* | [**chartimagesGetBoardChartImage**](docs/Api/ChartimagesApi.md#chartimagesgetboardchartimage) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/chartimages/{name} | 
*ChartimagesApi* | [**chartimagesGetIterationChartImage**](docs/Api/ChartimagesApi.md#chartimagesgetiterationchartimage) | **GET** /{organization}/{project}/{team}/_apis/work/iterations/{iterationId}/chartimages/{name} | 
*ChartimagesApi* | [**chartimagesGetIterationsChartImage**](docs/Api/ChartimagesApi.md#chartimagesgetiterationschartimage) | **GET** /{organization}/{project}/{team}/_apis/work/iterations/chartimages/{name} | 
*ChartsApi* | [**chartsGet**](docs/Api/ChartsApi.md#chartsget) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/charts/{name} | 
*ChartsApi* | [**chartsList**](docs/Api/ChartsApi.md#chartslist) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/charts | 
*ChartsApi* | [**chartsUpdate**](docs/Api/ChartsApi.md#chartsupdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/boards/{board}/charts/{name} | 
*ColumnsApi* | [**columnsList**](docs/Api/ColumnsApi.md#columnslist) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/columns | 
*ColumnsApi* | [**columnsUpdate**](docs/Api/ColumnsApi.md#columnsupdate) | **PUT** /{organization}/{project}/{team}/_apis/work/boards/{board}/columns | 
*DeliverytimelineApi* | [**deliverytimelineGet**](docs/Api/DeliverytimelineApi.md#deliverytimelineget) | **GET** /{organization}/{project}/_apis/work/plans/{id}/deliverytimeline | 
*IterationsApi* | [**iterationsDelete**](docs/Api/IterationsApi.md#iterationsdelete) | **DELETE** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{id} | 
*IterationsApi* | [**iterationsGet**](docs/Api/IterationsApi.md#iterationsget) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{id} | 
*IterationsApi* | [**iterationsGetIterationWorkItems**](docs/Api/IterationsApi.md#iterationsgetiterationworkitems) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/workitems | 
*IterationsApi* | [**iterationsList**](docs/Api/IterationsApi.md#iterationslist) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations | 
*IterationsApi* | [**iterationsPostTeamIteration**](docs/Api/IterationsApi.md#iterationspostteamiteration) | **POST** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations | 
*PlansApi* | [**plansCreate**](docs/Api/PlansApi.md#planscreate) | **POST** /{organization}/{project}/_apis/work/plans | 
*PlansApi* | [**plansDelete**](docs/Api/PlansApi.md#plansdelete) | **DELETE** /{organization}/{project}/_apis/work/plans/{id} | 
*PlansApi* | [**plansGet**](docs/Api/PlansApi.md#plansget) | **GET** /{organization}/{project}/_apis/work/plans/{id} | 
*PlansApi* | [**plansList**](docs/Api/PlansApi.md#planslist) | **GET** /{organization}/{project}/_apis/work/plans | 
*PlansApi* | [**plansUpdate**](docs/Api/PlansApi.md#plansupdate) | **PUT** /{organization}/{project}/_apis/work/plans/{id} | 
*ProcessconfigurationApi* | [**processconfigurationGet**](docs/Api/ProcessconfigurationApi.md#processconfigurationget) | **GET** /{organization}/{project}/_apis/work/processconfiguration | 
*RowsApi* | [**rowsList**](docs/Api/RowsApi.md#rowslist) | **GET** /{organization}/{project}/{team}/_apis/work/boards/{board}/rows | 
*RowsApi* | [**rowsUpdate**](docs/Api/RowsApi.md#rowsupdate) | **PUT** /{organization}/{project}/{team}/_apis/work/boards/{board}/rows | 
*TaskboardColumnsApi* | [**taskboardColumnsGet**](docs/Api/TaskboardColumnsApi.md#taskboardcolumnsget) | **GET** /{organization}/{project}/{team}/_apis/work/taskboardcolumns | 
*TaskboardColumnsApi* | [**taskboardColumnsUpdate**](docs/Api/TaskboardColumnsApi.md#taskboardcolumnsupdate) | **PUT** /{organization}/{project}/{team}/_apis/work/taskboardcolumns | 
*TaskboardWorkItemsApi* | [**taskboardWorkItemsList**](docs/Api/TaskboardWorkItemsApi.md#taskboardworkitemslist) | **GET** /{organization}/{project}/{team}/_apis/work/taskboardworkitems/{iterationId} | 
*TaskboardWorkItemsApi* | [**taskboardWorkItemsUpdate**](docs/Api/TaskboardWorkItemsApi.md#taskboardworkitemsupdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/taskboardworkitems/{iterationId}/{workItemId} | 
*TeamdaysoffApi* | [**teamdaysoffGet**](docs/Api/TeamdaysoffApi.md#teamdaysoffget) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/teamdaysoff | 
*TeamdaysoffApi* | [**teamdaysoffUpdate**](docs/Api/TeamdaysoffApi.md#teamdaysoffupdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/teamsettings/iterations/{iterationId}/teamdaysoff | 
*TeamfieldvaluesApi* | [**teamfieldvaluesGet**](docs/Api/TeamfieldvaluesApi.md#teamfieldvaluesget) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings/teamfieldvalues | 
*TeamfieldvaluesApi* | [**teamfieldvaluesUpdate**](docs/Api/TeamfieldvaluesApi.md#teamfieldvaluesupdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/teamsettings/teamfieldvalues | 
*TeamsettingsApi* | [**teamsettingsGet**](docs/Api/TeamsettingsApi.md#teamsettingsget) | **GET** /{organization}/{project}/{team}/_apis/work/teamsettings | 
*TeamsettingsApi* | [**teamsettingsUpdate**](docs/Api/TeamsettingsApi.md#teamsettingsupdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/teamsettings | 
*WorkitemsorderApi* | [**workitemsorderReorderBacklogWorkItems**](docs/Api/WorkitemsorderApi.md#workitemsorderreorderbacklogworkitems) | **PATCH** /{organization}/{project}/{team}/_apis/work/workitemsorder | 
*WorkitemsorderApi* | [**workitemsorderReorderIterationWorkItems**](docs/Api/WorkitemsorderApi.md#workitemsorderreorderiterationworkitems) | **PATCH** /{organization}/{project}/{team}/_apis/work/iterations/{iterationId}/workitemsorder | 


## Documentation For Models

 - [Activity](docs/Model/Activity.md)
 - [Attribute](docs/Model/Attribute.md)
 - [BacklogColumn](docs/Model/BacklogColumn.md)
 - [BacklogConfiguration](docs/Model/BacklogConfiguration.md)
 - [BacklogFields](docs/Model/BacklogFields.md)
 - [BacklogLevel](docs/Model/BacklogLevel.md)
 - [BacklogLevelConfiguration](docs/Model/BacklogLevelConfiguration.md)
 - [BacklogLevelWorkItems](docs/Model/BacklogLevelWorkItems.md)
 - [BoardBadge](docs/Model/BoardBadge.md)
 - [BoardCardRuleSettings](docs/Model/BoardCardRuleSettings.md)
 - [BoardCardSettings](docs/Model/BoardCardSettings.md)
 - [BoardChartReference](docs/Model/BoardChartReference.md)
 - [BoardColumn](docs/Model/BoardColumn.md)
 - [BoardFields](docs/Model/BoardFields.md)
 - [BoardReference](docs/Model/BoardReference.md)
 - [BoardRow](docs/Model/BoardRow.md)
 - [BoardSuggestedValue](docs/Model/BoardSuggestedValue.md)
 - [BoardUserSettings](docs/Model/BoardUserSettings.md)
 - [CapacityPatch](docs/Model/CapacityPatch.md)
 - [CardFieldSettings](docs/Model/CardFieldSettings.md)
 - [CardSettings](docs/Model/CardSettings.md)
 - [CategoryConfiguration](docs/Model/CategoryConfiguration.md)
 - [CreatePlan](docs/Model/CreatePlan.md)
 - [DateRange](docs/Model/DateRange.md)
 - [DeliveryViewPropertyCollection](docs/Model/DeliveryViewPropertyCollection.md)
 - [FieldInfo](docs/Model/FieldInfo.md)
 - [FieldReference](docs/Model/FieldReference.md)
 - [FieldSetting](docs/Model/FieldSetting.md)
 - [FilterClause](docs/Model/FilterClause.md)
 - [FilterGroup](docs/Model/FilterGroup.md)
 - [GraphSubjectBase](docs/Model/GraphSubjectBase.md)
 - [ITaskboardColumnMapping](docs/Model/ITaskboardColumnMapping.md)
 - [Link](docs/Model/Link.md)
 - [Marker](docs/Model/Marker.md)
 - [Member](docs/Model/Member.md)
 - [ParentChildWIMap](docs/Model/ParentChildWIMap.md)
 - [Plan](docs/Model/Plan.md)
 - [PlanMetadata](docs/Model/PlanMetadata.md)
 - [PlanViewData](docs/Model/PlanViewData.md)
 - [PredefinedQuery](docs/Model/PredefinedQuery.md)
 - [ProcessConfiguration](docs/Model/ProcessConfiguration.md)
 - [ReferenceLinks](docs/Model/ReferenceLinks.md)
 - [ReorderOperation](docs/Model/ReorderOperation.md)
 - [ReorderResult](docs/Model/ReorderResult.md)
 - [Rule](docs/Model/Rule.md)
 - [TaskboardColumn](docs/Model/TaskboardColumn.md)
 - [TaskboardColumnMapping](docs/Model/TaskboardColumnMapping.md)
 - [TaskboardColumns](docs/Model/TaskboardColumns.md)
 - [TaskboardWorkItemColumn](docs/Model/TaskboardWorkItemColumn.md)
 - [TeamBacklogMapping](docs/Model/TeamBacklogMapping.md)
 - [TeamContext](docs/Model/TeamContext.md)
 - [TeamFieldValue](docs/Model/TeamFieldValue.md)
 - [TeamFieldValuesPatch](docs/Model/TeamFieldValuesPatch.md)
 - [TeamIterationAttributes](docs/Model/TeamIterationAttributes.md)
 - [TeamSettingsDataContractBase](docs/Model/TeamSettingsDataContractBase.md)
 - [TeamSettingsDaysOffPatch](docs/Model/TeamSettingsDaysOffPatch.md)
 - [TeamSettingsPatch](docs/Model/TeamSettingsPatch.md)
 - [TimelineCriteriaStatus](docs/Model/TimelineCriteriaStatus.md)
 - [TimelineIterationStatus](docs/Model/TimelineIterationStatus.md)
 - [TimelineTeamData](docs/Model/TimelineTeamData.md)
 - [TimelineTeamIteration](docs/Model/TimelineTeamIteration.md)
 - [TimelineTeamStatus](docs/Model/TimelineTeamStatus.md)
 - [UpdatePlan](docs/Model/UpdatePlan.md)
 - [UpdateTaskboardColumn](docs/Model/UpdateTaskboardColumn.md)
 - [UpdateTaskboardWorkItemColumn](docs/Model/UpdateTaskboardWorkItemColumn.md)
 - [VssJsonCollectionWrapperBase](docs/Model/VssJsonCollectionWrapperBase.md)
 - [WorkItemColor](docs/Model/WorkItemColor.md)
 - [WorkItemFieldReference](docs/Model/WorkItemFieldReference.md)
 - [WorkItemLink](docs/Model/WorkItemLink.md)
 - [WorkItemReference](docs/Model/WorkItemReference.md)
 - [WorkItemTrackingResourceReference](docs/Model/WorkItemTrackingResourceReference.md)
 - [WorkItemTypeStateInfo](docs/Model/WorkItemTypeStateInfo.md)
 - [Board](docs/Model/Board.md)
 - [BoardChart](docs/Model/BoardChart.md)
 - [CapacityContractBase](docs/Model/CapacityContractBase.md)
 - [DeliveryViewData](docs/Model/DeliveryViewData.md)
 - [IdentityRef](docs/Model/IdentityRef.md)
 - [IterationWorkItems](docs/Model/IterationWorkItems.md)
 - [TeamFieldValues](docs/Model/TeamFieldValues.md)
 - [TeamSetting](docs/Model/TeamSetting.md)
 - [TeamSettingsDaysOff](docs/Model/TeamSettingsDaysOff.md)
 - [TeamSettingsIteration](docs/Model/TeamSettingsIteration.md)
 - [VssJsonCollectionWrapper](docs/Model/VssJsonCollectionWrapper.md)
 - [WorkItemCommentVersionRef](docs/Model/WorkItemCommentVersionRef.md)
 - [WorkItemRelation](docs/Model/WorkItemRelation.md)
 - [WorkItemTrackingResource](docs/Model/WorkItemTrackingResource.md)
 - [WorkItemTypeReference](docs/Model/WorkItemTypeReference.md)
 - [TeamMemberCapacity](docs/Model/TeamMemberCapacity.md)
 - [TeamMemberCapacityIdentityRef](docs/Model/TeamMemberCapacityIdentityRef.md)
 - [WorkItem](docs/Model/WorkItem.md)


## Documentation For Authorization


## accessToken

- **Type**: HTTP basic authentication

## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://app.vssps.visualstudio.com/oauth2/authorize&response_type=Assertion
- **Scopes**: 
 - **vso.work**: Grants the ability to read work items, queries, boards, area and iterations paths, and other work item tracking related metadata. Also grants the ability to execute queries, search work items and to receive notifications about work item events via service hooks.
 - **vso.work_write**: Grants the ability to read, create, and update work items and queries, update board metadata, read area and iterations paths other work item tracking related metadata, execute queries, and to receive notifications about work item events via service hooks.


## Author

nugetvss@microsoft.com


