<?php
/**
 * BacklogLevelConfiguration
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
 * BacklogLevelConfiguration Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Work
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BacklogLevelConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BacklogLevelConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addPanelFields' => '\FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemFieldReference[]',
        'color' => 'string',
        'columnFields' => '\FrankHouweling\AzureDevOpsClient\Work\Model\BacklogColumn[]',
        'defaultWorkItemType' => '\FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemTypeReference',
        'id' => 'string',
        'isHidden' => 'bool',
        'name' => 'string',
        'rank' => 'int',
        'type' => 'string',
        'workItemCountLimit' => 'int',
        'workItemTypes' => '\FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemTypeReference[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addPanelFields' => null,
        'color' => null,
        'columnFields' => null,
        'defaultWorkItemType' => null,
        'id' => null,
        'isHidden' => null,
        'name' => null,
        'rank' => 'int32',
        'type' => null,
        'workItemCountLimit' => 'int32',
        'workItemTypes' => null
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
        'addPanelFields' => 'addPanelFields',
        'color' => 'color',
        'columnFields' => 'columnFields',
        'defaultWorkItemType' => 'defaultWorkItemType',
        'id' => 'id',
        'isHidden' => 'isHidden',
        'name' => 'name',
        'rank' => 'rank',
        'type' => 'type',
        'workItemCountLimit' => 'workItemCountLimit',
        'workItemTypes' => 'workItemTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addPanelFields' => 'setAddPanelFields',
        'color' => 'setColor',
        'columnFields' => 'setColumnFields',
        'defaultWorkItemType' => 'setDefaultWorkItemType',
        'id' => 'setId',
        'isHidden' => 'setIsHidden',
        'name' => 'setName',
        'rank' => 'setRank',
        'type' => 'setType',
        'workItemCountLimit' => 'setWorkItemCountLimit',
        'workItemTypes' => 'setWorkItemTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addPanelFields' => 'getAddPanelFields',
        'color' => 'getColor',
        'columnFields' => 'getColumnFields',
        'defaultWorkItemType' => 'getDefaultWorkItemType',
        'id' => 'getId',
        'isHidden' => 'getIsHidden',
        'name' => 'getName',
        'rank' => 'getRank',
        'type' => 'getType',
        'workItemCountLimit' => 'getWorkItemCountLimit',
        'workItemTypes' => 'getWorkItemTypes'
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

    const TYPE_PORTFOLIO = 'portfolio';
    const TYPE_REQUIREMENT = 'requirement';
    const TYPE_TASK = 'task';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PORTFOLIO,
            self::TYPE_REQUIREMENT,
            self::TYPE_TASK,
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
        $this->container['addPanelFields'] = isset($data['addPanelFields']) ? $data['addPanelFields'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['columnFields'] = isset($data['columnFields']) ? $data['columnFields'] : null;
        $this->container['defaultWorkItemType'] = isset($data['defaultWorkItemType']) ? $data['defaultWorkItemType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isHidden'] = isset($data['isHidden']) ? $data['isHidden'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['workItemCountLimit'] = isset($data['workItemCountLimit']) ? $data['workItemCountLimit'] : null;
        $this->container['workItemTypes'] = isset($data['workItemTypes']) ? $data['workItemTypes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets addPanelFields
     *
     * @return \FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemFieldReference[]
     */
    public function getAddPanelFields()
    {
        return $this->container['addPanelFields'];
    }

    /**
     * Sets addPanelFields
     *
     * @param \FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemFieldReference[] $addPanelFields List of fields to include in Add Panel
     *
     * @return $this
     */
    public function setAddPanelFields($addPanelFields)
    {
        $this->container['addPanelFields'] = $addPanelFields;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color Color for the backlog level
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets columnFields
     *
     * @return \FrankHouweling\AzureDevOpsClient\Work\Model\BacklogColumn[]
     */
    public function getColumnFields()
    {
        return $this->container['columnFields'];
    }

    /**
     * Sets columnFields
     *
     * @param \FrankHouweling\AzureDevOpsClient\Work\Model\BacklogColumn[] $columnFields Default list of columns for the backlog
     *
     * @return $this
     */
    public function setColumnFields($columnFields)
    {
        $this->container['columnFields'] = $columnFields;

        return $this;
    }

    /**
     * Gets defaultWorkItemType
     *
     * @return \FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemTypeReference
     */
    public function getDefaultWorkItemType()
    {
        return $this->container['defaultWorkItemType'];
    }

    /**
     * Sets defaultWorkItemType
     *
     * @param \FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemTypeReference $defaultWorkItemType Default Work Item Type for the backlog
     *
     * @return $this
     */
    public function setDefaultWorkItemType($defaultWorkItemType)
    {
        $this->container['defaultWorkItemType'] = $defaultWorkItemType;

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
     * @param string $id Backlog Id (for Legacy Backlog Level from process config it can be categoryref name)
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isHidden
     *
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->container['isHidden'];
    }

    /**
     * Sets isHidden
     *
     * @param bool $isHidden Indicates whether the backlog level is hidden
     *
     * @return $this
     */
    public function setIsHidden($isHidden)
    {
        $this->container['isHidden'] = $isHidden;

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
     * @param string $name Backlog Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int $rank Backlog Rank (Taskbacklog is 0)
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of this backlog level
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets workItemCountLimit
     *
     * @return int
     */
    public function getWorkItemCountLimit()
    {
        return $this->container['workItemCountLimit'];
    }

    /**
     * Sets workItemCountLimit
     *
     * @param int $workItemCountLimit Max number of work items to show in the given backlog
     *
     * @return $this
     */
    public function setWorkItemCountLimit($workItemCountLimit)
    {
        $this->container['workItemCountLimit'] = $workItemCountLimit;

        return $this;
    }

    /**
     * Gets workItemTypes
     *
     * @return \FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemTypeReference[]
     */
    public function getWorkItemTypes()
    {
        return $this->container['workItemTypes'];
    }

    /**
     * Sets workItemTypes
     *
     * @param \FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemTypeReference[] $workItemTypes Work Item types participating in this backlog as known by the project/Process, can be overridden by team settings for bugs
     *
     * @return $this
     */
    public function setWorkItemTypes($workItemTypes)
    {
        $this->container['workItemTypes'] = $workItemTypes;

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

