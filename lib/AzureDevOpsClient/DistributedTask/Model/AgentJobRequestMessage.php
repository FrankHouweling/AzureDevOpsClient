<?php
/**
 * AgentJobRequestMessage
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
 * AgentJobRequestMessage Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgentJobRequestMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgentJobRequestMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'environment' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\JobEnvironment',
        'jobId' => 'string',
        'jobName' => 'string',
        'jobRefName' => 'string',
        'messageType' => 'string',
        'plan' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationPlanReference',
        'timeline' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TimelineReference',
        'lockedUntil' => '\DateTime',
        'lockToken' => 'string',
        'requestId' => 'int',
        'tasks' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskInstance[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'environment' => null,
        'jobId' => 'uuid',
        'jobName' => null,
        'jobRefName' => null,
        'messageType' => null,
        'plan' => null,
        'timeline' => null,
        'lockedUntil' => 'date-time',
        'lockToken' => 'uuid',
        'requestId' => 'int64',
        'tasks' => null
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
        'environment' => 'environment',
        'jobId' => 'jobId',
        'jobName' => 'jobName',
        'jobRefName' => 'jobRefName',
        'messageType' => 'messageType',
        'plan' => 'plan',
        'timeline' => 'timeline',
        'lockedUntil' => 'lockedUntil',
        'lockToken' => 'lockToken',
        'requestId' => 'requestId',
        'tasks' => 'tasks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'environment' => 'setEnvironment',
        'jobId' => 'setJobId',
        'jobName' => 'setJobName',
        'jobRefName' => 'setJobRefName',
        'messageType' => 'setMessageType',
        'plan' => 'setPlan',
        'timeline' => 'setTimeline',
        'lockedUntil' => 'setLockedUntil',
        'lockToken' => 'setLockToken',
        'requestId' => 'setRequestId',
        'tasks' => 'setTasks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'environment' => 'getEnvironment',
        'jobId' => 'getJobId',
        'jobName' => 'getJobName',
        'jobRefName' => 'getJobRefName',
        'messageType' => 'getMessageType',
        'plan' => 'getPlan',
        'timeline' => 'getTimeline',
        'lockedUntil' => 'getLockedUntil',
        'lockToken' => 'getLockToken',
        'requestId' => 'getRequestId',
        'tasks' => 'getTasks'
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
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobRefName'] = isset($data['jobRefName']) ? $data['jobRefName'] : null;
        $this->container['messageType'] = isset($data['messageType']) ? $data['messageType'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['timeline'] = isset($data['timeline']) ? $data['timeline'] : null;
        $this->container['lockedUntil'] = isset($data['lockedUntil']) ? $data['lockedUntil'] : null;
        $this->container['lockToken'] = isset($data['lockToken']) ? $data['lockToken'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
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
     * Gets environment
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\JobEnvironment
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\JobEnvironment $environment environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param string $jobId jobId
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets jobName
     *
     * @return string
     */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
     * Sets jobName
     *
     * @param string $jobName jobName
     *
     * @return $this
     */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;

        return $this;
    }

    /**
     * Gets jobRefName
     *
     * @return string
     */
    public function getJobRefName()
    {
        return $this->container['jobRefName'];
    }

    /**
     * Sets jobRefName
     *
     * @param string $jobRefName jobRefName
     *
     * @return $this
     */
    public function setJobRefName($jobRefName)
    {
        $this->container['jobRefName'] = $jobRefName;

        return $this;
    }

    /**
     * Gets messageType
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->container['messageType'];
    }

    /**
     * Sets messageType
     *
     * @param string $messageType messageType
     *
     * @return $this
     */
    public function setMessageType($messageType)
    {
        $this->container['messageType'] = $messageType;

        return $this;
    }

    /**
     * Gets plan
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationPlanReference
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationPlanReference $plan plan
     *
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets timeline
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TimelineReference
     */
    public function getTimeline()
    {
        return $this->container['timeline'];
    }

    /**
     * Sets timeline
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TimelineReference $timeline timeline
     *
     * @return $this
     */
    public function setTimeline($timeline)
    {
        $this->container['timeline'] = $timeline;

        return $this;
    }

    /**
     * Gets lockedUntil
     *
     * @return \DateTime
     */
    public function getLockedUntil()
    {
        return $this->container['lockedUntil'];
    }

    /**
     * Sets lockedUntil
     *
     * @param \DateTime $lockedUntil lockedUntil
     *
     * @return $this
     */
    public function setLockedUntil($lockedUntil)
    {
        $this->container['lockedUntil'] = $lockedUntil;

        return $this;
    }

    /**
     * Gets lockToken
     *
     * @return string
     */
    public function getLockToken()
    {
        return $this->container['lockToken'];
    }

    /**
     * Sets lockToken
     *
     * @param string $lockToken lockToken
     *
     * @return $this
     */
    public function setLockToken($lockToken)
    {
        $this->container['lockToken'] = $lockToken;

        return $this;
    }

    /**
     * Gets requestId
     *
     * @return int
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param int $requestId requestId
     *
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;

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


