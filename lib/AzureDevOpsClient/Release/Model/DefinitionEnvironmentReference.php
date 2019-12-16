<?php
/**
 * DefinitionEnvironmentReference
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Release
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

namespace AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Release\ObjectSerializer;

/**
 * DefinitionEnvironmentReference Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DefinitionEnvironmentReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DefinitionEnvironmentReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'definitionEnvironmentId' => 'int',
        'definitionEnvironmentName' => 'string',
        'releaseDefinitionId' => 'int',
        'releaseDefinitionName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'definitionEnvironmentId' => 'int32',
        'definitionEnvironmentName' => null,
        'releaseDefinitionId' => 'int32',
        'releaseDefinitionName' => null
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
        'definitionEnvironmentId' => 'definitionEnvironmentId',
        'definitionEnvironmentName' => 'definitionEnvironmentName',
        'releaseDefinitionId' => 'releaseDefinitionId',
        'releaseDefinitionName' => 'releaseDefinitionName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'definitionEnvironmentId' => 'setDefinitionEnvironmentId',
        'definitionEnvironmentName' => 'setDefinitionEnvironmentName',
        'releaseDefinitionId' => 'setReleaseDefinitionId',
        'releaseDefinitionName' => 'setReleaseDefinitionName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'definitionEnvironmentId' => 'getDefinitionEnvironmentId',
        'definitionEnvironmentName' => 'getDefinitionEnvironmentName',
        'releaseDefinitionId' => 'getReleaseDefinitionId',
        'releaseDefinitionName' => 'getReleaseDefinitionName'
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
        $this->container['definitionEnvironmentId'] = isset($data['definitionEnvironmentId']) ? $data['definitionEnvironmentId'] : null;
        $this->container['definitionEnvironmentName'] = isset($data['definitionEnvironmentName']) ? $data['definitionEnvironmentName'] : null;
        $this->container['releaseDefinitionId'] = isset($data['releaseDefinitionId']) ? $data['releaseDefinitionId'] : null;
        $this->container['releaseDefinitionName'] = isset($data['releaseDefinitionName']) ? $data['releaseDefinitionName'] : null;
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
     * Gets definitionEnvironmentId
     *
     * @return int
     */
    public function getDefinitionEnvironmentId()
    {
        return $this->container['definitionEnvironmentId'];
    }

    /**
     * Sets definitionEnvironmentId
     *
     * @param int $definitionEnvironmentId Definition environment ID.
     *
     * @return $this
     */
    public function setDefinitionEnvironmentId($definitionEnvironmentId)
    {
        $this->container['definitionEnvironmentId'] = $definitionEnvironmentId;

        return $this;
    }

    /**
     * Gets definitionEnvironmentName
     *
     * @return string
     */
    public function getDefinitionEnvironmentName()
    {
        return $this->container['definitionEnvironmentName'];
    }

    /**
     * Sets definitionEnvironmentName
     *
     * @param string $definitionEnvironmentName Definition environment name.
     *
     * @return $this
     */
    public function setDefinitionEnvironmentName($definitionEnvironmentName)
    {
        $this->container['definitionEnvironmentName'] = $definitionEnvironmentName;

        return $this;
    }

    /**
     * Gets releaseDefinitionId
     *
     * @return int
     */
    public function getReleaseDefinitionId()
    {
        return $this->container['releaseDefinitionId'];
    }

    /**
     * Sets releaseDefinitionId
     *
     * @param int $releaseDefinitionId ReleaseDefinition ID.
     *
     * @return $this
     */
    public function setReleaseDefinitionId($releaseDefinitionId)
    {
        $this->container['releaseDefinitionId'] = $releaseDefinitionId;

        return $this;
    }

    /**
     * Gets releaseDefinitionName
     *
     * @return string
     */
    public function getReleaseDefinitionName()
    {
        return $this->container['releaseDefinitionName'];
    }

    /**
     * Sets releaseDefinitionName
     *
     * @param string $releaseDefinitionName ReleaseDefinition name.
     *
     * @return $this
     */
    public function setReleaseDefinitionName($releaseDefinitionName)
    {
        $this->container['releaseDefinitionName'] = $releaseDefinitionName;

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


