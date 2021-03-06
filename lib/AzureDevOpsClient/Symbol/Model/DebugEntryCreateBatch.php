<?php
/**
 * DebugEntryCreateBatch
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Symbol
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Symbol
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

namespace FrankHouweling\AzureDevOpsClient\Symbol\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Symbol\ObjectSerializer;

/**
 * DebugEntryCreateBatch Class Doc Comment
 *
 * @category Class
 * @description A batch of debug entry to create.
 * @package  FrankHouweling\AzureDevOpsClient\Symbol
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DebugEntryCreateBatch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DebugEntryCreateBatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'createBehavior' => 'string',
        'debugEntries' => '\FrankHouweling\AzureDevOpsClient\Symbol\Model\DebugEntry[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'createBehavior' => null,
        'debugEntries' => null
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
        'createBehavior' => 'createBehavior',
        'debugEntries' => 'debugEntries'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createBehavior' => 'setCreateBehavior',
        'debugEntries' => 'setDebugEntries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createBehavior' => 'getCreateBehavior',
        'debugEntries' => 'getDebugEntries'
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

    const CREATE_BEHAVIOR_THROW_IF_EXISTS = 'throwIfExists';
    const CREATE_BEHAVIOR_SKIP_IF_EXISTS = 'skipIfExists';
    const CREATE_BEHAVIOR_OVERWRITE_IF_EXISTS = 'overwriteIfExists';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCreateBehaviorAllowableValues()
    {
        return [
            self::CREATE_BEHAVIOR_THROW_IF_EXISTS,
            self::CREATE_BEHAVIOR_SKIP_IF_EXISTS,
            self::CREATE_BEHAVIOR_OVERWRITE_IF_EXISTS,
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
        $this->container['createBehavior'] = isset($data['createBehavior']) ? $data['createBehavior'] : null;
        $this->container['debugEntries'] = isset($data['debugEntries']) ? $data['debugEntries'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCreateBehaviorAllowableValues();
        if (!is_null($this->container['createBehavior']) && !in_array($this->container['createBehavior'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'createBehavior', must be one of '%s'",
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
     * Gets createBehavior
     *
     * @return string
     */
    public function getCreateBehavior()
    {
        return $this->container['createBehavior'];
    }

    /**
     * Sets createBehavior
     *
     * @param string $createBehavior Defines what to do when a debug entry in the batch already exists.
     *
     * @return $this
     */
    public function setCreateBehavior($createBehavior)
    {
        $allowedValues = $this->getCreateBehaviorAllowableValues();
        if (!is_null($createBehavior) && !in_array($createBehavior, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'createBehavior', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['createBehavior'] = $createBehavior;

        return $this;
    }

    /**
     * Gets debugEntries
     *
     * @return \FrankHouweling\AzureDevOpsClient\Symbol\Model\DebugEntry[]
     */
    public function getDebugEntries()
    {
        return $this->container['debugEntries'];
    }

    /**
     * Sets debugEntries
     *
     * @param \FrankHouweling\AzureDevOpsClient\Symbol\Model\DebugEntry[] $debugEntries The debug entries.
     *
     * @return $this
     */
    public function setDebugEntries($debugEntries)
    {
        $this->container['debugEntries'] = $debugEntries;

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


