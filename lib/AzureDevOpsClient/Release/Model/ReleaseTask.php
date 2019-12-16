<?php
/**
 * ReleaseTask
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
 * ReleaseTask Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReleaseTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReleaseTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agentName' => 'string',
        'finishTime' => '\DateTime',
        'id' => 'int',
        'issues' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Issue[]',
        'lineCount' => 'int',
        'logUrl' => 'string',
        'name' => 'string',
        'percentComplete' => 'int',
        'rank' => 'int',
        'resultCode' => 'string',
        'startTime' => '\DateTime',
        'status' => 'string',
        'task' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\WorkflowTaskReference',
        'timelineRecordId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agentName' => null,
        'finishTime' => 'date-time',
        'id' => 'int32',
        'issues' => null,
        'lineCount' => 'int64',
        'logUrl' => null,
        'name' => null,
        'percentComplete' => 'int32',
        'rank' => 'int32',
        'resultCode' => null,
        'startTime' => 'date-time',
        'status' => null,
        'task' => null,
        'timelineRecordId' => 'uuid'
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
        'agentName' => 'agentName',
        'finishTime' => 'finishTime',
        'id' => 'id',
        'issues' => 'issues',
        'lineCount' => 'lineCount',
        'logUrl' => 'logUrl',
        'name' => 'name',
        'percentComplete' => 'percentComplete',
        'rank' => 'rank',
        'resultCode' => 'resultCode',
        'startTime' => 'startTime',
        'status' => 'status',
        'task' => 'task',
        'timelineRecordId' => 'timelineRecordId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agentName' => 'setAgentName',
        'finishTime' => 'setFinishTime',
        'id' => 'setId',
        'issues' => 'setIssues',
        'lineCount' => 'setLineCount',
        'logUrl' => 'setLogUrl',
        'name' => 'setName',
        'percentComplete' => 'setPercentComplete',
        'rank' => 'setRank',
        'resultCode' => 'setResultCode',
        'startTime' => 'setStartTime',
        'status' => 'setStatus',
        'task' => 'setTask',
        'timelineRecordId' => 'setTimelineRecordId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agentName' => 'getAgentName',
        'finishTime' => 'getFinishTime',
        'id' => 'getId',
        'issues' => 'getIssues',
        'lineCount' => 'getLineCount',
        'logUrl' => 'getLogUrl',
        'name' => 'getName',
        'percentComplete' => 'getPercentComplete',
        'rank' => 'getRank',
        'resultCode' => 'getResultCode',
        'startTime' => 'getStartTime',
        'status' => 'getStatus',
        'task' => 'getTask',
        'timelineRecordId' => 'getTimelineRecordId'
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

    const STATUS_UNKNOWN = 'unknown';
    const STATUS_PENDING = 'pending';
    const STATUS_IN_PROGRESS = 'inProgress';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILURE = 'failure';
    const STATUS_CANCELED = 'canceled';
    const STATUS_SKIPPED = 'skipped';
    const STATUS_SUCCEEDED = 'succeeded';
    const STATUS_FAILED = 'failed';
    const STATUS_PARTIALLY_SUCCEEDED = 'partiallySucceeded';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNKNOWN,
            self::STATUS_PENDING,
            self::STATUS_IN_PROGRESS,
            self::STATUS_SUCCESS,
            self::STATUS_FAILURE,
            self::STATUS_CANCELED,
            self::STATUS_SKIPPED,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
            self::STATUS_PARTIALLY_SUCCEEDED,
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
        $this->container['agentName'] = isset($data['agentName']) ? $data['agentName'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['issues'] = isset($data['issues']) ? $data['issues'] : null;
        $this->container['lineCount'] = isset($data['lineCount']) ? $data['lineCount'] : null;
        $this->container['logUrl'] = isset($data['logUrl']) ? $data['logUrl'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['percentComplete'] = isset($data['percentComplete']) ? $data['percentComplete'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['resultCode'] = isset($data['resultCode']) ? $data['resultCode'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['timelineRecordId'] = isset($data['timelineRecordId']) ? $data['timelineRecordId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets agentName
     *
     * @return string
     */
    public function getAgentName()
    {
        return $this->container['agentName'];
    }

    /**
     * Sets agentName
     *
     * @param string $agentName Agent name on which task executed.
     *
     * @return $this
     */
    public function setAgentName($agentName)
    {
        $this->container['agentName'] = $agentName;

        return $this;
    }

    /**
     * Gets finishTime
     *
     * @return \DateTime
     */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
     * Sets finishTime
     *
     * @param \DateTime $finishTime Finish time of the release task.
     *
     * @return $this
     */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID of the release task.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issues
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Issue[]
     */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
     * Sets issues
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Issue[] $issues List of issues occurred while execution of task.
     *
     * @return $this
     */
    public function setIssues($issues)
    {
        $this->container['issues'] = $issues;

        return $this;
    }

    /**
     * Gets lineCount
     *
     * @return int
     */
    public function getLineCount()
    {
        return $this->container['lineCount'];
    }

    /**
     * Sets lineCount
     *
     * @param int $lineCount Number of lines log release task has.
     *
     * @return $this
     */
    public function setLineCount($lineCount)
    {
        $this->container['lineCount'] = $lineCount;

        return $this;
    }

    /**
     * Gets logUrl
     *
     * @return string
     */
    public function getLogUrl()
    {
        return $this->container['logUrl'];
    }

    /**
     * Sets logUrl
     *
     * @param string $logUrl Log URL of the task.
     *
     * @return $this
     */
    public function setLogUrl($logUrl)
    {
        $this->container['logUrl'] = $logUrl;

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
     * @param string $name Name of the task.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets percentComplete
     *
     * @return int
     */
    public function getPercentComplete()
    {
        return $this->container['percentComplete'];
    }

    /**
     * Sets percentComplete
     *
     * @param int $percentComplete Task execution complete precent.
     *
     * @return $this
     */
    public function setPercentComplete($percentComplete)
    {
        $this->container['percentComplete'] = $percentComplete;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int $rank Rank of the release task.
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets resultCode
     *
     * @return string
     */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
     * Sets resultCode
     *
     * @param string $resultCode Result code of the task.
     *
     * @return $this
     */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param \DateTime $startTime ID of the release task.
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of release task.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets task
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\WorkflowTaskReference
     */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
     * Sets task
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\WorkflowTaskReference $task Workflow task reference.
     *
     * @return $this
     */
    public function setTask($task)
    {
        $this->container['task'] = $task;

        return $this;
    }

    /**
     * Gets timelineRecordId
     *
     * @return string
     */
    public function getTimelineRecordId()
    {
        return $this->container['timelineRecordId'];
    }

    /**
     * Sets timelineRecordId
     *
     * @param string $timelineRecordId Timeline record ID of the release task.
     *
     * @return $this
     */
    public function setTimelineRecordId($timelineRecordId)
    {
        $this->container['timelineRecordId'] = $timelineRecordId;

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


