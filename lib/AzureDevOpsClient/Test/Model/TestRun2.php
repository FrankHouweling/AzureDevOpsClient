<?php
/**
 * TestRun2
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
 * TestRun2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestRun2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestRun2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buildConfigurationId' => 'int',
        'buildNumber' => 'string',
        'comment' => 'string',
        'completeDate' => '\DateTime',
        'controller' => 'string',
        'coverageId' => 'int',
        'creationDate' => '\DateTime',
        'deletedOn' => '\DateTime',
        'dropLocation' => 'string',
        'dueDate' => '\DateTime',
        'errorMessage' => 'string',
        'incompleteTests' => 'int',
        'isAutomated' => 'bool',
        'isBvt' => 'bool',
        'isMigrated' => 'bool',
        'iterationId' => 'int',
        'lastUpdated' => '\DateTime',
        'lastUpdatedBy' => 'string',
        'legacySharePath' => 'string',
        'maxReservedResultId' => 'int',
        'notApplicableTests' => 'int',
        'owner' => 'string',
        'passedTests' => 'int',
        'postProcessState' => 'string',
        'projectId' => 'string',
        'publicTestSettingsId' => 'int',
        'releaseEnvironmentUri' => 'string',
        'releaseUri' => 'string',
        'revision' => 'int',
        'startDate' => '\DateTime',
        'state' => 'string',
        'testEnvironmentId' => 'string',
        'testMessageLogId' => 'int',
        'testPlanId' => 'int',
        'testRunContextId' => 'int',
        'testRunId' => 'int',
        'testSettingsId' => 'int',
        'title' => 'string',
        'totalTests' => 'int',
        'type' => 'string',
        'unanalyzedTests' => 'int',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buildConfigurationId' => 'int32',
        'buildNumber' => null,
        'comment' => null,
        'completeDate' => 'date-time',
        'controller' => null,
        'coverageId' => 'int32',
        'creationDate' => 'date-time',
        'deletedOn' => 'date-time',
        'dropLocation' => null,
        'dueDate' => 'date-time',
        'errorMessage' => null,
        'incompleteTests' => 'int32',
        'isAutomated' => null,
        'isBvt' => null,
        'isMigrated' => null,
        'iterationId' => 'int32',
        'lastUpdated' => 'date-time',
        'lastUpdatedBy' => 'uuid',
        'legacySharePath' => null,
        'maxReservedResultId' => 'int32',
        'notApplicableTests' => 'int32',
        'owner' => 'uuid',
        'passedTests' => 'int32',
        'postProcessState' => 'byte',
        'projectId' => 'uuid',
        'publicTestSettingsId' => 'int32',
        'releaseEnvironmentUri' => null,
        'releaseUri' => null,
        'revision' => 'int32',
        'startDate' => 'date-time',
        'state' => 'byte',
        'testEnvironmentId' => 'uuid',
        'testMessageLogId' => 'int32',
        'testPlanId' => 'int32',
        'testRunContextId' => 'int32',
        'testRunId' => 'int32',
        'testSettingsId' => 'int32',
        'title' => null,
        'totalTests' => 'int32',
        'type' => 'byte',
        'unanalyzedTests' => 'int32',
        'version' => 'int32'
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
        'buildConfigurationId' => 'buildConfigurationId',
        'buildNumber' => 'buildNumber',
        'comment' => 'comment',
        'completeDate' => 'completeDate',
        'controller' => 'controller',
        'coverageId' => 'coverageId',
        'creationDate' => 'creationDate',
        'deletedOn' => 'deletedOn',
        'dropLocation' => 'dropLocation',
        'dueDate' => 'dueDate',
        'errorMessage' => 'errorMessage',
        'incompleteTests' => 'incompleteTests',
        'isAutomated' => 'isAutomated',
        'isBvt' => 'isBvt',
        'isMigrated' => 'isMigrated',
        'iterationId' => 'iterationId',
        'lastUpdated' => 'lastUpdated',
        'lastUpdatedBy' => 'lastUpdatedBy',
        'legacySharePath' => 'legacySharePath',
        'maxReservedResultId' => 'maxReservedResultId',
        'notApplicableTests' => 'notApplicableTests',
        'owner' => 'owner',
        'passedTests' => 'passedTests',
        'postProcessState' => 'postProcessState',
        'projectId' => 'projectId',
        'publicTestSettingsId' => 'publicTestSettingsId',
        'releaseEnvironmentUri' => 'releaseEnvironmentUri',
        'releaseUri' => 'releaseUri',
        'revision' => 'revision',
        'startDate' => 'startDate',
        'state' => 'state',
        'testEnvironmentId' => 'testEnvironmentId',
        'testMessageLogId' => 'testMessageLogId',
        'testPlanId' => 'testPlanId',
        'testRunContextId' => 'testRunContextId',
        'testRunId' => 'testRunId',
        'testSettingsId' => 'testSettingsId',
        'title' => 'title',
        'totalTests' => 'totalTests',
        'type' => 'type',
        'unanalyzedTests' => 'unanalyzedTests',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buildConfigurationId' => 'setBuildConfigurationId',
        'buildNumber' => 'setBuildNumber',
        'comment' => 'setComment',
        'completeDate' => 'setCompleteDate',
        'controller' => 'setController',
        'coverageId' => 'setCoverageId',
        'creationDate' => 'setCreationDate',
        'deletedOn' => 'setDeletedOn',
        'dropLocation' => 'setDropLocation',
        'dueDate' => 'setDueDate',
        'errorMessage' => 'setErrorMessage',
        'incompleteTests' => 'setIncompleteTests',
        'isAutomated' => 'setIsAutomated',
        'isBvt' => 'setIsBvt',
        'isMigrated' => 'setIsMigrated',
        'iterationId' => 'setIterationId',
        'lastUpdated' => 'setLastUpdated',
        'lastUpdatedBy' => 'setLastUpdatedBy',
        'legacySharePath' => 'setLegacySharePath',
        'maxReservedResultId' => 'setMaxReservedResultId',
        'notApplicableTests' => 'setNotApplicableTests',
        'owner' => 'setOwner',
        'passedTests' => 'setPassedTests',
        'postProcessState' => 'setPostProcessState',
        'projectId' => 'setProjectId',
        'publicTestSettingsId' => 'setPublicTestSettingsId',
        'releaseEnvironmentUri' => 'setReleaseEnvironmentUri',
        'releaseUri' => 'setReleaseUri',
        'revision' => 'setRevision',
        'startDate' => 'setStartDate',
        'state' => 'setState',
        'testEnvironmentId' => 'setTestEnvironmentId',
        'testMessageLogId' => 'setTestMessageLogId',
        'testPlanId' => 'setTestPlanId',
        'testRunContextId' => 'setTestRunContextId',
        'testRunId' => 'setTestRunId',
        'testSettingsId' => 'setTestSettingsId',
        'title' => 'setTitle',
        'totalTests' => 'setTotalTests',
        'type' => 'setType',
        'unanalyzedTests' => 'setUnanalyzedTests',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buildConfigurationId' => 'getBuildConfigurationId',
        'buildNumber' => 'getBuildNumber',
        'comment' => 'getComment',
        'completeDate' => 'getCompleteDate',
        'controller' => 'getController',
        'coverageId' => 'getCoverageId',
        'creationDate' => 'getCreationDate',
        'deletedOn' => 'getDeletedOn',
        'dropLocation' => 'getDropLocation',
        'dueDate' => 'getDueDate',
        'errorMessage' => 'getErrorMessage',
        'incompleteTests' => 'getIncompleteTests',
        'isAutomated' => 'getIsAutomated',
        'isBvt' => 'getIsBvt',
        'isMigrated' => 'getIsMigrated',
        'iterationId' => 'getIterationId',
        'lastUpdated' => 'getLastUpdated',
        'lastUpdatedBy' => 'getLastUpdatedBy',
        'legacySharePath' => 'getLegacySharePath',
        'maxReservedResultId' => 'getMaxReservedResultId',
        'notApplicableTests' => 'getNotApplicableTests',
        'owner' => 'getOwner',
        'passedTests' => 'getPassedTests',
        'postProcessState' => 'getPostProcessState',
        'projectId' => 'getProjectId',
        'publicTestSettingsId' => 'getPublicTestSettingsId',
        'releaseEnvironmentUri' => 'getReleaseEnvironmentUri',
        'releaseUri' => 'getReleaseUri',
        'revision' => 'getRevision',
        'startDate' => 'getStartDate',
        'state' => 'getState',
        'testEnvironmentId' => 'getTestEnvironmentId',
        'testMessageLogId' => 'getTestMessageLogId',
        'testPlanId' => 'getTestPlanId',
        'testRunContextId' => 'getTestRunContextId',
        'testRunId' => 'getTestRunId',
        'testSettingsId' => 'getTestSettingsId',
        'title' => 'getTitle',
        'totalTests' => 'getTotalTests',
        'type' => 'getType',
        'unanalyzedTests' => 'getUnanalyzedTests',
        'version' => 'getVersion'
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
        $this->container['buildConfigurationId'] = isset($data['buildConfigurationId']) ? $data['buildConfigurationId'] : null;
        $this->container['buildNumber'] = isset($data['buildNumber']) ? $data['buildNumber'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['completeDate'] = isset($data['completeDate']) ? $data['completeDate'] : null;
        $this->container['controller'] = isset($data['controller']) ? $data['controller'] : null;
        $this->container['coverageId'] = isset($data['coverageId']) ? $data['coverageId'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['deletedOn'] = isset($data['deletedOn']) ? $data['deletedOn'] : null;
        $this->container['dropLocation'] = isset($data['dropLocation']) ? $data['dropLocation'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['incompleteTests'] = isset($data['incompleteTests']) ? $data['incompleteTests'] : null;
        $this->container['isAutomated'] = isset($data['isAutomated']) ? $data['isAutomated'] : null;
        $this->container['isBvt'] = isset($data['isBvt']) ? $data['isBvt'] : null;
        $this->container['isMigrated'] = isset($data['isMigrated']) ? $data['isMigrated'] : null;
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['lastUpdated'] = isset($data['lastUpdated']) ? $data['lastUpdated'] : null;
        $this->container['lastUpdatedBy'] = isset($data['lastUpdatedBy']) ? $data['lastUpdatedBy'] : null;
        $this->container['legacySharePath'] = isset($data['legacySharePath']) ? $data['legacySharePath'] : null;
        $this->container['maxReservedResultId'] = isset($data['maxReservedResultId']) ? $data['maxReservedResultId'] : null;
        $this->container['notApplicableTests'] = isset($data['notApplicableTests']) ? $data['notApplicableTests'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['passedTests'] = isset($data['passedTests']) ? $data['passedTests'] : null;
        $this->container['postProcessState'] = isset($data['postProcessState']) ? $data['postProcessState'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['publicTestSettingsId'] = isset($data['publicTestSettingsId']) ? $data['publicTestSettingsId'] : null;
        $this->container['releaseEnvironmentUri'] = isset($data['releaseEnvironmentUri']) ? $data['releaseEnvironmentUri'] : null;
        $this->container['releaseUri'] = isset($data['releaseUri']) ? $data['releaseUri'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['testEnvironmentId'] = isset($data['testEnvironmentId']) ? $data['testEnvironmentId'] : null;
        $this->container['testMessageLogId'] = isset($data['testMessageLogId']) ? $data['testMessageLogId'] : null;
        $this->container['testPlanId'] = isset($data['testPlanId']) ? $data['testPlanId'] : null;
        $this->container['testRunContextId'] = isset($data['testRunContextId']) ? $data['testRunContextId'] : null;
        $this->container['testRunId'] = isset($data['testRunId']) ? $data['testRunId'] : null;
        $this->container['testSettingsId'] = isset($data['testSettingsId']) ? $data['testSettingsId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['totalTests'] = isset($data['totalTests']) ? $data['totalTests'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unanalyzedTests'] = isset($data['unanalyzedTests']) ? $data['unanalyzedTests'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['postProcessState']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['postProcessState'])) {
            $invalidProperties[] = "invalid value for 'postProcessState', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['state']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['state'])) {
            $invalidProperties[] = "invalid value for 'state', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['type']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['type'])) {
            $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets buildConfigurationId
     *
     * @return int
     */
    public function getBuildConfigurationId()
    {
        return $this->container['buildConfigurationId'];
    }

    /**
     * Sets buildConfigurationId
     *
     * @param int $buildConfigurationId buildConfigurationId
     *
     * @return $this
     */
    public function setBuildConfigurationId($buildConfigurationId)
    {
        $this->container['buildConfigurationId'] = $buildConfigurationId;

        return $this;
    }

    /**
     * Gets buildNumber
     *
     * @return string
     */
    public function getBuildNumber()
    {
        return $this->container['buildNumber'];
    }

    /**
     * Sets buildNumber
     *
     * @param string $buildNumber buildNumber
     *
     * @return $this
     */
    public function setBuildNumber($buildNumber)
    {
        $this->container['buildNumber'] = $buildNumber;

        return $this;
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
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets completeDate
     *
     * @return \DateTime
     */
    public function getCompleteDate()
    {
        return $this->container['completeDate'];
    }

    /**
     * Sets completeDate
     *
     * @param \DateTime $completeDate completeDate
     *
     * @return $this
     */
    public function setCompleteDate($completeDate)
    {
        $this->container['completeDate'] = $completeDate;

        return $this;
    }

    /**
     * Gets controller
     *
     * @return string
     */
    public function getController()
    {
        return $this->container['controller'];
    }

    /**
     * Sets controller
     *
     * @param string $controller controller
     *
     * @return $this
     */
    public function setController($controller)
    {
        $this->container['controller'] = $controller;

        return $this;
    }

    /**
     * Gets coverageId
     *
     * @return int
     */
    public function getCoverageId()
    {
        return $this->container['coverageId'];
    }

    /**
     * Sets coverageId
     *
     * @param int $coverageId coverageId
     *
     * @return $this
     */
    public function setCoverageId($coverageId)
    {
        $this->container['coverageId'] = $coverageId;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime $creationDate creationDate
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets deletedOn
     *
     * @return \DateTime
     */
    public function getDeletedOn()
    {
        return $this->container['deletedOn'];
    }

    /**
     * Sets deletedOn
     *
     * @param \DateTime $deletedOn deletedOn
     *
     * @return $this
     */
    public function setDeletedOn($deletedOn)
    {
        $this->container['deletedOn'] = $deletedOn;

        return $this;
    }

    /**
     * Gets dropLocation
     *
     * @return string
     */
    public function getDropLocation()
    {
        return $this->container['dropLocation'];
    }

    /**
     * Sets dropLocation
     *
     * @param string $dropLocation dropLocation
     *
     * @return $this
     */
    public function setDropLocation($dropLocation)
    {
        $this->container['dropLocation'] = $dropLocation;

        return $this;
    }

    /**
     * Gets dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
     * Sets dueDate
     *
     * @param \DateTime $dueDate dueDate
     *
     * @return $this
     */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;

        return $this;
    }

    /**
     * Gets errorMessage
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
     * Sets errorMessage
     *
     * @param string $errorMessage errorMessage
     *
     * @return $this
     */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;

        return $this;
    }

    /**
     * Gets incompleteTests
     *
     * @return int
     */
    public function getIncompleteTests()
    {
        return $this->container['incompleteTests'];
    }

    /**
     * Sets incompleteTests
     *
     * @param int $incompleteTests incompleteTests
     *
     * @return $this
     */
    public function setIncompleteTests($incompleteTests)
    {
        $this->container['incompleteTests'] = $incompleteTests;

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
     * @param bool $isAutomated isAutomated
     *
     * @return $this
     */
    public function setIsAutomated($isAutomated)
    {
        $this->container['isAutomated'] = $isAutomated;

        return $this;
    }

    /**
     * Gets isBvt
     *
     * @return bool
     */
    public function getIsBvt()
    {
        return $this->container['isBvt'];
    }

    /**
     * Sets isBvt
     *
     * @param bool $isBvt isBvt
     *
     * @return $this
     */
    public function setIsBvt($isBvt)
    {
        $this->container['isBvt'] = $isBvt;

        return $this;
    }

    /**
     * Gets isMigrated
     *
     * @return bool
     */
    public function getIsMigrated()
    {
        return $this->container['isMigrated'];
    }

    /**
     * Sets isMigrated
     *
     * @param bool $isMigrated isMigrated
     *
     * @return $this
     */
    public function setIsMigrated($isMigrated)
    {
        $this->container['isMigrated'] = $isMigrated;

        return $this;
    }

    /**
     * Gets iterationId
     *
     * @return int
     */
    public function getIterationId()
    {
        return $this->container['iterationId'];
    }

    /**
     * Sets iterationId
     *
     * @param int $iterationId iterationId
     *
     * @return $this
     */
    public function setIterationId($iterationId)
    {
        $this->container['iterationId'] = $iterationId;

        return $this;
    }

    /**
     * Gets lastUpdated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->container['lastUpdated'];
    }

    /**
     * Sets lastUpdated
     *
     * @param \DateTime $lastUpdated lastUpdated
     *
     * @return $this
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->container['lastUpdated'] = $lastUpdated;

        return $this;
    }

    /**
     * Gets lastUpdatedBy
     *
     * @return string
     */
    public function getLastUpdatedBy()
    {
        return $this->container['lastUpdatedBy'];
    }

    /**
     * Sets lastUpdatedBy
     *
     * @param string $lastUpdatedBy lastUpdatedBy
     *
     * @return $this
     */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->container['lastUpdatedBy'] = $lastUpdatedBy;

        return $this;
    }

    /**
     * Gets legacySharePath
     *
     * @return string
     */
    public function getLegacySharePath()
    {
        return $this->container['legacySharePath'];
    }

    /**
     * Sets legacySharePath
     *
     * @param string $legacySharePath legacySharePath
     *
     * @return $this
     */
    public function setLegacySharePath($legacySharePath)
    {
        $this->container['legacySharePath'] = $legacySharePath;

        return $this;
    }

    /**
     * Gets maxReservedResultId
     *
     * @return int
     */
    public function getMaxReservedResultId()
    {
        return $this->container['maxReservedResultId'];
    }

    /**
     * Sets maxReservedResultId
     *
     * @param int $maxReservedResultId maxReservedResultId
     *
     * @return $this
     */
    public function setMaxReservedResultId($maxReservedResultId)
    {
        $this->container['maxReservedResultId'] = $maxReservedResultId;

        return $this;
    }

    /**
     * Gets notApplicableTests
     *
     * @return int
     */
    public function getNotApplicableTests()
    {
        return $this->container['notApplicableTests'];
    }

    /**
     * Sets notApplicableTests
     *
     * @param int $notApplicableTests notApplicableTests
     *
     * @return $this
     */
    public function setNotApplicableTests($notApplicableTests)
    {
        $this->container['notApplicableTests'] = $notApplicableTests;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets passedTests
     *
     * @return int
     */
    public function getPassedTests()
    {
        return $this->container['passedTests'];
    }

    /**
     * Sets passedTests
     *
     * @param int $passedTests passedTests
     *
     * @return $this
     */
    public function setPassedTests($passedTests)
    {
        $this->container['passedTests'] = $passedTests;

        return $this;
    }

    /**
     * Gets postProcessState
     *
     * @return string
     */
    public function getPostProcessState()
    {
        return $this->container['postProcessState'];
    }

    /**
     * Sets postProcessState
     *
     * @param string $postProcessState postProcessState
     *
     * @return $this
     */
    public function setPostProcessState($postProcessState)
    {

        if (!is_null($postProcessState) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $postProcessState))) {
            throw new \InvalidArgumentException("invalid value for $postProcessState when calling TestRun2., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['postProcessState'] = $postProcessState;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param string $projectId projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets publicTestSettingsId
     *
     * @return int
     */
    public function getPublicTestSettingsId()
    {
        return $this->container['publicTestSettingsId'];
    }

    /**
     * Sets publicTestSettingsId
     *
     * @param int $publicTestSettingsId publicTestSettingsId
     *
     * @return $this
     */
    public function setPublicTestSettingsId($publicTestSettingsId)
    {
        $this->container['publicTestSettingsId'] = $publicTestSettingsId;

        return $this;
    }

    /**
     * Gets releaseEnvironmentUri
     *
     * @return string
     */
    public function getReleaseEnvironmentUri()
    {
        return $this->container['releaseEnvironmentUri'];
    }

    /**
     * Sets releaseEnvironmentUri
     *
     * @param string $releaseEnvironmentUri releaseEnvironmentUri
     *
     * @return $this
     */
    public function setReleaseEnvironmentUri($releaseEnvironmentUri)
    {
        $this->container['releaseEnvironmentUri'] = $releaseEnvironmentUri;

        return $this;
    }

    /**
     * Gets releaseUri
     *
     * @return string
     */
    public function getReleaseUri()
    {
        return $this->container['releaseUri'];
    }

    /**
     * Sets releaseUri
     *
     * @param string $releaseUri releaseUri
     *
     * @return $this
     */
    public function setReleaseUri($releaseUri)
    {
        $this->container['releaseUri'] = $releaseUri;

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
     * @param int $revision revision
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

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
     * @param \DateTime $startDate startDate
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
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {

        if (!is_null($state) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $state))) {
            throw new \InvalidArgumentException("invalid value for $state when calling TestRun2., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets testEnvironmentId
     *
     * @return string
     */
    public function getTestEnvironmentId()
    {
        return $this->container['testEnvironmentId'];
    }

    /**
     * Sets testEnvironmentId
     *
     * @param string $testEnvironmentId testEnvironmentId
     *
     * @return $this
     */
    public function setTestEnvironmentId($testEnvironmentId)
    {
        $this->container['testEnvironmentId'] = $testEnvironmentId;

        return $this;
    }

    /**
     * Gets testMessageLogId
     *
     * @return int
     */
    public function getTestMessageLogId()
    {
        return $this->container['testMessageLogId'];
    }

    /**
     * Sets testMessageLogId
     *
     * @param int $testMessageLogId testMessageLogId
     *
     * @return $this
     */
    public function setTestMessageLogId($testMessageLogId)
    {
        $this->container['testMessageLogId'] = $testMessageLogId;

        return $this;
    }

    /**
     * Gets testPlanId
     *
     * @return int
     */
    public function getTestPlanId()
    {
        return $this->container['testPlanId'];
    }

    /**
     * Sets testPlanId
     *
     * @param int $testPlanId testPlanId
     *
     * @return $this
     */
    public function setTestPlanId($testPlanId)
    {
        $this->container['testPlanId'] = $testPlanId;

        return $this;
    }

    /**
     * Gets testRunContextId
     *
     * @return int
     */
    public function getTestRunContextId()
    {
        return $this->container['testRunContextId'];
    }

    /**
     * Sets testRunContextId
     *
     * @param int $testRunContextId testRunContextId
     *
     * @return $this
     */
    public function setTestRunContextId($testRunContextId)
    {
        $this->container['testRunContextId'] = $testRunContextId;

        return $this;
    }

    /**
     * Gets testRunId
     *
     * @return int
     */
    public function getTestRunId()
    {
        return $this->container['testRunId'];
    }

    /**
     * Sets testRunId
     *
     * @param int $testRunId testRunId
     *
     * @return $this
     */
    public function setTestRunId($testRunId)
    {
        $this->container['testRunId'] = $testRunId;

        return $this;
    }

    /**
     * Gets testSettingsId
     *
     * @return int
     */
    public function getTestSettingsId()
    {
        return $this->container['testSettingsId'];
    }

    /**
     * Sets testSettingsId
     *
     * @param int $testSettingsId testSettingsId
     *
     * @return $this
     */
    public function setTestSettingsId($testSettingsId)
    {
        $this->container['testSettingsId'] = $testSettingsId;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {

        if (!is_null($type) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $type))) {
            throw new \InvalidArgumentException("invalid value for $type when calling TestRun2., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets unanalyzedTests
     *
     * @return int
     */
    public function getUnanalyzedTests()
    {
        return $this->container['unanalyzedTests'];
    }

    /**
     * Sets unanalyzedTests
     *
     * @param int $unanalyzedTests unanalyzedTests
     *
     * @return $this
     */
    public function setUnanalyzedTests($unanalyzedTests)
    {
        $this->container['unanalyzedTests'] = $unanalyzedTests;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


