<?php
/**
 * IdentityRef
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\ExtensionManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ExtensionManagement
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

namespace AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model;

use \ArrayAccess;
use \AzureDevOpsClient\ExtensionManagement\ObjectSerializer;

/**
 * IdentityRef Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\ExtensionManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdentityRef implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IdentityRef';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ReferenceLinks',
        'descriptor' => 'string',
        'displayName' => 'string',
        'url' => 'string',
        'directoryAlias' => 'string',
        'id' => 'string',
        'imageUrl' => 'string',
        'inactive' => 'bool',
        'isAadIdentity' => 'bool',
        'isContainer' => 'bool',
        'isDeletedInOrigin' => 'bool',
        'profileUrl' => 'string',
        'uniqueName' => 'string'
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
        'directoryAlias' => null,
        'id' => null,
        'imageUrl' => null,
        'inactive' => null,
        'isAadIdentity' => null,
        'isContainer' => null,
        'isDeletedInOrigin' => null,
        'profileUrl' => null,
        'uniqueName' => null
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
        'directoryAlias' => 'directoryAlias',
        'id' => 'id',
        'imageUrl' => 'imageUrl',
        'inactive' => 'inactive',
        'isAadIdentity' => 'isAadIdentity',
        'isContainer' => 'isContainer',
        'isDeletedInOrigin' => 'isDeletedInOrigin',
        'profileUrl' => 'profileUrl',
        'uniqueName' => 'uniqueName'
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
        'directoryAlias' => 'setDirectoryAlias',
        'id' => 'setId',
        'imageUrl' => 'setImageUrl',
        'inactive' => 'setInactive',
        'isAadIdentity' => 'setIsAadIdentity',
        'isContainer' => 'setIsContainer',
        'isDeletedInOrigin' => 'setIsDeletedInOrigin',
        'profileUrl' => 'setProfileUrl',
        'uniqueName' => 'setUniqueName'
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
        'directoryAlias' => 'getDirectoryAlias',
        'id' => 'getId',
        'imageUrl' => 'getImageUrl',
        'inactive' => 'getInactive',
        'isAadIdentity' => 'getIsAadIdentity',
        'isContainer' => 'getIsContainer',
        'isDeletedInOrigin' => 'getIsDeletedInOrigin',
        'profileUrl' => 'getProfileUrl',
        'uniqueName' => 'getUniqueName'
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
        $this->container['directoryAlias'] = isset($data['directoryAlias']) ? $data['directoryAlias'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['inactive'] = isset($data['inactive']) ? $data['inactive'] : null;
        $this->container['isAadIdentity'] = isset($data['isAadIdentity']) ? $data['isAadIdentity'] : null;
        $this->container['isContainer'] = isset($data['isContainer']) ? $data['isContainer'] : null;
        $this->container['isDeletedInOrigin'] = isset($data['isDeletedInOrigin']) ? $data['isDeletedInOrigin'] : null;
        $this->container['profileUrl'] = isset($data['profileUrl']) ? $data['profileUrl'] : null;
        $this->container['uniqueName'] = isset($data['uniqueName']) ? $data['uniqueName'] : null;
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
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ReferenceLinks $links This field contains zero or more interesting links about the graph subject. These links may be invoked to obtain additional relationships or more detailed information about this graph subject.
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
     * Gets directoryAlias
     *
     * @return string
     */
    public function getDirectoryAlias()
    {
        return $this->container['directoryAlias'];
    }

    /**
     * Sets directoryAlias
     *
     * @param string $directoryAlias Deprecated - Can be retrieved by querying the Graph user referenced in the \"self\" entry of the IdentityRef \"_links\" dictionary
     *
     * @return $this
     */
    public function setDirectoryAlias($directoryAlias)
    {
        $this->container['directoryAlias'] = $directoryAlias;

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
     * Gets imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string $imageUrl Deprecated - Available in the \"avatar\" entry of the IdentityRef \"_links\" dictionary
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets inactive
     *
     * @return bool
     */
    public function getInactive()
    {
        return $this->container['inactive'];
    }

    /**
     * Sets inactive
     *
     * @param bool $inactive Deprecated - Can be retrieved by querying the Graph membership state referenced in the \"membershipState\" entry of the GraphUser \"_links\" dictionary
     *
     * @return $this
     */
    public function setInactive($inactive)
    {
        $this->container['inactive'] = $inactive;

        return $this;
    }

    /**
     * Gets isAadIdentity
     *
     * @return bool
     */
    public function getIsAadIdentity()
    {
        return $this->container['isAadIdentity'];
    }

    /**
     * Sets isAadIdentity
     *
     * @param bool $isAadIdentity Deprecated - Can be inferred from the subject type of the descriptor (Descriptor.IsAadUserType/Descriptor.IsAadGroupType)
     *
     * @return $this
     */
    public function setIsAadIdentity($isAadIdentity)
    {
        $this->container['isAadIdentity'] = $isAadIdentity;

        return $this;
    }

    /**
     * Gets isContainer
     *
     * @return bool
     */
    public function getIsContainer()
    {
        return $this->container['isContainer'];
    }

    /**
     * Sets isContainer
     *
     * @param bool $isContainer Deprecated - Can be inferred from the subject type of the descriptor (Descriptor.IsGroupType)
     *
     * @return $this
     */
    public function setIsContainer($isContainer)
    {
        $this->container['isContainer'] = $isContainer;

        return $this;
    }

    /**
     * Gets isDeletedInOrigin
     *
     * @return bool
     */
    public function getIsDeletedInOrigin()
    {
        return $this->container['isDeletedInOrigin'];
    }

    /**
     * Sets isDeletedInOrigin
     *
     * @param bool $isDeletedInOrigin isDeletedInOrigin
     *
     * @return $this
     */
    public function setIsDeletedInOrigin($isDeletedInOrigin)
    {
        $this->container['isDeletedInOrigin'] = $isDeletedInOrigin;

        return $this;
    }

    /**
     * Gets profileUrl
     *
     * @return string
     */
    public function getProfileUrl()
    {
        return $this->container['profileUrl'];
    }

    /**
     * Sets profileUrl
     *
     * @param string $profileUrl Deprecated - not in use in most preexisting implementations of ToIdentityRef
     *
     * @return $this
     */
    public function setProfileUrl($profileUrl)
    {
        $this->container['profileUrl'] = $profileUrl;

        return $this;
    }

    /**
     * Gets uniqueName
     *
     * @return string
     */
    public function getUniqueName()
    {
        return $this->container['uniqueName'];
    }

    /**
     * Sets uniqueName
     *
     * @param string $uniqueName Deprecated - use Domain+PrincipalName instead
     *
     * @return $this
     */
    public function setUniqueName($uniqueName)
    {
        $this->container['uniqueName'] = $uniqueName;

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


