<?php
/**
 * GitTreeEntryRef
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
 * GitTreeEntryRef Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitTreeEntryRef implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitTreeEntryRef';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gitObjectType' => 'string',
        'mode' => 'string',
        'objectId' => 'string',
        'relativePath' => 'string',
        'size' => 'int',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gitObjectType' => null,
        'mode' => null,
        'objectId' => null,
        'relativePath' => null,
        'size' => 'int64',
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
        'gitObjectType' => 'gitObjectType',
        'mode' => 'mode',
        'objectId' => 'objectId',
        'relativePath' => 'relativePath',
        'size' => 'size',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gitObjectType' => 'setGitObjectType',
        'mode' => 'setMode',
        'objectId' => 'setObjectId',
        'relativePath' => 'setRelativePath',
        'size' => 'setSize',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gitObjectType' => 'getGitObjectType',
        'mode' => 'getMode',
        'objectId' => 'getObjectId',
        'relativePath' => 'getRelativePath',
        'size' => 'getSize',
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

    const GIT_OBJECT_TYPE_BAD = 'bad';
    const GIT_OBJECT_TYPE_COMMIT = 'commit';
    const GIT_OBJECT_TYPE_TREE = 'tree';
    const GIT_OBJECT_TYPE_BLOB = 'blob';
    const GIT_OBJECT_TYPE_TAG = 'tag';
    const GIT_OBJECT_TYPE_EXT2 = 'ext2';
    const GIT_OBJECT_TYPE_OFS_DELTA = 'ofsDelta';
    const GIT_OBJECT_TYPE_REF_DELTA = 'refDelta';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGitObjectTypeAllowableValues()
    {
        return [
            self::GIT_OBJECT_TYPE_BAD,
            self::GIT_OBJECT_TYPE_COMMIT,
            self::GIT_OBJECT_TYPE_TREE,
            self::GIT_OBJECT_TYPE_BLOB,
            self::GIT_OBJECT_TYPE_TAG,
            self::GIT_OBJECT_TYPE_EXT2,
            self::GIT_OBJECT_TYPE_OFS_DELTA,
            self::GIT_OBJECT_TYPE_REF_DELTA,
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
        $this->container['gitObjectType'] = isset($data['gitObjectType']) ? $data['gitObjectType'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['relativePath'] = isset($data['relativePath']) ? $data['relativePath'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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

        $allowedValues = $this->getGitObjectTypeAllowableValues();
        if (!is_null($this->container['gitObjectType']) && !in_array($this->container['gitObjectType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gitObjectType', must be one of '%s'",
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
     * Gets gitObjectType
     *
     * @return string
     */
    public function getGitObjectType()
    {
        return $this->container['gitObjectType'];
    }

    /**
     * Sets gitObjectType
     *
     * @param string $gitObjectType Blob or tree
     *
     * @return $this
     */
    public function setGitObjectType($gitObjectType)
    {
        $allowedValues = $this->getGitObjectTypeAllowableValues();
        if (!is_null($gitObjectType) && !in_array($gitObjectType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gitObjectType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gitObjectType'] = $gitObjectType;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode Mode represented as octal string
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

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
     * @param string $objectId SHA1 hash of git object
     *
     * @return $this
     */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;

        return $this;
    }

    /**
     * Gets relativePath
     *
     * @return string
     */
    public function getRelativePath()
    {
        return $this->container['relativePath'];
    }

    /**
     * Sets relativePath
     *
     * @param string $relativePath Path relative to parent tree object
     *
     * @return $this
     */
    public function setRelativePath($relativePath)
    {
        $this->container['relativePath'] = $relativePath;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size Size of content
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
     * @param string $url url to retrieve tree or blob
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


