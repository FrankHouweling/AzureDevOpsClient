<?php
/**
 * HistoryEntry
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Git
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

namespace AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Git\ObjectSerializer;

/**
 * HistoryEntry Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HistoryEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HistoryEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'changeList' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ChangeList',
        'itemChangeType' => 'string',
        'serverItem' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'changeList' => null,
        'itemChangeType' => null,
        'serverItem' => null
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
        'changeList' => 'changeList',
        'itemChangeType' => 'itemChangeType',
        'serverItem' => 'serverItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changeList' => 'setChangeList',
        'itemChangeType' => 'setItemChangeType',
        'serverItem' => 'setServerItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changeList' => 'getChangeList',
        'itemChangeType' => 'getItemChangeType',
        'serverItem' => 'getServerItem'
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

    const ITEM_CHANGE_TYPE_NONE = 'none';
    const ITEM_CHANGE_TYPE_ADD = 'add';
    const ITEM_CHANGE_TYPE_EDIT = 'edit';
    const ITEM_CHANGE_TYPE_ENCODING = 'encoding';
    const ITEM_CHANGE_TYPE_RENAME = 'rename';
    const ITEM_CHANGE_TYPE_DELETE = 'delete';
    const ITEM_CHANGE_TYPE_UNDELETE = 'undelete';
    const ITEM_CHANGE_TYPE_BRANCH = 'branch';
    const ITEM_CHANGE_TYPE_MERGE = 'merge';
    const ITEM_CHANGE_TYPE_LOCK = 'lock';
    const ITEM_CHANGE_TYPE_ROLLBACK = 'rollback';
    const ITEM_CHANGE_TYPE_SOURCE_RENAME = 'sourceRename';
    const ITEM_CHANGE_TYPE_TARGET_RENAME = 'targetRename';
    const ITEM_CHANGE_TYPE_PROPERTY = 'property';
    const ITEM_CHANGE_TYPE_ALL = 'all';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemChangeTypeAllowableValues()
    {
        return [
            self::ITEM_CHANGE_TYPE_NONE,
            self::ITEM_CHANGE_TYPE_ADD,
            self::ITEM_CHANGE_TYPE_EDIT,
            self::ITEM_CHANGE_TYPE_ENCODING,
            self::ITEM_CHANGE_TYPE_RENAME,
            self::ITEM_CHANGE_TYPE_DELETE,
            self::ITEM_CHANGE_TYPE_UNDELETE,
            self::ITEM_CHANGE_TYPE_BRANCH,
            self::ITEM_CHANGE_TYPE_MERGE,
            self::ITEM_CHANGE_TYPE_LOCK,
            self::ITEM_CHANGE_TYPE_ROLLBACK,
            self::ITEM_CHANGE_TYPE_SOURCE_RENAME,
            self::ITEM_CHANGE_TYPE_TARGET_RENAME,
            self::ITEM_CHANGE_TYPE_PROPERTY,
            self::ITEM_CHANGE_TYPE_ALL,
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
        $this->container['changeList'] = isset($data['changeList']) ? $data['changeList'] : null;
        $this->container['itemChangeType'] = isset($data['itemChangeType']) ? $data['itemChangeType'] : null;
        $this->container['serverItem'] = isset($data['serverItem']) ? $data['serverItem'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getItemChangeTypeAllowableValues();
        if (!is_null($this->container['itemChangeType']) && !in_array($this->container['itemChangeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'itemChangeType', must be one of '%s'",
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
     * Gets changeList
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ChangeList
     */
    public function getChangeList()
    {
        return $this->container['changeList'];
    }

    /**
     * Sets changeList
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ChangeList $changeList The Change list (changeset/commit/shelveset) for this point in history
     *
     * @return $this
     */
    public function setChangeList($changeList)
    {
        $this->container['changeList'] = $changeList;

        return $this;
    }

    /**
     * Gets itemChangeType
     *
     * @return string
     */
    public function getItemChangeType()
    {
        return $this->container['itemChangeType'];
    }

    /**
     * Sets itemChangeType
     *
     * @param string $itemChangeType The change made to the item from this change list (only relevant for File history, not folders)
     *
     * @return $this
     */
    public function setItemChangeType($itemChangeType)
    {
        $allowedValues = $this->getItemChangeTypeAllowableValues();
        if (!is_null($itemChangeType) && !in_array($itemChangeType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'itemChangeType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['itemChangeType'] = $itemChangeType;

        return $this;
    }

    /**
     * Gets serverItem
     *
     * @return string
     */
    public function getServerItem()
    {
        return $this->container['serverItem'];
    }

    /**
     * Sets serverItem
     *
     * @param string $serverItem The path of the item at this point in history (only relevant for File history, not folders)
     *
     * @return $this
     */
    public function setServerItem($serverItem)
    {
        $this->container['serverItem'] = $serverItem;

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


