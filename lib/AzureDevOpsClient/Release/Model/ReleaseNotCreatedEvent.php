<?php
/**
 * ReleaseNotCreatedEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Release
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

namespace FrankHouweling\AzureDevOpsClient\Release\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Release\ObjectSerializer;

/**
 * ReleaseNotCreatedEvent Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReleaseNotCreatedEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReleaseNotCreatedEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'definitionReference' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference',
        'message' => 'string',
        'releaseReason' => 'string',
        'requestedBy' => '\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'definitionReference' => null,
        'message' => null,
        'releaseReason' => null,
        'requestedBy' => null
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
        'definitionReference' => 'definitionReference',
        'message' => 'message',
        'releaseReason' => 'releaseReason',
        'requestedBy' => 'requestedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'definitionReference' => 'setDefinitionReference',
        'message' => 'setMessage',
        'releaseReason' => 'setReleaseReason',
        'requestedBy' => 'setRequestedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'definitionReference' => 'getDefinitionReference',
        'message' => 'getMessage',
        'releaseReason' => 'getReleaseReason',
        'requestedBy' => 'getRequestedBy'
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

    const RELEASE_REASON_NONE = 'none';
    const RELEASE_REASON_MANUAL = 'manual';
    const RELEASE_REASON_CONTINUOUS_INTEGRATION = 'continuousIntegration';
    const RELEASE_REASON_SCHEDULE = 'schedule';
    const RELEASE_REASON_PULL_REQUEST = 'pullRequest';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReleaseReasonAllowableValues()
    {
        return [
            self::RELEASE_REASON_NONE,
            self::RELEASE_REASON_MANUAL,
            self::RELEASE_REASON_CONTINUOUS_INTEGRATION,
            self::RELEASE_REASON_SCHEDULE,
            self::RELEASE_REASON_PULL_REQUEST,
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
        $this->container['definitionReference'] = isset($data['definitionReference']) ? $data['definitionReference'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['releaseReason'] = isset($data['releaseReason']) ? $data['releaseReason'] : null;
        $this->container['requestedBy'] = isset($data['requestedBy']) ? $data['requestedBy'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getReleaseReasonAllowableValues();
        if (!is_null($this->container['releaseReason']) && !in_array($this->container['releaseReason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'releaseReason', must be one of '%s'",
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
     * Gets definitionReference
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference
     */
    public function getDefinitionReference()
    {
        return $this->container['definitionReference'];
    }

    /**
     * Sets definitionReference
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference $definitionReference definitionReference
     *
     * @return $this
     */
    public function setDefinitionReference($definitionReference)
    {
        $this->container['definitionReference'] = $definitionReference;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets releaseReason
     *
     * @return string
     */
    public function getReleaseReason()
    {
        return $this->container['releaseReason'];
    }

    /**
     * Sets releaseReason
     *
     * @param string $releaseReason releaseReason
     *
     * @return $this
     */
    public function setReleaseReason($releaseReason)
    {
        $allowedValues = $this->getReleaseReasonAllowableValues();
        if (!is_null($releaseReason) && !in_array($releaseReason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'releaseReason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['releaseReason'] = $releaseReason;

        return $this;
    }

    /**
     * Gets requestedBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef
     */
    public function getRequestedBy()
    {
        return $this->container['requestedBy'];
    }

    /**
     * Sets requestedBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef $requestedBy requestedBy
     *
     * @return $this
     */
    public function setRequestedBy($requestedBy)
    {
        $this->container['requestedBy'] = $requestedBy;

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


