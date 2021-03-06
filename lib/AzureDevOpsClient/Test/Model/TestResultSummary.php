<?php
/**
 * TestResultSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Test
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

namespace FrankHouweling\AzureDevOpsClient\Test\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Test\ObjectSerializer;

/**
 * TestResultSummary Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestResultSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestResultSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aggregatedResultsAnalysis' => '\FrankHouweling\AzureDevOpsClient\Test\Model\AggregatedResultsAnalysis',
        'noConfigRunsCount' => 'int',
        'teamProject' => '\FrankHouweling\AzureDevOpsClient\Test\Model\TeamProjectReference',
        'testFailures' => '\FrankHouweling\AzureDevOpsClient\Test\Model\TestFailuresAnalysis',
        'testResultsContext' => '\FrankHouweling\AzureDevOpsClient\Test\Model\TestResultsContext',
        'totalRunsCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aggregatedResultsAnalysis' => null,
        'noConfigRunsCount' => 'int32',
        'teamProject' => null,
        'testFailures' => null,
        'testResultsContext' => null,
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
        'aggregatedResultsAnalysis' => 'aggregatedResultsAnalysis',
        'noConfigRunsCount' => 'noConfigRunsCount',
        'teamProject' => 'teamProject',
        'testFailures' => 'testFailures',
        'testResultsContext' => 'testResultsContext',
        'totalRunsCount' => 'totalRunsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aggregatedResultsAnalysis' => 'setAggregatedResultsAnalysis',
        'noConfigRunsCount' => 'setNoConfigRunsCount',
        'teamProject' => 'setTeamProject',
        'testFailures' => 'setTestFailures',
        'testResultsContext' => 'setTestResultsContext',
        'totalRunsCount' => 'setTotalRunsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aggregatedResultsAnalysis' => 'getAggregatedResultsAnalysis',
        'noConfigRunsCount' => 'getNoConfigRunsCount',
        'teamProject' => 'getTeamProject',
        'testFailures' => 'getTestFailures',
        'testResultsContext' => 'getTestResultsContext',
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
        $this->container['aggregatedResultsAnalysis'] = isset($data['aggregatedResultsAnalysis']) ? $data['aggregatedResultsAnalysis'] : null;
        $this->container['noConfigRunsCount'] = isset($data['noConfigRunsCount']) ? $data['noConfigRunsCount'] : null;
        $this->container['teamProject'] = isset($data['teamProject']) ? $data['teamProject'] : null;
        $this->container['testFailures'] = isset($data['testFailures']) ? $data['testFailures'] : null;
        $this->container['testResultsContext'] = isset($data['testResultsContext']) ? $data['testResultsContext'] : null;
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
     * Gets aggregatedResultsAnalysis
     *
     * @return \FrankHouweling\AzureDevOpsClient\Test\Model\AggregatedResultsAnalysis
     */
    public function getAggregatedResultsAnalysis()
    {
        return $this->container['aggregatedResultsAnalysis'];
    }

    /**
     * Sets aggregatedResultsAnalysis
     *
     * @param \FrankHouweling\AzureDevOpsClient\Test\Model\AggregatedResultsAnalysis $aggregatedResultsAnalysis aggregatedResultsAnalysis
     *
     * @return $this
     */
    public function setAggregatedResultsAnalysis($aggregatedResultsAnalysis)
    {
        $this->container['aggregatedResultsAnalysis'] = $aggregatedResultsAnalysis;

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
     * @param int $noConfigRunsCount noConfigRunsCount
     *
     * @return $this
     */
    public function setNoConfigRunsCount($noConfigRunsCount)
    {
        $this->container['noConfigRunsCount'] = $noConfigRunsCount;

        return $this;
    }

    /**
     * Gets teamProject
     *
     * @return \FrankHouweling\AzureDevOpsClient\Test\Model\TeamProjectReference
     */
    public function getTeamProject()
    {
        return $this->container['teamProject'];
    }

    /**
     * Sets teamProject
     *
     * @param \FrankHouweling\AzureDevOpsClient\Test\Model\TeamProjectReference $teamProject teamProject
     *
     * @return $this
     */
    public function setTeamProject($teamProject)
    {
        $this->container['teamProject'] = $teamProject;

        return $this;
    }

    /**
     * Gets testFailures
     *
     * @return \FrankHouweling\AzureDevOpsClient\Test\Model\TestFailuresAnalysis
     */
    public function getTestFailures()
    {
        return $this->container['testFailures'];
    }

    /**
     * Sets testFailures
     *
     * @param \FrankHouweling\AzureDevOpsClient\Test\Model\TestFailuresAnalysis $testFailures testFailures
     *
     * @return $this
     */
    public function setTestFailures($testFailures)
    {
        $this->container['testFailures'] = $testFailures;

        return $this;
    }

    /**
     * Gets testResultsContext
     *
     * @return \FrankHouweling\AzureDevOpsClient\Test\Model\TestResultsContext
     */
    public function getTestResultsContext()
    {
        return $this->container['testResultsContext'];
    }

    /**
     * Sets testResultsContext
     *
     * @param \FrankHouweling\AzureDevOpsClient\Test\Model\TestResultsContext $testResultsContext testResultsContext
     *
     * @return $this
     */
    public function setTestResultsContext($testResultsContext)
    {
        $this->container['testResultsContext'] = $testResultsContext;

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
     * @param int $totalRunsCount totalRunsCount
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


