<?php
/**
 * RunUpdateModel
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
 * RunUpdateModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RunUpdateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RunUpdateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'build' => '\AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference',
        'buildDropLocation' => 'string',
        'buildFlavor' => 'string',
        'buildPlatform' => 'string',
        'comment' => 'string',
        'completedDate' => 'string',
        'controller' => 'string',
        'deleteInProgressResults' => 'bool',
        'dtlAutEnvironment' => '\AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference',
        'dtlEnvironment' => '\AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference',
        'dtlEnvironmentDetails' => '\AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\DtlEnvironmentDetails',
        'dueDate' => 'string',
        'errorMessage' => 'string',
        'iteration' => 'string',
        'logEntries' => '\AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\TestMessageLogDetails[]',
        'name' => 'string',
        'releaseEnvironmentUri' => 'string',
        'releaseUri' => 'string',
        'runSummary' => '\AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\RunSummaryModel[]',
        'sourceWorkflow' => 'string',
        'startedDate' => 'string',
        'state' => 'string',
        'substate' => 'string',
        'tags' => '\AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\TestTag[]',
        'testEnvironmentId' => 'string',
        'testSettings' => '\AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'build' => null,
        'buildDropLocation' => null,
        'buildFlavor' => null,
        'buildPlatform' => null,
        'comment' => null,
        'completedDate' => null,
        'controller' => null,
        'deleteInProgressResults' => null,
        'dtlAutEnvironment' => null,
        'dtlEnvironment' => null,
        'dtlEnvironmentDetails' => null,
        'dueDate' => null,
        'errorMessage' => null,
        'iteration' => null,
        'logEntries' => null,
        'name' => null,
        'releaseEnvironmentUri' => null,
        'releaseUri' => null,
        'runSummary' => null,
        'sourceWorkflow' => null,
        'startedDate' => null,
        'state' => null,
        'substate' => null,
        'tags' => null,
        'testEnvironmentId' => null,
        'testSettings' => null
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
        'build' => 'build',
        'buildDropLocation' => 'buildDropLocation',
        'buildFlavor' => 'buildFlavor',
        'buildPlatform' => 'buildPlatform',
        'comment' => 'comment',
        'completedDate' => 'completedDate',
        'controller' => 'controller',
        'deleteInProgressResults' => 'deleteInProgressResults',
        'dtlAutEnvironment' => 'dtlAutEnvironment',
        'dtlEnvironment' => 'dtlEnvironment',
        'dtlEnvironmentDetails' => 'dtlEnvironmentDetails',
        'dueDate' => 'dueDate',
        'errorMessage' => 'errorMessage',
        'iteration' => 'iteration',
        'logEntries' => 'logEntries',
        'name' => 'name',
        'releaseEnvironmentUri' => 'releaseEnvironmentUri',
        'releaseUri' => 'releaseUri',
        'runSummary' => 'runSummary',
        'sourceWorkflow' => 'sourceWorkflow',
        'startedDate' => 'startedDate',
        'state' => 'state',
        'substate' => 'substate',
        'tags' => 'tags',
        'testEnvironmentId' => 'testEnvironmentId',
        'testSettings' => 'testSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'build' => 'setBuild',
        'buildDropLocation' => 'setBuildDropLocation',
        'buildFlavor' => 'setBuildFlavor',
        'buildPlatform' => 'setBuildPlatform',
        'comment' => 'setComment',
        'completedDate' => 'setCompletedDate',
        'controller' => 'setController',
        'deleteInProgressResults' => 'setDeleteInProgressResults',
        'dtlAutEnvironment' => 'setDtlAutEnvironment',
        'dtlEnvironment' => 'setDtlEnvironment',
        'dtlEnvironmentDetails' => 'setDtlEnvironmentDetails',
        'dueDate' => 'setDueDate',
        'errorMessage' => 'setErrorMessage',
        'iteration' => 'setIteration',
        'logEntries' => 'setLogEntries',
        'name' => 'setName',
        'releaseEnvironmentUri' => 'setReleaseEnvironmentUri',
        'releaseUri' => 'setReleaseUri',
        'runSummary' => 'setRunSummary',
        'sourceWorkflow' => 'setSourceWorkflow',
        'startedDate' => 'setStartedDate',
        'state' => 'setState',
        'substate' => 'setSubstate',
        'tags' => 'setTags',
        'testEnvironmentId' => 'setTestEnvironmentId',
        'testSettings' => 'setTestSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'build' => 'getBuild',
        'buildDropLocation' => 'getBuildDropLocation',
        'buildFlavor' => 'getBuildFlavor',
        'buildPlatform' => 'getBuildPlatform',
        'comment' => 'getComment',
        'completedDate' => 'getCompletedDate',
        'controller' => 'getController',
        'deleteInProgressResults' => 'getDeleteInProgressResults',
        'dtlAutEnvironment' => 'getDtlAutEnvironment',
        'dtlEnvironment' => 'getDtlEnvironment',
        'dtlEnvironmentDetails' => 'getDtlEnvironmentDetails',
        'dueDate' => 'getDueDate',
        'errorMessage' => 'getErrorMessage',
        'iteration' => 'getIteration',
        'logEntries' => 'getLogEntries',
        'name' => 'getName',
        'releaseEnvironmentUri' => 'getReleaseEnvironmentUri',
        'releaseUri' => 'getReleaseUri',
        'runSummary' => 'getRunSummary',
        'sourceWorkflow' => 'getSourceWorkflow',
        'startedDate' => 'getStartedDate',
        'state' => 'getState',
        'substate' => 'getSubstate',
        'tags' => 'getTags',
        'testEnvironmentId' => 'getTestEnvironmentId',
        'testSettings' => 'getTestSettings'
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

    const SUBSTATE_NONE = 'none';
    const SUBSTATE_CREATING_ENVIRONMENT = 'creatingEnvironment';
    const SUBSTATE_RUNNING_TESTS = 'runningTests';
    const SUBSTATE_CANCELED_BY_USER = 'canceledByUser';
    const SUBSTATE_ABORTED_BY_SYSTEM = 'abortedBySystem';
    const SUBSTATE_TIMED_OUT = 'timedOut';
    const SUBSTATE_PENDING_ANALYSIS = 'pendingAnalysis';
    const SUBSTATE_ANALYZED = 'analyzed';
    const SUBSTATE_CANCELLATION_IN_PROGRESS = 'cancellationInProgress';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubstateAllowableValues()
    {
        return [
            self::SUBSTATE_NONE,
            self::SUBSTATE_CREATING_ENVIRONMENT,
            self::SUBSTATE_RUNNING_TESTS,
            self::SUBSTATE_CANCELED_BY_USER,
            self::SUBSTATE_ABORTED_BY_SYSTEM,
            self::SUBSTATE_TIMED_OUT,
            self::SUBSTATE_PENDING_ANALYSIS,
            self::SUBSTATE_ANALYZED,
            self::SUBSTATE_CANCELLATION_IN_PROGRESS,
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
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
        $this->container['buildDropLocation'] = isset($data['buildDropLocation']) ? $data['buildDropLocation'] : null;
        $this->container['buildFlavor'] = isset($data['buildFlavor']) ? $data['buildFlavor'] : null;
        $this->container['buildPlatform'] = isset($data['buildPlatform']) ? $data['buildPlatform'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['completedDate'] = isset($data['completedDate']) ? $data['completedDate'] : null;
        $this->container['controller'] = isset($data['controller']) ? $data['controller'] : null;
        $this->container['deleteInProgressResults'] = isset($data['deleteInProgressResults']) ? $data['deleteInProgressResults'] : null;
        $this->container['dtlAutEnvironment'] = isset($data['dtlAutEnvironment']) ? $data['dtlAutEnvironment'] : null;
        $this->container['dtlEnvironment'] = isset($data['dtlEnvironment']) ? $data['dtlEnvironment'] : null;
        $this->container['dtlEnvironmentDetails'] = isset($data['dtlEnvironmentDetails']) ? $data['dtlEnvironmentDetails'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
        $this->container['logEntries'] = isset($data['logEntries']) ? $data['logEntries'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['releaseEnvironmentUri'] = isset($data['releaseEnvironmentUri']) ? $data['releaseEnvironmentUri'] : null;
        $this->container['releaseUri'] = isset($data['releaseUri']) ? $data['releaseUri'] : null;
        $this->container['runSummary'] = isset($data['runSummary']) ? $data['runSummary'] : null;
        $this->container['sourceWorkflow'] = isset($data['sourceWorkflow']) ? $data['sourceWorkflow'] : null;
        $this->container['startedDate'] = isset($data['startedDate']) ? $data['startedDate'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['substate'] = isset($data['substate']) ? $data['substate'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['testEnvironmentId'] = isset($data['testEnvironmentId']) ? $data['testEnvironmentId'] : null;
        $this->container['testSettings'] = isset($data['testSettings']) ? $data['testSettings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSubstateAllowableValues();
        if (!is_null($this->container['substate']) && !in_array($this->container['substate'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'substate', must be one of '%s'",
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
     * Gets build
     *
     * @return \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference
     */
    public function getBuild()
    {
        return $this->container['build'];
    }

    /**
     * Sets build
     *
     * @param \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference $build An abstracted reference to the build that it belongs.
     *
     * @return $this
     */
    public function setBuild($build)
    {
        $this->container['build'] = $build;

        return $this;
    }

    /**
     * Gets buildDropLocation
     *
     * @return string
     */
    public function getBuildDropLocation()
    {
        return $this->container['buildDropLocation'];
    }

    /**
     * Sets buildDropLocation
     *
     * @param string $buildDropLocation Drop location of the build used for test run.
     *
     * @return $this
     */
    public function setBuildDropLocation($buildDropLocation)
    {
        $this->container['buildDropLocation'] = $buildDropLocation;

        return $this;
    }

    /**
     * Gets buildFlavor
     *
     * @return string
     */
    public function getBuildFlavor()
    {
        return $this->container['buildFlavor'];
    }

    /**
     * Sets buildFlavor
     *
     * @param string $buildFlavor Flavor of the build used for test run. (E.g: Release, Debug)
     *
     * @return $this
     */
    public function setBuildFlavor($buildFlavor)
    {
        $this->container['buildFlavor'] = $buildFlavor;

        return $this;
    }

    /**
     * Gets buildPlatform
     *
     * @return string
     */
    public function getBuildPlatform()
    {
        return $this->container['buildPlatform'];
    }

    /**
     * Sets buildPlatform
     *
     * @param string $buildPlatform Platform of the build used for test run. (E.g.: x86, amd64)
     *
     * @return $this
     */
    public function setBuildPlatform($buildPlatform)
    {
        $this->container['buildPlatform'] = $buildPlatform;

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
     * @param string $comment Comments entered by those analyzing the run.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets completedDate
     *
     * @return string
     */
    public function getCompletedDate()
    {
        return $this->container['completedDate'];
    }

    /**
     * Sets completedDate
     *
     * @param string $completedDate Completed date time of the run.
     *
     * @return $this
     */
    public function setCompletedDate($completedDate)
    {
        $this->container['completedDate'] = $completedDate;

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
     * @param string $controller Name of the test controller used for automated run.
     *
     * @return $this
     */
    public function setController($controller)
    {
        $this->container['controller'] = $controller;

        return $this;
    }

    /**
     * Gets deleteInProgressResults
     *
     * @return bool
     */
    public function getDeleteInProgressResults()
    {
        return $this->container['deleteInProgressResults'];
    }

    /**
     * Sets deleteInProgressResults
     *
     * @param bool $deleteInProgressResults true to delete inProgess Results , false otherwise.
     *
     * @return $this
     */
    public function setDeleteInProgressResults($deleteInProgressResults)
    {
        $this->container['deleteInProgressResults'] = $deleteInProgressResults;

        return $this;
    }

    /**
     * Gets dtlAutEnvironment
     *
     * @return \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference
     */
    public function getDtlAutEnvironment()
    {
        return $this->container['dtlAutEnvironment'];
    }

    /**
     * Sets dtlAutEnvironment
     *
     * @param \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference $dtlAutEnvironment An abstracted reference to DtlAutEnvironment.
     *
     * @return $this
     */
    public function setDtlAutEnvironment($dtlAutEnvironment)
    {
        $this->container['dtlAutEnvironment'] = $dtlAutEnvironment;

        return $this;
    }

    /**
     * Gets dtlEnvironment
     *
     * @return \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference
     */
    public function getDtlEnvironment()
    {
        return $this->container['dtlEnvironment'];
    }

    /**
     * Sets dtlEnvironment
     *
     * @param \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference $dtlEnvironment An abstracted reference to DtlEnvironment.
     *
     * @return $this
     */
    public function setDtlEnvironment($dtlEnvironment)
    {
        $this->container['dtlEnvironment'] = $dtlEnvironment;

        return $this;
    }

    /**
     * Gets dtlEnvironmentDetails
     *
     * @return \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\DtlEnvironmentDetails
     */
    public function getDtlEnvironmentDetails()
    {
        return $this->container['dtlEnvironmentDetails'];
    }

    /**
     * Sets dtlEnvironmentDetails
     *
     * @param \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\DtlEnvironmentDetails $dtlEnvironmentDetails dtlEnvironmentDetails
     *
     * @return $this
     */
    public function setDtlEnvironmentDetails($dtlEnvironmentDetails)
    {
        $this->container['dtlEnvironmentDetails'] = $dtlEnvironmentDetails;

        return $this;
    }

    /**
     * Gets dueDate
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
     * Sets dueDate
     *
     * @param string $dueDate Due date and time for test run.
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
     * @param string $errorMessage Error message associated with the run.
     *
     * @return $this
     */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;

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
     * @param string $iteration The iteration in which to create the run.
     *
     * @return $this
     */
    public function setIteration($iteration)
    {
        $this->container['iteration'] = $iteration;

        return $this;
    }

    /**
     * Gets logEntries
     *
     * @return \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\TestMessageLogDetails[]
     */
    public function getLogEntries()
    {
        return $this->container['logEntries'];
    }

    /**
     * Sets logEntries
     *
     * @param \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\TestMessageLogDetails[] $logEntries Log entries associated with the run. Use a comma-separated list of multiple log entry objects. { logEntry }, { logEntry }, ...
     *
     * @return $this
     */
    public function setLogEntries($logEntries)
    {
        $this->container['logEntries'] = $logEntries;

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
     * @param string $name Name of the test run.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $releaseEnvironmentUri URI of release environment associated with the run.
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
     * @param string $releaseUri URI of release associated with the run.
     *
     * @return $this
     */
    public function setReleaseUri($releaseUri)
    {
        $this->container['releaseUri'] = $releaseUri;

        return $this;
    }

    /**
     * Gets runSummary
     *
     * @return \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\RunSummaryModel[]
     */
    public function getRunSummary()
    {
        return $this->container['runSummary'];
    }

    /**
     * Sets runSummary
     *
     * @param \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\RunSummaryModel[] $runSummary Run summary for run Type = NoConfigRun.
     *
     * @return $this
     */
    public function setRunSummary($runSummary)
    {
        $this->container['runSummary'] = $runSummary;

        return $this;
    }

    /**
     * Gets sourceWorkflow
     *
     * @return string
     */
    public function getSourceWorkflow()
    {
        return $this->container['sourceWorkflow'];
    }

    /**
     * Sets sourceWorkflow
     *
     * @param string $sourceWorkflow SourceWorkFlow(CI/CD) of the test run.
     *
     * @return $this
     */
    public function setSourceWorkflow($sourceWorkflow)
    {
        $this->container['sourceWorkflow'] = $sourceWorkflow;

        return $this;
    }

    /**
     * Gets startedDate
     *
     * @return string
     */
    public function getStartedDate()
    {
        return $this->container['startedDate'];
    }

    /**
     * Sets startedDate
     *
     * @param string $startedDate Start date time of the run.
     *
     * @return $this
     */
    public function setStartedDate($startedDate)
    {
        $this->container['startedDate'] = $startedDate;

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
     * @param string $state The state of the test run Below are the valid values - NotStarted, InProgress, Completed, Aborted, Waiting
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets substate
     *
     * @return string
     */
    public function getSubstate()
    {
        return $this->container['substate'];
    }

    /**
     * Sets substate
     *
     * @param string $substate The types of sub states for test run.
     *
     * @return $this
     */
    public function setSubstate($substate)
    {
        $allowedValues = $this->getSubstateAllowableValues();
        if (!is_null($substate) && !in_array($substate, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'substate', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['substate'] = $substate;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\TestTag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\TestTag[] $tags Tags to attach with the test run.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * @param string $testEnvironmentId ID of the test environment associated with the run.
     *
     * @return $this
     */
    public function setTestEnvironmentId($testEnvironmentId)
    {
        $this->container['testEnvironmentId'] = $testEnvironmentId;

        return $this;
    }

    /**
     * Gets testSettings
     *
     * @return \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference
     */
    public function getTestSettings()
    {
        return $this->container['testSettings'];
    }

    /**
     * Sets testSettings
     *
     * @param \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\ShallowReference $testSettings An abstracted reference to test setting resource.
     *
     * @return $this
     */
    public function setTestSettings($testSettings)
    {
        $this->container['testSettings'] = $testSettings;

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


