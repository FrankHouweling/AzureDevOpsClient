<?php
/**
 * TaskAgentUpdate
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TaskAgent
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

namespace FrankHouweling\AzureDevOpsClient\DistributedTask\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\DistributedTask\ObjectSerializer;

/**
 * TaskAgentUpdate Class Doc Comment
 *
 * @category Class
 * @description Details about an agent update.
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskAgentUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskAgentUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currentState' => 'string',
        'reason' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentUpdateReason',
        'requestedBy' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef',
        'requestTime' => '\DateTime',
        'sourceVersion' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\PackageVersion',
        'targetVersion' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\PackageVersion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currentState' => null,
        'reason' => null,
        'requestedBy' => null,
        'requestTime' => 'date-time',
        'sourceVersion' => null,
        'targetVersion' => null
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
        'currentState' => 'currentState',
        'reason' => 'reason',
        'requestedBy' => 'requestedBy',
        'requestTime' => 'requestTime',
        'sourceVersion' => 'sourceVersion',
        'targetVersion' => 'targetVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currentState' => 'setCurrentState',
        'reason' => 'setReason',
        'requestedBy' => 'setRequestedBy',
        'requestTime' => 'setRequestTime',
        'sourceVersion' => 'setSourceVersion',
        'targetVersion' => 'setTargetVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currentState' => 'getCurrentState',
        'reason' => 'getReason',
        'requestedBy' => 'getRequestedBy',
        'requestTime' => 'getRequestTime',
        'sourceVersion' => 'getSourceVersion',
        'targetVersion' => 'getTargetVersion'
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
        $this->container['currentState'] = isset($data['currentState']) ? $data['currentState'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['requestedBy'] = isset($data['requestedBy']) ? $data['requestedBy'] : null;
        $this->container['requestTime'] = isset($data['requestTime']) ? $data['requestTime'] : null;
        $this->container['sourceVersion'] = isset($data['sourceVersion']) ? $data['sourceVersion'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
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
     * Gets currentState
     *
     * @return string
     */
    public function getCurrentState()
    {
        return $this->container['currentState'];
    }

    /**
     * Sets currentState
     *
     * @param string $currentState Current state of this agent update.
     *
     * @return $this
     */
    public function setCurrentState($currentState)
    {
        $this->container['currentState'] = $currentState;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentUpdateReason
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentUpdateReason $reason Reason for this update.
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets requestedBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef
     */
    public function getRequestedBy()
    {
        return $this->container['requestedBy'];
    }

    /**
     * Sets requestedBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef $requestedBy Identity which requested this update.
     *
     * @return $this
     */
    public function setRequestedBy($requestedBy)
    {
        $this->container['requestedBy'] = $requestedBy;

        return $this;
    }

    /**
     * Gets requestTime
     *
     * @return \DateTime
     */
    public function getRequestTime()
    {
        return $this->container['requestTime'];
    }

    /**
     * Sets requestTime
     *
     * @param \DateTime $requestTime Date on which this update was requested.
     *
     * @return $this
     */
    public function setRequestTime($requestTime)
    {
        $this->container['requestTime'] = $requestTime;

        return $this;
    }

    /**
     * Gets sourceVersion
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\PackageVersion
     */
    public function getSourceVersion()
    {
        return $this->container['sourceVersion'];
    }

    /**
     * Sets sourceVersion
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\PackageVersion $sourceVersion Source agent version of the update.
     *
     * @return $this
     */
    public function setSourceVersion($sourceVersion)
    {
        $this->container['sourceVersion'] = $sourceVersion;

        return $this;
    }

    /**
     * Gets targetVersion
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\PackageVersion
     */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
     * Sets targetVersion
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\PackageVersion $targetVersion Target agent version of the update.
     *
     * @return $this
     */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;

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


