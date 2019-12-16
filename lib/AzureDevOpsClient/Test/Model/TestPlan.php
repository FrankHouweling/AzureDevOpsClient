<?php
/**
 * TestPlan
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
 * TestPlan Class Doc Comment
 *
 * @category Class
 * @description The test plan resource.
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'area' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference',
        'build' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference',
        'buildDefinition' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference',
        'description' => 'string',
        'endDate' => '\DateTime',
        'id' => 'int',
        'iteration' => 'string',
        'name' => 'string',
        'owner' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef',
        'previousBuild' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference',
        'project' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference',
        'releaseEnvironmentDefinition' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ReleaseEnvironmentDefinitionReference',
        'revision' => 'int',
        'rootSuite' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference',
        'startDate' => '\DateTime',
        'state' => 'string',
        'testOutcomeSettings' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestOutcomeSettings',
        'updatedBy' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef',
        'updatedDate' => '\DateTime',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'area' => null,
        'build' => null,
        'buildDefinition' => null,
        'description' => null,
        'endDate' => 'date-time',
        'id' => 'int32',
        'iteration' => null,
        'name' => null,
        'owner' => null,
        'previousBuild' => null,
        'project' => null,
        'releaseEnvironmentDefinition' => null,
        'revision' => 'int32',
        'rootSuite' => null,
        'startDate' => 'date-time',
        'state' => null,
        'testOutcomeSettings' => null,
        'updatedBy' => null,
        'updatedDate' => 'date-time',
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
        'area' => 'area',
        'build' => 'build',
        'buildDefinition' => 'buildDefinition',
        'description' => 'description',
        'endDate' => 'endDate',
        'id' => 'id',
        'iteration' => 'iteration',
        'name' => 'name',
        'owner' => 'owner',
        'previousBuild' => 'previousBuild',
        'project' => 'project',
        'releaseEnvironmentDefinition' => 'releaseEnvironmentDefinition',
        'revision' => 'revision',
        'rootSuite' => 'rootSuite',
        'startDate' => 'startDate',
        'state' => 'state',
        'testOutcomeSettings' => 'testOutcomeSettings',
        'updatedBy' => 'updatedBy',
        'updatedDate' => 'updatedDate',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area' => 'setArea',
        'build' => 'setBuild',
        'buildDefinition' => 'setBuildDefinition',
        'description' => 'setDescription',
        'endDate' => 'setEndDate',
        'id' => 'setId',
        'iteration' => 'setIteration',
        'name' => 'setName',
        'owner' => 'setOwner',
        'previousBuild' => 'setPreviousBuild',
        'project' => 'setProject',
        'releaseEnvironmentDefinition' => 'setReleaseEnvironmentDefinition',
        'revision' => 'setRevision',
        'rootSuite' => 'setRootSuite',
        'startDate' => 'setStartDate',
        'state' => 'setState',
        'testOutcomeSettings' => 'setTestOutcomeSettings',
        'updatedBy' => 'setUpdatedBy',
        'updatedDate' => 'setUpdatedDate',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area' => 'getArea',
        'build' => 'getBuild',
        'buildDefinition' => 'getBuildDefinition',
        'description' => 'getDescription',
        'endDate' => 'getEndDate',
        'id' => 'getId',
        'iteration' => 'getIteration',
        'name' => 'getName',
        'owner' => 'getOwner',
        'previousBuild' => 'getPreviousBuild',
        'project' => 'getProject',
        'releaseEnvironmentDefinition' => 'getReleaseEnvironmentDefinition',
        'revision' => 'getRevision',
        'rootSuite' => 'getRootSuite',
        'startDate' => 'getStartDate',
        'state' => 'getState',
        'testOutcomeSettings' => 'getTestOutcomeSettings',
        'updatedBy' => 'getUpdatedBy',
        'updatedDate' => 'getUpdatedDate',
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
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
        $this->container['buildDefinition'] = isset($data['buildDefinition']) ? $data['buildDefinition'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['previousBuild'] = isset($data['previousBuild']) ? $data['previousBuild'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['releaseEnvironmentDefinition'] = isset($data['releaseEnvironmentDefinition']) ? $data['releaseEnvironmentDefinition'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['rootSuite'] = isset($data['rootSuite']) ? $data['rootSuite'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['testOutcomeSettings'] = isset($data['testOutcomeSettings']) ? $data['testOutcomeSettings'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
        $this->container['updatedDate'] = isset($data['updatedDate']) ? $data['updatedDate'] : null;
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
     * Gets area
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $area Area of the test plan.
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets build
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getBuild()
    {
        return $this->container['build'];
    }

    /**
     * Sets build
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $build Build to be tested.
     *
     * @return $this
     */
    public function setBuild($build)
    {
        $this->container['build'] = $build;

        return $this;
    }

    /**
     * Gets buildDefinition
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getBuildDefinition()
    {
        return $this->container['buildDefinition'];
    }

    /**
     * Sets buildDefinition
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $buildDefinition The Build Definition that generates a build associated with this test plan.
     *
     * @return $this
     */
    public function setBuildDefinition($buildDefinition)
    {
        $this->container['buildDefinition'] = $buildDefinition;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the test plan.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime $endDate End date for the test plan.
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

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
     * @param int $id ID of the test plan.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets iteration
     *
     * @return string
     */
    public function getIteration()
    {
        return $this->container['iteration'];
    }

    /**
     * Sets iteration
     *
     * @param string $iteration Iteration path of the test plan.
     *
     * @return $this
     */
    public function setIteration($iteration)
    {
        $this->container['iteration'] = $iteration;

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
     * @param string $name Name of the test plan.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef $owner Owner of the test plan.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets previousBuild
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getPreviousBuild()
    {
        return $this->container['previousBuild'];
    }

    /**
     * Sets previousBuild
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $previousBuild previousBuild
     *
     * @return $this
     */
    public function setPreviousBuild($previousBuild)
    {
        $this->container['previousBuild'] = $previousBuild;

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
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $project Project which contains the test plan.
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets releaseEnvironmentDefinition
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ReleaseEnvironmentDefinitionReference
     */
    public function getReleaseEnvironmentDefinition()
    {
        return $this->container['releaseEnvironmentDefinition'];
    }

    /**
     * Sets releaseEnvironmentDefinition
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ReleaseEnvironmentDefinitionReference $releaseEnvironmentDefinition Release Environment to be used to deploy the build and run automated tests from this test plan.
     *
     * @return $this
     */
    public function setReleaseEnvironmentDefinition($releaseEnvironmentDefinition)
    {
        $this->container['releaseEnvironmentDefinition'] = $releaseEnvironmentDefinition;

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
     * @param int $revision Revision of the test plan.
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets rootSuite
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getRootSuite()
    {
        return $this->container['rootSuite'];
    }

    /**
     * Sets rootSuite
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $rootSuite Root test suite of the test plan.
     *
     * @return $this
     */
    public function setRootSuite($rootSuite)
    {
        $this->container['rootSuite'] = $rootSuite;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate Start date for the test plan.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

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
     * @param string $state State of the test plan.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets testOutcomeSettings
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestOutcomeSettings
     */
    public function getTestOutcomeSettings()
    {
        return $this->container['testOutcomeSettings'];
    }

    /**
     * Sets testOutcomeSettings
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestOutcomeSettings $testOutcomeSettings Value to configure how same tests across test suites under a test plan need to behave
     *
     * @return $this
     */
    public function setTestOutcomeSettings($testOutcomeSettings)
    {
        $this->container['testOutcomeSettings'] = $testOutcomeSettings;

        return $this;
    }

    /**
     * Gets updatedBy
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef
     */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
     * Sets updatedBy
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef $updatedBy updatedBy
     *
     * @return $this
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;

        return $this;
    }

    /**
     * Gets updatedDate
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->container['updatedDate'];
    }

    /**
     * Sets updatedDate
     *
     * @param \DateTime $updatedDate updatedDate
     *
     * @return $this
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->container['updatedDate'] = $updatedDate;

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
     * @param string $url URL of the test plan resource.
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


