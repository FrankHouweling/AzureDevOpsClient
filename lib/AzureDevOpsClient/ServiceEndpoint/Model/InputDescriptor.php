<?php
/**
 * InputDescriptor
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\ServiceEndpoint
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ServiceEndpoint
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

namespace AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model;

use \ArrayAccess;
use \AzureDevOpsClient\ServiceEndpoint\ObjectSerializer;

/**
 * InputDescriptor Class Doc Comment
 *
 * @category Class
 * @description Describes an input for subscriptions.
 * @package  AzureDevOpsClient\ServiceEndpoint
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InputDescriptor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InputDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dependencyInputIds' => 'string[]',
        'description' => 'string',
        'groupName' => 'string',
        'hasDynamicValueInformation' => 'bool',
        'id' => 'string',
        'inputMode' => 'string',
        'isConfidential' => 'bool',
        'name' => 'string',
        'properties' => 'map[string,object]',
        'type' => 'string',
        'useInDefaultDescription' => 'bool',
        'validation' => '\AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\InputValidation',
        'valueHint' => 'string',
        'values' => '\AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\InputValues'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dependencyInputIds' => null,
        'description' => null,
        'groupName' => null,
        'hasDynamicValueInformation' => null,
        'id' => null,
        'inputMode' => null,
        'isConfidential' => null,
        'name' => null,
        'properties' => null,
        'type' => null,
        'useInDefaultDescription' => null,
        'validation' => null,
        'valueHint' => null,
        'values' => null
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
        'dependencyInputIds' => 'dependencyInputIds',
        'description' => 'description',
        'groupName' => 'groupName',
        'hasDynamicValueInformation' => 'hasDynamicValueInformation',
        'id' => 'id',
        'inputMode' => 'inputMode',
        'isConfidential' => 'isConfidential',
        'name' => 'name',
        'properties' => 'properties',
        'type' => 'type',
        'useInDefaultDescription' => 'useInDefaultDescription',
        'validation' => 'validation',
        'valueHint' => 'valueHint',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dependencyInputIds' => 'setDependencyInputIds',
        'description' => 'setDescription',
        'groupName' => 'setGroupName',
        'hasDynamicValueInformation' => 'setHasDynamicValueInformation',
        'id' => 'setId',
        'inputMode' => 'setInputMode',
        'isConfidential' => 'setIsConfidential',
        'name' => 'setName',
        'properties' => 'setProperties',
        'type' => 'setType',
        'useInDefaultDescription' => 'setUseInDefaultDescription',
        'validation' => 'setValidation',
        'valueHint' => 'setValueHint',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dependencyInputIds' => 'getDependencyInputIds',
        'description' => 'getDescription',
        'groupName' => 'getGroupName',
        'hasDynamicValueInformation' => 'getHasDynamicValueInformation',
        'id' => 'getId',
        'inputMode' => 'getInputMode',
        'isConfidential' => 'getIsConfidential',
        'name' => 'getName',
        'properties' => 'getProperties',
        'type' => 'getType',
        'useInDefaultDescription' => 'getUseInDefaultDescription',
        'validation' => 'getValidation',
        'valueHint' => 'getValueHint',
        'values' => 'getValues'
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

    const INPUT_MODE_NONE = 'none';
    const INPUT_MODE_TEXT_BOX = 'textBox';
    const INPUT_MODE_PASSWORD_BOX = 'passwordBox';
    const INPUT_MODE_COMBO = 'combo';
    const INPUT_MODE_RADIO_BUTTONS = 'radioButtons';
    const INPUT_MODE_CHECK_BOX = 'checkBox';
    const INPUT_MODE_TEXT_AREA = 'textArea';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInputModeAllowableValues()
    {
        return [
            self::INPUT_MODE_NONE,
            self::INPUT_MODE_TEXT_BOX,
            self::INPUT_MODE_PASSWORD_BOX,
            self::INPUT_MODE_COMBO,
            self::INPUT_MODE_RADIO_BUTTONS,
            self::INPUT_MODE_CHECK_BOX,
            self::INPUT_MODE_TEXT_AREA,
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
        $this->container['dependencyInputIds'] = isset($data['dependencyInputIds']) ? $data['dependencyInputIds'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['hasDynamicValueInformation'] = isset($data['hasDynamicValueInformation']) ? $data['hasDynamicValueInformation'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inputMode'] = isset($data['inputMode']) ? $data['inputMode'] : null;
        $this->container['isConfidential'] = isset($data['isConfidential']) ? $data['isConfidential'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['useInDefaultDescription'] = isset($data['useInDefaultDescription']) ? $data['useInDefaultDescription'] : null;
        $this->container['validation'] = isset($data['validation']) ? $data['validation'] : null;
        $this->container['valueHint'] = isset($data['valueHint']) ? $data['valueHint'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInputModeAllowableValues();
        if (!is_null($this->container['inputMode']) && !in_array($this->container['inputMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'inputMode', must be one of '%s'",
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
     * Gets dependencyInputIds
     *
     * @return string[]
     */
    public function getDependencyInputIds()
    {
        return $this->container['dependencyInputIds'];
    }

    /**
     * Sets dependencyInputIds
     *
     * @param string[] $dependencyInputIds The ids of all inputs that the value of this input is dependent on.
     *
     * @return $this
     */
    public function setDependencyInputIds($dependencyInputIds)
    {
        $this->container['dependencyInputIds'] = $dependencyInputIds;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of what this input is used for
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
     * Sets groupName
     *
     * @param string $groupName The group localized name to which this input belongs and can be shown as a header for the container that will include all the inputs in the group.
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;

        return $this;
    }

    /**
     * Gets hasDynamicValueInformation
     *
     * @return bool
     */
    public function getHasDynamicValueInformation()
    {
        return $this->container['hasDynamicValueInformation'];
    }

    /**
     * Sets hasDynamicValueInformation
     *
     * @param bool $hasDynamicValueInformation If true, the value information for this input is dynamic and should be fetched when the value of dependency inputs change.
     *
     * @return $this
     */
    public function setHasDynamicValueInformation($hasDynamicValueInformation)
    {
        $this->container['hasDynamicValueInformation'] = $hasDynamicValueInformation;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Identifier for the subscription input
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets inputMode
     *
     * @return string
     */
    public function getInputMode()
    {
        return $this->container['inputMode'];
    }

    /**
     * Sets inputMode
     *
     * @param string $inputMode Mode in which the value of this input should be entered
     *
     * @return $this
     */
    public function setInputMode($inputMode)
    {
        $allowedValues = $this->getInputModeAllowableValues();
        if (!is_null($inputMode) && !in_array($inputMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'inputMode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inputMode'] = $inputMode;

        return $this;
    }

    /**
     * Gets isConfidential
     *
     * @return bool
     */
    public function getIsConfidential()
    {
        return $this->container['isConfidential'];
    }

    /**
     * Sets isConfidential
     *
     * @param bool $isConfidential Gets whether this input is confidential, such as for a password or application key
     *
     * @return $this
     */
    public function setIsConfidential($isConfidential)
    {
        $this->container['isConfidential'] = $isConfidential;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Localized name which can be shown as a label for the subscription input
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return map[string,object]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param map[string,object] $properties Custom properties for the input which can be used by the service provider
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Underlying data type for the input value. When this value is specified, InputMode, Validation and Values are optional.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets useInDefaultDescription
     *
     * @return bool
     */
    public function getUseInDefaultDescription()
    {
        return $this->container['useInDefaultDescription'];
    }

    /**
     * Sets useInDefaultDescription
     *
     * @param bool $useInDefaultDescription Gets whether this input is included in the default generated action description.
     *
     * @return $this
     */
    public function setUseInDefaultDescription($useInDefaultDescription)
    {
        $this->container['useInDefaultDescription'] = $useInDefaultDescription;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\InputValidation
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\InputValidation $validation Information to use to validate this input's value
     *
     * @return $this
     */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;

        return $this;
    }

    /**
     * Gets valueHint
     *
     * @return string
     */
    public function getValueHint()
    {
        return $this->container['valueHint'];
    }

    /**
     * Sets valueHint
     *
     * @param string $valueHint A hint for input value. It can be used in the UI as the input placeholder.
     *
     * @return $this
     */
    public function setValueHint($valueHint)
    {
        $this->container['valueHint'] = $valueHint;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\InputValues
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\InputValues $values Information about possible values for this input
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


