<?php
/**
 * VersionedResource
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Hooks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ServiceHooks
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

namespace FrankHouweling\AzureDevOpsClient\Hooks\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Hooks\ObjectSerializer;

/**
 * VersionedResource Class Doc Comment
 *
 * @category Class
 * @description Encapsulates the resource version and its data or reference to the compatible version. Only one of the two last fields should be not null.
 * @package  FrankHouweling\AzureDevOpsClient\Hooks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VersionedResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VersionedResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'compatibleWith' => 'string',
        'resource' => 'object',
        'resourceVersion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'compatibleWith' => null,
        'resource' => null,
        'resourceVersion' => null
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
        'compatibleWith' => 'compatibleWith',
        'resource' => 'resource',
        'resourceVersion' => 'resourceVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compatibleWith' => 'setCompatibleWith',
        'resource' => 'setResource',
        'resourceVersion' => 'setResourceVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compatibleWith' => 'getCompatibleWith',
        'resource' => 'getResource',
        'resourceVersion' => 'getResourceVersion'
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
        $this->container['compatibleWith'] = isset($data['compatibleWith']) ? $data['compatibleWith'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['resourceVersion'] = isset($data['resourceVersion']) ? $data['resourceVersion'] : null;
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
     * Gets compatibleWith
     *
     * @return string
     */
    public function getCompatibleWith()
    {
        return $this->container['compatibleWith'];
    }

    /**
     * Sets compatibleWith
     *
     * @param string $compatibleWith Gets or sets the reference to the compatible version.
     *
     * @return $this
     */
    public function setCompatibleWith($compatibleWith)
    {
        $this->container['compatibleWith'] = $compatibleWith;

        return $this;
    }

    /**
     * Gets resource
     *
     * @return object
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     *
     * @param object $resource Gets or sets the resource data.
     *
     * @return $this
     */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;

        return $this;
    }

    /**
     * Gets resourceVersion
     *
     * @return string
     */
    public function getResourceVersion()
    {
        return $this->container['resourceVersion'];
    }

    /**
     * Sets resourceVersion
     *
     * @param string $resourceVersion Gets or sets the version of the resource data.
     *
     * @return $this
     */
    public function setResourceVersion($resourceVersion)
    {
        $this->container['resourceVersion'] = $resourceVersion;

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


