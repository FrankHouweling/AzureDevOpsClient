<?php
/**
 * GitPushSearchCriteria
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
 * GitPushSearchCriteria Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitPushSearchCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitPushSearchCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fromDate' => '\DateTime',
        'includeLinks' => 'bool',
        'includeRefUpdates' => 'bool',
        'pusherId' => 'string',
        'refName' => 'string',
        'toDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fromDate' => 'date-time',
        'includeLinks' => null,
        'includeRefUpdates' => null,
        'pusherId' => 'uuid',
        'refName' => null,
        'toDate' => 'date-time'
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
        'fromDate' => 'fromDate',
        'includeLinks' => 'includeLinks',
        'includeRefUpdates' => 'includeRefUpdates',
        'pusherId' => 'pusherId',
        'refName' => 'refName',
        'toDate' => 'toDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fromDate' => 'setFromDate',
        'includeLinks' => 'setIncludeLinks',
        'includeRefUpdates' => 'setIncludeRefUpdates',
        'pusherId' => 'setPusherId',
        'refName' => 'setRefName',
        'toDate' => 'setToDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fromDate' => 'getFromDate',
        'includeLinks' => 'getIncludeLinks',
        'includeRefUpdates' => 'getIncludeRefUpdates',
        'pusherId' => 'getPusherId',
        'refName' => 'getRefName',
        'toDate' => 'getToDate'
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
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['includeLinks'] = isset($data['includeLinks']) ? $data['includeLinks'] : null;
        $this->container['includeRefUpdates'] = isset($data['includeRefUpdates']) ? $data['includeRefUpdates'] : null;
        $this->container['pusherId'] = isset($data['pusherId']) ? $data['pusherId'] : null;
        $this->container['refName'] = isset($data['refName']) ? $data['refName'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
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
     * Gets fromDate
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['fromDate'];
    }

    /**
     * Sets fromDate
     *
     * @param \DateTime $fromDate fromDate
     *
     * @return $this
     */
    public function setFromDate($fromDate)
    {
        $this->container['fromDate'] = $fromDate;

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
     * Gets includeRefUpdates
     *
     * @return bool
     */
    public function getIncludeRefUpdates()
    {
        return $this->container['includeRefUpdates'];
    }

    /**
     * Sets includeRefUpdates
     *
     * @param bool $includeRefUpdates includeRefUpdates
     *
     * @return $this
     */
    public function setIncludeRefUpdates($includeRefUpdates)
    {
        $this->container['includeRefUpdates'] = $includeRefUpdates;

        return $this;
    }

    /**
     * Gets pusherId
     *
     * @return string
     */
    public function getPusherId()
    {
        return $this->container['pusherId'];
    }

    /**
     * Sets pusherId
     *
     * @param string $pusherId pusherId
     *
     * @return $this
     */
    public function setPusherId($pusherId)
    {
        $this->container['pusherId'] = $pusherId;

        return $this;
    }

    /**
     * Gets refName
     *
     * @return string
     */
    public function getRefName()
    {
        return $this->container['refName'];
    }

    /**
     * Sets refName
     *
     * @param string $refName refName
     *
     * @return $this
     */
    public function setRefName($refName)
    {
        $this->container['refName'] = $refName;

        return $this;
    }

    /**
     * Gets toDate
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['toDate'];
    }

    /**
     * Sets toDate
     *
     * @param \DateTime $toDate toDate
     *
     * @return $this
     */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;

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


