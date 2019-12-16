<?php
/**
 * Avatar
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Profile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Profile
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

namespace AzureDevOpsClient\Profile\AzureDevOpsClient\Profile\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Profile\ObjectSerializer;

/**
 * Avatar Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Profile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Avatar implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Avatar';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isAutoGenerated' => 'bool',
        'size' => 'string',
        'timeStamp' => '\DateTime',
        'value' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isAutoGenerated' => null,
        'size' => null,
        'timeStamp' => 'date-time',
        'value' => 'byte'
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
        'isAutoGenerated' => 'isAutoGenerated',
        'size' => 'size',
        'timeStamp' => 'timeStamp',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isAutoGenerated' => 'setIsAutoGenerated',
        'size' => 'setSize',
        'timeStamp' => 'setTimeStamp',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isAutoGenerated' => 'getIsAutoGenerated',
        'size' => 'getSize',
        'timeStamp' => 'getTimeStamp',
        'value' => 'getValue'
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

    const SIZE_SMALL = 'small';
    const SIZE_MEDIUM = 'medium';
    const SIZE_LARGE = 'large';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSizeAllowableValues()
    {
        return [
            self::SIZE_SMALL,
            self::SIZE_MEDIUM,
            self::SIZE_LARGE,
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
        $this->container['isAutoGenerated'] = isset($data['isAutoGenerated']) ? $data['isAutoGenerated'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['timeStamp'] = isset($data['timeStamp']) ? $data['timeStamp'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSizeAllowableValues();
        if (!is_null($this->container['size']) && !in_array($this->container['size'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'size', must be one of '%s'",
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
     * Gets isAutoGenerated
     *
     * @return bool
     */
    public function getIsAutoGenerated()
    {
        return $this->container['isAutoGenerated'];
    }

    /**
     * Sets isAutoGenerated
     *
     * @param bool $isAutoGenerated isAutoGenerated
     *
     * @return $this
     */
    public function setIsAutoGenerated($isAutoGenerated)
    {
        $this->container['isAutoGenerated'] = $isAutoGenerated;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $allowedValues = $this->getSizeAllowableValues();
        if (!is_null($size) && !in_array($size, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'size', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets timeStamp
     *
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->container['timeStamp'];
    }

    /**
     * Sets timeStamp
     *
     * @param \DateTime $timeStamp timeStamp
     *
     * @return $this
     */
    public function setTimeStamp($timeStamp)
    {
        $this->container['timeStamp'] = $timeStamp;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string[]
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string[] $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


