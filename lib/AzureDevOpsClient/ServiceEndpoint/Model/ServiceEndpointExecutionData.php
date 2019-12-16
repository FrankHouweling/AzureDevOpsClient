<?php
/**
 * ServiceEndpointExecutionData
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\ServiceEndpoint
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

namespace FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\ServiceEndpoint\ObjectSerializer;

/**
 * ServiceEndpointExecutionData Class Doc Comment
 *
 * @category Class
 * @description Represents service endpoint execution data.
 * @package  FrankHouweling\AzureDevOpsClient\ServiceEndpoint
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceEndpointExecutionData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceEndpointExecutionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'definition' => '\FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointExecutionOwner',
        'finishTime' => '\DateTime',
        'id' => 'int',
        'owner' => '\FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointExecutionOwner',
        'planType' => 'string',
        'result' => 'string',
        'startTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'definition' => null,
        'finishTime' => 'date-time',
        'id' => 'int64',
        'owner' => null,
        'planType' => null,
        'result' => null,
        'startTime' => 'date-time'
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
        'definition' => 'definition',
        'finishTime' => 'finishTime',
        'id' => 'id',
        'owner' => 'owner',
        'planType' => 'planType',
        'result' => 'result',
        'startTime' => 'startTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'definition' => 'setDefinition',
        'finishTime' => 'setFinishTime',
        'id' => 'setId',
        'owner' => 'setOwner',
        'planType' => 'setPlanType',
        'result' => 'setResult',
        'startTime' => 'setStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'definition' => 'getDefinition',
        'finishTime' => 'getFinishTime',
        'id' => 'getId',
        'owner' => 'getOwner',
        'planType' => 'getPlanType',
        'result' => 'getResult',
        'startTime' => 'getStartTime'
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

    const RESULT_SUCCEEDED = 'succeeded';
    const RESULT_SUCCEEDED_WITH_ISSUES = 'succeededWithIssues';
    const RESULT_FAILED = 'failed';
    const RESULT_CANCELED = 'canceled';
    const RESULT_SKIPPED = 'skipped';
    const RESULT_ABANDONED = 'abandoned';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_SUCCEEDED,
            self::RESULT_SUCCEEDED_WITH_ISSUES,
            self::RESULT_FAILED,
            self::RESULT_CANCELED,
            self::RESULT_SKIPPED,
            self::RESULT_ABANDONED,
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
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['planType'] = isset($data['planType']) ? $data['planType'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getResultAllowableValues();
        if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'result', must be one of '%s'",
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
     * Gets definition
     *
     * @return \FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointExecutionOwner
     */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
     * Sets definition
     *
     * @param \FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointExecutionOwner $definition Gets the definition of service endpoint execution owner.
     *
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;

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
     * @param \DateTime $finishTime Gets the finish time of service endpoint execution.
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
     * @param int $id Gets the Id of service endpoint execution data.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointExecutionOwner
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointExecutionOwner $owner Gets the owner of service endpoint execution data.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets planType
     *
     * @return string
     */
    public function getPlanType()
    {
        return $this->container['planType'];
    }

    /**
     * Sets planType
     *
     * @param string $planType Gets the plan type of service endpoint execution data.
     *
     * @return $this
     */
    public function setPlanType($planType)
    {
        $this->container['planType'] = $planType;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string $result Gets the result of service endpoint execution.
     *
     * @return $this
     */
    public function setResult($result)
    {
        $allowedValues = $this->getResultAllowableValues();
        if (!is_null($result) && !in_array($result, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'result', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['result'] = $result;

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
     * @param \DateTime $startTime Gets the start time of service endpoint execution.
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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

