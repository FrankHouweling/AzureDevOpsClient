<?php
/**
 * WorkItemToTestLinks
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Test
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

namespace AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Test\ObjectSerializer;

/**
 * WorkItemToTestLinks Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkItemToTestLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkItemToTestLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'executedIn' => 'string',
        'tests' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestMethod[]',
        'workItem' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\WorkItemReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'executedIn' => null,
        'tests' => null,
        'workItem' => null
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
        'executedIn' => 'executedIn',
        'tests' => 'tests',
        'workItem' => 'workItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'executedIn' => 'setExecutedIn',
        'tests' => 'setTests',
        'workItem' => 'setWorkItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'executedIn' => 'getExecutedIn',
        'tests' => 'getTests',
        'workItem' => 'getWorkItem'
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

    const EXECUTED_IN_ANY = 'any';
    const EXECUTED_IN_TCM = 'tcm';
    const EXECUTED_IN_TFS = 'tfs';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExecutedInAllowableValues()
    {
        return [
            self::EXECUTED_IN_ANY,
            self::EXECUTED_IN_TCM,
            self::EXECUTED_IN_TFS,
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
        $this->container['executedIn'] = isset($data['executedIn']) ? $data['executedIn'] : null;
        $this->container['tests'] = isset($data['tests']) ? $data['tests'] : null;
        $this->container['workItem'] = isset($data['workItem']) ? $data['workItem'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getExecutedInAllowableValues();
        if (!is_null($this->container['executedIn']) && !in_array($this->container['executedIn'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'executedIn', must be one of '%s'",
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
     * Gets executedIn
     *
     * @return string
     */
    public function getExecutedIn()
    {
        return $this->container['executedIn'];
    }

    /**
     * Sets executedIn
     *
     * @param string $executedIn executedIn
     *
     * @return $this
     */
    public function setExecutedIn($executedIn)
    {
        $allowedValues = $this->getExecutedInAllowableValues();
        if (!is_null($executedIn) && !in_array($executedIn, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'executedIn', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['executedIn'] = $executedIn;

        return $this;
    }

    /**
     * Gets tests
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestMethod[]
     */
    public function getTests()
    {
        return $this->container['tests'];
    }

    /**
     * Sets tests
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestMethod[] $tests tests
     *
     * @return $this
     */
    public function setTests($tests)
    {
        $this->container['tests'] = $tests;

        return $this;
    }

    /**
     * Gets workItem
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\WorkItemReference
     */
    public function getWorkItem()
    {
        return $this->container['workItem'];
    }

    /**
     * Sets workItem
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\WorkItemReference $workItem workItem
     *
     * @return $this
     */
    public function setWorkItem($workItem)
    {
        $this->container['workItem'] = $workItem;

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


