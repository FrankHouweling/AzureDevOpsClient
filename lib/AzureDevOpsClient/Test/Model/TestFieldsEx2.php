<?php
/**
 * TestFieldsEx2
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Test
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

namespace FrankHouweling\AzureDevOpsClient\Test\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Test\ObjectSerializer;

/**
 * TestFieldsEx2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestFieldsEx2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestFieldsEx2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fieldId' => 'int',
        'fieldName' => 'string',
        'fieldType' => 'string',
        'isResultScoped' => 'bool',
        'isRunScoped' => 'bool',
        'isSystemField' => 'bool',
        'projectId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fieldId' => 'int32',
        'fieldName' => null,
        'fieldType' => 'byte',
        'isResultScoped' => null,
        'isRunScoped' => null,
        'isSystemField' => null,
        'projectId' => 'uuid'
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
        'fieldId' => 'fieldId',
        'fieldName' => 'fieldName',
        'fieldType' => 'fieldType',
        'isResultScoped' => 'isResultScoped',
        'isRunScoped' => 'isRunScoped',
        'isSystemField' => 'isSystemField',
        'projectId' => 'projectId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fieldId' => 'setFieldId',
        'fieldName' => 'setFieldName',
        'fieldType' => 'setFieldType',
        'isResultScoped' => 'setIsResultScoped',
        'isRunScoped' => 'setIsRunScoped',
        'isSystemField' => 'setIsSystemField',
        'projectId' => 'setProjectId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fieldId' => 'getFieldId',
        'fieldName' => 'getFieldName',
        'fieldType' => 'getFieldType',
        'isResultScoped' => 'getIsResultScoped',
        'isRunScoped' => 'getIsRunScoped',
        'isSystemField' => 'getIsSystemField',
        'projectId' => 'getProjectId'
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
        $this->container['fieldId'] = isset($data['fieldId']) ? $data['fieldId'] : null;
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['isResultScoped'] = isset($data['isResultScoped']) ? $data['isResultScoped'] : null;
        $this->container['isRunScoped'] = isset($data['isRunScoped']) ? $data['isRunScoped'] : null;
        $this->container['isSystemField'] = isset($data['isSystemField']) ? $data['isSystemField'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['fieldType']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['fieldType'])) {
            $invalidProperties[] = "invalid value for 'fieldType', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets fieldType
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['fieldType'];
    }

    /**
     * Sets fieldType
     *
     * @param string $fieldType fieldType
     *
     * @return $this
     */
    public function setFieldType($fieldType)
    {

        if (!is_null($fieldType) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $fieldType))) {
            throw new \InvalidArgumentException("invalid value for $fieldType when calling TestFieldsEx2., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['fieldType'] = $fieldType;

        return $this;
    }

    /**
     * Gets isResultScoped
     *
     * @return bool
     */
    public function getIsResultScoped()
    {
        return $this->container['isResultScoped'];
    }

    /**
     * Sets isResultScoped
     *
     * @param bool $isResultScoped isResultScoped
     *
     * @return $this
     */
    public function setIsResultScoped($isResultScoped)
    {
        $this->container['isResultScoped'] = $isResultScoped;

        return $this;
    }

    /**
     * Gets isRunScoped
     *
     * @return bool
     */
    public function getIsRunScoped()
    {
        return $this->container['isRunScoped'];
    }

    /**
     * Sets isRunScoped
     *
     * @param bool $isRunScoped isRunScoped
     *
     * @return $this
     */
    public function setIsRunScoped($isRunScoped)
    {
        $this->container['isRunScoped'] = $isRunScoped;

        return $this;
    }

    /**
     * Gets isSystemField
     *
     * @return bool
     */
    public function getIsSystemField()
    {
        return $this->container['isSystemField'];
    }

    /**
     * Sets isSystemField
     *
     * @param bool $isSystemField isSystemField
     *
     * @return $this
     */
    public function setIsSystemField($isSystemField)
    {
        $this->container['isSystemField'] = $isSystemField;

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


