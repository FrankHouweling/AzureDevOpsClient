<?php
/**
 * TestCaseResultUpdateModel
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
 * TestCaseResultUpdateModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestCaseResultUpdateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestCaseResultUpdateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'associatedWorkItems' => 'int[]',
        'automatedTestTypeId' => 'string',
        'comment' => 'string',
        'completedDate' => 'string',
        'computerName' => 'string',
        'customFields' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\CustomTestField[]',
        'durationInMs' => 'string',
        'errorMessage' => 'string',
        'failureType' => 'string',
        'outcome' => 'string',
        'owner' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef',
        'resolutionState' => 'string',
        'runBy' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef',
        'stackTrace' => 'string',
        'startedDate' => 'string',
        'state' => 'string',
        'testCasePriority' => 'string',
        'testResult' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'associatedWorkItems' => 'int32',
        'automatedTestTypeId' => null,
        'comment' => null,
        'completedDate' => null,
        'computerName' => null,
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
        'testCasePriority' => null,
        'testResult' => null
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
        'associatedWorkItems' => 'associatedWorkItems',
        'automatedTestTypeId' => 'automatedTestTypeId',
        'comment' => 'comment',
        'completedDate' => 'completedDate',
        'computerName' => 'computerName',
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
        'testCasePriority' => 'testCasePriority',
        'testResult' => 'testResult'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'associatedWorkItems' => 'setAssociatedWorkItems',
        'automatedTestTypeId' => 'setAutomatedTestTypeId',
        'comment' => 'setComment',
        'completedDate' => 'setCompletedDate',
        'computerName' => 'setComputerName',
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
        'testCasePriority' => 'setTestCasePriority',
        'testResult' => 'setTestResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'associatedWorkItems' => 'getAssociatedWorkItems',
        'automatedTestTypeId' => 'getAutomatedTestTypeId',
        'comment' => 'getComment',
        'completedDate' => 'getCompletedDate',
        'computerName' => 'getComputerName',
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
        'testCasePriority' => 'getTestCasePriority',
        'testResult' => 'getTestResult'
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
        $this->container['associatedWorkItems'] = isset($data['associatedWorkItems']) ? $data['associatedWorkItems'] : null;
        $this->container['automatedTestTypeId'] = isset($data['automatedTestTypeId']) ? $data['automatedTestTypeId'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['completedDate'] = isset($data['completedDate']) ? $data['completedDate'] : null;
        $this->container['computerName'] = isset($data['computerName']) ? $data['computerName'] : null;
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
        $this->container['testCasePriority'] = isset($data['testCasePriority']) ? $data['testCasePriority'] : null;
        $this->container['testResult'] = isset($data['testResult']) ? $data['testResult'] : null;
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
     * Gets customFields
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\CustomTestField[]
     */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
     * Sets customFields
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\CustomTestField[] $customFields customFields
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
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef $owner owner
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
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef
     */
    public function getRunBy()
    {
        return $this->container['runBy'];
    }

    /**
     * Sets runBy
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef $runBy runBy
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
     * Gets testResult
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getTestResult()
    {
        return $this->container['testResult'];
    }

    /**
     * Sets testResult
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $testResult testResult
     *
     * @return $this
     */
    public function setTestResult($testResult)
    {
        $this->container['testResult'] = $testResult;

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


