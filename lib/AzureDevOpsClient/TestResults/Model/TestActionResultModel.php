<?php
/**
 * TestActionResultModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\TestResults
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

namespace FrankHouweling\AzureDevOpsClient\TestResults\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\TestResults\ObjectSerializer;

/**
 * TestActionResultModel Class Doc Comment
 *
 * @category Class
 * @description Represents a test step result.
 * @package  FrankHouweling\AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestActionResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestActionResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comment' => 'string',
        'completedDate' => '\DateTime',
        'durationInMs' => 'double',
        'errorMessage' => 'string',
        'outcome' => 'string',
        'startedDate' => '\DateTime',
        'actionPath' => 'string',
        'iterationId' => 'int',
        'sharedStepModel' => '\FrankHouweling\AzureDevOpsClient\TestResults\Model\SharedStepModel',
        'stepIdentifier' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comment' => null,
        'completedDate' => 'date-time',
        'durationInMs' => 'double',
        'errorMessage' => null,
        'outcome' => null,
        'startedDate' => 'date-time',
        'actionPath' => null,
        'iterationId' => 'int32',
        'sharedStepModel' => null,
        'stepIdentifier' => null,
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
        'comment' => 'comment',
        'completedDate' => 'completedDate',
        'durationInMs' => 'durationInMs',
        'errorMessage' => 'errorMessage',
        'outcome' => 'outcome',
        'startedDate' => 'startedDate',
        'actionPath' => 'actionPath',
        'iterationId' => 'iterationId',
        'sharedStepModel' => 'sharedStepModel',
        'stepIdentifier' => 'stepIdentifier',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'completedDate' => 'setCompletedDate',
        'durationInMs' => 'setDurationInMs',
        'errorMessage' => 'setErrorMessage',
        'outcome' => 'setOutcome',
        'startedDate' => 'setStartedDate',
        'actionPath' => 'setActionPath',
        'iterationId' => 'setIterationId',
        'sharedStepModel' => 'setSharedStepModel',
        'stepIdentifier' => 'setStepIdentifier',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'completedDate' => 'getCompletedDate',
        'durationInMs' => 'getDurationInMs',
        'errorMessage' => 'getErrorMessage',
        'outcome' => 'getOutcome',
        'startedDate' => 'getStartedDate',
        'actionPath' => 'getActionPath',
        'iterationId' => 'getIterationId',
        'sharedStepModel' => 'getSharedStepModel',
        'stepIdentifier' => 'getStepIdentifier',
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['completedDate'] = isset($data['completedDate']) ? $data['completedDate'] : null;
        $this->container['durationInMs'] = isset($data['durationInMs']) ? $data['durationInMs'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['startedDate'] = isset($data['startedDate']) ? $data['startedDate'] : null;
        $this->container['actionPath'] = isset($data['actionPath']) ? $data['actionPath'] : null;
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['sharedStepModel'] = isset($data['sharedStepModel']) ? $data['sharedStepModel'] : null;
        $this->container['stepIdentifier'] = isset($data['stepIdentifier']) ? $data['stepIdentifier'] : null;
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
     * @param string $comment Comment in result.
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
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->container['completedDate'];
    }

    /**
     * Sets completedDate
     *
     * @param \DateTime $completedDate Time when execution completed.
     *
     * @return $this
     */
    public function setCompletedDate($completedDate)
    {
        $this->container['completedDate'] = $completedDate;

        return $this;
    }

    /**
     * Gets durationInMs
     *
     * @return double
     */
    public function getDurationInMs()
    {
        return $this->container['durationInMs'];
    }

    /**
     * Sets durationInMs
     *
     * @param double $durationInMs Duration of execution.
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
     * @param string $errorMessage Error message in result.
     *
     * @return $this
     */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;

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
     * @param string $outcome Test outcome of result.
     *
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;

        return $this;
    }

    /**
     * Gets startedDate
     *
     * @return \DateTime
     */
    public function getStartedDate()
    {
        return $this->container['startedDate'];
    }

    /**
     * Sets startedDate
     *
     * @param \DateTime $startedDate Time when execution started.
     *
     * @return $this
     */
    public function setStartedDate($startedDate)
    {
        $this->container['startedDate'] = $startedDate;

        return $this;
    }

    /**
     * Gets actionPath
     *
     * @return string
     */
    public function getActionPath()
    {
        return $this->container['actionPath'];
    }

    /**
     * Sets actionPath
     *
     * @param string $actionPath Path identifier test step in test case workitem.
     *
     * @return $this
     */
    public function setActionPath($actionPath)
    {
        $this->container['actionPath'] = $actionPath;

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
     * @param int $iterationId Iteration ID of test action result.
     *
     * @return $this
     */
    public function setIterationId($iterationId)
    {
        $this->container['iterationId'] = $iterationId;

        return $this;
    }

    /**
     * Gets sharedStepModel
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestResults\Model\SharedStepModel
     */
    public function getSharedStepModel()
    {
        return $this->container['sharedStepModel'];
    }

    /**
     * Sets sharedStepModel
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestResults\Model\SharedStepModel $sharedStepModel Reference to shared step workitem.
     *
     * @return $this
     */
    public function setSharedStepModel($sharedStepModel)
    {
        $this->container['sharedStepModel'] = $sharedStepModel;

        return $this;
    }

    /**
     * Gets stepIdentifier
     *
     * @return string
     */
    public function getStepIdentifier()
    {
        return $this->container['stepIdentifier'];
    }

    /**
     * Sets stepIdentifier
     *
     * @param string $stepIdentifier This is step Id of test case. For shared step, it is step Id of shared step in test case workitem; step Id in shared step. Example: TestCase workitem has two steps: 1) Normal step with Id = 1 2) Shared Step with Id = 2. Inside shared step: a) Normal Step with Id = 1 Value for StepIdentifier for First step: \"1\" Second step: \"2;1\"
     *
     * @return $this
     */
    public function setStepIdentifier($stepIdentifier)
    {
        $this->container['stepIdentifier'] = $stepIdentifier;

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
     * @param string $url Url of test action result.
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

