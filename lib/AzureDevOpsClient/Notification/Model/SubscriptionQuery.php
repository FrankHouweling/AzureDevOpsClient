<?php
/**
 * SubscriptionQuery
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Notification
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

namespace FrankHouweling\AzureDevOpsClient\Notification\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Notification\ObjectSerializer;

/**
 * SubscriptionQuery Class Doc Comment
 *
 * @category Class
 * @description Notification subscriptions query input.
 * @package  FrankHouweling\AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conditions' => '\FrankHouweling\AzureDevOpsClient\Notification\Model\SubscriptionQueryCondition[]',
        'queryFlags' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conditions' => null,
        'queryFlags' => null
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
        'conditions' => 'conditions',
        'queryFlags' => 'queryFlags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conditions' => 'setConditions',
        'queryFlags' => 'setQueryFlags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conditions' => 'getConditions',
        'queryFlags' => 'getQueryFlags'
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

    const QUERY_FLAGS_NONE = 'none';
    const QUERY_FLAGS_INCLUDE_INVALID_SUBSCRIPTIONS = 'includeInvalidSubscriptions';
    const QUERY_FLAGS_INCLUDE_DELETED_SUBSCRIPTIONS = 'includeDeletedSubscriptions';
    const QUERY_FLAGS_INCLUDE_FILTER_DETAILS = 'includeFilterDetails';
    const QUERY_FLAGS_ALWAYS_RETURN_BASIC_INFORMATION = 'alwaysReturnBasicInformation';
    const QUERY_FLAGS_INCLUDE_SYSTEM_SUBSCRIPTIONS = 'includeSystemSubscriptions';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQueryFlagsAllowableValues()
    {
        return [
            self::QUERY_FLAGS_NONE,
            self::QUERY_FLAGS_INCLUDE_INVALID_SUBSCRIPTIONS,
            self::QUERY_FLAGS_INCLUDE_DELETED_SUBSCRIPTIONS,
            self::QUERY_FLAGS_INCLUDE_FILTER_DETAILS,
            self::QUERY_FLAGS_ALWAYS_RETURN_BASIC_INFORMATION,
            self::QUERY_FLAGS_INCLUDE_SYSTEM_SUBSCRIPTIONS,
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
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['queryFlags'] = isset($data['queryFlags']) ? $data['queryFlags'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getQueryFlagsAllowableValues();
        if (!is_null($this->container['queryFlags']) && !in_array($this->container['queryFlags'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'queryFlags', must be one of '%s'",
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
     * Gets conditions
     *
     * @return \FrankHouweling\AzureDevOpsClient\Notification\Model\SubscriptionQueryCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \FrankHouweling\AzureDevOpsClient\Notification\Model\SubscriptionQueryCondition[] $conditions One or more conditions to query on. If more than 2 conditions are specified, the combined results of each condition is returned (i.e. conditions are logically OR'ed).
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets queryFlags
     *
     * @return string
     */
    public function getQueryFlags()
    {
        return $this->container['queryFlags'];
    }

    /**
     * Sets queryFlags
     *
     * @param string $queryFlags Flags the refine the types of subscriptions that will be returned from the query.
     *
     * @return $this
     */
    public function setQueryFlags($queryFlags)
    {
        $allowedValues = $this->getQueryFlagsAllowableValues();
        if (!is_null($queryFlags) && !in_array($queryFlags, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'queryFlags', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['queryFlags'] = $queryFlags;

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


