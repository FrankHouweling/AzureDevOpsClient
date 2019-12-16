<?php
/**
 * ExtensionEventCallbackCollection
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
 * ExtensionEventCallbackCollection Class Doc Comment
 *
 * @category Class
 * @description Collection of event callbacks - endpoints called when particular extension events occur.
 * @package  AzureDevOpsClient\ExtensionManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtensionEventCallbackCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtensionEventCallbackCollection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'postDisable' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback',
        'postEnable' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback',
        'postInstall' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback',
        'postUninstall' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback',
        'postUpdate' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback',
        'preInstall' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback',
        'versionCheck' => '\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'postDisable' => null,
        'postEnable' => null,
        'postInstall' => null,
        'postUninstall' => null,
        'postUpdate' => null,
        'preInstall' => null,
        'versionCheck' => null
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
        'postDisable' => 'postDisable',
        'postEnable' => 'postEnable',
        'postInstall' => 'postInstall',
        'postUninstall' => 'postUninstall',
        'postUpdate' => 'postUpdate',
        'preInstall' => 'preInstall',
        'versionCheck' => 'versionCheck'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postDisable' => 'setPostDisable',
        'postEnable' => 'setPostEnable',
        'postInstall' => 'setPostInstall',
        'postUninstall' => 'setPostUninstall',
        'postUpdate' => 'setPostUpdate',
        'preInstall' => 'setPreInstall',
        'versionCheck' => 'setVersionCheck'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postDisable' => 'getPostDisable',
        'postEnable' => 'getPostEnable',
        'postInstall' => 'getPostInstall',
        'postUninstall' => 'getPostUninstall',
        'postUpdate' => 'getPostUpdate',
        'preInstall' => 'getPreInstall',
        'versionCheck' => 'getVersionCheck'
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
        $this->container['postDisable'] = isset($data['postDisable']) ? $data['postDisable'] : null;
        $this->container['postEnable'] = isset($data['postEnable']) ? $data['postEnable'] : null;
        $this->container['postInstall'] = isset($data['postInstall']) ? $data['postInstall'] : null;
        $this->container['postUninstall'] = isset($data['postUninstall']) ? $data['postUninstall'] : null;
        $this->container['postUpdate'] = isset($data['postUpdate']) ? $data['postUpdate'] : null;
        $this->container['preInstall'] = isset($data['preInstall']) ? $data['preInstall'] : null;
        $this->container['versionCheck'] = isset($data['versionCheck']) ? $data['versionCheck'] : null;
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
     * Gets postDisable
     *
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback
     */
    public function getPostDisable()
    {
        return $this->container['postDisable'];
    }

    /**
     * Sets postDisable
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback $postDisable Optional.  Defines an endpoint that gets called via a POST request to notify that an extension disable has occurred.
     *
     * @return $this
     */
    public function setPostDisable($postDisable)
    {
        $this->container['postDisable'] = $postDisable;

        return $this;
    }

    /**
     * Gets postEnable
     *
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback
     */
    public function getPostEnable()
    {
        return $this->container['postEnable'];
    }

    /**
     * Sets postEnable
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback $postEnable Optional.  Defines an endpoint that gets called via a POST request to notify that an extension enable has occurred.
     *
     * @return $this
     */
    public function setPostEnable($postEnable)
    {
        $this->container['postEnable'] = $postEnable;

        return $this;
    }

    /**
     * Gets postInstall
     *
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback
     */
    public function getPostInstall()
    {
        return $this->container['postInstall'];
    }

    /**
     * Sets postInstall
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback $postInstall Optional.  Defines an endpoint that gets called via a POST request to notify that an extension install has completed.
     *
     * @return $this
     */
    public function setPostInstall($postInstall)
    {
        $this->container['postInstall'] = $postInstall;

        return $this;
    }

    /**
     * Gets postUninstall
     *
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback
     */
    public function getPostUninstall()
    {
        return $this->container['postUninstall'];
    }

    /**
     * Sets postUninstall
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback $postUninstall Optional.  Defines an endpoint that gets called via a POST request to notify that an extension uninstall has occurred.
     *
     * @return $this
     */
    public function setPostUninstall($postUninstall)
    {
        $this->container['postUninstall'] = $postUninstall;

        return $this;
    }

    /**
     * Gets postUpdate
     *
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback
     */
    public function getPostUpdate()
    {
        return $this->container['postUpdate'];
    }

    /**
     * Sets postUpdate
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback $postUpdate Optional.  Defines an endpoint that gets called via a POST request to notify that an extension update has occurred.
     *
     * @return $this
     */
    public function setPostUpdate($postUpdate)
    {
        $this->container['postUpdate'] = $postUpdate;

        return $this;
    }

    /**
     * Gets preInstall
     *
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback
     */
    public function getPreInstall()
    {
        return $this->container['preInstall'];
    }

    /**
     * Sets preInstall
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback $preInstall Optional.  Defines an endpoint that gets called via a POST request to notify that an extension install is about to occur.  Response indicates whether to proceed or abort.
     *
     * @return $this
     */
    public function setPreInstall($preInstall)
    {
        $this->container['preInstall'] = $preInstall;

        return $this;
    }

    /**
     * Gets versionCheck
     *
     * @return \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback
     */
    public function getVersionCheck()
    {
        return $this->container['versionCheck'];
    }

    /**
     * Sets versionCheck
     *
     * @param \AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ExtensionEventCallback $versionCheck For multi-version extensions, defines an endpoint that gets called via an OPTIONS request to determine the particular version of the extension to be used
     *
     * @return $this
     */
    public function setVersionCheck($versionCheck)
    {
        $this->container['versionCheck'] = $versionCheck;

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


