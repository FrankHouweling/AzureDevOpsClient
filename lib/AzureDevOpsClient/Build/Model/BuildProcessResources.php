<?php
/**
 * BuildProcessResources
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Build
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

namespace FrankHouweling\AzureDevOpsClient\Build\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Build\ObjectSerializer;

/**
 * BuildProcessResources Class Doc Comment
 *
 * @category Class
 * @description Represents resources used by a build process.
 * @package  FrankHouweling\AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildProcessResources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildProcessResources';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'endpoints' => '\FrankHouweling\AzureDevOpsClient\Build\Model\ServiceEndpointReference[]',
        'files' => '\FrankHouweling\AzureDevOpsClient\Build\Model\SecureFileReference[]',
        'queues' => '\FrankHouweling\AzureDevOpsClient\Build\Model\AgentPoolQueueReference[]',
        'variableGroups' => '\FrankHouweling\AzureDevOpsClient\Build\Model\VariableGroupReference[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'endpoints' => null,
        'files' => null,
        'queues' => null,
        'variableGroups' => null
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
        'endpoints' => 'endpoints',
        'files' => 'files',
        'queues' => 'queues',
        'variableGroups' => 'variableGroups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'endpoints' => 'setEndpoints',
        'files' => 'setFiles',
        'queues' => 'setQueues',
        'variableGroups' => 'setVariableGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'endpoints' => 'getEndpoints',
        'files' => 'getFiles',
        'queues' => 'getQueues',
        'variableGroups' => 'getVariableGroups'
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
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['queues'] = isset($data['queues']) ? $data['queues'] : null;
        $this->container['variableGroups'] = isset($data['variableGroups']) ? $data['variableGroups'] : null;
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
     * Gets endpoints
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\ServiceEndpointReference[]
     */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
     * Sets endpoints
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\ServiceEndpointReference[] $endpoints endpoints
     *
     * @return $this
     */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\SecureFileReference[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\SecureFileReference[] $files files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets queues
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\AgentPoolQueueReference[]
     */
    public function getQueues()
    {
        return $this->container['queues'];
    }

    /**
     * Sets queues
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\AgentPoolQueueReference[] $queues queues
     *
     * @return $this
     */
    public function setQueues($queues)
    {
        $this->container['queues'] = $queues;

        return $this;
    }

    /**
     * Gets variableGroups
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\VariableGroupReference[]
     */
    public function getVariableGroups()
    {
        return $this->container['variableGroups'];
    }

    /**
     * Sets variableGroups
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\VariableGroupReference[] $variableGroups variableGroups
     *
     * @return $this
     */
    public function setVariableGroups($variableGroups)
    {
        $this->container['variableGroups'] = $variableGroups;

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


