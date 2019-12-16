<?php
/**
 * AggregatedResultsByOutcome
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Test
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

namespace AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Test\ObjectSerializer;

/**
 * AggregatedResultsByOutcome Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AggregatedResultsByOutcome implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AggregatedResultsByOutcome';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count' => 'int',
        'duration' => 'string',
        'groupByField' => 'string',
        'groupByValue' => 'object',
        'outcome' => 'string',
        'rerunResultCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'count' => 'int32',
        'duration' => 'TimeSpan',
        'groupByField' => null,
        'groupByValue' => null,
        'outcome' => null,
        'rerunResultCount' => 'int32'
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
        'count' => 'count',
        'duration' => 'duration',
        'groupByField' => 'groupByField',
        'groupByValue' => 'groupByValue',
        'outcome' => 'outcome',
        'rerunResultCount' => 'rerunResultCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'duration' => 'setDuration',
        'groupByField' => 'setGroupByField',
        'groupByValue' => 'setGroupByValue',
        'outcome' => 'setOutcome',
        'rerunResultCount' => 'setRerunResultCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'duration' => 'getDuration',
        'groupByField' => 'getGroupByField',
        'groupByValue' => 'getGroupByValue',
        'outcome' => 'getOutcome',
        'rerunResultCount' => 'getRerunResultCount'
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

    const OUTCOME_UNSPECIFIED = 'unspecified';
    const OUTCOME_NONE = 'none';
    const OUTCOME_PASSED = 'passed';
    const OUTCOME_FAILED = 'failed';
    const OUTCOME_INCONCLUSIVE = 'inconclusive';
    const OUTCOME_TIMEOUT = 'timeout';
    const OUTCOME_ABORTED = 'aborted';
    const OUTCOME_BLOCKED = 'blocked';
    const OUTCOME_NOT_EXECUTED = 'notExecuted';
    const OUTCOME_WARNING = 'warning';
    const OUTCOME_ERROR = 'error';
    const OUTCOME_NOT_APPLICABLE = 'notApplicable';
    const OUTCOME_PAUSED = 'paused';
    const OUTCOME_IN_PROGRESS = 'inProgress';
    const OUTCOME_NOT_IMPACTED = 'notImpacted';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOutcomeAllowableValues()
    {
        return [
            self::OUTCOME_UNSPECIFIED,
            self::OUTCOME_NONE,
            self::OUTCOME_PASSED,
            self::OUTCOME_FAILED,
            self::OUTCOME_INCONCLUSIVE,
            self::OUTCOME_TIMEOUT,
            self::OUTCOME_ABORTED,
            self::OUTCOME_BLOCKED,
            self::OUTCOME_NOT_EXECUTED,
            self::OUTCOME_WARNING,
            self::OUTCOME_ERROR,
            self::OUTCOME_NOT_APPLICABLE,
            self::OUTCOME_PAUSED,
            self::OUTCOME_IN_PROGRESS,
            self::OUTCOME_NOT_IMPACTED,
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['groupByField'] = isset($data['groupByField']) ? $data['groupByField'] : null;
        $this->container['groupByValue'] = isset($data['groupByValue']) ? $data['groupByValue'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['rerunResultCount'] = isset($data['rerunResultCount']) ? $data['rerunResultCount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOutcomeAllowableValues();
        if (!is_null($this->container['outcome']) && !in_array($this->container['outcome'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'outcome', must be one of '%s'",
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
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets groupByField
     *
     * @return string
     */
    public function getGroupByField()
    {
        return $this->container['groupByField'];
    }

    /**
     * Sets groupByField
     *
     * @param string $groupByField groupByField
     *
     * @return $this
     */
    public function setGroupByField($groupByField)
    {
        $this->container['groupByField'] = $groupByField;

        return $this;
    }

    /**
     * Gets groupByValue
     *
     * @return object
     */
    public function getGroupByValue()
    {
        return $this->container['groupByValue'];
    }

    /**
     * Sets groupByValue
     *
     * @param object $groupByValue groupByValue
     *
     * @return $this
     */
    public function setGroupByValue($groupByValue)
    {
        $this->container['groupByValue'] = $groupByValue;

        return $this;
    }

    /**
     * Gets outcome
     *
     * @return string
     */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param string $outcome outcome
     *
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $allowedValues = $this->getOutcomeAllowableValues();
        if (!is_null($outcome) && !in_array($outcome, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'outcome', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['outcome'] = $outcome;

        return $this;
    }

    /**
     * Gets rerunResultCount
     *
     * @return int
     */
    public function getRerunResultCount()
    {
        return $this->container['rerunResultCount'];
    }

    /**
     * Sets rerunResultCount
     *
     * @param int $rerunResultCount rerunResultCount
     *
     * @return $this
     */
    public function setRerunResultCount($rerunResultCount)
    {
        $this->container['rerunResultCount'] = $rerunResultCount;

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


