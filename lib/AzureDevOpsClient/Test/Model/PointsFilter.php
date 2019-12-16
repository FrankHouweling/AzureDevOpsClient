<?php
/**
 * PointsFilter
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
 * PointsFilter Class Doc Comment
 *
 * @category Class
 * @description Filter class for test point.
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PointsFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PointsFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'configurationNames' => 'string[]',
        'testcaseIds' => 'int[]',
        'testers' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'configurationNames' => null,
        'testcaseIds' => 'int32',
        'testers' => null
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
        'configurationNames' => 'configurationNames',
        'testcaseIds' => 'testcaseIds',
        'testers' => 'testers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'configurationNames' => 'setConfigurationNames',
        'testcaseIds' => 'setTestcaseIds',
        'testers' => 'setTesters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'configurationNames' => 'getConfigurationNames',
        'testcaseIds' => 'getTestcaseIds',
        'testers' => 'getTesters'
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
        $this->container['configurationNames'] = isset($data['configurationNames']) ? $data['configurationNames'] : null;
        $this->container['testcaseIds'] = isset($data['testcaseIds']) ? $data['testcaseIds'] : null;
        $this->container['testers'] = isset($data['testers']) ? $data['testers'] : null;
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
     * Gets configurationNames
     *
     * @return string[]
     */
    public function getConfigurationNames()
    {
        return $this->container['configurationNames'];
    }

    /**
     * Sets configurationNames
     *
     * @param string[] $configurationNames List of Configurations for filtering.
     *
     * @return $this
     */
    public function setConfigurationNames($configurationNames)
    {
        $this->container['configurationNames'] = $configurationNames;

        return $this;
    }

    /**
     * Gets testcaseIds
     *
     * @return int[]
     */
    public function getTestcaseIds()
    {
        return $this->container['testcaseIds'];
    }

    /**
     * Sets testcaseIds
     *
     * @param int[] $testcaseIds List of test case id for filtering.
     *
     * @return $this
     */
    public function setTestcaseIds($testcaseIds)
    {
        $this->container['testcaseIds'] = $testcaseIds;

        return $this;
    }

    /**
     * Gets testers
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef[]
     */
    public function getTesters()
    {
        return $this->container['testers'];
    }

    /**
     * Sets testers
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef[] $testers List of tester for filtering.
     *
     * @return $this
     */
    public function setTesters($testers)
    {
        $this->container['testers'] = $testers;

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


