<?php
/**
 * GitVersionDescriptor
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Wiki
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wiki
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

namespace AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Wiki\ObjectSerializer;

/**
 * GitVersionDescriptor Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Wiki
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitVersionDescriptor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitVersionDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'version' => 'string',
        'versionOptions' => 'string',
        'versionType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'version' => null,
        'versionOptions' => null,
        'versionType' => null
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
        'version' => 'version',
        'versionOptions' => 'versionOptions',
        'versionType' => 'versionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'versionOptions' => 'setVersionOptions',
        'versionType' => 'setVersionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'versionOptions' => 'getVersionOptions',
        'versionType' => 'getVersionType'
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

    const VERSION_OPTIONS_NONE = 'none';
    const VERSION_OPTIONS_PREVIOUS_CHANGE = 'previousChange';
    const VERSION_OPTIONS_FIRST_PARENT = 'firstParent';
    const VERSION_TYPE_BRANCH = 'branch';
    const VERSION_TYPE_TAG = 'tag';
    const VERSION_TYPE_COMMIT = 'commit';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVersionOptionsAllowableValues()
    {
        return [
            self::VERSION_OPTIONS_NONE,
            self::VERSION_OPTIONS_PREVIOUS_CHANGE,
            self::VERSION_OPTIONS_FIRST_PARENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVersionTypeAllowableValues()
    {
        return [
            self::VERSION_TYPE_BRANCH,
            self::VERSION_TYPE_TAG,
            self::VERSION_TYPE_COMMIT,
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionOptions'] = isset($data['versionOptions']) ? $data['versionOptions'] : null;
        $this->container['versionType'] = isset($data['versionType']) ? $data['versionType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getVersionOptionsAllowableValues();
        if (!is_null($this->container['versionOptions']) && !in_array($this->container['versionOptions'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'versionOptions', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVersionTypeAllowableValues();
        if (!is_null($this->container['versionType']) && !in_array($this->container['versionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'versionType', must be one of '%s'",
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
     * @param string $version Version string identifier (name of tag/branch, SHA1 of commit)
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets versionOptions
     *
     * @return string
     */
    public function getVersionOptions()
    {
        return $this->container['versionOptions'];
    }

    /**
     * Sets versionOptions
     *
     * @param string $versionOptions Version options - Specify additional modifiers to version (e.g Previous)
     *
     * @return $this
     */
    public function setVersionOptions($versionOptions)
    {
        $allowedValues = $this->getVersionOptionsAllowableValues();
        if (!is_null($versionOptions) && !in_array($versionOptions, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'versionOptions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['versionOptions'] = $versionOptions;

        return $this;
    }

    /**
     * Gets versionType
     *
     * @return string
     */
    public function getVersionType()
    {
        return $this->container['versionType'];
    }

    /**
     * Sets versionType
     *
     * @param string $versionType Version type (branch, tag, or commit). Determines how Id is interpreted
     *
     * @return $this
     */
    public function setVersionType($versionType)
    {
        $allowedValues = $this->getVersionTypeAllowableValues();
        if (!is_null($versionType) && !in_array($versionType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'versionType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['versionType'] = $versionType;

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


