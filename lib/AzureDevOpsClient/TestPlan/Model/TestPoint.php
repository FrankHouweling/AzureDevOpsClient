<?php
/**
 * TestPoint
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
 * TestPoint Class Doc Comment
 *
 * @category Class
 * @description Test Point Class
 * @package  FrankHouweling\AzureDevOpsClient\TestPlan
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestPoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comment' => 'string',
        'configuration' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestConfigurationReference',
        'id' => 'int',
        'isActive' => 'bool',
        'isAutomated' => 'bool',
        'lastResetToActive' => '\DateTime',
        'lastUpdatedBy' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef',
        'lastUpdatedDate' => '\DateTime',
        'links' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\ReferenceLinks',
        'project' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TeamProjectReference',
        'results' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPointResults',
        'testCaseReference' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestCaseReference',
        'tester' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef',
        'testPlan' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlanReference',
        'testSuite' => '\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comment' => null,
        'configuration' => null,
        'id' => 'int32',
        'isActive' => null,
        'isAutomated' => null,
        'lastResetToActive' => 'date-time',
        'lastUpdatedBy' => null,
        'lastUpdatedDate' => 'date-time',
        'links' => null,
        'project' => null,
        'results' => null,
        'testCaseReference' => null,
        'tester' => null,
        'testPlan' => null,
        'testSuite' => null
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
        'comment' => 'comment',
        'configuration' => 'configuration',
        'id' => 'id',
        'isActive' => 'isActive',
        'isAutomated' => 'isAutomated',
        'lastResetToActive' => 'lastResetToActive',
        'lastUpdatedBy' => 'lastUpdatedBy',
        'lastUpdatedDate' => 'lastUpdatedDate',
        'links' => 'links',
        'project' => 'project',
        'results' => 'results',
        'testCaseReference' => 'testCaseReference',
        'tester' => 'tester',
        'testPlan' => 'testPlan',
        'testSuite' => 'testSuite'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'configuration' => 'setConfiguration',
        'id' => 'setId',
        'isActive' => 'setIsActive',
        'isAutomated' => 'setIsAutomated',
        'lastResetToActive' => 'setLastResetToActive',
        'lastUpdatedBy' => 'setLastUpdatedBy',
        'lastUpdatedDate' => 'setLastUpdatedDate',
        'links' => 'setLinks',
        'project' => 'setProject',
        'results' => 'setResults',
        'testCaseReference' => 'setTestCaseReference',
        'tester' => 'setTester',
        'testPlan' => 'setTestPlan',
        'testSuite' => 'setTestSuite'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'configuration' => 'getConfiguration',
        'id' => 'getId',
        'isActive' => 'getIsActive',
        'isAutomated' => 'getIsAutomated',
        'lastResetToActive' => 'getLastResetToActive',
        'lastUpdatedBy' => 'getLastUpdatedBy',
        'lastUpdatedDate' => 'getLastUpdatedDate',
        'links' => 'getLinks',
        'project' => 'getProject',
        'results' => 'getResults',
        'testCaseReference' => 'getTestCaseReference',
        'tester' => 'getTester',
        'testPlan' => 'getTestPlan',
        'testSuite' => 'getTestSuite'
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['isAutomated'] = isset($data['isAutomated']) ? $data['isAutomated'] : null;
        $this->container['lastResetToActive'] = isset($data['lastResetToActive']) ? $data['lastResetToActive'] : null;
        $this->container['lastUpdatedBy'] = isset($data['lastUpdatedBy']) ? $data['lastUpdatedBy'] : null;
        $this->container['lastUpdatedDate'] = isset($data['lastUpdatedDate']) ? $data['lastUpdatedDate'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['testCaseReference'] = isset($data['testCaseReference']) ? $data['testCaseReference'] : null;
        $this->container['tester'] = isset($data['tester']) ? $data['tester'] : null;
        $this->container['testPlan'] = isset($data['testPlan']) ? $data['testPlan'] : null;
        $this->container['testSuite'] = isset($data['testSuite']) ? $data['testSuite'] : null;
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
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Comment associated to the Test Point
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestConfigurationReference
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestConfigurationReference $configuration Configuration associated with the Test Point
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

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
     * @param int $id Id of the Test Point
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     *
     * @param bool $isActive Variable to decide whether the test case is Active or not
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets isAutomated
     *
     * @return bool
     */
    public function getIsAutomated()
    {
        return $this->container['isAutomated'];
    }

    /**
     * Sets isAutomated
     *
     * @param bool $isAutomated Is the Test Point for Automated Test Case or Manual
     *
     * @return $this
     */
    public function setIsAutomated($isAutomated)
    {
        $this->container['isAutomated'] = $isAutomated;

        return $this;
    }

    /**
     * Gets lastResetToActive
     *
     * @return \DateTime
     */
    public function getLastResetToActive()
    {
        return $this->container['lastResetToActive'];
    }

    /**
     * Sets lastResetToActive
     *
     * @param \DateTime $lastResetToActive Last Reset to Active Time Stamp for the Test Point
     *
     * @return $this
     */
    public function setLastResetToActive($lastResetToActive)
    {
        $this->container['lastResetToActive'] = $lastResetToActive;

        return $this;
    }

    /**
     * Gets lastUpdatedBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef
     */
    public function getLastUpdatedBy()
    {
        return $this->container['lastUpdatedBy'];
    }

    /**
     * Sets lastUpdatedBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef $lastUpdatedBy Last Updated details for the Test Point
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
     * @param \DateTime $lastUpdatedDate Last Update Time Stamp for the Test Point
     *
     * @return $this
     */
    public function setLastUpdatedDate($lastUpdatedDate)
    {
        $this->container['lastUpdatedDate'] = $lastUpdatedDate;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\ReferenceLinks $links Reference links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TeamProjectReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TeamProjectReference $project Project under which the Test Point is
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets results
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPointResults
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPointResults $results Results associated to the Test Point
     *
     * @return $this
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

        return $this;
    }

    /**
     * Gets testCaseReference
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestCaseReference
     */
    public function getTestCaseReference()
    {
        return $this->container['testCaseReference'];
    }

    /**
     * Sets testCaseReference
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestCaseReference $testCaseReference Test Case Reference
     *
     * @return $this
     */
    public function setTestCaseReference($testCaseReference)
    {
        $this->container['testCaseReference'] = $testCaseReference;

        return $this;
    }

    /**
     * Gets tester
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef
     */
    public function getTester()
    {
        return $this->container['tester'];
    }

    /**
     * Sets tester
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\IdentityRef $tester Tester associated with the Test Point
     *
     * @return $this
     */
    public function setTester($tester)
    {
        $this->container['tester'] = $tester;

        return $this;
    }

    /**
     * Gets testPlan
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlanReference
     */
    public function getTestPlan()
    {
        return $this->container['testPlan'];
    }

    /**
     * Sets testPlan
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlanReference $testPlan Test Plan under which the Test Point is
     *
     * @return $this
     */
    public function setTestPlan($testPlan)
    {
        $this->container['testPlan'] = $testPlan;

        return $this;
    }

    /**
     * Gets testSuite
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteReference
     */
    public function getTestSuite()
    {
        return $this->container['testSuite'];
    }

    /**
     * Sets testSuite
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteReference $testSuite Test Suite under which the Test Point is
     *
     * @return $this
     */
    public function setTestSuite($testSuite)
    {
        $this->container['testSuite'] = $testSuite;

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


