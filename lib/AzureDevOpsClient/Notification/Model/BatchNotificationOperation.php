<?php
/**
 * BatchNotificationOperation
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
 * BatchNotificationOperation Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchNotificationOperation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BatchNotificationOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'notificationOperation' => 'string',
        'notificationQueryConditions' => '\FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationQueryCondition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'notificationOperation' => null,
        'notificationQueryConditions' => null
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
        'notificationOperation' => 'notificationOperation',
        'notificationQueryConditions' => 'notificationQueryConditions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notificationOperation' => 'setNotificationOperation',
        'notificationQueryConditions' => 'setNotificationQueryConditions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notificationOperation' => 'getNotificationOperation',
        'notificationQueryConditions' => 'getNotificationQueryConditions'
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

    const NOTIFICATION_OPERATION_NONE = 'none';
    const NOTIFICATION_OPERATION_SUSPEND_UNPROCESSED = 'suspendUnprocessed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNotificationOperationAllowableValues()
    {
        return [
            self::NOTIFICATION_OPERATION_NONE,
            self::NOTIFICATION_OPERATION_SUSPEND_UNPROCESSED,
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
        $this->container['notificationOperation'] = isset($data['notificationOperation']) ? $data['notificationOperation'] : null;
        $this->container['notificationQueryConditions'] = isset($data['notificationQueryConditions']) ? $data['notificationQueryConditions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNotificationOperationAllowableValues();
        if (!is_null($this->container['notificationOperation']) && !in_array($this->container['notificationOperation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'notificationOperation', must be one of '%s'",
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
     * Gets notificationOperation
     *
     * @return string
     */
    public function getNotificationOperation()
    {
        return $this->container['notificationOperation'];
    }

    /**
     * Sets notificationOperation
     *
     * @param string $notificationOperation notificationOperation
     *
     * @return $this
     */
    public function setNotificationOperation($notificationOperation)
    {
        $allowedValues = $this->getNotificationOperationAllowableValues();
        if (!is_null($notificationOperation) && !in_array($notificationOperation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'notificationOperation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['notificationOperation'] = $notificationOperation;

        return $this;
    }

    /**
     * Gets notificationQueryConditions
     *
     * @return \FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationQueryCondition[]
     */
    public function getNotificationQueryConditions()
    {
        return $this->container['notificationQueryConditions'];
    }

    /**
     * Sets notificationQueryConditions
     *
     * @param \FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationQueryCondition[] $notificationQueryConditions notificationQueryConditions
     *
     * @return $this
     */
    public function setNotificationQueryConditions($notificationQueryConditions)
    {
        $this->container['notificationQueryConditions'] = $notificationQueryConditions;

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

