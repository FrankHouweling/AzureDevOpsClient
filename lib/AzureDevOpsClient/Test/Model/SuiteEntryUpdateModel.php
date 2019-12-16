<?php
/**
 * SuiteEntryUpdateModel
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
 * SuiteEntryUpdateModel Class Doc Comment
 *
 * @category Class
 * @description A model to define sequence of test suite entries in a test suite.
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SuiteEntryUpdateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SuiteEntryUpdateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'childSuiteId' => 'int',
        'sequenceNumber' => 'int',
        'testCaseId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'childSuiteId' => 'int32',
        'sequenceNumber' => 'int32',
        'testCaseId' => 'int32'
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
        'childSuiteId' => 'childSuiteId',
        'sequenceNumber' => 'sequenceNumber',
        'testCaseId' => 'testCaseId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'childSuiteId' => 'setChildSuiteId',
        'sequenceNumber' => 'setSequenceNumber',
        'testCaseId' => 'setTestCaseId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'childSuiteId' => 'getChildSuiteId',
        'sequenceNumber' => 'getSequenceNumber',
        'testCaseId' => 'getTestCaseId'
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
        $this->container['childSuiteId'] = isset($data['childSuiteId']) ? $data['childSuiteId'] : null;
        $this->container['sequenceNumber'] = isset($data['sequenceNumber']) ? $data['sequenceNumber'] : null;
        $this->container['testCaseId'] = isset($data['testCaseId']) ? $data['testCaseId'] : null;
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
     * Gets childSuiteId
     *
     * @return int
     */
    public function getChildSuiteId()
    {
        return $this->container['childSuiteId'];
    }

    /**
     * Sets childSuiteId
     *
     * @param int $childSuiteId Id of the child suite in the test suite.
     *
     * @return $this
     */
    public function setChildSuiteId($childSuiteId)
    {
        $this->container['childSuiteId'] = $childSuiteId;

        return $this;
    }

    /**
     * Gets sequenceNumber
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequenceNumber'];
    }

    /**
     * Sets sequenceNumber
     *
     * @param int $sequenceNumber Updated sequence number for the test case or child test suite in the test suite.
     *
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->container['sequenceNumber'] = $sequenceNumber;

        return $this;
    }

    /**
     * Gets testCaseId
     *
     * @return int
     */
    public function getTestCaseId()
    {
        return $this->container['testCaseId'];
    }

    /**
     * Sets testCaseId
     *
     * @param int $testCaseId Id of the test case in the test suite.
     *
     * @return $this
     */
    public function setTestCaseId($testCaseId)
    {
        $this->container['testCaseId'] = $testCaseId;

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


