# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 4.1-preview
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

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->callList($organization, $processId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->callList: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://dev.azure.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BehaviorsApi* | [**callList**](docs/Api/BehaviorsApi.md#calllist) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/behaviors | 
*BehaviorsApi* | [**create**](docs/Api/BehaviorsApi.md#create) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/behaviors | 
*BehaviorsApi* | [**delete**](docs/Api/BehaviorsApi.md#delete) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/behaviors/{behaviorId} | 
*BehaviorsApi* | [**get**](docs/Api/BehaviorsApi.md#get) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/behaviors/{behaviorId} | 
*BehaviorsApi* | [**replaceBehavior**](docs/Api/BehaviorsApi.md#replacebehavior) | **PUT** /{organization}/_apis/work/processdefinitions/{processId}/behaviors/{behaviorId} | 
*ControlsApi* | [**add**](docs/Api/ControlsApi.md#add) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/groups/{groupId}/controls | 
*ControlsApi* | [**editControl**](docs/Api/ControlsApi.md#editcontrol) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/groups/{groupId}/controls/{controlId} | 
*ControlsApi* | [**removeControlFromGroup**](docs/Api/ControlsApi.md#removecontrolfromgroup) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/groups/{groupId}/controls/{controlId} | 
*ControlsApi* | [**setControlInGroup**](docs/Api/ControlsApi.md#setcontrolingroup) | **PUT** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/groups/{groupId}/controls/{controlId} | 
*FieldsApi* | [**create**](docs/Api/FieldsApi.md#create) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/fields | 
*FieldsApi* | [**update**](docs/Api/FieldsApi.md#update) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/fields | 
*GroupsApi* | [**add**](docs/Api/GroupsApi.md#add) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups | 
*GroupsApi* | [**editGroup**](docs/Api/GroupsApi.md#editgroup) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups/{groupId} | 
*GroupsApi* | [**removeGroup**](docs/Api/GroupsApi.md#removegroup) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups/{groupId} | 
*GroupsApi* | [**setGroupInSection**](docs/Api/GroupsApi.md#setgroupinsection) | **PUT** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId}/sections/{sectionId}/groups/{groupId} | 
*LayoutApi* | [**get**](docs/Api/LayoutApi.md#get) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout | 
*ListsApi* | [**callList**](docs/Api/ListsApi.md#calllist) | **GET** /{organization}/_apis/work/processdefinitions/lists | 
*ListsApi* | [**create**](docs/Api/ListsApi.md#create) | **POST** /{organization}/_apis/work/processdefinitions/lists | 
*ListsApi* | [**delete**](docs/Api/ListsApi.md#delete) | **DELETE** /{organization}/_apis/work/processdefinitions/lists/{listId} | 
*ListsApi* | [**get**](docs/Api/ListsApi.md#get) | **GET** /{organization}/_apis/work/processdefinitions/lists/{listId} | 
*ListsApi* | [**update**](docs/Api/ListsApi.md#update) | **PUT** /{organization}/_apis/work/processdefinitions/lists/{listId} | 
*PagesApi* | [**add**](docs/Api/PagesApi.md#add) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/pages | 
*PagesApi* | [**editPage**](docs/Api/PagesApi.md#editpage) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/pages | 
*PagesApi* | [**removePage**](docs/Api/PagesApi.md#removepage) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout/pages/{pageId} | 
*StatesApi* | [**callList**](docs/Api/StatesApi.md#calllist) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states | 
*StatesApi* | [**create**](docs/Api/StatesApi.md#create) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states | 
*StatesApi* | [**delete**](docs/Api/StatesApi.md#delete) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states/{stateId} | 
*StatesApi* | [**get**](docs/Api/StatesApi.md#get) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states/{stateId} | 
*StatesApi* | [**hideStateDefinition**](docs/Api/StatesApi.md#hidestatedefinition) | **PUT** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states/{stateId} | 
*StatesApi* | [**update**](docs/Api/StatesApi.md#update) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states/{stateId} | 
*WorkItemTypesApi* | [**add**](docs/Api/WorkItemTypesApi.md#add) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefNameForBehaviors}/behaviors | 
*WorkItemTypesApi* | [**create**](docs/Api/WorkItemTypesApi.md#create) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes | 
*WorkItemTypesApi* | [**delete**](docs/Api/WorkItemTypesApi.md#delete) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefName} | 
*WorkItemTypesApi* | [**getBehaviorForWorkItemType**](docs/Api/WorkItemTypesApi.md#getbehaviorforworkitemtype) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefNameForBehaviors}/behaviors/{behaviorRefName} | 
*WorkItemTypesApi* | [**getBehaviorsForWorkItemType**](docs/Api/WorkItemTypesApi.md#getbehaviorsforworkitemtype) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefNameForBehaviors}/behaviors | 
*WorkItemTypesApi* | [**getWorkItemType**](docs/Api/WorkItemTypesApi.md#getworkitemtype) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefName} | 
*WorkItemTypesApi* | [**getWorkItemTypes**](docs/Api/WorkItemTypesApi.md#getworkitemtypes) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes | 
*WorkItemTypesApi* | [**removeBehaviorFromWorkItemType**](docs/Api/WorkItemTypesApi.md#removebehaviorfromworkitemtype) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefNameForBehaviors}/behaviors/{behaviorRefName} | 
*WorkItemTypesApi* | [**updateBehaviorToWorkItemType**](docs/Api/WorkItemTypesApi.md#updatebehaviortoworkitemtype) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefNameForBehaviors}/behaviors | 
*WorkItemTypesApi* | [**updateWorkItemType**](docs/Api/WorkItemTypesApi.md#updateworkitemtype) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefName} | 
*WorkItemTypesFieldsApi* | [**add**](docs/Api/WorkItemTypesFieldsApi.md#add) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefNameForFields}/fields | 
*WorkItemTypesFieldsApi* | [**callList**](docs/Api/WorkItemTypesFieldsApi.md#calllist) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefNameForFields}/fields | 
*WorkItemTypesFieldsApi* | [**get**](docs/Api/WorkItemTypesFieldsApi.md#get) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefNameForFields}/fields/{fieldRefName} | 
*WorkItemTypesFieldsApi* | [**removeFieldFromWorkItemType**](docs/Api/WorkItemTypesFieldsApi.md#removefieldfromworkitemtype) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefNameForFields}/fields/{fieldRefName} | 


## Documentation For Models

 - [BehaviorCreateModel](docs/Model/BehaviorCreateModel.md)
 - [BehaviorModel](docs/Model/BehaviorModel.md)
 - [BehaviorReplaceModel](docs/Model/BehaviorReplaceModel.md)
 - [Control](docs/Model/Control.md)
 - [Extension](docs/Model/Extension.md)
 - [FieldModel](docs/Model/FieldModel.md)
 - [FieldUpdate](docs/Model/FieldUpdate.md)
 - [FormLayout](docs/Model/FormLayout.md)
 - [Group](docs/Model/Group.md)
 - [HideStateModel](docs/Model/HideStateModel.md)
 - [Page](docs/Model/Page.md)
 - [PickListItemModel](docs/Model/PickListItemModel.md)
 - [PickListMetadataModel](docs/Model/PickListMetadataModel.md)
 - [Section](docs/Model/Section.md)
 - [VssJsonCollectionWrapperBase](docs/Model/VssJsonCollectionWrapperBase.md)
 - [WitContribution](docs/Model/WitContribution.md)
 - [WorkItemBehaviorReference](docs/Model/WorkItemBehaviorReference.md)
 - [WorkItemStateInputModel](docs/Model/WorkItemStateInputModel.md)
 - [WorkItemStateResultModel](docs/Model/WorkItemStateResultModel.md)
 - [WorkItemTypeBehavior](docs/Model/WorkItemTypeBehavior.md)
 - [WorkItemTypeFieldModel](docs/Model/WorkItemTypeFieldModel.md)
 - [WorkItemTypeModel](docs/Model/WorkItemTypeModel.md)
 - [WorkItemTypeUpdateModel](docs/Model/WorkItemTypeUpdateModel.md)
 - [PickListModel](docs/Model/PickListModel.md)
 - [VssJsonCollectionWrapper](docs/Model/VssJsonCollectionWrapper.md)


## Documentation For Authorization


## accessToken

- **Type**: HTTP basic authentication


## Author

nugetvss@microsoft.com

