<?php
/**
 * TestSuite
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
 * TestSuite Class Doc Comment
 *
 * @category Class
 * @description Test suite
 * @package  AzureDevOpsClient\Test
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
        'areaUri' => 'string',
        'children' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestSuite[]',
        'defaultConfigurations' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[]',
        'defaultTesters' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[]',
        'id' => 'int',
        'inheritDefaultConfigurations' => 'bool',
        'lastError' => 'string',
        'lastPopulatedDate' => '\DateTime',
        'lastUpdatedBy' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef',
        'lastUpdatedDate' => '\DateTime',
        'name' => 'string',
        'parent' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference',
        'plan' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference',
        'project' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference',
        'queryString' => 'string',
        'requirementId' => 'int',
        'revision' => 'int',
        'state' => 'string',
        'suites' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[]',
        'suiteType' => 'string',
        'testCaseCount' => 'int',
        'testCasesUrl' => 'string',
        'text' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'areaUri' => null,
        'children' => null,
        'defaultConfigurations' => null,
        'defaultTesters' => null,
        'id' => 'int32',
        'inheritDefaultConfigurations' => null,
        'lastError' => null,
        'lastPopulatedDate' => 'date-time',
        'lastUpdatedBy' => null,
        'lastUpdatedDate' => 'date-time',
        'name' => null,
        'parent' => null,
        'plan' => null,
        'project' => null,
        'queryString' => null,
        'requirementId' => 'int32',
        'revision' => 'int32',
        'state' => null,
        'suites' => null,
        'suiteType' => null,
        'testCaseCount' => 'int32',
        'testCasesUrl' => null,
        'text' => null,
        'url' => null
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
        'areaUri' => 'areaUri',
        'children' => 'children',
        'defaultConfigurations' => 'defaultConfigurations',
        'defaultTesters' => 'defaultTesters',
        'id' => 'id',
        'inheritDefaultConfigurations' => 'inheritDefaultConfigurations',
        'lastError' => 'lastError',
        'lastPopulatedDate' => 'lastPopulatedDate',
        'lastUpdatedBy' => 'lastUpdatedBy',
        'lastUpdatedDate' => 'lastUpdatedDate',
        'name' => 'name',
        'parent' => 'parent',
        'plan' => 'plan',
        'project' => 'project',
        'queryString' => 'queryString',
        'requirementId' => 'requirementId',
        'revision' => 'revision',
        'state' => 'state',
        'suites' => 'suites',
        'suiteType' => 'suiteType',
        'testCaseCount' => 'testCaseCount',
        'testCasesUrl' => 'testCasesUrl',
        'text' => 'text',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'areaUri' => 'setAreaUri',
        'children' => 'setChildren',
        'defaultConfigurations' => 'setDefaultConfigurations',
        'defaultTesters' => 'setDefaultTesters',
        'id' => 'setId',
        'inheritDefaultConfigurations' => 'setInheritDefaultConfigurations',
        'lastError' => 'setLastError',
        'lastPopulatedDate' => 'setLastPopulatedDate',
        'lastUpdatedBy' => 'setLastUpdatedBy',
        'lastUpdatedDate' => 'setLastUpdatedDate',
        'name' => 'setName',
        'parent' => 'setParent',
        'plan' => 'setPlan',
        'project' => 'setProject',
        'queryString' => 'setQueryString',
        'requirementId' => 'setRequirementId',
        'revision' => 'setRevision',
        'state' => 'setState',
        'suites' => 'setSuites',
        'suiteType' => 'setSuiteType',
        'testCaseCount' => 'setTestCaseCount',
        'testCasesUrl' => 'setTestCasesUrl',
        'text' => 'setText',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'areaUri' => 'getAreaUri',
        'children' => 'getChildren',
        'defaultConfigurations' => 'getDefaultConfigurations',
        'defaultTesters' => 'getDefaultTesters',
        'id' => 'getId',
        'inheritDefaultConfigurations' => 'getInheritDefaultConfigurations',
        'lastError' => 'getLastError',
        'lastPopulatedDate' => 'getLastPopulatedDate',
        'lastUpdatedBy' => 'getLastUpdatedBy',
        'lastUpdatedDate' => 'getLastUpdatedDate',
        'name' => 'getName',
        'parent' => 'getParent',
        'plan' => 'getPlan',
        'project' => 'getProject',
        'queryString' => 'getQueryString',
        'requirementId' => 'getRequirementId',
        'revision' => 'getRevision',
        'state' => 'getState',
        'suites' => 'getSuites',
        'suiteType' => 'getSuiteType',
        'testCaseCount' => 'getTestCaseCount',
        'testCasesUrl' => 'getTestCasesUrl',
        'text' => 'getText',
        'url' => 'getUrl'
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
        $this->container['areaUri'] = isset($data['areaUri']) ? $data['areaUri'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['defaultConfigurations'] = isset($data['defaultConfigurations']) ? $data['defaultConfigurations'] : null;
        $this->container['defaultTesters'] = isset($data['defaultTesters']) ? $data['defaultTesters'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inheritDefaultConfigurations'] = isset($data['inheritDefaultConfigurations']) ? $data['inheritDefaultConfigurations'] : null;
        $this->container['lastError'] = isset($data['lastError']) ? $data['lastError'] : null;
        $this->container['lastPopulatedDate'] = isset($data['lastPopulatedDate']) ? $data['lastPopulatedDate'] : null;
        $this->container['lastUpdatedBy'] = isset($data['lastUpdatedBy']) ? $data['lastUpdatedBy'] : null;
        $this->container['lastUpdatedDate'] = isset($data['lastUpdatedDate']) ? $data['lastUpdatedDate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['queryString'] = isset($data['queryString']) ? $data['queryString'] : null;
        $this->container['requirementId'] = isset($data['requirementId']) ? $data['requirementId'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['suites'] = isset($data['suites']) ? $data['suites'] : null;
        $this->container['suiteType'] = isset($data['suiteType']) ? $data['suiteType'] : null;
        $this->container['testCaseCount'] = isset($data['testCaseCount']) ? $data['testCaseCount'] : null;
        $this->container['testCasesUrl'] = isset($data['testCasesUrl']) ? $data['testCasesUrl'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets areaUri
     *
     * @return string
     */
    public function getAreaUri()
    {
        return $this->container['areaUri'];
    }

    /**
     * Sets areaUri
     *
     * @param string $areaUri Area uri of the test suite.
     *
     * @return $this
     */
    public function setAreaUri($areaUri)
    {
        $this->container['areaUri'] = $areaUri;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestSuite[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestSuite[] $children Child test suites of current test suite.
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets defaultConfigurations
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[]
     */
    public function getDefaultConfigurations()
    {
        return $this->container['defaultConfigurations'];
    }

    /**
     * Sets defaultConfigurations
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[] $defaultConfigurations Test suite default configuration.
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
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[]
     */
    public function getDefaultTesters()
    {
        return $this->container['defaultTesters'];
    }

    /**
     * Sets defaultTesters
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[] $defaultTesters Test suite default testers.
     *
     * @return $this
     */
    public function setDefaultTesters($defaultTesters)
    {
        $this->container['defaultTesters'] = $defaultTesters;

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
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef
     */
    public function getLastUpdatedBy()
    {
        return $this->container['lastUpdatedBy'];
    }

    /**
     * Sets lastUpdatedBy
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef $lastUpdatedBy IdentityRef of user who has updated test suite recently.
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
     * Gets parent
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $parent Test suite parent shallow reference.
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets plan
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $plan Test plan to which the test suite belongs.
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
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $project Test suite project shallow reference.
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State of test suite.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets suites
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[]
     */
    public function getSuites()
    {
        return $this->container['suites'];
    }

    /**
     * Sets suites
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference[] $suites List of shallow reference of suites.
     *
     * @return $this
     */
    public function setSuites($suites)
    {
        $this->container['suites'] = $suites;

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
        $this->container['suiteType'] = $suiteType;

        return $this;
    }

    /**
     * Gets testCaseCount
     *
     * @return int
     */
    public function getTestCaseCount()
    {
        return $this->container['testCaseCount'];
    }

    /**
     * Sets testCaseCount
     *
     * @param int $testCaseCount Test cases count.
     *
     * @return $this
     */
    public function setTestCaseCount($testCaseCount)
    {
        $this->container['testCaseCount'] = $testCaseCount;

        return $this;
    }

    /**
     * Gets testCasesUrl
     *
     * @return string
     */
    public function getTestCasesUrl()
    {
        return $this->container['testCasesUrl'];
    }

    /**
     * Sets testCasesUrl
     *
     * @param string $testCasesUrl Test case url.
     *
     * @return $this
     */
    public function setTestCasesUrl($testCasesUrl)
    {
        $this->container['testCasesUrl'] = $testCasesUrl;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Used in tree view. If test suite is root suite then, it is name of plan otherwise title of the suite.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Url of test suite.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


