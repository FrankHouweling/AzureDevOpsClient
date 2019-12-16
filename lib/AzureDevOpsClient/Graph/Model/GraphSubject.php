<?php
/**
 * GraphSubject
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Graph
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Graph
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

namespace AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Graph\ObjectSerializer;

/**
 * GraphSubject Class Doc Comment
 *
 * @category Class
 * @description Top-level graph entity
 * @package  AzureDevOpsClient\Graph
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GraphSubject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GraphSubject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\ReferenceLinks',
        'descriptor' => 'string',
        'displayName' => 'string',
        'url' => 'string',
        'legacyDescriptor' => 'string',
        'origin' => 'string',
        'originId' => 'string',
        'subjectKind' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'descriptor' => null,
        'displayName' => null,
        'url' => null,
        'legacyDescriptor' => null,
        'origin' => null,
        'originId' => null,
        'subjectKind' => null
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
        'links' => '_links',
        'descriptor' => 'descriptor',
        'displayName' => 'displayName',
        'url' => 'url',
        'legacyDescriptor' => 'legacyDescriptor',
        'origin' => 'origin',
        'originId' => 'originId',
        'subjectKind' => 'subjectKind'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'descriptor' => 'setDescriptor',
        'displayName' => 'setDisplayName',
        'url' => 'setUrl',
        'legacyDescriptor' => 'setLegacyDescriptor',
        'origin' => 'setOrigin',
        'originId' => 'setOriginId',
        'subjectKind' => 'setSubjectKind'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'descriptor' => 'getDescriptor',
        'displayName' => 'getDisplayName',
        'url' => 'getUrl',
        'legacyDescriptor' => 'getLegacyDescriptor',
        'origin' => 'getOrigin',
        'originId' => 'getOriginId',
        'subjectKind' => 'getSubjectKind'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['descriptor'] = isset($data['descriptor']) ? $data['descriptor'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['legacyDescriptor'] = isset($data['legacyDescriptor']) ? $data['legacyDescriptor'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['originId'] = isset($data['originId']) ? $data['originId'] : null;
        $this->container['subjectKind'] = isset($data['subjectKind']) ? $data['subjectKind'] : null;
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
     * Gets links
     *
     * @return \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\ReferenceLinks $links This field contains zero or more interesting links about the graph subject. These links may be invoked to obtain additional relationships or more detailed information about this graph subject.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets descriptor
     *
     * @return string
     */
    public function getDescriptor()
    {
        return $this->container['descriptor'];
    }

    /**
     * Sets descriptor
     *
     * @param string $descriptor The descriptor is the primary way to reference the graph subject while the system is running. This field will uniquely identify the same graph subject across both Accounts and Organizations.
     *
     * @return $this
     */
    public function setDescriptor($descriptor)
    {
        $this->container['descriptor'] = $descriptor;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName This is the non-unique display name of the graph subject. To change this field, you must alter its value in the source provider.
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

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
     * @param string $url This url is the full route to the source resource of this graph subject.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets legacyDescriptor
     *
     * @return string
     */
    public function getLegacyDescriptor()
    {
        return $this->container['legacyDescriptor'];
    }

    /**
     * Sets legacyDescriptor
     *
     * @param string $legacyDescriptor [Internal Use Only] The legacy descriptor is here in case you need to access old version IMS using identity descriptor.
     *
     * @return $this
     */
    public function setLegacyDescriptor($legacyDescriptor)
    {
        $this->container['legacyDescriptor'] = $legacyDescriptor;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string $origin The type of source provider for the origin identifier (ex:AD, AAD, MSA)
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets originId
     *
     * @return string
     */
    public function getOriginId()
    {
        return $this->container['originId'];
    }

    /**
     * Sets originId
     *
     * @param string $originId The unique identifier from the system of origin. Typically a sid, object id or Guid. Linking and unlinking operations can cause this value to change for a user because the user is not backed by a different provider and has a different unique id in the new provider.
     *
     * @return $this
     */
    public function setOriginId($originId)
    {
        $this->container['originId'] = $originId;

        return $this;
    }

    /**
     * Gets subjectKind
     *
     * @return string
     */
    public function getSubjectKind()
    {
        return $this->container['subjectKind'];
    }

    /**
     * Sets subjectKind
     *
     * @param string $subjectKind This field identifies the type of the graph subject (ex: Group, Scope, User).
     *
     * @return $this
     */
    public function setSubjectKind($subjectKind)
    {
        $this->container['subjectKind'] = $subjectKind;

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


