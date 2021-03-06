<?php
/**
 * BoardColumn
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Work
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Work
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

namespace FrankHouweling\AzureDevOpsClient\Work\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Work\ObjectSerializer;

/**
 * BoardColumn Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Work
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BoardColumn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BoardColumn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'columnType' => 'string',
        'description' => 'string',
        'id' => 'string',
        'isSplit' => 'bool',
        'itemLimit' => 'int',
        'name' => 'string',
        'stateMappings' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'columnType' => null,
        'description' => null,
        'id' => 'uuid',
        'isSplit' => null,
        'itemLimit' => 'int32',
        'name' => null,
        'stateMappings' => null
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
        'columnType' => 'columnType',
        'description' => 'description',
        'id' => 'id',
        'isSplit' => 'isSplit',
        'itemLimit' => 'itemLimit',
        'name' => 'name',
        'stateMappings' => 'stateMappings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'columnType' => 'setColumnType',
        'description' => 'setDescription',
        'id' => 'setId',
        'isSplit' => 'setIsSplit',
        'itemLimit' => 'setItemLimit',
        'name' => 'setName',
        'stateMappings' => 'setStateMappings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'columnType' => 'getColumnType',
        'description' => 'getDescription',
        'id' => 'getId',
        'isSplit' => 'getIsSplit',
        'itemLimit' => 'getItemLimit',
        'name' => 'getName',
        'stateMappings' => 'getStateMappings'
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

    const COLUMN_TYPE_INCOMING = 'incoming';
    const COLUMN_TYPE_IN_PROGRESS = 'inProgress';
    const COLUMN_TYPE_OUTGOING = 'outgoing';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColumnTypeAllowableValues()
    {
        return [
            self::COLUMN_TYPE_INCOMING,
            self::COLUMN_TYPE_IN_PROGRESS,
            self::COLUMN_TYPE_OUTGOING,
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
        $this->container['columnType'] = isset($data['columnType']) ? $data['columnType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isSplit'] = isset($data['isSplit']) ? $data['isSplit'] : null;
        $this->container['itemLimit'] = isset($data['itemLimit']) ? $data['itemLimit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['stateMappings'] = isset($data['stateMappings']) ? $data['stateMappings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getColumnTypeAllowableValues();
        if (!is_null($this->container['columnType']) && !in_array($this->container['columnType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'columnType', must be one of '%s'",
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
     * Gets columnType
     *
     * @return string
     */
    public function getColumnType()
    {
        return $this->container['columnType'];
    }

    /**
     * Sets columnType
     *
     * @param string $columnType columnType
     *
     * @return $this
     */
    public function setColumnType($columnType)
    {
        $allowedValues = $this->getColumnTypeAllowableValues();
        if (!is_null($columnType) && !in_array($columnType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'columnType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['columnType'] = $columnType;

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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isSplit
     *
     * @return bool
     */
    public function getIsSplit()
    {
        return $this->container['isSplit'];
    }

    /**
     * Sets isSplit
     *
     * @param bool $isSplit isSplit
     *
     * @return $this
     */
    public function setIsSplit($isSplit)
    {
        $this->container['isSplit'] = $isSplit;

        return $this;
    }

    /**
     * Gets itemLimit
     *
     * @return int
     */
    public function getItemLimit()
    {
        return $this->container['itemLimit'];
    }

    /**
     * Sets itemLimit
     *
     * @param int $itemLimit itemLimit
     *
     * @return $this
     */
    public function setItemLimit($itemLimit)
    {
        $this->container['itemLimit'] = $itemLimit;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets stateMappings
     *
     * @return map[string,string]
     */
    public function getStateMappings()
    {
        return $this->container['stateMappings'];
    }

    /**
     * Sets stateMappings
     *
     * @param map[string,string] $stateMappings stateMappings
     *
     * @return $this
     */
    public function setStateMappings($stateMappings)
    {
        $this->container['stateMappings'] = $stateMappings;

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


