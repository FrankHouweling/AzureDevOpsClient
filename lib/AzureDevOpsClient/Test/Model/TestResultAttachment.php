<?php
/**
 * TestResultAttachment
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
 * TestResultAttachment Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestResultAttachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestResultAttachment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'actionPath' => 'string',
        'attachmentType' => 'string',
        'comment' => 'string',
        'creationDate' => '\DateTime',
        'downloadQueryString' => 'string',
        'fileName' => 'string',
        'id' => 'int',
        'isComplete' => 'bool',
        'iterationId' => 'int',
        'length' => 'int',
        'sessionId' => 'int',
        'testResultId' => 'int',
        'testRunId' => 'int',
        'tmiRunId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'actionPath' => null,
        'attachmentType' => null,
        'comment' => null,
        'creationDate' => 'date-time',
        'downloadQueryString' => null,
        'fileName' => null,
        'id' => 'int32',
        'isComplete' => null,
        'iterationId' => 'int32',
        'length' => 'int64',
        'sessionId' => 'int32',
        'testResultId' => 'int32',
        'testRunId' => 'int32',
        'tmiRunId' => 'uuid'
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
        'actionPath' => 'actionPath',
        'attachmentType' => 'attachmentType',
        'comment' => 'comment',
        'creationDate' => 'creationDate',
        'downloadQueryString' => 'downloadQueryString',
        'fileName' => 'fileName',
        'id' => 'id',
        'isComplete' => 'isComplete',
        'iterationId' => 'iterationId',
        'length' => 'length',
        'sessionId' => 'sessionId',
        'testResultId' => 'testResultId',
        'testRunId' => 'testRunId',
        'tmiRunId' => 'tmiRunId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionPath' => 'setActionPath',
        'attachmentType' => 'setAttachmentType',
        'comment' => 'setComment',
        'creationDate' => 'setCreationDate',
        'downloadQueryString' => 'setDownloadQueryString',
        'fileName' => 'setFileName',
        'id' => 'setId',
        'isComplete' => 'setIsComplete',
        'iterationId' => 'setIterationId',
        'length' => 'setLength',
        'sessionId' => 'setSessionId',
        'testResultId' => 'setTestResultId',
        'testRunId' => 'setTestRunId',
        'tmiRunId' => 'setTmiRunId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionPath' => 'getActionPath',
        'attachmentType' => 'getAttachmentType',
        'comment' => 'getComment',
        'creationDate' => 'getCreationDate',
        'downloadQueryString' => 'getDownloadQueryString',
        'fileName' => 'getFileName',
        'id' => 'getId',
        'isComplete' => 'getIsComplete',
        'iterationId' => 'getIterationId',
        'length' => 'getLength',
        'sessionId' => 'getSessionId',
        'testResultId' => 'getTestResultId',
        'testRunId' => 'getTestRunId',
        'tmiRunId' => 'getTmiRunId'
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

    const ATTACHMENT_TYPE_GENERAL_ATTACHMENT = 'generalAttachment';
    const ATTACHMENT_TYPE_CODE_COVERAGE = 'codeCoverage';
    const ATTACHMENT_TYPE_CONSOLE_LOG = 'consoleLog';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAttachmentTypeAllowableValues()
    {
        return [
            self::ATTACHMENT_TYPE_GENERAL_ATTACHMENT,
            self::ATTACHMENT_TYPE_CODE_COVERAGE,
            self::ATTACHMENT_TYPE_CONSOLE_LOG,
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
        $this->container['actionPath'] = isset($data['actionPath']) ? $data['actionPath'] : null;
        $this->container['attachmentType'] = isset($data['attachmentType']) ? $data['attachmentType'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['downloadQueryString'] = isset($data['downloadQueryString']) ? $data['downloadQueryString'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isComplete'] = isset($data['isComplete']) ? $data['isComplete'] : null;
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['testResultId'] = isset($data['testResultId']) ? $data['testResultId'] : null;
        $this->container['testRunId'] = isset($data['testRunId']) ? $data['testRunId'] : null;
        $this->container['tmiRunId'] = isset($data['tmiRunId']) ? $data['tmiRunId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAttachmentTypeAllowableValues();
        if (!is_null($this->container['attachmentType']) && !in_array($this->container['attachmentType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'attachmentType', must be one of '%s'",
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
     * @param string $actionPath actionPath
     *
     * @return $this
     */
    public function setActionPath($actionPath)
    {
        $this->container['actionPath'] = $actionPath;

        return $this;
    }

    /**
     * Gets attachmentType
     *
     * @return string
     */
    public function getAttachmentType()
    {
        return $this->container['attachmentType'];
    }

    /**
     * Sets attachmentType
     *
     * @param string $attachmentType attachmentType
     *
     * @return $this
     */
    public function setAttachmentType($attachmentType)
    {
        $allowedValues = $this->getAttachmentTypeAllowableValues();
        if (!is_null($attachmentType) && !in_array($attachmentType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'attachmentType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['attachmentType'] = $attachmentType;

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
     * Gets downloadQueryString
     *
     * @return string
     */
    public function getDownloadQueryString()
    {
        return $this->container['downloadQueryString'];
    }

    /**
     * Sets downloadQueryString
     *
     * @param string $downloadQueryString downloadQueryString
     *
     * @return $this
     */
    public function setDownloadQueryString($downloadQueryString)
    {
        $this->container['downloadQueryString'] = $downloadQueryString;

        return $this;
    }

    /**
     * Gets fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
     * Sets fileName
     *
     * @param string $fileName fileName
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;

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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isComplete
     *
     * @return bool
     */
    public function getIsComplete()
    {
        return $this->container['isComplete'];
    }

    /**
     * Sets isComplete
     *
     * @param bool $isComplete isComplete
     *
     * @return $this
     */
    public function setIsComplete($isComplete)
    {
        $this->container['isComplete'] = $isComplete;

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
     * Gets length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int $length length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets sessionId
     *
     * @return int
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     *
     * @param int $sessionId sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    /**
     * Gets testResultId
     *
     * @return int
     */
    public function getTestResultId()
    {
        return $this->container['testResultId'];
    }

    /**
     * Sets testResultId
     *
     * @param int $testResultId testResultId
     *
     * @return $this
     */
    public function setTestResultId($testResultId)
    {
        $this->container['testResultId'] = $testResultId;

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
     * Gets tmiRunId
     *
     * @return string
     */
    public function getTmiRunId()
    {
        return $this->container['tmiRunId'];
    }

    /**
     * Sets tmiRunId
     *
     * @param string $tmiRunId tmiRunId
     *
     * @return $this
     */
    public function setTmiRunId($tmiRunId)
    {
        $this->container['tmiRunId'] = $tmiRunId;

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


