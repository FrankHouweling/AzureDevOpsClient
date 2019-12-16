<?php
/**
 * RunSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TestResults
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

namespace AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model;

use \ArrayAccess;
use \AzureDevOpsClient\TestResults\ObjectSerializer;

/**
 * RunSummary Class Doc Comment
 *
 * @category Class
 * @description Summary of runs for a pipeline instance.
 * @package  AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RunSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RunSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'duration' => 'string',
        'noConfigRunsCount' => 'int',
        'runSummaryByOutcome' => 'map[string,int]',
        'runSummaryByState' => 'map[string,int]',
        'totalRunsCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'duration' => 'TimeSpan',
        'noConfigRunsCount' => 'int32',
        'runSummaryByOutcome' => 'int32',
        'runSummaryByState' => 'int32',
        'totalRunsCount' => 'int32'
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
        'duration' => 'duration',
        'noConfigRunsCount' => 'noConfigRunsCount',
        'runSummaryByOutcome' => 'runSummaryByOutcome',
        'runSummaryByState' => 'runSummaryByState',
        'totalRunsCount' => 'totalRunsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
        'noConfigRunsCount' => 'setNoConfigRunsCount',
        'runSummaryByOutcome' => 'setRunSummaryByOutcome',
        'runSummaryByState' => 'setRunSummaryByState',
        'totalRunsCount' => 'setTotalRunsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
        'noConfigRunsCount' => 'getNoConfigRunsCount',
        'runSummaryByOutcome' => 'getRunSummaryByOutcome',
        'runSummaryByState' => 'getRunSummaryByState',
        'totalRunsCount' => 'getTotalRunsCount'
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['noConfigRunsCount'] = isset($data['noConfigRunsCount']) ? $data['noConfigRunsCount'] : null;
        $this->container['runSummaryByOutcome'] = isset($data['runSummaryByOutcome']) ? $data['runSummaryByOutcome'] : null;
        $this->container['runSummaryByState'] = isset($data['runSummaryByState']) ? $data['runSummaryByState'] : null;
        $this->container['totalRunsCount'] = isset($data['totalRunsCount']) ? $data['totalRunsCount'] : null;
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
     * @param string $duration Total time taken by runs with state completed and NeedInvestigation.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets noConfigRunsCount
     *
     * @return int
     */
    public function getNoConfigRunsCount()
    {
        return $this->container['noConfigRunsCount'];
    }

    /**
     * Sets noConfigRunsCount
     *
     * @param int $noConfigRunsCount NoConfig runs count.
     *
     * @return $this
     */
    public function setNoConfigRunsCount($noConfigRunsCount)
    {
        $this->container['noConfigRunsCount'] = $noConfigRunsCount;

        return $this;
    }

    /**
     * Gets runSummaryByOutcome
     *
     * @return map[string,int]
     */
    public function getRunSummaryByOutcome()
    {
        return $this->container['runSummaryByOutcome'];
    }

    /**
     * Sets runSummaryByOutcome
     *
     * @param map[string,int] $runSummaryByOutcome Runs count by outcome for runs with state completed and NeedInvestigation runs.
     *
     * @return $this
     */
    public function setRunSummaryByOutcome($runSummaryByOutcome)
    {
        $this->container['runSummaryByOutcome'] = $runSummaryByOutcome;

        return $this;
    }

    /**
     * Gets runSummaryByState
     *
     * @return map[string,int]
     */
    public function getRunSummaryByState()
    {
        return $this->container['runSummaryByState'];
    }

    /**
     * Sets runSummaryByState
     *
     * @param map[string,int] $runSummaryByState Runs count by state.
     *
     * @return $this
     */
    public function setRunSummaryByState($runSummaryByState)
    {
        $this->container['runSummaryByState'] = $runSummaryByState;

        return $this;
    }

    /**
     * Gets totalRunsCount
     *
     * @return int
     */
    public function getTotalRunsCount()
    {
        return $this->container['totalRunsCount'];
    }

    /**
     * Sets totalRunsCount
     *
     * @param int $totalRunsCount Total runs count.
     *
     * @return $this
     */
    public function setTotalRunsCount($totalRunsCount)
    {
        $this->container['totalRunsCount'] = $totalRunsCount;

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


