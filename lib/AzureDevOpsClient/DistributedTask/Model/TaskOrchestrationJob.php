<?php
/**
 * TaskOrchestrationJob
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
 * TaskOrchestrationJob Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskOrchestrationJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskOrchestrationJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'itemType' => 'string',
        'demands' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\Demand[]',
        'executeAs' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef',
        'executionMode' => 'string',
        'executionTimeout' => 'string',
        'instanceId' => 'string',
        'name' => 'string',
        'refName' => 'string',
        'tasks' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskInstance[]',
        'variables' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'itemType' => null,
        'demands' => null,
        'executeAs' => null,
        'executionMode' => null,
        'executionTimeout' => 'TimeSpan',
        'instanceId' => 'uuid',
        'name' => null,
        'refName' => null,
        'tasks' => null,
        'variables' => null
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
        'itemType' => 'itemType',
        'demands' => 'demands',
        'executeAs' => 'executeAs',
        'executionMode' => 'executionMode',
        'executionTimeout' => 'executionTimeout',
        'instanceId' => 'instanceId',
        'name' => 'name',
        'refName' => 'refName',
        'tasks' => 'tasks',
        'variables' => 'variables'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemType' => 'setItemType',
        'demands' => 'setDemands',
        'executeAs' => 'setExecuteAs',
        'executionMode' => 'setExecutionMode',
        'executionTimeout' => 'setExecutionTimeout',
        'instanceId' => 'setInstanceId',
        'name' => 'setName',
        'refName' => 'setRefName',
        'tasks' => 'setTasks',
        'variables' => 'setVariables'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemType' => 'getItemType',
        'demands' => 'getDemands',
        'executeAs' => 'getExecuteAs',
        'executionMode' => 'getExecutionMode',
        'executionTimeout' => 'getExecutionTimeout',
        'instanceId' => 'getInstanceId',
        'name' => 'getName',
        'refName' => 'getRefName',
        'tasks' => 'getTasks',
        'variables' => 'getVariables'
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

    const ITEM_TYPE_CONTAINER = 'container';
    const ITEM_TYPE_JOB = 'job';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemTypeAllowableValues()
    {
        return [
            self::ITEM_TYPE_CONTAINER,
            self::ITEM_TYPE_JOB,
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
        $this->container['itemType'] = isset($data['itemType']) ? $data['itemType'] : null;
        $this->container['demands'] = isset($data['demands']) ? $data['demands'] : null;
        $this->container['executeAs'] = isset($data['executeAs']) ? $data['executeAs'] : null;
        $this->container['executionMode'] = isset($data['executionMode']) ? $data['executionMode'] : null;
        $this->container['executionTimeout'] = isset($data['executionTimeout']) ? $data['executionTimeout'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['refName'] = isset($data['refName']) ? $data['refName'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getItemTypeAllowableValues();
        if (!is_null($this->container['itemType']) && !in_array($this->container['itemType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'itemType', must be one of '%s'",
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
     * Gets itemType
     *
     * @return string
     */
    public function getItemType()
    {
        return $this->container['itemType'];
    }

    /**
     * Sets itemType
     *
     * @param string $itemType itemType
     *
     * @return $this
     */
    public function setItemType($itemType)
    {
        $allowedValues = $this->getItemTypeAllowableValues();
        if (!is_null($itemType) && !in_array($itemType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'itemType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['itemType'] = $itemType;

        return $this;
    }

    /**
     * Gets demands
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\Demand[]
     */
    public function getDemands()
    {
        return $this->container['demands'];
    }

    /**
     * Sets demands
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\Demand[] $demands demands
     *
     * @return $this
     */
    public function setDemands($demands)
    {
        $this->container['demands'] = $demands;

        return $this;
    }

    /**
     * Gets executeAs
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef
     */
    public function getExecuteAs()
    {
        return $this->container['executeAs'];
    }

    /**
     * Sets executeAs
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef $executeAs executeAs
     *
     * @return $this
     */
    public function setExecuteAs($executeAs)
    {
        $this->container['executeAs'] = $executeAs;

        return $this;
    }

    /**
     * Gets executionMode
     *
     * @return string
     */
    public function getExecutionMode()
    {
        return $this->container['executionMode'];
    }

    /**
     * Sets executionMode
     *
     * @param string $executionMode executionMode
     *
     * @return $this
     */
    public function setExecutionMode($executionMode)
    {
        $this->container['executionMode'] = $executionMode;

        return $this;
    }

    /**
     * Gets executionTimeout
     *
     * @return string
     */
    public function getExecutionTimeout()
    {
        return $this->container['executionTimeout'];
    }

    /**
     * Sets executionTimeout
     *
     * @param string $executionTimeout executionTimeout
     *
     * @return $this
     */
    public function setExecutionTimeout($executionTimeout)
    {
        $this->container['executionTimeout'] = $executionTimeout;

        return $this;
    }

    /**
     * Gets instanceId
     *
     * @return string
     */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
     * Sets instanceId
     *
     * @param string $instanceId instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets refName
     *
     * @return string
     */
    public function getRefName()
    {
        return $this->container['refName'];
    }

    /**
     * Sets refName
     *
     * @param string $refName refName
     *
     * @return $this
     */
    public function setRefName($refName)
    {
        $this->container['refName'] = $refName;

        return $this;
    }

    /**
     * Gets tasks
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskInstance[]
     */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
     * Sets tasks
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskInstance[] $tasks tasks
     *
     * @return $this
     */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;

        return $this;
    }

    /**
     * Gets variables
     *
     * @return map[string,string]
     */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
     * Sets variables
     *
     * @param map[string,string] $variables variables
     *
     * @return $this
     */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;

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

