<?php
/**
 * SubscriptionTraceDiagnosticLog
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Notification
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

namespace AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Notification\ObjectSerializer;

/**
 * SubscriptionTraceDiagnosticLog Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionTraceDiagnosticLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionTraceDiagnosticLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activityId' => 'string',
        'description' => 'string',
        'endTime' => '\DateTime',
        'errors' => 'int',
        'id' => 'string',
        'logType' => 'string',
        'messages' => '\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationDiagnosticLogMessage[]',
        'properties' => 'map[string,string]',
        'source' => 'string',
        'startTime' => '\DateTime',
        'warnings' => 'int',
        'jobId' => 'string',
        'jobInstanceId' => 'string',
        'subscriptionId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activityId' => 'uuid',
        'description' => null,
        'endTime' => 'date-time',
        'errors' => 'int32',
        'id' => 'uuid',
        'logType' => null,
        'messages' => null,
        'properties' => null,
        'source' => 'uuid',
        'startTime' => 'date-time',
        'warnings' => 'int32',
        'jobId' => 'uuid',
        'jobInstanceId' => 'uuid',
        'subscriptionId' => null
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
        'activityId' => 'activityId',
        'description' => 'description',
        'endTime' => 'endTime',
        'errors' => 'errors',
        'id' => 'id',
        'logType' => 'logType',
        'messages' => 'messages',
        'properties' => 'properties',
        'source' => 'source',
        'startTime' => 'startTime',
        'warnings' => 'warnings',
        'jobId' => 'jobId',
        'jobInstanceId' => 'jobInstanceId',
        'subscriptionId' => 'subscriptionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityId' => 'setActivityId',
        'description' => 'setDescription',
        'endTime' => 'setEndTime',
        'errors' => 'setErrors',
        'id' => 'setId',
        'logType' => 'setLogType',
        'messages' => 'setMessages',
        'properties' => 'setProperties',
        'source' => 'setSource',
        'startTime' => 'setStartTime',
        'warnings' => 'setWarnings',
        'jobId' => 'setJobId',
        'jobInstanceId' => 'setJobInstanceId',
        'subscriptionId' => 'setSubscriptionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityId' => 'getActivityId',
        'description' => 'getDescription',
        'endTime' => 'getEndTime',
        'errors' => 'getErrors',
        'id' => 'getId',
        'logType' => 'getLogType',
        'messages' => 'getMessages',
        'properties' => 'getProperties',
        'source' => 'getSource',
        'startTime' => 'getStartTime',
        'warnings' => 'getWarnings',
        'jobId' => 'getJobId',
        'jobInstanceId' => 'getJobInstanceId',
        'subscriptionId' => 'getSubscriptionId'
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
        $this->container['activityId'] = isset($data['activityId']) ? $data['activityId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobInstanceId'] = isset($data['jobInstanceId']) ? $data['jobInstanceId'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
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
     * Gets activityId
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
     * Sets activityId
     *
     * @param string $activityId Identifier used for correlating to other diagnostics that may have been recorded elsewhere.
     *
     * @return $this
     */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param \DateTime $endTime endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return int
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param int $errors errors
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique instance identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets logType
     *
     * @return string
     */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
     * Sets logType
     *
     * @param string $logType logType
     *
     * @return $this
     */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationDiagnosticLogMessage[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationDiagnosticLogMessage[] $messages messages
     *
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return map[string,string]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param map[string,string] $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source This identifier depends on the logType.  For notification jobs, this will be the job Id. For subscription tracing, this will be a special root Guid with the subscription Id encoded.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param \DateTime $startTime startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return int
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param int $warnings warnings
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param string $jobId Indicates the job Id that processed or delivered this subscription
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets jobInstanceId
     *
     * @return string
     */
    public function getJobInstanceId()
    {
        return $this->container['jobInstanceId'];
    }

    /**
     * Sets jobInstanceId
     *
     * @param string $jobInstanceId Indicates unique instance identifier for the job that processed or delivered this subscription
     *
     * @return $this
     */
    public function setJobInstanceId($jobInstanceId)
    {
        $this->container['jobInstanceId'] = $jobInstanceId;

        return $this;
    }

    /**
     * Gets subscriptionId
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
     * Sets subscriptionId
     *
     * @param string $subscriptionId subscriptionId
     *
     * @return $this
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;

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


