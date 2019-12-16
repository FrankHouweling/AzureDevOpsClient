<?php
/**
 * InputValues
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Release
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

namespace AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Release\ObjectSerializer;

/**
 * InputValues Class Doc Comment
 *
 * @category Class
 * @description Information about the possible/allowed values for a given subscription input
 * @package  AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InputValues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InputValues';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'defaultValue' => 'string',
        'error' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\InputValuesError',
        'inputId' => 'string',
        'isDisabled' => 'bool',
        'isLimitedToPossibleValues' => 'bool',
        'isReadOnly' => 'bool',
        'possibleValues' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\InputValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'defaultValue' => null,
        'error' => null,
        'inputId' => null,
        'isDisabled' => null,
        'isLimitedToPossibleValues' => null,
        'isReadOnly' => null,
        'possibleValues' => null
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
        'defaultValue' => 'defaultValue',
        'error' => 'error',
        'inputId' => 'inputId',
        'isDisabled' => 'isDisabled',
        'isLimitedToPossibleValues' => 'isLimitedToPossibleValues',
        'isReadOnly' => 'isReadOnly',
        'possibleValues' => 'possibleValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultValue' => 'setDefaultValue',
        'error' => 'setError',
        'inputId' => 'setInputId',
        'isDisabled' => 'setIsDisabled',
        'isLimitedToPossibleValues' => 'setIsLimitedToPossibleValues',
        'isReadOnly' => 'setIsReadOnly',
        'possibleValues' => 'setPossibleValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultValue' => 'getDefaultValue',
        'error' => 'getError',
        'inputId' => 'getInputId',
        'isDisabled' => 'getIsDisabled',
        'isLimitedToPossibleValues' => 'getIsLimitedToPossibleValues',
        'isReadOnly' => 'getIsReadOnly',
        'possibleValues' => 'getPossibleValues'
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
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['inputId'] = isset($data['inputId']) ? $data['inputId'] : null;
        $this->container['isDisabled'] = isset($data['isDisabled']) ? $data['isDisabled'] : null;
        $this->container['isLimitedToPossibleValues'] = isset($data['isLimitedToPossibleValues']) ? $data['isLimitedToPossibleValues'] : null;
        $this->container['isReadOnly'] = isset($data['isReadOnly']) ? $data['isReadOnly'] : null;
        $this->container['possibleValues'] = isset($data['possibleValues']) ? $data['possibleValues'] : null;
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
     * Gets defaultValue
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
     * Sets defaultValue
     *
     * @param string $defaultValue The default value to use for this input
     *
     * @return $this
     */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\InputValuesError
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\InputValuesError $error Errors encountered while computing dynamic values.
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets inputId
     *
     * @return string
     */
    public function getInputId()
    {
        return $this->container['inputId'];
    }

    /**
     * Sets inputId
     *
     * @param string $inputId The id of the input
     *
     * @return $this
     */
    public function setInputId($inputId)
    {
        $this->container['inputId'] = $inputId;

        return $this;
    }

    /**
     * Gets isDisabled
     *
     * @return bool
     */
    public function getIsDisabled()
    {
        return $this->container['isDisabled'];
    }

    /**
     * Sets isDisabled
     *
     * @param bool $isDisabled Should this input be disabled
     *
     * @return $this
     */
    public function setIsDisabled($isDisabled)
    {
        $this->container['isDisabled'] = $isDisabled;

        return $this;
    }

    /**
     * Gets isLimitedToPossibleValues
     *
     * @return bool
     */
    public function getIsLimitedToPossibleValues()
    {
        return $this->container['isLimitedToPossibleValues'];
    }

    /**
     * Sets isLimitedToPossibleValues
     *
     * @param bool $isLimitedToPossibleValues Should the value be restricted to one of the values in the PossibleValues (True) or are the values in PossibleValues just a suggestion (False)
     *
     * @return $this
     */
    public function setIsLimitedToPossibleValues($isLimitedToPossibleValues)
    {
        $this->container['isLimitedToPossibleValues'] = $isLimitedToPossibleValues;

        return $this;
    }

    /**
     * Gets isReadOnly
     *
     * @return bool
     */
    public function getIsReadOnly()
    {
        return $this->container['isReadOnly'];
    }

    /**
     * Sets isReadOnly
     *
     * @param bool $isReadOnly Should this input be made read-only
     *
     * @return $this
     */
    public function setIsReadOnly($isReadOnly)
    {
        $this->container['isReadOnly'] = $isReadOnly;

        return $this;
    }

    /**
     * Gets possibleValues
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\InputValue[]
     */
    public function getPossibleValues()
    {
        return $this->container['possibleValues'];
    }

    /**
     * Sets possibleValues
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\InputValue[] $possibleValues Possible values that this input can take
     *
     * @return $this
     */
    public function setPossibleValues($possibleValues)
    {
        $this->container['possibleValues'] = $possibleValues;

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


