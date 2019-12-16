<?php
/**
 * GitItemRequestData
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
 * GitItemRequestData Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitItemRequestData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitItemRequestData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'includeContentMetadata' => 'bool',
        'includeLinks' => 'bool',
        'itemDescriptors' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitItemDescriptor[]',
        'latestProcessedChange' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'includeContentMetadata' => null,
        'includeLinks' => null,
        'itemDescriptors' => null,
        'latestProcessedChange' => null
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
        'includeContentMetadata' => 'includeContentMetadata',
        'includeLinks' => 'includeLinks',
        'itemDescriptors' => 'itemDescriptors',
        'latestProcessedChange' => 'latestProcessedChange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'includeContentMetadata' => 'setIncludeContentMetadata',
        'includeLinks' => 'setIncludeLinks',
        'itemDescriptors' => 'setItemDescriptors',
        'latestProcessedChange' => 'setLatestProcessedChange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'includeContentMetadata' => 'getIncludeContentMetadata',
        'includeLinks' => 'getIncludeLinks',
        'itemDescriptors' => 'getItemDescriptors',
        'latestProcessedChange' => 'getLatestProcessedChange'
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
        $this->container['includeContentMetadata'] = isset($data['includeContentMetadata']) ? $data['includeContentMetadata'] : null;
        $this->container['includeLinks'] = isset($data['includeLinks']) ? $data['includeLinks'] : null;
        $this->container['itemDescriptors'] = isset($data['itemDescriptors']) ? $data['itemDescriptors'] : null;
        $this->container['latestProcessedChange'] = isset($data['latestProcessedChange']) ? $data['latestProcessedChange'] : null;
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
     * Gets includeContentMetadata
     *
     * @return bool
     */
    public function getIncludeContentMetadata()
    {
        return $this->container['includeContentMetadata'];
    }

    /**
     * Sets includeContentMetadata
     *
     * @param bool $includeContentMetadata Whether to include metadata for all items
     *
     * @return $this
     */
    public function setIncludeContentMetadata($includeContentMetadata)
    {
        $this->container['includeContentMetadata'] = $includeContentMetadata;

        return $this;
    }

    /**
     * Gets includeLinks
     *
     * @return bool
     */
    public function getIncludeLinks()
    {
        return $this->container['includeLinks'];
    }

    /**
     * Sets includeLinks
     *
     * @param bool $includeLinks Whether to include the _links field on the shallow references
     *
     * @return $this
     */
    public function setIncludeLinks($includeLinks)
    {
        $this->container['includeLinks'] = $includeLinks;

        return $this;
    }

    /**
     * Gets itemDescriptors
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitItemDescriptor[]
     */
    public function getItemDescriptors()
    {
        return $this->container['itemDescriptors'];
    }

    /**
     * Sets itemDescriptors
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitItemDescriptor[] $itemDescriptors Collection of items to fetch, including path, version, and recursion level
     *
     * @return $this
     */
    public function setItemDescriptors($itemDescriptors)
    {
        $this->container['itemDescriptors'] = $itemDescriptors;

        return $this;
    }

    /**
     * Gets latestProcessedChange
     *
     * @return bool
     */
    public function getLatestProcessedChange()
    {
        return $this->container['latestProcessedChange'];
    }

    /**
     * Sets latestProcessedChange
     *
     * @param bool $latestProcessedChange Whether to include shallow ref to commit that last changed each item
     *
     * @return $this
     */
    public function setLatestProcessedChange($latestProcessedChange)
    {
        $this->container['latestProcessedChange'] = $latestProcessedChange;

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


