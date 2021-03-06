<?php
/**
 * TestSuiteCreateParams
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\TestPlan
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TestPlan
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

namespace FrankHouweling\AzureDevOpsClient\TestPlan\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\TestPlan\ObjectSerializer;

/**
 * TestSuiteCreateParams Class Doc Comment
 *
 * @category Class
 * @description Test suite Create Parameters
 * @package  FrankHouweling\AzureDevOpsClient\TestPlan
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestSuiteCreateParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestSuiteCreateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'defaultConfigurations' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestConfigurationReference[]',
        'defaultTesters' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef[]',
        'inheritDefaultConfigurations' => 'bool',
        'name' => 'string',
        'parentSuite' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteReference',
        'queryString' => 'string',
        'requirementId' => 'int',
        'suiteType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'defaultConfigurations' => null,
        'defaultTesters' => null,
        'inheritDefaultConfigurations' => null,
        'name' => null,
        'parentSuite' => null,
        'queryString' => null,
        'requirementId' => 'int32',
        'suiteType' => null
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
        'defaultConfigurations' => 'defaultConfigurations',
        'defaultTesters' => 'defaultTesters',
        'inheritDefaultConfigurations' => 'inheritDefaultConfigurations',
        'name' => 'name',
        'parentSuite' => 'parentSuite',
        'queryString' => 'queryString',
        'requirementId' => 'requirementId',
        'suiteType' => 'suiteType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultConfigurations' => 'setDefaultConfigurations',
        'defaultTesters' => 'setDefaultTesters',
        'inheritDefaultConfigurations' => 'setInheritDefaultConfigurations',
        'name' => 'setName',
        'parentSuite' => 'setParentSuite',
        'queryString' => 'setQueryString',
        'requirementId' => 'setRequirementId',
        'suiteType' => 'setSuiteType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultConfigurations' => 'getDefaultConfigurations',
        'defaultTesters' => 'getDefaultTesters',
        'inheritDefaultConfigurations' => 'getInheritDefaultConfigurations',
        'name' => 'getName',
        'parentSuite' => 'getParentSuite',
        'queryString' => 'getQueryString',
        'requirementId' => 'getRequirementId',
        'suiteType' => 'getSuiteType'
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

    const SUITE_TYPE_NONE = 'none';
    const SUITE_TYPE_DYNAMIC_TEST_SUITE = 'dynamicTestSuite';
    const SUITE_TYPE_STATIC_TEST_SUITE = 'staticTestSuite';
    const SUITE_TYPE_REQUIREMENT_TEST_SUITE = 'requirementTestSuite';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSuiteTypeAllowableValues()
    {
        return [
            self::SUITE_TYPE_NONE,
            self::SUITE_TYPE_DYNAMIC_TEST_SUITE,
            self::SUITE_TYPE_STATIC_TEST_SUITE,
            self::SUITE_TYPE_REQUIREMENT_TEST_SUITE,
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
        $this->container['defaultConfigurations'] = isset($data['defaultConfigurations']) ? $data['defaultConfigurations'] : null;
        $this->container['defaultTesters'] = isset($data['defaultTesters']) ? $data['defaultTesters'] : null;
        $this->container['inheritDefaultConfigurations'] = isset($data['inheritDefaultConfigurations']) ? $data['inheritDefaultConfigurations'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentSuite'] = isset($data['parentSuite']) ? $data['parentSuite'] : null;
        $this->container['queryString'] = isset($data['queryString']) ? $data['queryString'] : null;
        $this->container['requirementId'] = isset($data['requirementId']) ? $data['requirementId'] : null;
        $this->container['suiteType'] = isset($data['suiteType']) ? $data['suiteType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSuiteTypeAllowableValues();
        if (!is_null($this->container['suiteType']) && !in_array($this->container['suiteType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'suiteType', must be one of '%s'",
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
     * Gets defaultConfigurations
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestConfigurationReference[]
     */
    public function getDefaultConfigurations()
    {
        return $this->container['defaultConfigurations'];
    }

    /**
     * Sets defaultConfigurations
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestConfigurationReference[] $defaultConfigurations Test suite default configurations.
     *
     * @return $this
     */
    public function setDefaultConfigurations($defaultConfigurations)
    {
        $this->container['defaultConfigurations'] = $defaultConfigurations;

        return $this;
    }

    /**
     * Gets defaultTesters
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef[]
     */
    public function getDefaultTesters()
    {
        return $this->container['defaultTesters'];
    }

    /**
     * Sets defaultTesters
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef[] $defaultTesters Test suite default testers.
     *
     * @return $this
     */
    public function setDefaultTesters($defaultTesters)
    {
        $this->container['defaultTesters'] = $defaultTesters;

        return $this;
    }

    /**
     * Gets inheritDefaultConfigurations
     *
     * @return bool
     */
    public function getInheritDefaultConfigurations()
    {
        return $this->container['inheritDefaultConfigurations'];
    }

    /**
     * Sets inheritDefaultConfigurations
     *
     * @param bool $inheritDefaultConfigurations Default configuration was inherited or not.
     *
     * @return $this
     */
    public function setInheritDefaultConfigurations($inheritDefaultConfigurations)
    {
        $this->container['inheritDefaultConfigurations'] = $inheritDefaultConfigurations;

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
     * @param string $name Name of test suite.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parentSuite
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteReference
     */
    public function getParentSuite()
    {
        return $this->container['parentSuite'];
    }

    /**
     * Sets parentSuite
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteReference $parentSuite Test suite parent shallow reference.
     *
     * @return $this
     */
    public function setParentSuite($parentSuite)
    {
        $this->container['parentSuite'] = $parentSuite;

        return $this;
    }

    /**
     * Gets queryString
     *
     * @return string
     */
    public function getQueryString()
    {
        return $this->container['queryString'];
    }

    /**
     * Sets queryString
     *
     * @param string $queryString Test suite query string, for dynamic suites.
     *
     * @return $this
     */
    public function setQueryString($queryString)
    {
        $this->container['queryString'] = $queryString;

        return $this;
    }

    /**
     * Gets requirementId
     *
     * @return int
     */
    public function getRequirementId()
    {
        return $this->container['requirementId'];
    }

    /**
     * Sets requirementId
     *
     * @param int $requirementId Test suite requirement id.
     *
     * @return $this
     */
    public function setRequirementId($requirementId)
    {
        $this->container['requirementId'] = $requirementId;

        return $this;
    }

    /**
     * Gets suiteType
     *
     * @return string
     */
    public function getSuiteType()
    {
        return $this->container['suiteType'];
    }

    /**
     * Sets suiteType
     *
     * @param string $suiteType Test suite type.
     *
     * @return $this
     */
    public function setSuiteType($suiteType)
    {
        $allowedValues = $this->getSuiteTypeAllowableValues();
        if (!is_null($suiteType) && !in_array($suiteType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'suiteType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['suiteType'] = $suiteType;

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


