<?php
/**
 * ExtensionAcquisitionRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\ExtensionManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ExtensionManagement
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

namespace FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\ExtensionManagement\ObjectSerializer;

/**
 * ExtensionAcquisitionRequest Class Doc Comment
 *
 * @category Class
 * @description Contract for handling the extension acquisition process
 * @package  FrankHouweling\AzureDevOpsClient\ExtensionManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtensionAcquisitionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtensionAcquisitionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assignmentType' => 'string',
        'billingId' => 'string',
        'itemId' => 'string',
        'operationType' => 'string',
        'properties' => '\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\JObject',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assignmentType' => null,
        'billingId' => null,
        'itemId' => null,
        'operationType' => null,
        'properties' => null,
        'quantity' => 'int32'
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
        'assignmentType' => 'assignmentType',
        'billingId' => 'billingId',
        'itemId' => 'itemId',
        'operationType' => 'operationType',
        'properties' => 'properties',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignmentType' => 'setAssignmentType',
        'billingId' => 'setBillingId',
        'itemId' => 'setItemId',
        'operationType' => 'setOperationType',
        'properties' => 'setProperties',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignmentType' => 'getAssignmentType',
        'billingId' => 'getBillingId',
        'itemId' => 'getItemId',
        'operationType' => 'getOperationType',
        'properties' => 'getProperties',
        'quantity' => 'getQuantity'
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

    const ASSIGNMENT_TYPE_NONE = 'none';
    const ASSIGNMENT_TYPE_ME = 'me';
    const ASSIGNMENT_TYPE_ALL = 'all';
    const OPERATION_TYPE_GET = 'get';
    const OPERATION_TYPE_INSTALL = 'install';
    const OPERATION_TYPE_BUY = 'buy';
    const OPERATION_TYPE__TRY = 'try';
    const OPERATION_TYPE_REQUEST = 'request';
    const OPERATION_TYPE_NONE = 'none';
    const OPERATION_TYPE_PURCHASE_REQUEST = 'purchaseRequest';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAssignmentTypeAllowableValues()
    {
        return [
            self::ASSIGNMENT_TYPE_NONE,
            self::ASSIGNMENT_TYPE_ME,
            self::ASSIGNMENT_TYPE_ALL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationTypeAllowableValues()
    {
        return [
            self::OPERATION_TYPE_GET,
            self::OPERATION_TYPE_INSTALL,
            self::OPERATION_TYPE_BUY,
            self::OPERATION_TYPE__TRY,
            self::OPERATION_TYPE_REQUEST,
            self::OPERATION_TYPE_NONE,
            self::OPERATION_TYPE_PURCHASE_REQUEST,
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
        $this->container['assignmentType'] = isset($data['assignmentType']) ? $data['assignmentType'] : null;
        $this->container['billingId'] = isset($data['billingId']) ? $data['billingId'] : null;
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAssignmentTypeAllowableValues();
        if (!is_null($this->container['assignmentType']) && !in_array($this->container['assignmentType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'assignmentType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOperationTypeAllowableValues();
        if (!is_null($this->container['operationType']) && !in_array($this->container['operationType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operationType', must be one of '%s'",
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
     * Gets assignmentType
     *
     * @return string
     */
    public function getAssignmentType()
    {
        return $this->container['assignmentType'];
    }

    /**
     * Sets assignmentType
     *
     * @param string $assignmentType How the item is being assigned
     *
     * @return $this
     */
    public function setAssignmentType($assignmentType)
    {
        $allowedValues = $this->getAssignmentTypeAllowableValues();
        if (!is_null($assignmentType) && !in_array($assignmentType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'assignmentType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['assignmentType'] = $assignmentType;

        return $this;
    }

    /**
     * Gets billingId
     *
     * @return string
     */
    public function getBillingId()
    {
        return $this->container['billingId'];
    }

    /**
     * Sets billingId
     *
     * @param string $billingId The id of the subscription used for purchase
     *
     * @return $this
     */
    public function setBillingId($billingId)
    {
        $this->container['billingId'] = $billingId;

        return $this;
    }

    /**
     * Gets itemId
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string $itemId The marketplace id (publisherName.extensionName) for the item
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;

        return $this;
    }

    /**
     * Gets operationType
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
     * Sets operationType
     *
     * @param string $operationType The type of operation, such as install, request, purchase
     *
     * @return $this
     */
    public function setOperationType($operationType)
    {
        $allowedValues = $this->getOperationTypeAllowableValues();
        if (!is_null($operationType) && !in_array($operationType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operationType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operationType'] = $operationType;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\JObject
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\JObject $properties Additional properties which can be added to the request.
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity How many licenses should be purchased
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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

