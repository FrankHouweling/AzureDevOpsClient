<?php
/**
 * AggregatedResultsAnalysis
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
 * AggregatedResultsAnalysis Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AggregatedResultsAnalysis implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AggregatedResultsAnalysis';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'duration' => 'string',
        'notReportedResultsByOutcome' => 'map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedResultsByOutcome]',
        'previousContext' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TestResultsContext',
        'resultsByOutcome' => 'map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedResultsByOutcome]',
        'resultsDifference' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedResultsDifference',
        'runSummaryByOutcome' => 'map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedRunsByOutcome]',
        'runSummaryByState' => 'map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedRunsByState]',
        'totalTests' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'duration' => 'TimeSpan',
        'notReportedResultsByOutcome' => null,
        'previousContext' => null,
        'resultsByOutcome' => null,
        'resultsDifference' => null,
        'runSummaryByOutcome' => null,
        'runSummaryByState' => null,
        'totalTests' => 'int32'
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
        'notReportedResultsByOutcome' => 'notReportedResultsByOutcome',
        'previousContext' => 'previousContext',
        'resultsByOutcome' => 'resultsByOutcome',
        'resultsDifference' => 'resultsDifference',
        'runSummaryByOutcome' => 'runSummaryByOutcome',
        'runSummaryByState' => 'runSummaryByState',
        'totalTests' => 'totalTests'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
        'notReportedResultsByOutcome' => 'setNotReportedResultsByOutcome',
        'previousContext' => 'setPreviousContext',
        'resultsByOutcome' => 'setResultsByOutcome',
        'resultsDifference' => 'setResultsDifference',
        'runSummaryByOutcome' => 'setRunSummaryByOutcome',
        'runSummaryByState' => 'setRunSummaryByState',
        'totalTests' => 'setTotalTests'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
        'notReportedResultsByOutcome' => 'getNotReportedResultsByOutcome',
        'previousContext' => 'getPreviousContext',
        'resultsByOutcome' => 'getResultsByOutcome',
        'resultsDifference' => 'getResultsDifference',
        'runSummaryByOutcome' => 'getRunSummaryByOutcome',
        'runSummaryByState' => 'getRunSummaryByState',
        'totalTests' => 'getTotalTests'
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
        $this->container['notReportedResultsByOutcome'] = isset($data['notReportedResultsByOutcome']) ? $data['notReportedResultsByOutcome'] : null;
        $this->container['previousContext'] = isset($data['previousContext']) ? $data['previousContext'] : null;
        $this->container['resultsByOutcome'] = isset($data['resultsByOutcome']) ? $data['resultsByOutcome'] : null;
        $this->container['resultsDifference'] = isset($data['resultsDifference']) ? $data['resultsDifference'] : null;
        $this->container['runSummaryByOutcome'] = isset($data['runSummaryByOutcome']) ? $data['runSummaryByOutcome'] : null;
        $this->container['runSummaryByState'] = isset($data['runSummaryByState']) ? $data['runSummaryByState'] : null;
        $this->container['totalTests'] = isset($data['totalTests']) ? $data['totalTests'] : null;
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
     * Gets notReportedResultsByOutcome
     *
     * @return map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedResultsByOutcome]
     */
    public function getNotReportedResultsByOutcome()
    {
        return $this->container['notReportedResultsByOutcome'];
    }

    /**
     * Sets notReportedResultsByOutcome
     *
     * @param map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedResultsByOutcome] $notReportedResultsByOutcome notReportedResultsByOutcome
     *
     * @return $this
     */
    public function setNotReportedResultsByOutcome($notReportedResultsByOutcome)
    {
        $this->container['notReportedResultsByOutcome'] = $notReportedResultsByOutcome;

        return $this;
    }

    /**
     * Gets previousContext
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TestResultsContext
     */
    public function getPreviousContext()
    {
        return $this->container['previousContext'];
    }

    /**
     * Sets previousContext
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TestResultsContext $previousContext previousContext
     *
     * @return $this
     */
    public function setPreviousContext($previousContext)
    {
        $this->container['previousContext'] = $previousContext;

        return $this;
    }

    /**
     * Gets resultsByOutcome
     *
     * @return map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedResultsByOutcome]
     */
    public function getResultsByOutcome()
    {
        return $this->container['resultsByOutcome'];
    }

    /**
     * Sets resultsByOutcome
     *
     * @param map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedResultsByOutcome] $resultsByOutcome resultsByOutcome
     *
     * @return $this
     */
    public function setResultsByOutcome($resultsByOutcome)
    {
        $this->container['resultsByOutcome'] = $resultsByOutcome;

        return $this;
    }

    /**
     * Gets resultsDifference
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedResultsDifference
     */
    public function getResultsDifference()
    {
        return $this->container['resultsDifference'];
    }

    /**
     * Sets resultsDifference
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedResultsDifference $resultsDifference resultsDifference
     *
     * @return $this
     */
    public function setResultsDifference($resultsDifference)
    {
        $this->container['resultsDifference'] = $resultsDifference;

        return $this;
    }

    /**
     * Gets runSummaryByOutcome
     *
     * @return map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedRunsByOutcome]
     */
    public function getRunSummaryByOutcome()
    {
        return $this->container['runSummaryByOutcome'];
    }

    /**
     * Sets runSummaryByOutcome
     *
     * @param map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedRunsByOutcome] $runSummaryByOutcome runSummaryByOutcome
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
     * @return map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedRunsByState]
     */
    public function getRunSummaryByState()
    {
        return $this->container['runSummaryByState'];
    }

    /**
     * Sets runSummaryByState
     *
     * @param map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AggregatedRunsByState] $runSummaryByState runSummaryByState
     *
     * @return $this
     */
    public function setRunSummaryByState($runSummaryByState)
    {
        $this->container['runSummaryByState'] = $runSummaryByState;

        return $this;
    }

    /**
     * Gets totalTests
     *
     * @return int
     */
    public function getTotalTests()
    {
        return $this->container['totalTests'];
    }

    /**
     * Sets totalTests
     *
     * @param int $totalTests totalTests
     *
     * @return $this
     */
    public function setTotalTests($totalTests)
    {
        $this->container['totalTests'] = $totalTests;

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


