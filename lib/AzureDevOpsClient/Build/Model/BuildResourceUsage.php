<?php
/**
 * BuildResourceUsage
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
 * BuildResourceUsage Class Doc Comment
 *
 * @category Class
 * @description Represents information about resources used by builds in the system.
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildResourceUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildResourceUsage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'distributedTaskAgents' => 'int',
        'paidPrivateAgentSlots' => 'int',
        'totalUsage' => 'int',
        'xamlControllers' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'distributedTaskAgents' => 'int32',
        'paidPrivateAgentSlots' => 'int32',
        'totalUsage' => 'int32',
        'xamlControllers' => 'int32'
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
        'distributedTaskAgents' => 'distributedTaskAgents',
        'paidPrivateAgentSlots' => 'paidPrivateAgentSlots',
        'totalUsage' => 'totalUsage',
        'xamlControllers' => 'xamlControllers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'distributedTaskAgents' => 'setDistributedTaskAgents',
        'paidPrivateAgentSlots' => 'setPaidPrivateAgentSlots',
        'totalUsage' => 'setTotalUsage',
        'xamlControllers' => 'setXamlControllers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'distributedTaskAgents' => 'getDistributedTaskAgents',
        'paidPrivateAgentSlots' => 'getPaidPrivateAgentSlots',
        'totalUsage' => 'getTotalUsage',
        'xamlControllers' => 'getXamlControllers'
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
        $this->container['distributedTaskAgents'] = isset($data['distributedTaskAgents']) ? $data['distributedTaskAgents'] : null;
        $this->container['paidPrivateAgentSlots'] = isset($data['paidPrivateAgentSlots']) ? $data['paidPrivateAgentSlots'] : null;
        $this->container['totalUsage'] = isset($data['totalUsage']) ? $data['totalUsage'] : null;
        $this->container['xamlControllers'] = isset($data['xamlControllers']) ? $data['xamlControllers'] : null;
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
     * Gets distributedTaskAgents
     *
     * @return int
     */
    public function getDistributedTaskAgents()
    {
        return $this->container['distributedTaskAgents'];
    }

    /**
     * Sets distributedTaskAgents
     *
     * @param int $distributedTaskAgents The number of build agents.
     *
     * @return $this
     */
    public function setDistributedTaskAgents($distributedTaskAgents)
    {
        $this->container['distributedTaskAgents'] = $distributedTaskAgents;

        return $this;
    }

    /**
     * Gets paidPrivateAgentSlots
     *
     * @return int
     */
    public function getPaidPrivateAgentSlots()
    {
        return $this->container['paidPrivateAgentSlots'];
    }

    /**
     * Sets paidPrivateAgentSlots
     *
     * @param int $paidPrivateAgentSlots The number of paid private agent slots.
     *
     * @return $this
     */
    public function setPaidPrivateAgentSlots($paidPrivateAgentSlots)
    {
        $this->container['paidPrivateAgentSlots'] = $paidPrivateAgentSlots;

        return $this;
    }

    /**
     * Gets totalUsage
     *
     * @return int
     */
    public function getTotalUsage()
    {
        return $this->container['totalUsage'];
    }

    /**
     * Sets totalUsage
     *
     * @param int $totalUsage The total usage.
     *
     * @return $this
     */
    public function setTotalUsage($totalUsage)
    {
        $this->container['totalUsage'] = $totalUsage;

        return $this;
    }

    /**
     * Gets xamlControllers
     *
     * @return int
     */
    public function getXamlControllers()
    {
        return $this->container['xamlControllers'];
    }

    /**
     * Sets xamlControllers
     *
     * @param int $xamlControllers The number of XAML controllers.
     *
     * @return $this
     */
    public function setXamlControllers($xamlControllers)
    {
        $this->container['xamlControllers'] = $xamlControllers;

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


