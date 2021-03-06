<?php
/**
 * GitQueryRefsCriteria
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Git
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

namespace FrankHouweling\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Git\ObjectSerializer;

/**
 * GitQueryRefsCriteria Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitQueryRefsCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitQueryRefsCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commitIds' => 'string[]',
        'refNames' => 'string[]',
        'searchType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commitIds' => null,
        'refNames' => null,
        'searchType' => null
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
        'commitIds' => 'commitIds',
        'refNames' => 'refNames',
        'searchType' => 'searchType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commitIds' => 'setCommitIds',
        'refNames' => 'setRefNames',
        'searchType' => 'setSearchType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commitIds' => 'getCommitIds',
        'refNames' => 'getRefNames',
        'searchType' => 'getSearchType'
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

    const SEARCH_TYPE_EXACT = 'exact';
    const SEARCH_TYPE_STARTS_WITH = 'startsWith';
    const SEARCH_TYPE_CONTAINS = 'contains';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSearchTypeAllowableValues()
    {
        return [
            self::SEARCH_TYPE_EXACT,
            self::SEARCH_TYPE_STARTS_WITH,
            self::SEARCH_TYPE_CONTAINS,
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
        $this->container['commitIds'] = isset($data['commitIds']) ? $data['commitIds'] : null;
        $this->container['refNames'] = isset($data['refNames']) ? $data['refNames'] : null;
        $this->container['searchType'] = isset($data['searchType']) ? $data['searchType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSearchTypeAllowableValues();
        if (!is_null($this->container['searchType']) && !in_array($this->container['searchType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'searchType', must be one of '%s'",
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
     * Gets commitIds
     *
     * @return string[]
     */
    public function getCommitIds()
    {
        return $this->container['commitIds'];
    }

    /**
     * Sets commitIds
     *
     * @param string[] $commitIds List of commit Ids to be searched
     *
     * @return $this
     */
    public function setCommitIds($commitIds)
    {
        $this->container['commitIds'] = $commitIds;

        return $this;
    }

    /**
     * Gets refNames
     *
     * @return string[]
     */
    public function getRefNames()
    {
        return $this->container['refNames'];
    }

    /**
     * Sets refNames
     *
     * @param string[] $refNames List of complete or partial names for refs to be searched
     *
     * @return $this
     */
    public function setRefNames($refNames)
    {
        $this->container['refNames'] = $refNames;

        return $this;
    }

    /**
     * Gets searchType
     *
     * @return string
     */
    public function getSearchType()
    {
        return $this->container['searchType'];
    }

    /**
     * Sets searchType
     *
     * @param string $searchType Type of search on refNames, if provided
     *
     * @return $this
     */
    public function setSearchType($searchType)
    {
        $allowedValues = $this->getSearchTypeAllowableValues();
        if (!is_null($searchType) && !in_array($searchType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'searchType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['searchType'] = $searchType;

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


