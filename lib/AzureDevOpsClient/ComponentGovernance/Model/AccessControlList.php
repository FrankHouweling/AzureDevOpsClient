<?php
/**
 * AccessControlList
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\ComponentGovernance
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Security
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

namespace FrankHouweling\AzureDevOpsClient\ComponentGovernance\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\ComponentGovernance\ObjectSerializer;

/**
 * AccessControlList Class Doc Comment
 *
 * @category Class
 * @description The AccessControlList class is meant to associate a set of AccessControlEntries with a security token and its inheritance settings.
 * @package  FrankHouweling\AzureDevOpsClient\ComponentGovernance
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessControlList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccessControlList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acesDictionary' => 'map[string,\FrankHouweling\AzureDevOpsClient\ComponentGovernance\Model\AccessControlEntry]',
        'includeExtendedInfo' => 'bool',
        'inheritPermissions' => 'bool',
        'token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acesDictionary' => null,
        'includeExtendedInfo' => null,
        'inheritPermissions' => null,
        'token' => null
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
        'acesDictionary' => 'acesDictionary',
        'includeExtendedInfo' => 'includeExtendedInfo',
        'inheritPermissions' => 'inheritPermissions',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acesDictionary' => 'setAcesDictionary',
        'includeExtendedInfo' => 'setIncludeExtendedInfo',
        'inheritPermissions' => 'setInheritPermissions',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acesDictionary' => 'getAcesDictionary',
        'includeExtendedInfo' => 'getIncludeExtendedInfo',
        'inheritPermissions' => 'getInheritPermissions',
        'token' => 'getToken'
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
        $this->container['acesDictionary'] = isset($data['acesDictionary']) ? $data['acesDictionary'] : null;
        $this->container['includeExtendedInfo'] = isset($data['includeExtendedInfo']) ? $data['includeExtendedInfo'] : null;
        $this->container['inheritPermissions'] = isset($data['inheritPermissions']) ? $data['inheritPermissions'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
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
     * Gets acesDictionary
     *
     * @return map[string,\FrankHouweling\AzureDevOpsClient\ComponentGovernance\Model\AccessControlEntry]
     */
    public function getAcesDictionary()
    {
        return $this->container['acesDictionary'];
    }

    /**
     * Sets acesDictionary
     *
     * @param map[string,\FrankHouweling\AzureDevOpsClient\ComponentGovernance\Model\AccessControlEntry] $acesDictionary Storage of permissions keyed on the identity the permission is for.
     *
     * @return $this
     */
    public function setAcesDictionary($acesDictionary)
    {
        $this->container['acesDictionary'] = $acesDictionary;

        return $this;
    }

    /**
     * Gets includeExtendedInfo
     *
     * @return bool
     */
    public function getIncludeExtendedInfo()
    {
        return $this->container['includeExtendedInfo'];
    }

    /**
     * Sets includeExtendedInfo
     *
     * @param bool $includeExtendedInfo True if this ACL holds ACEs that have extended information.
     *
     * @return $this
     */
    public function setIncludeExtendedInfo($includeExtendedInfo)
    {
        $this->container['includeExtendedInfo'] = $includeExtendedInfo;

        return $this;
    }

    /**
     * Gets inheritPermissions
     *
     * @return bool
     */
    public function getInheritPermissions()
    {
        return $this->container['inheritPermissions'];
    }

    /**
     * Sets inheritPermissions
     *
     * @param bool $inheritPermissions True if the given token inherits permissions from parents.
     *
     * @return $this
     */
    public function setInheritPermissions($inheritPermissions)
    {
        $this->container['inheritPermissions'] = $inheritPermissions;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token The token that this AccessControlList is for.
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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


