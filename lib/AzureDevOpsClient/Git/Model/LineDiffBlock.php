<?php
/**
 * LineDiffBlock
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
 * LineDiffBlock Class Doc Comment
 *
 * @category Class
 * @description The class to represent the line diff block
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineDiffBlock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineDiffBlock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'changeType' => 'string',
        'modifiedLineNumberStart' => 'int',
        'modifiedLinesCount' => 'int',
        'originalLineNumberStart' => 'int',
        'originalLinesCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'changeType' => null,
        'modifiedLineNumberStart' => 'int32',
        'modifiedLinesCount' => 'int32',
        'originalLineNumberStart' => 'int32',
        'originalLinesCount' => 'int32'
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
        'changeType' => 'changeType',
        'modifiedLineNumberStart' => 'modifiedLineNumberStart',
        'modifiedLinesCount' => 'modifiedLinesCount',
        'originalLineNumberStart' => 'originalLineNumberStart',
        'originalLinesCount' => 'originalLinesCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changeType' => 'setChangeType',
        'modifiedLineNumberStart' => 'setModifiedLineNumberStart',
        'modifiedLinesCount' => 'setModifiedLinesCount',
        'originalLineNumberStart' => 'setOriginalLineNumberStart',
        'originalLinesCount' => 'setOriginalLinesCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changeType' => 'getChangeType',
        'modifiedLineNumberStart' => 'getModifiedLineNumberStart',
        'modifiedLinesCount' => 'getModifiedLinesCount',
        'originalLineNumberStart' => 'getOriginalLineNumberStart',
        'originalLinesCount' => 'getOriginalLinesCount'
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

    const CHANGE_TYPE_NONE = 'none';
    const CHANGE_TYPE_ADD = 'add';
    const CHANGE_TYPE_DELETE = 'delete';
    const CHANGE_TYPE_EDIT = 'edit';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChangeTypeAllowableValues()
    {
        return [
            self::CHANGE_TYPE_NONE,
            self::CHANGE_TYPE_ADD,
            self::CHANGE_TYPE_DELETE,
            self::CHANGE_TYPE_EDIT,
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
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['modifiedLineNumberStart'] = isset($data['modifiedLineNumberStart']) ? $data['modifiedLineNumberStart'] : null;
        $this->container['modifiedLinesCount'] = isset($data['modifiedLinesCount']) ? $data['modifiedLinesCount'] : null;
        $this->container['originalLineNumberStart'] = isset($data['originalLineNumberStart']) ? $data['originalLineNumberStart'] : null;
        $this->container['originalLinesCount'] = isset($data['originalLinesCount']) ? $data['originalLinesCount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getChangeTypeAllowableValues();
        if (!is_null($this->container['changeType']) && !in_array($this->container['changeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'changeType', must be one of '%s'",
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
     * Gets changeType
     *
     * @return string
     */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
     * Sets changeType
     *
     * @param string $changeType Type of change that was made to the block.
     *
     * @return $this
     */
    public function setChangeType($changeType)
    {
        $allowedValues = $this->getChangeTypeAllowableValues();
        if (!is_null($changeType) && !in_array($changeType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'changeType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['changeType'] = $changeType;

        return $this;
    }

    /**
     * Gets modifiedLineNumberStart
     *
     * @return int
     */
    public function getModifiedLineNumberStart()
    {
        return $this->container['modifiedLineNumberStart'];
    }

    /**
     * Sets modifiedLineNumberStart
     *
     * @param int $modifiedLineNumberStart Line number where this block starts in modified file.
     *
     * @return $this
     */
    public function setModifiedLineNumberStart($modifiedLineNumberStart)
    {
        $this->container['modifiedLineNumberStart'] = $modifiedLineNumberStart;

        return $this;
    }

    /**
     * Gets modifiedLinesCount
     *
     * @return int
     */
    public function getModifiedLinesCount()
    {
        return $this->container['modifiedLinesCount'];
    }

    /**
     * Sets modifiedLinesCount
     *
     * @param int $modifiedLinesCount Count of lines in this block in modified file.
     *
     * @return $this
     */
    public function setModifiedLinesCount($modifiedLinesCount)
    {
        $this->container['modifiedLinesCount'] = $modifiedLinesCount;

        return $this;
    }

    /**
     * Gets originalLineNumberStart
     *
     * @return int
     */
    public function getOriginalLineNumberStart()
    {
        return $this->container['originalLineNumberStart'];
    }

    /**
     * Sets originalLineNumberStart
     *
     * @param int $originalLineNumberStart Line number where this block starts in original file.
     *
     * @return $this
     */
    public function setOriginalLineNumberStart($originalLineNumberStart)
    {
        $this->container['originalLineNumberStart'] = $originalLineNumberStart;

        return $this;
    }

    /**
     * Gets originalLinesCount
     *
     * @return int
     */
    public function getOriginalLinesCount()
    {
        return $this->container['originalLinesCount'];
    }

    /**
     * Sets originalLinesCount
     *
     * @param int $originalLinesCount Count of lines in this block in original file.
     *
     * @return $this
     */
    public function setOriginalLinesCount($originalLinesCount)
    {
        $this->container['originalLinesCount'] = $originalLinesCount;

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


