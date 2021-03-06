<?php
/**
 * TestResultCreateModel
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
 * TestResultCreateModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestResultCreateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestResultCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'area' => '\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference',
        'associatedWorkItems' => 'int[]',
        'automatedTestId' => 'string',
        'automatedTestName' => 'string',
        'automatedTestStorage' => 'string',
        'automatedTestType' => 'string',
        'automatedTestTypeId' => 'string',
        'comment' => 'string',
        'completedDate' => 'string',
        'computerName' => 'string',
        'configuration' => '\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference',
        'customFields' => '\FrankHouweling\AzureDevOpsClient\Test\Model\CustomTestField[]',
        'durationInMs' => 'string',
        'errorMessage' => 'string',
        'failureType' => 'string',
        'outcome' => 'string',
        'owner' => '\FrankHouweling\AzureDevOpsClient\Test\Model\IdentityRef',
        'resolutionState' => 'string',
        'runBy' => '\FrankHouweling\AzureDevOpsClient\Test\Model\IdentityRef',
        'stackTrace' => 'string',
        'startedDate' => 'string',
        'state' => 'string',
        'testCase' => '\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference',
        'testCasePriority' => 'string',
        'testCaseTitle' => 'string',
        'testPoint' => '\FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'area' => null,
        'associatedWorkItems' => 'int32',
        'automatedTestId' => null,
        'automatedTestName' => null,
        'automatedTestStorage' => null,
        'automatedTestType' => null,
        'automatedTestTypeId' => null,
        'comment' => null,
        'completedDate' => null,
        'computerName' => null,
        'configuration' => null,
        'customFields' => null,
        'durationInMs' => null,
        'errorMessage' => null,
        'failureType' => null,
        'outcome' => null,
        'owner' => null,
        'resolutionState' => null,
        'runBy' => null,
        'stackTrace' => null,
        'startedDate' => null,
        'state' => null,
        'testCase' => null,
        'testCasePriority' => null,
        'testCaseTitle' => null,
        'testPoint' => null
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
        'associatedWorkItems' => 'associatedWorkItems',
        'automatedTestId' => 'automatedTestId',
        'automatedTestName' => 'automatedTestName',
        'automatedTestStorage' => 'automatedTestStorage',
        'automatedTestType' => 'automatedTestType',
        'automatedTestTypeId' => 'automatedTestTypeId',
        'comment' => 'comment',
        'completedDate' => 'completedDate',
        'computerName' => 'computerName',
        'configuration' => 'configuration',
        'customFields' => 'customFields',
        'durationInMs' => 'durationInMs',
        'errorMessage' => 'errorMessage',
        'failureType' => 'failureType',
        'outcome' => 'outcome',
        'owner' => 'owner',
        'resolutionState' => 'resolutionState',
        'runBy' => 'runBy',
        'stackTrace' => 'stackTrace',
        'startedDate' => 'startedDate',
        'state' => 'state',
        'testCase' => 'testCase',
        'testCasePriority' => 'testCasePriority',
        'testCaseTitle' => 'testCaseTitle',
        'testPoint' => 'testPoint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area' => 'setArea',
        'associatedWorkItems' => 'setAssociatedWorkItems',
        'automatedTestId' => 'setAutomatedTestId',
        'automatedTestName' => 'setAutomatedTestName',
        'automatedTestStorage' => 'setAutomatedTestStorage',
        'automatedTestType' => 'setAutomatedTestType',
        'automatedTestTypeId' => 'setAutomatedTestTypeId',
        'comment' => 'setComment',
        'completedDate' => 'setCompletedDate',
        'computerName' => 'setComputerName',
        'configuration' => 'setConfiguration',
        'customFields' => 'setCustomFields',
        'durationInMs' => 'setDurationInMs',
        'errorMessage' => 'setErrorMessage',
        'failureType' => 'setFailureType',
        'outcome' => 'setOutcome',
        'owner' => 'setOwner',
        'resolutionState' => 'setResolutionState',
        'runBy' => 'setRunBy',
        'stackTrace' => 'setStackTrace',
        'startedDate' => 'setStartedDate',
        'state' => 'setState',
        'testCase' => 'setTestCase',
        'testCasePriority' => 'setTestCasePriority',
        'testCaseTitle' => 'setTestCaseTitle',
        'testPoint' => 'setTestPoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area' => 'getArea',
        'associatedWorkItems' => 'getAssociatedWorkItems',
        'automatedTestId' => 'getAutomatedTestId',
        'automatedTestName' => 'getAutomatedTestName',
        'automatedTestStorage' => 'getAutomatedTestStorage',
        'automatedTestType' => 'getAutomatedTestType',
        'automatedTestTypeId' => 'getAutomatedTestTypeId',
        'comment' => 'getComment',
        'completedDate' => 'getCompletedDate',
        'computerName' => 'getComputerName',
        'configuration' => 'getConfiguration',
        'customFields' => 'getCustomFields',
        'durationInMs' => 'getDurationInMs',
        'errorMessage' => 'getErrorMessage',
        'failureType' => 'getFailureType',
        'outcome' => 'getOutcome',
        'owner' => 'getOwner',
        'resolutionState' => 'getResolutionState',
        'runBy' => 'getRunBy',
        'stackTrace' => 'getStackTrace',
        'startedDate' => 'getStartedDate',
        'state' => 'getState',
        'testCase' => 'getTestCase',
        'testCasePriority' => 'getTestCasePriority',
        'testCaseTitle' => 'getTestCaseTitle',
        'testPoint' => 'getTestPoint'
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
        $this->container['associatedWorkItems'] = isset($data['associatedWorkItems']) ? $data['associatedWorkItems'] : null;
        $this->container['automatedTestId'] = isset($data['automatedTestId']) ? $data['automatedTestId'] : null;
        $this->container['automatedTestName'] = isset($data['automatedTestName']) ? $data['automatedTestName'] : null;
        $this->container['automatedTestStorage'] = isset($data['automatedTestStorage']) ? $data['automatedTestStorage'] : null;
        $this->container['automatedTestType'] = isset($data['automatedTestType']) ? $data['automatedTestType'] : null;
        $this->container['automatedTestTypeId'] = isset($data['automatedTestTypeId']) ? $data['automatedTestTypeId'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['completedDate'] = isset($data['completedDate']) ? $data['completedDate'] : null;
        $this->container['computerName'] = isset($data['computerName']) ? $data['computerName'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['customFields'] = isset($data['customFields']) ? $data['customFields'] : null;
        $this->container['durationInMs'] = isset($data['durationInMs']) ? $data['durationInMs'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['failureType'] = isset($data['failureType']) ? $data['failureType'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['resolutionState'] = isset($data['resolutionState']) ? $data['resolutionState'] : null;
        $this->container['runBy'] = isset($data['runBy']) ? $data['runBy'] : null;
        $this->container['stackTrace'] = isset($data['stackTrace']) ? $data['stackTrace'] : null;
        $this->container['startedDate'] = isset($data['startedDate']) ? $data['startedDate'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['testCase'] = isset($data['testCase']) ? $data['testCase'] : null;
        $this->container['testCasePriority'] = isset($data['testCasePriority']) ? $data['testCasePriority'] : null;
        $this->container['testCaseTitle'] = isset($data['testCaseTitle']) ? $data['testCaseTitle'] : null;
        $this->container['testPoint'] = isset($data['testPoint']) ? $data['testPoint'] : null;
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
     * @return \FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param \FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference $area area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets associatedWorkItems
     *
     * @return int[]
     */
    public function getAssociatedWorkItems()
    {
        return $this->container['associatedWorkItems'];
    }

    /**
     * Sets associatedWorkItems
     *
     * @param int[] $associatedWorkItems associatedWorkItems
     *
     * @return $this
     */
    public function setAssociatedWorkItems($associatedWorkItems)
    {
        $this->container['associatedWorkItems'] = $associatedWorkItems;

        return $this;
    }

    /**
     * Gets automatedTestId
     *
     * @return string
     */
    public function getAutomatedTestId()
    {
        return $this->container['automatedTestId'];
    }

    /**
     * Sets automatedTestId
     *
     * @param string $automatedTestId automatedTestId
     *
     * @return $this
     */
    public function setAutomatedTestId($automatedTestId)
    {
        $this->container['automatedTestId'] = $automatedTestId;

        return $this;
    }

    /**
     * Gets automatedTestName
     *
     * @return string
     */
    public function getAutomatedTestName()
    {
        return $this->container['automatedTestName'];
    }

    /**
     * Sets automatedTestName
     *
     * @param string $automatedTestName automatedTestName
     *
     * @return $this
     */
    public function setAutomatedTestName($automatedTestName)
    {
        $this->container['automatedTestName'] = $automatedTestName;

        return $this;
    }

    /**
     * Gets automatedTestStorage
     *
     * @return string
     */
    public function getAutomatedTestStorage()
    {
        return $this->container['automatedTestStorage'];
    }

    /**
     * Sets automatedTestStorage
     *
     * @param string $automatedTestStorage automatedTestStorage
     *
     * @return $this
     */
    public function setAutomatedTestStorage($automatedTestStorage)
    {
        $this->container['automatedTestStorage'] = $automatedTestStorage;

        return $this;
    }

    /**
     * Gets automatedTestType
     *
     * @return string
     */
    public function getAutomatedTestType()
    {
        return $this->container['automatedTestType'];
    }

    /**
     * Sets automatedTestType
     *
     * @param string $automatedTestType automatedTestType
     *
     * @return $this
     */
    public function setAutomatedTestType($automatedTestType)
    {
        $this->container['automatedTestType'] = $automatedTestType;

        return $this;
    }

    /**
     * Gets automatedTestTypeId
     *
     * @return string
     */
    public function getAutomatedTestTypeId()
    {
        return $this->container['automatedTestTypeId'];
    }

    /**
     * Sets automatedTestTypeId
     *
     * @param string $automatedTestTypeId automatedTestTypeId
     *
     * @return $this
     */
    public function setAutomatedTestTypeId($automatedTestTypeId)
    {
        $this->container['automatedTestTypeId'] = $automatedTestTypeId;

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
     * @param string $completedDate completedDate
     *
     * @return $this
     */
    public function setCompletedDate($completedDate)
    {
        $this->container['completedDate'] = $completedDate;

        return $this;
    }

    /**
     * Gets computerName
     *
     * @return string
     */
    public function getComputerName()
    {
        return $this->container['computerName'];
    }

    /**
     * Sets computerName
     *
     * @param string $computerName computerName
     *
     * @return $this
     */
    public function setComputerName($computerName)
    {
        $this->container['computerName'] = $computerName;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference $configuration configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets customFields
     *
     * @return \FrankHouweling\AzureDevOpsClient\Test\Model\CustomTestField[]
     */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
     * Sets customFields
     *
     * @param \FrankHouweling\AzureDevOpsClient\Test\Model\CustomTestField[] $customFields customFields
     *
     * @return $this
     */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;

        return $this;
    }

    /**
     * Gets durationInMs
     *
     * @return string
     */
    public function getDurationInMs()
    {
        return $this->container['durationInMs'];
    }

    /**
     * Sets durationInMs
     *
     * @param string $durationInMs durationInMs
     *
     * @return $this
     */
    public function setDurationInMs($durationInMs)
    {
        $this->container['durationInMs'] = $durationInMs;

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
     * Gets failureType
     *
     * @return string
     */
    public function getFailureType()
    {
        return $this->container['failureType'];
    }

    /**
     * Sets failureType
     *
     * @param string $failureType failureType
     *
     * @return $this
     */
    public function setFailureType($failureType)
    {
        $this->container['failureType'] = $failureType;

        return $this;
    }

    /**
     * Gets outcome
     *
     * @return string
     */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param string $outcome outcome
     *
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \FrankHouweling\AzureDevOpsClient\Test\Model\IdentityRef
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \FrankHouweling\AzureDevOpsClient\Test\Model\IdentityRef $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets resolutionState
     *
     * @return string
     */
    public function getResolutionState()
    {
        return $this->container['resolutionState'];
    }

    /**
     * Sets resolutionState
     *
     * @param string $resolutionState resolutionState
     *
     * @return $this
     */
    public function setResolutionState($resolutionState)
    {
        $this->container['resolutionState'] = $resolutionState;

        return $this;
    }

    /**
     * Gets runBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Test\Model\IdentityRef
     */
    public function getRunBy()
    {
        return $this->container['runBy'];
    }

    /**
     * Sets runBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Test\Model\IdentityRef $runBy runBy
     *
     * @return $this
     */
    public function setRunBy($runBy)
    {
        $this->container['runBy'] = $runBy;

        return $this;
    }

    /**
     * Gets stackTrace
     *
     * @return string
     */
    public function getStackTrace()
    {
        return $this->container['stackTrace'];
    }

    /**
     * Sets stackTrace
     *
     * @param string $stackTrace stackTrace
     *
     * @return $this
     */
    public function setStackTrace($stackTrace)
    {
        $this->container['stackTrace'] = $stackTrace;

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
     * @param string $startedDate startedDate
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
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets testCase
     *
     * @return \FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getTestCase()
    {
        return $this->container['testCase'];
    }

    /**
     * Sets testCase
     *
     * @param \FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference $testCase testCase
     *
     * @return $this
     */
    public function setTestCase($testCase)
    {
        $this->container['testCase'] = $testCase;

        return $this;
    }

    /**
     * Gets testCasePriority
     *
     * @return string
     */
    public function getTestCasePriority()
    {
        return $this->container['testCasePriority'];
    }

    /**
     * Sets testCasePriority
     *
     * @param string $testCasePriority testCasePriority
     *
     * @return $this
     */
    public function setTestCasePriority($testCasePriority)
    {
        $this->container['testCasePriority'] = $testCasePriority;

        return $this;
    }

    /**
     * Gets testCaseTitle
     *
     * @return string
     */
    public function getTestCaseTitle()
    {
        return $this->container['testCaseTitle'];
    }

    /**
     * Sets testCaseTitle
     *
     * @param string $testCaseTitle testCaseTitle
     *
     * @return $this
     */
    public function setTestCaseTitle($testCaseTitle)
    {
        $this->container['testCaseTitle'] = $testCaseTitle;

        return $this;
    }

    /**
     * Gets testPoint
     *
     * @return \FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getTestPoint()
    {
        return $this->container['testPoint'];
    }

    /**
     * Sets testPoint
     *
     * @param \FrankHouweling\AzureDevOpsClient\Test\Model\ShallowReference $testPoint testPoint
     *
     * @return $this
     */
    public function setTestPoint($testPoint)
    {
        $this->container['testPoint'] = $testPoint;

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


