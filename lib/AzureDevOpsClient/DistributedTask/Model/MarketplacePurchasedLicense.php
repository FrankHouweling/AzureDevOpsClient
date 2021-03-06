<?php
/**
 * MarketplacePurchasedLicense
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TaskAgent
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

namespace FrankHouweling\AzureDevOpsClient\DistributedTask\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\DistributedTask\ObjectSerializer;

/**
 * MarketplacePurchasedLicense Class Doc Comment
 *
 * @category Class
 * @description Represents a purchase of resource units in a secondary marketplace.
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketplacePurchasedLicense implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MarketplacePurchasedLicense';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplaceName' => 'string',
        'purchaserName' => 'string',
        'purchaseUnitCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketplaceName' => null,
        'purchaserName' => null,
        'purchaseUnitCount' => 'int32'
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
        'marketplaceName' => 'marketplaceName',
        'purchaserName' => 'purchaserName',
        'purchaseUnitCount' => 'purchaseUnitCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceName' => 'setMarketplaceName',
        'purchaserName' => 'setPurchaserName',
        'purchaseUnitCount' => 'setPurchaseUnitCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceName' => 'getMarketplaceName',
        'purchaserName' => 'getPurchaserName',
        'purchaseUnitCount' => 'getPurchaseUnitCount'
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
        $this->container['marketplaceName'] = isset($data['marketplaceName']) ? $data['marketplaceName'] : null;
        $this->container['purchaserName'] = isset($data['purchaserName']) ? $data['purchaserName'] : null;
        $this->container['purchaseUnitCount'] = isset($data['purchaseUnitCount']) ? $data['purchaseUnitCount'] : null;
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
     * Gets marketplaceName
     *
     * @return string
     */
    public function getMarketplaceName()
    {
        return $this->container['marketplaceName'];
    }

    /**
     * Sets marketplaceName
     *
     * @param string $marketplaceName The Marketplace display name.
     *
     * @return $this
     */
    public function setMarketplaceName($marketplaceName)
    {
        $this->container['marketplaceName'] = $marketplaceName;

        return $this;
    }

    /**
     * Gets purchaserName
     *
     * @return string
     */
    public function getPurchaserName()
    {
        return $this->container['purchaserName'];
    }

    /**
     * Sets purchaserName
     *
     * @param string $purchaserName The name of the identity making the purchase as seen by the marketplace
     *
     * @return $this
     */
    public function setPurchaserName($purchaserName)
    {
        $this->container['purchaserName'] = $purchaserName;

        return $this;
    }

    /**
     * Gets purchaseUnitCount
     *
     * @return int
     */
    public function getPurchaseUnitCount()
    {
        return $this->container['purchaseUnitCount'];
    }

    /**
     * Sets purchaseUnitCount
     *
     * @param int $purchaseUnitCount The quantity purchased.
     *
     * @return $this
     */
    public function setPurchaseUnitCount($purchaseUnitCount)
    {
        $this->container['purchaseUnitCount'] = $purchaseUnitCount;

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


