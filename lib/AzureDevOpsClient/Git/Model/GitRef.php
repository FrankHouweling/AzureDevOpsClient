<?php
/**
 * GitRef
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Git
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

namespace AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Git\ObjectSerializer;

/**
 * GitRef Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitRef implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitRef';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks',
        'creator' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\IdentityRef',
        'isLocked' => 'bool',
        'isLockedBy' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\IdentityRef',
        'name' => 'string',
        'objectId' => 'string',
        'peeledObjectId' => 'string',
        'statuses' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatus[]',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'creator' => null,
        'isLocked' => null,
        'isLockedBy' => null,
        'name' => null,
        'objectId' => null,
        'peeledObjectId' => null,
        'statuses' => null,
        'url' => null
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
        'links' => '_links',
        'creator' => 'creator',
        'isLocked' => 'isLocked',
        'isLockedBy' => 'isLockedBy',
        'name' => 'name',
        'objectId' => 'objectId',
        'peeledObjectId' => 'peeledObjectId',
        'statuses' => 'statuses',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'creator' => 'setCreator',
        'isLocked' => 'setIsLocked',
        'isLockedBy' => 'setIsLockedBy',
        'name' => 'setName',
        'objectId' => 'setObjectId',
        'peeledObjectId' => 'setPeeledObjectId',
        'statuses' => 'setStatuses',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'creator' => 'getCreator',
        'isLocked' => 'getIsLocked',
        'isLockedBy' => 'getIsLockedBy',
        'name' => 'getName',
        'objectId' => 'getObjectId',
        'peeledObjectId' => 'getPeeledObjectId',
        'statuses' => 'getStatuses',
        'url' => 'getUrl'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['isLocked'] = isset($data['isLocked']) ? $data['isLocked'] : null;
        $this->container['isLockedBy'] = isset($data['isLockedBy']) ? $data['isLockedBy'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['peeledObjectId'] = isset($data['peeledObjectId']) ? $data['peeledObjectId'] : null;
        $this->container['statuses'] = isset($data['statuses']) ? $data['statuses'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets links
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\IdentityRef
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\IdentityRef $creator creator
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets isLocked
     *
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->container['isLocked'];
    }

    /**
     * Sets isLocked
     *
     * @param bool $isLocked isLocked
     *
     * @return $this
     */
    public function setIsLocked($isLocked)
    {
        $this->container['isLocked'] = $isLocked;

        return $this;
    }

    /**
     * Gets isLockedBy
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\IdentityRef
     */
    public function getIsLockedBy()
    {
        return $this->container['isLockedBy'];
    }

    /**
     * Sets isLockedBy
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\IdentityRef $isLockedBy isLockedBy
     *
     * @return $this
     */
    public function setIsLockedBy($isLockedBy)
    {
        $this->container['isLockedBy'] = $isLockedBy;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets objectId
     *
     * @return string
     */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
     * Sets objectId
     *
     * @param string $objectId objectId
     *
     * @return $this
     */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;

        return $this;
    }

    /**
     * Gets peeledObjectId
     *
     * @return string
     */
    public function getPeeledObjectId()
    {
        return $this->container['peeledObjectId'];
    }

    /**
     * Sets peeledObjectId
     *
     * @param string $peeledObjectId peeledObjectId
     *
     * @return $this
     */
    public function setPeeledObjectId($peeledObjectId)
    {
        $this->container['peeledObjectId'] = $peeledObjectId;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatus[]
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatus[] $statuses statuses
     *
     * @return $this
     */
    public function setStatuses($statuses)
    {
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


