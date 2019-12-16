<?php
/**
 * ArtifactFilter
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Notification
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

namespace AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Notification\ObjectSerializer;

/**
 * ArtifactFilter Class Doc Comment
 *
 * @category Class
 * @description Artifact filter options. Used in \&quot;follow\&quot; subscriptions.
 * @package  AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ArtifactFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ArtifactFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'eventType' => 'string',
        'type' => 'string',
        'artifactId' => 'string',
        'artifactType' => 'string',
        'artifactUri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'eventType' => null,
        'type' => null,
        'artifactId' => null,
        'artifactType' => null,
        'artifactUri' => null
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
        'eventType' => 'eventType',
        'type' => 'type',
        'artifactId' => 'artifactId',
        'artifactType' => 'artifactType',
        'artifactUri' => 'artifactUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eventType' => 'setEventType',
        'type' => 'setType',
        'artifactId' => 'setArtifactId',
        'artifactType' => 'setArtifactType',
        'artifactUri' => 'setArtifactUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eventType' => 'getEventType',
        'type' => 'getType',
        'artifactId' => 'getArtifactId',
        'artifactType' => 'getArtifactType',
        'artifactUri' => 'getArtifactUri'
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
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['artifactId'] = isset($data['artifactId']) ? $data['artifactId'] : null;
        $this->container['artifactType'] = isset($data['artifactType']) ? $data['artifactType'] : null;
        $this->container['artifactUri'] = isset($data['artifactUri']) ? $data['artifactUri'] : null;
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
     * Gets eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     *
     * @param string $eventType eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets artifactId
     *
     * @return string
     */
    public function getArtifactId()
    {
        return $this->container['artifactId'];
    }

    /**
     * Sets artifactId
     *
     * @param string $artifactId artifactId
     *
     * @return $this
     */
    public function setArtifactId($artifactId)
    {
        $this->container['artifactId'] = $artifactId;

        return $this;
    }

    /**
     * Gets artifactType
     *
     * @return string
     */
    public function getArtifactType()
    {
        return $this->container['artifactType'];
    }

    /**
     * Sets artifactType
     *
     * @param string $artifactType artifactType
     *
     * @return $this
     */
    public function setArtifactType($artifactType)
    {
        $this->container['artifactType'] = $artifactType;

        return $this;
    }

    /**
     * Gets artifactUri
     *
     * @return string
     */
    public function getArtifactUri()
    {
        return $this->container['artifactUri'];
    }

    /**
     * Sets artifactUri
     *
     * @param string $artifactUri artifactUri
     *
     * @return $this
     */
    public function setArtifactUri($artifactUri)
    {
        $this->container['artifactUri'] = $artifactUri;

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


