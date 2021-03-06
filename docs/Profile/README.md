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
$config = FrankHouweling\AzureDevOpsClient\Profile\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Profile\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ID of the target user profile within the same organization, or 'me' to get the profile of the current authenticated user.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$details = true; // bool | Return public profile information such as display name, email address, country, etc. If false, the withAttributes parameter is ignored.
$withAttributes = true; // bool | If true, gets the attributes (named key-value pairs of arbitrary data) associated with the profile. The partition parameter must also have a value.
$partition = "partition_example"; // string | The partition (named group) of attributes to return.
$coreAttributes = "coreAttributes_example"; // string | A comma-delimited list of core profile attributes to return. Valid values are Email, Avatar, DisplayName, and ContactWithOffers.
$forceRefresh = true; // bool | Not used in this version of the API.

try {
    $result = $apiInstance->profilesGet($id, $apiVersion, $details, $withAttributes, $partition, $coreAttributes, $forceRefresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://app.vssps.visualstudio.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ProfilesApi* | [**profilesGet**](docs/Api/ProfilesApi.md#profilesget) | **GET** /_apis/profile/profiles/{id} | 


## Documentation For Models

 - [AttributeDescriptor](docs/Model/AttributeDescriptor.md)
 - [AttributesContainer](docs/Model/AttributesContainer.md)
 - [Avatar](docs/Model/Avatar.md)
 - [CreateProfileContext](docs/Model/CreateProfileContext.md)
 - [GeoRegion](docs/Model/GeoRegion.md)
 - [JObject](docs/Model/JObject.md)
 - [Profile](docs/Model/Profile.md)
 - [ProfileAttributeBase](docs/Model/ProfileAttributeBase.md)
 - [ProfileRegion](docs/Model/ProfileRegion.md)
 - [ProfileRegions](docs/Model/ProfileRegions.md)
 - [VssJsonCollectionWrapperBase](docs/Model/VssJsonCollectionWrapperBase.md)
 - [CoreProfileAttribute](docs/Model/CoreProfileAttribute.md)
 - [ProfileAttribute](docs/Model/ProfileAttribute.md)
 - [VssJsonCollectionWrapper](docs/Model/VssJsonCollectionWrapper.md)


## Documentation For Authorization


## accessToken

- **Type**: HTTP basic authentication

## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://app.vssps.visualstudio.com/oauth2/authorize&response_type=Assertion
- **Scopes**: 
 - **vso.profile**: Grants the ability to read your profile, accounts, collections, projects, teams, and other top-level organizational artifacts.
 - **vso.profile_write**: Grants the ability to write to your profile.


## Author

nugetvss@microsoft.com


