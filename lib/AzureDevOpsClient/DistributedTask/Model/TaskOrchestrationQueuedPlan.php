<?php
/**
 * TaskOrchestrationQueuedPlan
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TaskAgent
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

namespace FrankHouweling\AzureDevOpsClient\DistributedTask\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\DistributedTask\ObjectSerializer;

/**
 * TaskOrchestrationQueuedPlan Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskOrchestrationQueuedPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskOrchestrationQueuedPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assignTime' => '\DateTime',
        'definition' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner',
        'owner' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner',
        'planGroup' => 'string',
        'planId' => 'string',
        'poolId' => 'int',
        'queuePosition' => 'int',
        'queueTime' => '\DateTime',
        'scopeIdentifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assignTime' => 'date-time',
        'definition' => null,
        'owner' => null,
        'planGroup' => null,
        'planId' => 'uuid',
        'poolId' => 'int32',
        'queuePosition' => 'int32',
        'queueTime' => 'date-time',
        'scopeIdentifier' => 'uuid'
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
        'assignTime' => 'assignTime',
        'definition' => 'definition',
        'owner' => 'owner',
        'planGroup' => 'planGroup',
        'planId' => 'planId',
        'poolId' => 'poolId',
        'queuePosition' => 'queuePosition',
        'queueTime' => 'queueTime',
        'scopeIdentifier' => 'scopeIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignTime' => 'setAssignTime',
        'definition' => 'setDefinition',
        'owner' => 'setOwner',
        'planGroup' => 'setPlanGroup',
        'planId' => 'setPlanId',
        'poolId' => 'setPoolId',
        'queuePosition' => 'setQueuePosition',
        'queueTime' => 'setQueueTime',
        'scopeIdentifier' => 'setScopeIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignTime' => 'getAssignTime',
        'definition' => 'getDefinition',
        'owner' => 'getOwner',
        'planGroup' => 'getPlanGroup',
        'planId' => 'getPlanId',
        'poolId' => 'getPoolId',
        'queuePosition' => 'getQueuePosition',
        'queueTime' => 'getQueueTime',
        'scopeIdentifier' => 'getScopeIdentifier'
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
        $this->container['assignTime'] = isset($data['assignTime']) ? $data['assignTime'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['planGroup'] = isset($data['planGroup']) ? $data['planGroup'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['queuePosition'] = isset($data['queuePosition']) ? $data['queuePosition'] : null;
        $this->container['queueTime'] = isset($data['queueTime']) ? $data['queueTime'] : null;
        $this->container['scopeIdentifier'] = isset($data['scopeIdentifier']) ? $data['scopeIdentifier'] : null;
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
     * Gets assignTime
     *
     * @return \DateTime
     */
    public function getAssignTime()
    {
        return $this->container['assignTime'];
    }

    /**
     * Sets assignTime
     *
     * @param \DateTime $assignTime assignTime
     *
     * @return $this
     */
    public function setAssignTime($assignTime)
    {
        $this->container['assignTime'] = $assignTime;

        return $this;
    }

    /**
     * Gets definition
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner
     */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
     * Sets definition
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner $definition definition
     *
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets planGroup
     *
     * @return string
     */
    public function getPlanGroup()
    {
        return $this->container['planGroup'];
    }

    /**
     * Sets planGroup
     *
     * @param string $planGroup planGroup
     *
     * @return $this
     */
    public function setPlanGroup($planGroup)
    {
        $this->container['planGroup'] = $planGroup;

        return $this;
    }

    /**
     * Gets planId
     *
     * @return string
     */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
     * Sets planId
     *
     * @param string $planId planId
     *
     * @return $this
     */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;

        return $this;
    }

    /**
     * Gets poolId
     *
     * @return int
     */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
     * Sets poolId
     *
     * @param int $poolId poolId
     *
     * @return $this
     */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;

        return $this;
    }

    /**
     * Gets queuePosition
     *
     * @return int
     */
    public function getQueuePosition()
    {
        return $this->container['queuePosition'];
    }

    /**
     * Sets queuePosition
     *
     * @param int $queuePosition queuePosition
     *
     * @return $this
     */
    public function setQueuePosition($queuePosition)
    {
        $this->container['queuePosition'] = $queuePosition;

        return $this;
    }

    /**
     * Gets queueTime
     *
     * @return \DateTime
     */
    public function getQueueTime()
    {
        return $this->container['queueTime'];
    }

    /**
     * Sets queueTime
     *
     * @param \DateTime $queueTime queueTime
     *
     * @return $this
     */
    public function setQueueTime($queueTime)
    {
        $this->container['queueTime'] = $queueTime;

        return $this;
    }

    /**
     * Gets scopeIdentifier
     *
     * @return string
     */
    public function getScopeIdentifier()
    {
        return $this->container['scopeIdentifier'];
    }

    /**
     * Sets scopeIdentifier
     *
     * @param string $scopeIdentifier scopeIdentifier
     *
     * @return $this
     */
    public function setScopeIdentifier($scopeIdentifier)
    {
        $this->container['scopeIdentifier'] = $scopeIdentifier;

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


