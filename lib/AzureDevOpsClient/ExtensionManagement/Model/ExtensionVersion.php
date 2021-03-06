<?php
/**
 * ExtensionVersion
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
 * ExtensionVersion Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\ExtensionManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtensionVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtensionVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assetUri' => 'string',
        'badges' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionBadge[]',
        'fallbackAssetUri' => 'string',
        'files' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionFile[]',
        'flags' => 'string',
        'lastUpdated' => '\DateTime',
        'properties' => 'object[]',
        'validationResultMessage' => 'string',
        'version' => 'string',
        'versionDescription' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assetUri' => null,
        'badges' => null,
        'fallbackAssetUri' => null,
        'files' => null,
        'flags' => null,
        'lastUpdated' => 'date-time',
        'properties' => null,
        'validationResultMessage' => null,
        'version' => null,
        'versionDescription' => null
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
        'assetUri' => 'assetUri',
        'badges' => 'badges',
        'fallbackAssetUri' => 'fallbackAssetUri',
        'files' => 'files',
        'flags' => 'flags',
        'lastUpdated' => 'lastUpdated',
        'properties' => 'properties',
        'validationResultMessage' => 'validationResultMessage',
        'version' => 'version',
        'versionDescription' => 'versionDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assetUri' => 'setAssetUri',
        'badges' => 'setBadges',
        'fallbackAssetUri' => 'setFallbackAssetUri',
        'files' => 'setFiles',
        'flags' => 'setFlags',
        'lastUpdated' => 'setLastUpdated',
        'properties' => 'setProperties',
        'validationResultMessage' => 'setValidationResultMessage',
        'version' => 'setVersion',
        'versionDescription' => 'setVersionDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assetUri' => 'getAssetUri',
        'badges' => 'getBadges',
        'fallbackAssetUri' => 'getFallbackAssetUri',
        'files' => 'getFiles',
        'flags' => 'getFlags',
        'lastUpdated' => 'getLastUpdated',
        'properties' => 'getProperties',
        'validationResultMessage' => 'getValidationResultMessage',
        'version' => 'getVersion',
        'versionDescription' => 'getVersionDescription'
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

    const FLAGS_NONE = 'none';
    const FLAGS_VALIDATED = 'validated';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlagsAllowableValues()
    {
        return [
            self::FLAGS_NONE,
            self::FLAGS_VALIDATED,
        ];
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
        $this->container['assetUri'] = isset($data['assetUri']) ? $data['assetUri'] : null;
        $this->container['badges'] = isset($data['badges']) ? $data['badges'] : null;
        $this->container['fallbackAssetUri'] = isset($data['fallbackAssetUri']) ? $data['fallbackAssetUri'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['flags'] = isset($data['flags']) ? $data['flags'] : null;
        $this->container['lastUpdated'] = isset($data['lastUpdated']) ? $data['lastUpdated'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['validationResultMessage'] = isset($data['validationResultMessage']) ? $data['validationResultMessage'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFlagsAllowableValues();
        if (!is_null($this->container['flags']) && !in_array($this->container['flags'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'flags', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets assetUri
     *
     * @return string
     */
    public function getAssetUri()
    {
        return $this->container['assetUri'];
    }

    /**
     * Sets assetUri
     *
     * @param string $assetUri assetUri
     *
     * @return $this
     */
    public function setAssetUri($assetUri)
    {
        $this->container['assetUri'] = $assetUri;

        return $this;
    }

    /**
     * Gets badges
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionBadge[]
     */
    public function getBadges()
    {
        return $this->container['badges'];
    }

    /**
     * Sets badges
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionBadge[] $badges badges
     *
     * @return $this
     */
    public function setBadges($badges)
    {
        $this->container['badges'] = $badges;

        return $this;
    }

    /**
     * Gets fallbackAssetUri
     *
     * @return string
     */
    public function getFallbackAssetUri()
    {
        return $this->container['fallbackAssetUri'];
    }

    /**
     * Sets fallbackAssetUri
     *
     * @param string $fallbackAssetUri fallbackAssetUri
     *
     * @return $this
     */
    public function setFallbackAssetUri($fallbackAssetUri)
    {
        $this->container['fallbackAssetUri'] = $fallbackAssetUri;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionFile[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ExtensionFile[] $files files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return string
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param string $flags flags
     *
     * @return $this
     */
    public function setFlags($flags)
    {
        $allowedValues = $this->getFlagsAllowableValues();
        if (!is_null($flags) && !in_array($flags, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'flags', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flags'] = $flags;

        return $this;
    }

    /**
     * Gets lastUpdated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->container['lastUpdated'];
    }

    /**
     * Sets lastUpdated
     *
     * @param \DateTime $lastUpdated lastUpdated
     *
     * @return $this
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->container['lastUpdated'] = $lastUpdated;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return object[]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param object[] $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets validationResultMessage
     *
     * @return string
     */
    public function getValidationResultMessage()
    {
        return $this->container['validationResultMessage'];
    }

    /**
     * Sets validationResultMessage
     *
     * @param string $validationResultMessage validationResultMessage
     *
     * @return $this
     */
    public function setValidationResultMessage($validationResultMessage)
    {
        $this->container['validationResultMessage'] = $validationResultMessage;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets versionDescription
     *
     * @return string
     */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
     * Sets versionDescription
     *
     * @param string $versionDescription versionDescription
     *
     * @return $this
     */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;

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


