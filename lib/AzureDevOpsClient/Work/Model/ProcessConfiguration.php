<?php
/**
 * ProcessConfiguration
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
 * ProcessConfiguration Class Doc Comment
 *
 * @category Class
 * @description Process Configurations for the project
 * @package  FrankHouweling\AzureDevOpsClient\Work
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProcessConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProcessConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bugWorkItems' => '\FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration',
        'portfolioBacklogs' => '\FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration[]',
        'requirementBacklog' => '\FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration',
        'taskBacklog' => '\FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration',
        'typeFields' => 'map[string,\FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemFieldReference]',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bugWorkItems' => null,
        'portfolioBacklogs' => null,
        'requirementBacklog' => null,
        'taskBacklog' => null,
        'typeFields' => null,
        'url' => null
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
        'bugWorkItems' => 'bugWorkItems',
        'portfolioBacklogs' => 'portfolioBacklogs',
        'requirementBacklog' => 'requirementBacklog',
        'taskBacklog' => 'taskBacklog',
        'typeFields' => 'typeFields',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bugWorkItems' => 'setBugWorkItems',
        'portfolioBacklogs' => 'setPortfolioBacklogs',
        'requirementBacklog' => 'setRequirementBacklog',
        'taskBacklog' => 'setTaskBacklog',
        'typeFields' => 'setTypeFields',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bugWorkItems' => 'getBugWorkItems',
        'portfolioBacklogs' => 'getPortfolioBacklogs',
        'requirementBacklog' => 'getRequirementBacklog',
        'taskBacklog' => 'getTaskBacklog',
        'typeFields' => 'getTypeFields',
        'url' => 'getUrl'
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
        $this->container['bugWorkItems'] = isset($data['bugWorkItems']) ? $data['bugWorkItems'] : null;
        $this->container['portfolioBacklogs'] = isset($data['portfolioBacklogs']) ? $data['portfolioBacklogs'] : null;
        $this->container['requirementBacklog'] = isset($data['requirementBacklog']) ? $data['requirementBacklog'] : null;
        $this->container['taskBacklog'] = isset($data['taskBacklog']) ? $data['taskBacklog'] : null;
        $this->container['typeFields'] = isset($data['typeFields']) ? $data['typeFields'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets bugWorkItems
     *
     * @return \FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration
     */
    public function getBugWorkItems()
    {
        return $this->container['bugWorkItems'];
    }

    /**
     * Sets bugWorkItems
     *
     * @param \FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration $bugWorkItems Details about bug work items
     *
     * @return $this
     */
    public function setBugWorkItems($bugWorkItems)
    {
        $this->container['bugWorkItems'] = $bugWorkItems;

        return $this;
    }

    /**
     * Gets portfolioBacklogs
     *
     * @return \FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration[]
     */
    public function getPortfolioBacklogs()
    {
        return $this->container['portfolioBacklogs'];
    }

    /**
     * Sets portfolioBacklogs
     *
     * @param \FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration[] $portfolioBacklogs Details about portfolio backlogs
     *
     * @return $this
     */
    public function setPortfolioBacklogs($portfolioBacklogs)
    {
        $this->container['portfolioBacklogs'] = $portfolioBacklogs;

        return $this;
    }

    /**
     * Gets requirementBacklog
     *
     * @return \FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration
     */
    public function getRequirementBacklog()
    {
        return $this->container['requirementBacklog'];
    }

    /**
     * Sets requirementBacklog
     *
     * @param \FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration $requirementBacklog Details of requirement backlog
     *
     * @return $this
     */
    public function setRequirementBacklog($requirementBacklog)
    {
        $this->container['requirementBacklog'] = $requirementBacklog;

        return $this;
    }

    /**
     * Gets taskBacklog
     *
     * @return \FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration
     */
    public function getTaskBacklog()
    {
        return $this->container['taskBacklog'];
    }

    /**
     * Sets taskBacklog
     *
     * @param \FrankHouweling\AzureDevOpsClient\Work\Model\CategoryConfiguration $taskBacklog Details of task backlog
     *
     * @return $this
     */
    public function setTaskBacklog($taskBacklog)
    {
        $this->container['taskBacklog'] = $taskBacklog;

        return $this;
    }

    /**
     * Gets typeFields
     *
     * @return map[string,\FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemFieldReference]
     */
    public function getTypeFields()
    {
        return $this->container['typeFields'];
    }

    /**
     * Sets typeFields
     *
     * @param map[string,\FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemFieldReference] $typeFields Type fields for the process configuration
     *
     * @return $this
     */
    public function setTypeFields($typeFields)
    {
        $this->container['typeFields'] = $typeFields;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


