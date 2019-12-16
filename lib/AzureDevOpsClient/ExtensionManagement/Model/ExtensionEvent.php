<?php
/**
 * ExtensionEvent
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
 * ExtensionEvent Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\ExtensionManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtensionEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtensionEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'extension' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\PublishedExtension',
        'extensionVersion' => 'string',
        'host' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionHost',
        'links' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventUrls',
        'modifiedBy' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\IdentityRef',
        'updateType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'extension' => null,
        'extensionVersion' => null,
        'host' => null,
        'links' => null,
        'modifiedBy' => null,
        'updateType' => null
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
        'extension' => 'extension',
        'extensionVersion' => 'extensionVersion',
        'host' => 'host',
        'links' => 'links',
        'modifiedBy' => 'modifiedBy',
        'updateType' => 'updateType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extension' => 'setExtension',
        'extensionVersion' => 'setExtensionVersion',
        'host' => 'setHost',
        'links' => 'setLinks',
        'modifiedBy' => 'setModifiedBy',
        'updateType' => 'setUpdateType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extension' => 'getExtension',
        'extensionVersion' => 'getExtensionVersion',
        'host' => 'getHost',
        'links' => 'getLinks',
        'modifiedBy' => 'getModifiedBy',
        'updateType' => 'getUpdateType'
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

    const UPDATE_TYPE_INSTALLED = 'installed';
    const UPDATE_TYPE_UNINSTALLED = 'uninstalled';
    const UPDATE_TYPE_ENABLED = 'enabled';
    const UPDATE_TYPE_DISABLED = 'disabled';
    const UPDATE_TYPE_VERSION_UPDATED = 'versionUpdated';
    const UPDATE_TYPE_ACTION_REQUIRED = 'actionRequired';
    const UPDATE_TYPE_ACTION_RESOLVED = 'actionResolved';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUpdateTypeAllowableValues()
    {
        return [
            self::UPDATE_TYPE_INSTALLED,
            self::UPDATE_TYPE_UNINSTALLED,
            self::UPDATE_TYPE_ENABLED,
            self::UPDATE_TYPE_DISABLED,
            self::UPDATE_TYPE_VERSION_UPDATED,
            self::UPDATE_TYPE_ACTION_REQUIRED,
            self::UPDATE_TYPE_ACTION_RESOLVED,
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
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['extensionVersion'] = isset($data['extensionVersion']) ? $data['extensionVersion'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['updateType'] = isset($data['updateType']) ? $data['updateType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUpdateTypeAllowableValues();
        if (!is_null($this->container['updateType']) && !in_array($this->container['updateType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'updateType', must be one of '%s'",
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
     * Gets extension
     *
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\PublishedExtension
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\PublishedExtension $extension The extension which has been updated
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets extensionVersion
     *
     * @return string
     */
    public function getExtensionVersion()
    {
        return $this->container['extensionVersion'];
    }

    /**
     * Sets extensionVersion
     *
     * @param string $extensionVersion The current version of the extension that was updated
     *
     * @return $this
     */
    public function setExtensionVersion($extensionVersion)
    {
        $this->container['extensionVersion'] = $extensionVersion;

        return $this;
    }

    /**
     * Gets host
     *
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionHost
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionHost $host Name of the collection for which the extension was requested
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventUrls
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventUrls $links Gallery host url
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets modifiedBy
     *
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\IdentityRef
     */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
     * Sets modifiedBy
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\IdentityRef $modifiedBy Represents the user who initiated the update
     *
     * @return $this
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;

        return $this;
    }

    /**
     * Gets updateType
     *
     * @return string
     */
    public function getUpdateType()
    {
        return $this->container['updateType'];
    }

    /**
     * Sets updateType
     *
     * @param string $updateType The type of update that was made
     *
     * @return $this
     */
    public function setUpdateType($updateType)
    {
        $allowedValues = $this->getUpdateTypeAllowableValues();
        if (!is_null($updateType) && !in_array($updateType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'updateType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['updateType'] = $updateType;

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


