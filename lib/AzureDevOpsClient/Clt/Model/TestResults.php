<?php
/**
 * TestResults
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Clt
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CloudLoadTest
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

namespace FrankHouweling\AzureDevOpsClient\Clt\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Clt\ObjectSerializer;

/**
 * TestResults Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Clt
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestResults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cloudLoadTestSolutionUrl' => 'string',
        'counterGroups' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\CounterGroup[]',
        'diagnostics' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\Diagnostics',
        'resultsUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cloudLoadTestSolutionUrl' => null,
        'counterGroups' => null,
        'diagnostics' => null,
        'resultsUrl' => null
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
        'cloudLoadTestSolutionUrl' => 'cloudLoadTestSolutionUrl',
        'counterGroups' => 'counterGroups',
        'diagnostics' => 'diagnostics',
        'resultsUrl' => 'resultsUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cloudLoadTestSolutionUrl' => 'setCloudLoadTestSolutionUrl',
        'counterGroups' => 'setCounterGroups',
        'diagnostics' => 'setDiagnostics',
        'resultsUrl' => 'setResultsUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cloudLoadTestSolutionUrl' => 'getCloudLoadTestSolutionUrl',
        'counterGroups' => 'getCounterGroups',
        'diagnostics' => 'getDiagnostics',
        'resultsUrl' => 'getResultsUrl'
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
        $this->container['cloudLoadTestSolutionUrl'] = isset($data['cloudLoadTestSolutionUrl']) ? $data['cloudLoadTestSolutionUrl'] : null;
        $this->container['counterGroups'] = isset($data['counterGroups']) ? $data['counterGroups'] : null;
        $this->container['diagnostics'] = isset($data['diagnostics']) ? $data['diagnostics'] : null;
        $this->container['resultsUrl'] = isset($data['resultsUrl']) ? $data['resultsUrl'] : null;
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
     * Gets cloudLoadTestSolutionUrl
     *
     * @return string
     */
    public function getCloudLoadTestSolutionUrl()
    {
        return $this->container['cloudLoadTestSolutionUrl'];
    }

    /**
     * Sets cloudLoadTestSolutionUrl
     *
     * @param string $cloudLoadTestSolutionUrl The uri to the test run results file.
     *
     * @return $this
     */
    public function setCloudLoadTestSolutionUrl($cloudLoadTestSolutionUrl)
    {
        $this->container['cloudLoadTestSolutionUrl'] = $cloudLoadTestSolutionUrl;

        return $this;
    }

    /**
     * Gets counterGroups
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\CounterGroup[]
     */
    public function getCounterGroups()
    {
        return $this->container['counterGroups'];
    }

    /**
     * Sets counterGroups
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\CounterGroup[] $counterGroups counterGroups
     *
     * @return $this
     */
    public function setCounterGroups($counterGroups)
    {
        $this->container['counterGroups'] = $counterGroups;

        return $this;
    }

    /**
     * Gets diagnostics
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\Diagnostics
     */
    public function getDiagnostics()
    {
        return $this->container['diagnostics'];
    }

    /**
     * Sets diagnostics
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\Diagnostics $diagnostics The object contains diagnostic details
     *
     * @return $this
     */
    public function setDiagnostics($diagnostics)
    {
        $this->container['diagnostics'] = $diagnostics;

        return $this;
    }

    /**
     * Gets resultsUrl
     *
     * @return string
     */
    public function getResultsUrl()
    {
        return $this->container['resultsUrl'];
    }

    /**
     * Sets resultsUrl
     *
     * @param string $resultsUrl The uri to the test run results file.
     *
     * @return $this
     */
    public function setResultsUrl($resultsUrl)
    {
        $this->container['resultsUrl'] = $resultsUrl;

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


