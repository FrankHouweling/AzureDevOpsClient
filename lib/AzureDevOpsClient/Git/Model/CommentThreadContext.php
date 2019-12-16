<?php
/**
 * CommentThreadContext
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Git
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

namespace FrankHouweling\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Git\ObjectSerializer;

/**
 * CommentThreadContext Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommentThreadContext implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommentThreadContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filePath' => 'string',
        'leftFileEnd' => '\FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition',
        'leftFileStart' => '\FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition',
        'rightFileEnd' => '\FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition',
        'rightFileStart' => '\FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filePath' => null,
        'leftFileEnd' => null,
        'leftFileStart' => null,
        'rightFileEnd' => null,
        'rightFileStart' => null
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
        'filePath' => 'filePath',
        'leftFileEnd' => 'leftFileEnd',
        'leftFileStart' => 'leftFileStart',
        'rightFileEnd' => 'rightFileEnd',
        'rightFileStart' => 'rightFileStart'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filePath' => 'setFilePath',
        'leftFileEnd' => 'setLeftFileEnd',
        'leftFileStart' => 'setLeftFileStart',
        'rightFileEnd' => 'setRightFileEnd',
        'rightFileStart' => 'setRightFileStart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filePath' => 'getFilePath',
        'leftFileEnd' => 'getLeftFileEnd',
        'leftFileStart' => 'getLeftFileStart',
        'rightFileEnd' => 'getRightFileEnd',
        'rightFileStart' => 'getRightFileStart'
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['leftFileEnd'] = isset($data['leftFileEnd']) ? $data['leftFileEnd'] : null;
        $this->container['leftFileStart'] = isset($data['leftFileStart']) ? $data['leftFileStart'] : null;
        $this->container['rightFileEnd'] = isset($data['rightFileEnd']) ? $data['rightFileEnd'] : null;
        $this->container['rightFileStart'] = isset($data['rightFileStart']) ? $data['rightFileStart'] : null;
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
     * Gets filePath
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
     * Sets filePath
     *
     * @param string $filePath File path relative to the root of the repository. It's up to the client to use any path format.
     *
     * @return $this
     */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;

        return $this;
    }

    /**
     * Gets leftFileEnd
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition
     */
    public function getLeftFileEnd()
    {
        return $this->container['leftFileEnd'];
    }

    /**
     * Sets leftFileEnd
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition $leftFileEnd Position of last character of the thread's span in left file.
     *
     * @return $this
     */
    public function setLeftFileEnd($leftFileEnd)
    {
        $this->container['leftFileEnd'] = $leftFileEnd;

        return $this;
    }

    /**
     * Gets leftFileStart
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition
     */
    public function getLeftFileStart()
    {
        return $this->container['leftFileStart'];
    }

    /**
     * Sets leftFileStart
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition $leftFileStart Position of first character of the thread's span in left file.
     *
     * @return $this
     */
    public function setLeftFileStart($leftFileStart)
    {
        $this->container['leftFileStart'] = $leftFileStart;

        return $this;
    }

    /**
     * Gets rightFileEnd
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition
     */
    public function getRightFileEnd()
    {
        return $this->container['rightFileEnd'];
    }

    /**
     * Sets rightFileEnd
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition $rightFileEnd Position of last character of the thread's span in right file.
     *
     * @return $this
     */
    public function setRightFileEnd($rightFileEnd)
    {
        $this->container['rightFileEnd'] = $rightFileEnd;

        return $this;
    }

    /**
     * Gets rightFileStart
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition
     */
    public function getRightFileStart()
    {
        return $this->container['rightFileStart'];
    }

    /**
     * Sets rightFileStart
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\CommentPosition $rightFileStart Position of first character of the thread's span in right file.
     *
     * @return $this
     */
    public function setRightFileStart($rightFileStart)
    {
        $this->container['rightFileStart'] = $rightFileStart;

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

