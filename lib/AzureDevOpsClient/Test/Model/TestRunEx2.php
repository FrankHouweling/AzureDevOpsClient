<?php
/**
 * TestRunEx2
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
 * TestRunEx2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestRunEx2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestRunEx2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bitValue' => 'bool',
        'createdDate' => '\DateTime',
        'dateTimeValue' => '\DateTime',
        'fieldId' => 'int',
        'fieldName' => 'string',
        'floatValue' => 'double',
        'guidValue' => 'string',
        'intValue' => 'int',
        'projectId' => 'string',
        'stringValue' => 'string',
        'testRunId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bitValue' => null,
        'createdDate' => 'date-time',
        'dateTimeValue' => 'date-time',
        'fieldId' => 'int32',
        'fieldName' => null,
        'floatValue' => 'double',
        'guidValue' => 'uuid',
        'intValue' => 'int32',
        'projectId' => 'uuid',
        'stringValue' => null,
        'testRunId' => 'int32'
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
        'bitValue' => 'bitValue',
        'createdDate' => 'createdDate',
        'dateTimeValue' => 'dateTimeValue',
        'fieldId' => 'fieldId',
        'fieldName' => 'fieldName',
        'floatValue' => 'floatValue',
        'guidValue' => 'guidValue',
        'intValue' => 'intValue',
        'projectId' => 'projectId',
        'stringValue' => 'stringValue',
        'testRunId' => 'testRunId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bitValue' => 'setBitValue',
        'createdDate' => 'setCreatedDate',
        'dateTimeValue' => 'setDateTimeValue',
        'fieldId' => 'setFieldId',
        'fieldName' => 'setFieldName',
        'floatValue' => 'setFloatValue',
        'guidValue' => 'setGuidValue',
        'intValue' => 'setIntValue',
        'projectId' => 'setProjectId',
        'stringValue' => 'setStringValue',
        'testRunId' => 'setTestRunId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bitValue' => 'getBitValue',
        'createdDate' => 'getCreatedDate',
        'dateTimeValue' => 'getDateTimeValue',
        'fieldId' => 'getFieldId',
        'fieldName' => 'getFieldName',
        'floatValue' => 'getFloatValue',
        'guidValue' => 'getGuidValue',
        'intValue' => 'getIntValue',
        'projectId' => 'getProjectId',
        'stringValue' => 'getStringValue',
        'testRunId' => 'getTestRunId'
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
        $this->container['bitValue'] = isset($data['bitValue']) ? $data['bitValue'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['dateTimeValue'] = isset($data['dateTimeValue']) ? $data['dateTimeValue'] : null;
        $this->container['fieldId'] = isset($data['fieldId']) ? $data['fieldId'] : null;
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['floatValue'] = isset($data['floatValue']) ? $data['floatValue'] : null;
        $this->container['guidValue'] = isset($data['guidValue']) ? $data['guidValue'] : null;
        $this->container['intValue'] = isset($data['intValue']) ? $data['intValue'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['stringValue'] = isset($data['stringValue']) ? $data['stringValue'] : null;
        $this->container['testRunId'] = isset($data['testRunId']) ? $data['testRunId'] : null;
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
     * Gets bitValue
     *
     * @return bool
     */
    public function getBitValue()
    {
        return $this->container['bitValue'];
    }

    /**
     * Sets bitValue
     *
     * @param bool $bitValue bitValue
     *
     * @return $this
     */
    public function setBitValue($bitValue)
    {
        $this->container['bitValue'] = $bitValue;

        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime $createdDate createdDate
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets dateTimeValue
     *
     * @return \DateTime
     */
    public function getDateTimeValue()
    {
        return $this->container['dateTimeValue'];
    }

    /**
     * Sets dateTimeValue
     *
     * @param \DateTime $dateTimeValue dateTimeValue
     *
     * @return $this
     */
    public function setDateTimeValue($dateTimeValue)
    {
        $this->container['dateTimeValue'] = $dateTimeValue;

        return $this;
    }

    /**
     * Gets fieldId
     *
     * @return int
     */
    public function getFieldId()
    {
        return $this->container['fieldId'];
    }

    /**
     * Sets fieldId
     *
     * @param int $fieldId fieldId
     *
     * @return $this
     */
    public function setFieldId($fieldId)
    {
        $this->container['fieldId'] = $fieldId;

        return $this;
    }

    /**
     * Gets fieldName
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
     * Sets fieldName
     *
     * @param string $fieldName fieldName
     *
     * @return $this
     */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;

        return $this;
    }

    /**
     * Gets floatValue
     *
     * @return double
     */
    public function getFloatValue()
    {
        return $this->container['floatValue'];
    }

    /**
     * Sets floatValue
     *
     * @param double $floatValue floatValue
     *
     * @return $this
     */
    public function setFloatValue($floatValue)
    {
        $this->container['floatValue'] = $floatValue;

        return $this;
    }

    /**
     * Gets guidValue
     *
     * @return string
     */
    public function getGuidValue()
    {
        return $this->container['guidValue'];
    }

    /**
     * Sets guidValue
     *
     * @param string $guidValue guidValue
     *
     * @return $this
     */
    public function setGuidValue($guidValue)
    {
        $this->container['guidValue'] = $guidValue;

        return $this;
    }

    /**
     * Gets intValue
     *
     * @return int
     */
    public function getIntValue()
    {
        return $this->container['intValue'];
    }

    /**
     * Sets intValue
     *
     * @param int $intValue intValue
     *
     * @return $this
     */
    public function setIntValue($intValue)
    {
        $this->container['intValue'] = $intValue;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param string $projectId projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets stringValue
     *
     * @return string
     */
    public function getStringValue()
    {
        return $this->container['stringValue'];
    }

    /**
     * Sets stringValue
     *
     * @param string $stringValue stringValue
     *
     * @return $this
     */
    public function setStringValue($stringValue)
    {
        $this->container['stringValue'] = $stringValue;

        return $this;
    }

    /**
     * Gets testRunId
     *
     * @return int
     */
    public function getTestRunId()
    {
        return $this->container['testRunId'];
    }

    /**
     * Sets testRunId
     *
     * @param int $testRunId testRunId
     *
     * @return $this
     */
    public function setTestRunId($testRunId)
    {
        $this->container['testRunId'] = $testRunId;

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


