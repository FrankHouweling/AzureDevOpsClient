<?php
/**
 * ProcessParameters
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Build
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

namespace AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Build\ObjectSerializer;

/**
 * ProcessParameters Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProcessParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProcessParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dataSourceBindings' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DataSourceBindingBase[]',
        'inputs' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TaskInputDefinitionBase[]',
        'sourceDefinitions' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TaskSourceDefinitionBase[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dataSourceBindings' => null,
        'inputs' => null,
        'sourceDefinitions' => null
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
        'dataSourceBindings' => 'dataSourceBindings',
        'inputs' => 'inputs',
        'sourceDefinitions' => 'sourceDefinitions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataSourceBindings' => 'setDataSourceBindings',
        'inputs' => 'setInputs',
        'sourceDefinitions' => 'setSourceDefinitions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataSourceBindings' => 'getDataSourceBindings',
        'inputs' => 'getInputs',
        'sourceDefinitions' => 'getSourceDefinitions'
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
        $this->container['dataSourceBindings'] = isset($data['dataSourceBindings']) ? $data['dataSourceBindings'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['sourceDefinitions'] = isset($data['sourceDefinitions']) ? $data['sourceDefinitions'] : null;
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
     * Gets dataSourceBindings
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DataSourceBindingBase[]
     */
    public function getDataSourceBindings()
    {
        return $this->container['dataSourceBindings'];
    }

    /**
     * Sets dataSourceBindings
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DataSourceBindingBase[] $dataSourceBindings dataSourceBindings
     *
     * @return $this
     */
    public function setDataSourceBindings($dataSourceBindings)
    {
        $this->container['dataSourceBindings'] = $dataSourceBindings;

        return $this;
    }

    /**
     * Gets inputs
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TaskInputDefinitionBase[]
     */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
     * Sets inputs
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TaskInputDefinitionBase[] $inputs inputs
     *
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;

        return $this;
    }

    /**
     * Gets sourceDefinitions
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TaskSourceDefinitionBase[]
     */
    public function getSourceDefinitions()
    {
        return $this->container['sourceDefinitions'];
    }

    /**
     * Sets sourceDefinitions
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TaskSourceDefinitionBase[] $sourceDefinitions sourceDefinitions
     *
     * @return $this
     */
    public function setSourceDefinitions($sourceDefinitions)
    {
        $this->container['sourceDefinitions'] = $sourceDefinitions;

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


