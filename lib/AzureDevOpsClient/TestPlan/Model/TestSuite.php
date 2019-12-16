<?php
/**
 * TestSuite
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\TestPlan
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

namespace AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model;

use \ArrayAccess;
use \AzureDevOpsClient\TestPlan\ObjectSerializer;

/**
 * TestSuite Class Doc Comment
 *
 * @category Class
 * @description Test suite
 * @package  AzureDevOpsClient\TestPlan
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestSuite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestSuite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'requirementId' => 'int',
        'suiteType' => 'string',
        'defaultConfigurations' => '\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfigurationReference[]',
        'defaultTesters' => '\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\IdentityRef[]',
        'inheritDefaultConfigurations' => 'bool',
        'name' => 'string',
        'parentSuite' => '\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestSuiteReference',
        'queryString' => 'string',
        'links' => '\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\ReferenceLinks',
        'children' => '\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestSuite[]',
        'hasChildren' => 'bool',
        'id' => 'int',
        'lastError' => 'string',
        'lastPopulatedDate' => '\DateTime',
        'lastUpdatedBy' => '\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\IdentityRef',
        'lastUpdatedDate' => '\DateTime',
        'plan' => '\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPlanReference',
        'project' => '\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TeamProjectReference',
        'revision' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'requirementId' => 'int32',
        'suiteType' => null,
        'defaultConfigurations' => null,
        'defaultTesters' => null,
        'inheritDefaultConfigurations' => null,
        'name' => null,
        'parentSuite' => null,
        'queryString' => null,
        'links' => null,
        'children' => null,
        'hasChildren' => null,
        'id' => 'int32',
        'lastError' => null,
        'lastPopulatedDate' => 'date-time',
        'lastUpdatedBy' => null,
        'lastUpdatedDate' => 'date-time',
        'plan' => null,
        'project' => null,
        'revision' => 'int32'
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
        'requirementId' => 'requirementId',
        'suiteType' => 'suiteType',
        'defaultConfigurations' => 'defaultConfigurations',
        'defaultTesters' => 'defaultTesters',
        'inheritDefaultConfigurations' => 'inheritDefaultConfigurations',
        'name' => 'name',
        'parentSuite' => 'parentSuite',
        'queryString' => 'queryString',
        'links' => '_links',
        'children' => 'children',
        'hasChildren' => 'hasChildren',
        'id' => 'id',
        'lastError' => 'lastError',
        'lastPopulatedDate' => 'lastPopulatedDate',
        'lastUpdatedBy' => 'lastUpdatedBy',
        'lastUpdatedDate' => 'lastUpdatedDate',
        'plan' => 'plan',
        'project' => 'project',
        'revision' => 'revision'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'requirementId' => 'setRequirementId',
        'suiteType' => 'setSuiteType',
        'defaultConfigurations' => 'setDefaultConfigurations',
        'defaultTesters' => 'setDefaultTesters',
        'inheritDefaultConfigurations' => 'setInheritDefaultConfigurations',
        'name' => 'setName',
        'parentSuite' => 'setParentSuite',
        'queryString' => 'setQueryString',
        'links' => 'setLinks',
        'children' => 'setChildren',
        'hasChildren' => 'setHasChildren',
        'id' => 'setId',
        'lastError' => 'setLastError',
        'lastPopulatedDate' => 'setLastPopulatedDate',
        'lastUpdatedBy' => 'setLastUpdatedBy',
        'lastUpdatedDate' => 'setLastUpdatedDate',
        'plan' => 'setPlan',
        'project' => 'setProject',
        'revision' => 'setRevision'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'requirementId' => 'getRequirementId',
        'suiteType' => 'getSuiteType',
        'defaultConfigurations' => 'getDefaultConfigurations',
        'defaultTesters' => 'getDefaultTesters',
        'inheritDefaultConfigurations' => 'getInheritDefaultConfigurations',
        'name' => 'getName',
        'parentSuite' => 'getParentSuite',
        'queryString' => 'getQueryString',
        'links' => 'getLinks',
        'children' => 'getChildren',
        'hasChildren' => 'getHasChildren',
        'id' => 'getId',
        'lastError' => 'getLastError',
        'lastPopulatedDate' => 'getLastPopulatedDate',
        'lastUpdatedBy' => 'getLastUpdatedBy',
        'lastUpdatedDate' => 'getLastUpdatedDate',
        'plan' => 'getPlan',
        'project' => 'getProject',
        'revision' => 'getRevision'
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
        $this->container['requirementId'] = isset($data['requirementId']) ? $data['requirementId'] : null;
        $this->container['suiteType'] = isset($data['suiteType']) ? $data['suiteType'] : null;
        $this->container['defaultConfigurations'] = isset($data['defaultConfigurations']) ? $data['defaultConfigurations'] : null;
        $this->container['defaultTesters'] = isset($data['defaultTesters']) ? $data['defaultTesters'] : null;
        $this->container['inheritDefaultConfigurations'] = isset($data['inheritDefaultConfigurations']) ? $data['inheritDefaultConfigurations'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentSuite'] = isset($data['parentSuite']) ? $data['parentSuite'] : null;
        $this->container['queryString'] = isset($data['queryString']) ? $data['queryString'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['hasChildren'] = isset($data['hasChildren']) ? $data['hasChildren'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastError'] = isset($data['lastError']) ? $data['lastError'] : null;
        $this->container['lastPopulatedDate'] = isset($data['lastPopulatedDate']) ? $data['lastPopulatedDate'] : null;
        $this->container['lastUpdatedBy'] = isset($data['lastUpdatedBy']) ? $data['lastUpdatedBy'] : null;
        $this->container['lastUpdatedDate'] = isset($data['lastUpdatedDate']) ? $data['lastUpdatedDate'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
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
     * Gets defaultConfigurations
     *
     * @return \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfigurationReference[]
     */
    public function getDefaultConfigurations()
    {
        return $this->container['defaultConfigurations'];
    }

    /**
     * Sets defaultConfigurations
     *
     * @param \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfigurationReference[] $defaultConfigurations Test suite default configurations.
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
     * @return \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\IdentityRef[]
     */
    public function getDefaultTesters()
    {
        return $this->container['defaultTesters'];
    }

    /**
     * Sets defaultTesters
     *
     * @param \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\IdentityRef[] $defaultTesters Test suite default testers.
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
     * @return \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestSuiteReference
     */
    public function getParentSuite()
    {
        return $this->container['parentSuite'];
    }

    /**
     * Sets parentSuite
     *
     * @param \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestSuiteReference $parentSuite Test suite parent shallow reference.
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
     * Gets links
     *
     * @return \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\ReferenceLinks $links Links: self, testPoints, testCases, parent
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestSuite[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestSuite[] $children Child test suites of current test suite.
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets hasChildren
     *
     * @return bool
     */
    public function getHasChildren()
    {
        return $this->container['hasChildren'];
    }

    /**
     * Sets hasChildren
     *
     * @param bool $hasChildren Boolean value dictating if Child test suites are present
     *
     * @return $this
     */
    public function setHasChildren($hasChildren)
    {
        $this->container['hasChildren'] = $hasChildren;

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
     * @param int $id Id of test suite.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lastError
     *
     * @return string
     */
    public function getLastError()
    {
        return $this->container['lastError'];
    }

    /**
     * Sets lastError
     *
     * @param string $lastError Last error for test suite.
     *
     * @return $this
     */
    public function setLastError($lastError)
    {
        $this->container['lastError'] = $lastError;

        return $this;
    }

    /**
     * Gets lastPopulatedDate
     *
     * @return \DateTime
     */
    public function getLastPopulatedDate()
    {
        return $this->container['lastPopulatedDate'];
    }

    /**
     * Sets lastPopulatedDate
     *
     * @param \DateTime $lastPopulatedDate Last populated date.
     *
     * @return $this
     */
    public function setLastPopulatedDate($lastPopulatedDate)
    {
        $this->container['lastPopulatedDate'] = $lastPopulatedDate;

        return $this;
    }

    /**
     * Gets lastUpdatedBy
     *
     * @return \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\IdentityRef
     */
    public function getLastUpdatedBy()
    {
        return $this->container['lastUpdatedBy'];
    }

    /**
     * Sets lastUpdatedBy
     *
     * @param \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\IdentityRef $lastUpdatedBy IdentityRef of user who has updated test suite recently.
     *
     * @return $this
     */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->container['lastUpdatedBy'] = $lastUpdatedBy;

        return $this;
    }

    /**
     * Gets lastUpdatedDate
     *
     * @return \DateTime
     */
    public function getLastUpdatedDate()
    {
        return $this->container['lastUpdatedDate'];
    }

    /**
     * Sets lastUpdatedDate
     *
     * @param \DateTime $lastUpdatedDate Last update date.
     *
     * @return $this
     */
    public function setLastUpdatedDate($lastUpdatedDate)
    {
        $this->container['lastUpdatedDate'] = $lastUpdatedDate;

        return $this;
    }

    /**
     * Gets plan
     *
     * @return \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPlanReference
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPlanReference $plan Test plan to which the test suite belongs.
     *
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TeamProjectReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TeamProjectReference $project Test suite project shallow reference.
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision Test suite revision.
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

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


