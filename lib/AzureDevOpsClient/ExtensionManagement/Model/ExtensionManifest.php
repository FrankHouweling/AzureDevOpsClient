<?php
/**
 * ExtensionManifest
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\ExtensionManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ExtensionManagement
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0-preview
 * Contact: nugetvss@microsoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\ExtensionManagement\ObjectSerializer;

/**
 * ExtensionManifest Class Doc Comment
 *
 * @category Class
 * @description Base class for extension properties which are shared by the extension manifest and the extension model
 * @package  FrankHouweling\AzureDevOpsClient\ExtensionManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtensionManifest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtensionManifest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'baseUri' => 'string',
        'constraints' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ContributionConstraint[]',
        'contributions' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\Contribution[]',
        'contributionTypes' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ContributionType[]',
        'demands' => 'string[]',
        'eventCallbacks' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallbackCollection',
        'fallbackBaseUri' => 'string',
        'language' => 'string',
        'licensing' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionLicensing',
        'manifestVersion' => 'double',
        'restrictedTo' => 'string[]',
        'scopes' => 'string[]',
        'serviceInstanceType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'baseUri' => null,
        'constraints' => null,
        'contributions' => null,
        'contributionTypes' => null,
        'demands' => null,
        'eventCallbacks' => null,
        'fallbackBaseUri' => null,
        'language' => null,
        'licensing' => null,
        'manifestVersion' => 'double',
        'restrictedTo' => null,
        'scopes' => null,
        'serviceInstanceType' => 'uuid'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'baseUri' => 'baseUri',
        'constraints' => 'constraints',
        'contributions' => 'contributions',
        'contributionTypes' => 'contributionTypes',
        'demands' => 'demands',
        'eventCallbacks' => 'eventCallbacks',
        'fallbackBaseUri' => 'fallbackBaseUri',
        'language' => 'language',
        'licensing' => 'licensing',
        'manifestVersion' => 'manifestVersion',
        'restrictedTo' => 'restrictedTo',
        'scopes' => 'scopes',
        'serviceInstanceType' => 'serviceInstanceType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'baseUri' => 'setBaseUri',
        'constraints' => 'setConstraints',
        'contributions' => 'setContributions',
        'contributionTypes' => 'setContributionTypes',
        'demands' => 'setDemands',
        'eventCallbacks' => 'setEventCallbacks',
        'fallbackBaseUri' => 'setFallbackBaseUri',
        'language' => 'setLanguage',
        'licensing' => 'setLicensing',
        'manifestVersion' => 'setManifestVersion',
        'restrictedTo' => 'setRestrictedTo',
        'scopes' => 'setScopes',
        'serviceInstanceType' => 'setServiceInstanceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'baseUri' => 'getBaseUri',
        'constraints' => 'getConstraints',
        'contributions' => 'getContributions',
        'contributionTypes' => 'getContributionTypes',
        'demands' => 'getDemands',
        'eventCallbacks' => 'getEventCallbacks',
        'fallbackBaseUri' => 'getFallbackBaseUri',
        'language' => 'getLanguage',
        'licensing' => 'getLicensing',
        'manifestVersion' => 'getManifestVersion',
        'restrictedTo' => 'getRestrictedTo',
        'scopes' => 'getScopes',
        'serviceInstanceType' => 'getServiceInstanceType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['baseUri'] = isset($data['baseUri']) ? $data['baseUri'] : null;
        $this->container['constraints'] = isset($data['constraints']) ? $data['constraints'] : null;
        $this->container['contributions'] = isset($data['contributions']) ? $data['contributions'] : null;
        $this->container['contributionTypes'] = isset($data['contributionTypes']) ? $data['contributionTypes'] : null;
        $this->container['demands'] = isset($data['demands']) ? $data['demands'] : null;
        $this->container['eventCallbacks'] = isset($data['eventCallbacks']) ? $data['eventCallbacks'] : null;
        $this->container['fallbackBaseUri'] = isset($data['fallbackBaseUri']) ? $data['fallbackBaseUri'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['licensing'] = isset($data['licensing']) ? $data['licensing'] : null;
        $this->container['manifestVersion'] = isset($data['manifestVersion']) ? $data['manifestVersion'] : null;
        $this->container['restrictedTo'] = isset($data['restrictedTo']) ? $data['restrictedTo'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['serviceInstanceType'] = isset($data['serviceInstanceType']) ? $data['serviceInstanceType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets baseUri
     *
     * @return string
     */
    public function getBaseUri()
    {
        return $this->container['baseUri'];
    }

    /**
     * Sets baseUri
     *
     * @param string $baseUri Uri used as base for other relative uri's defined in extension
     *
     * @return $this
     */
    public function setBaseUri($baseUri)
    {
        $this->container['baseUri'] = $baseUri;

        return $this;
    }

    /**
     * Gets constraints
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ContributionConstraint[]
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ContributionConstraint[] $constraints List of shared constraints defined by this extension
     *
     * @return $this
     */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;

        return $this;
    }

    /**
     * Gets contributions
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\Contribution[]
     */
    public function getContributions()
    {
        return $this->container['contributions'];
    }

    /**
     * Sets contributions
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\Contribution[] $contributions List of contributions made by this extension
     *
     * @return $this
     */
    public function setContributions($contributions)
    {
        $this->container['contributions'] = $contributions;

        return $this;
    }

    /**
     * Gets contributionTypes
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ContributionType[]
     */
    public function getContributionTypes()
    {
        return $this->container['contributionTypes'];
    }

    /**
     * Sets contributionTypes
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ContributionType[] $contributionTypes List of contribution types defined by this extension
     *
     * @return $this
     */
    public function setContributionTypes($contributionTypes)
    {
        $this->container['contributionTypes'] = $contributionTypes;

        return $this;
    }

    /**
     * Gets demands
     *
     * @return string[]
     */
    public function getDemands()
    {
        return $this->container['demands'];
    }

    /**
     * Sets demands
     *
     * @param string[] $demands List of explicit demands required by this extension
     *
     * @return $this
     */
    public function setDemands($demands)
    {
        $this->container['demands'] = $demands;

        return $this;
    }

    /**
     * Gets eventCallbacks
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallbackCollection
     */
    public function getEventCallbacks()
    {
        return $this->container['eventCallbacks'];
    }

    /**
     * Sets eventCallbacks
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallbackCollection $eventCallbacks Collection of endpoints that get called when particular extension events occur
     *
     * @return $this
     */
    public function setEventCallbacks($eventCallbacks)
    {
        $this->container['eventCallbacks'] = $eventCallbacks;

        return $this;
    }

    /**
     * Gets fallbackBaseUri
     *
     * @return string
     */
    public function getFallbackBaseUri()
    {
        return $this->container['fallbackBaseUri'];
    }

    /**
     * Sets fallbackBaseUri
     *
     * @param string $fallbackBaseUri Secondary location that can be used as base for other relative uri's defined in extension
     *
     * @return $this
     */
    public function setFallbackBaseUri($fallbackBaseUri)
    {
        $this->container['fallbackBaseUri'] = $fallbackBaseUri;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Language Culture Name set by the Gallery
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets licensing
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionLicensing
     */
    public function getLicensing()
    {
        return $this->container['licensing'];
    }

    /**
     * Sets licensing
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionLicensing $licensing How this extension behaves with respect to licensing
     *
     * @return $this
     */
    public function setLicensing($licensing)
    {
        $this->container['licensing'] = $licensing;

        return $this;
    }

    /**
     * Gets manifestVersion
     *
     * @return double
     */
    public function getManifestVersion()
    {
        return $this->container['manifestVersion'];
    }

    /**
     * Sets manifestVersion
     *
     * @param double $manifestVersion Version of the extension manifest format/content
     *
     * @return $this
     */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;

        return $this;
    }

    /**
     * Gets restrictedTo
     *
     * @return string[]
     */
    public function getRestrictedTo()
    {
        return $this->container['restrictedTo'];
    }

    /**
     * Sets restrictedTo
     *
     * @param string[] $restrictedTo Default user claims applied to all contributions (except the ones which have been specified restrictedTo explicitly) to control the visibility of a contribution.
     *
     * @return $this
     */
    public function setRestrictedTo($restrictedTo)
    {
        $this->container['restrictedTo'] = $restrictedTo;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return string[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param string[] $scopes List of all oauth scopes required by this extension
     *
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets serviceInstanceType
     *
     * @return string
     */
    public function getServiceInstanceType()
    {
        return $this->container['serviceInstanceType'];
    }

    /**
     * Sets serviceInstanceType
     *
     * @param string $serviceInstanceType The ServiceInstanceType(Guid) of the VSTS service that must be available to an account in order for the extension to be installed
     *
     * @return $this
     */
    public function setServiceInstanceType($serviceInstanceType)
    {
        $this->container['serviceInstanceType'] = $serviceInstanceType;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


