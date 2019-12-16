<?php
/**
 * SecurityNamespaceDescription
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Security
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

namespace AzureDevOpsClient\Security\AzureDevOpsClient\Security\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Security\ObjectSerializer;

/**
 * SecurityNamespaceDescription Class Doc Comment
 *
 * @category Class
 * @description Class for describing the details of a TeamFoundationSecurityNamespace.
 * @package  AzureDevOpsClient\Security
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecurityNamespaceDescription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SecurityNamespaceDescription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'actions' => '\AzureDevOpsClient\Security\AzureDevOpsClient\Security\Model\ActionDefinition[]',
        'dataspaceCategory' => 'string',
        'displayName' => 'string',
        'elementLength' => 'int',
        'extensionType' => 'string',
        'isRemotable' => 'bool',
        'name' => 'string',
        'namespaceId' => 'string',
        'readPermission' => 'int',
        'separatorValue' => 'string',
        'structureValue' => 'int',
        'systemBitMask' => 'int',
        'useTokenTranslator' => 'bool',
        'writePermission' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'actions' => null,
        'dataspaceCategory' => null,
        'displayName' => null,
        'elementLength' => 'int32',
        'extensionType' => null,
        'isRemotable' => null,
        'name' => null,
        'namespaceId' => 'uuid',
        'readPermission' => 'int32',
        'separatorValue' => 'Char',
        'structureValue' => 'int32',
        'systemBitMask' => 'int32',
        'useTokenTranslator' => null,
        'writePermission' => 'int32'
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
        'actions' => 'actions',
        'dataspaceCategory' => 'dataspaceCategory',
        'displayName' => 'displayName',
        'elementLength' => 'elementLength',
        'extensionType' => 'extensionType',
        'isRemotable' => 'isRemotable',
        'name' => 'name',
        'namespaceId' => 'namespaceId',
        'readPermission' => 'readPermission',
        'separatorValue' => 'separatorValue',
        'structureValue' => 'structureValue',
        'systemBitMask' => 'systemBitMask',
        'useTokenTranslator' => 'useTokenTranslator',
        'writePermission' => 'writePermission'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actions' => 'setActions',
        'dataspaceCategory' => 'setDataspaceCategory',
        'displayName' => 'setDisplayName',
        'elementLength' => 'setElementLength',
        'extensionType' => 'setExtensionType',
        'isRemotable' => 'setIsRemotable',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'readPermission' => 'setReadPermission',
        'separatorValue' => 'setSeparatorValue',
        'structureValue' => 'setStructureValue',
        'systemBitMask' => 'setSystemBitMask',
        'useTokenTranslator' => 'setUseTokenTranslator',
        'writePermission' => 'setWritePermission'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actions' => 'getActions',
        'dataspaceCategory' => 'getDataspaceCategory',
        'displayName' => 'getDisplayName',
        'elementLength' => 'getElementLength',
        'extensionType' => 'getExtensionType',
        'isRemotable' => 'getIsRemotable',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'readPermission' => 'getReadPermission',
        'separatorValue' => 'getSeparatorValue',
        'structureValue' => 'getStructureValue',
        'systemBitMask' => 'getSystemBitMask',
        'useTokenTranslator' => 'getUseTokenTranslator',
        'writePermission' => 'getWritePermission'
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
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['dataspaceCategory'] = isset($data['dataspaceCategory']) ? $data['dataspaceCategory'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['elementLength'] = isset($data['elementLength']) ? $data['elementLength'] : null;
        $this->container['extensionType'] = isset($data['extensionType']) ? $data['extensionType'] : null;
        $this->container['isRemotable'] = isset($data['isRemotable']) ? $data['isRemotable'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['readPermission'] = isset($data['readPermission']) ? $data['readPermission'] : null;
        $this->container['separatorValue'] = isset($data['separatorValue']) ? $data['separatorValue'] : null;
        $this->container['structureValue'] = isset($data['structureValue']) ? $data['structureValue'] : null;
        $this->container['systemBitMask'] = isset($data['systemBitMask']) ? $data['systemBitMask'] : null;
        $this->container['useTokenTranslator'] = isset($data['useTokenTranslator']) ? $data['useTokenTranslator'] : null;
        $this->container['writePermission'] = isset($data['writePermission']) ? $data['writePermission'] : null;
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
     * Gets actions
     *
     * @return \AzureDevOpsClient\Security\AzureDevOpsClient\Security\Model\ActionDefinition[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \AzureDevOpsClient\Security\AzureDevOpsClient\Security\Model\ActionDefinition[] $actions The list of actions that this Security Namespace is responsible for securing.
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets dataspaceCategory
     *
     * @return string
     */
    public function getDataspaceCategory()
    {
        return $this->container['dataspaceCategory'];
    }

    /**
     * Sets dataspaceCategory
     *
     * @param string $dataspaceCategory This is the dataspace category that describes where the security information for this SecurityNamespace should be stored.
     *
     * @return $this
     */
    public function setDataspaceCategory($dataspaceCategory)
    {
        $this->container['dataspaceCategory'] = $dataspaceCategory;

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
     * @param string $displayName This localized name for this namespace.
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets elementLength
     *
     * @return int
     */
    public function getElementLength()
    {
        return $this->container['elementLength'];
    }

    /**
     * Sets elementLength
     *
     * @param int $elementLength If the security tokens this namespace will be operating on need to be split on certain character lengths to determine its elements, that length should be specified here. If not, this value will be -1.
     *
     * @return $this
     */
    public function setElementLength($elementLength)
    {
        $this->container['elementLength'] = $elementLength;

        return $this;
    }

    /**
     * Gets extensionType
     *
     * @return string
     */
    public function getExtensionType()
    {
        return $this->container['extensionType'];
    }

    /**
     * Sets extensionType
     *
     * @param string $extensionType This is the type of the extension that should be loaded from the plugins directory for extending this security namespace.
     *
     * @return $this
     */
    public function setExtensionType($extensionType)
    {
        $this->container['extensionType'] = $extensionType;

        return $this;
    }

    /**
     * Gets isRemotable
     *
     * @return bool
     */
    public function getIsRemotable()
    {
        return $this->container['isRemotable'];
    }

    /**
     * Sets isRemotable
     *
     * @param bool $isRemotable If true, the security namespace is remotable, allowing another service to proxy the namespace.
     *
     * @return $this
     */
    public function setIsRemotable($isRemotable)
    {
        $this->container['isRemotable'] = $isRemotable;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name This non-localized for this namespace.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets namespaceId
     *
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
     * Sets namespaceId
     *
     * @param string $namespaceId The unique identifier for this namespace.
     *
     * @return $this
     */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;

        return $this;
    }

    /**
     * Gets readPermission
     *
     * @return int
     */
    public function getReadPermission()
    {
        return $this->container['readPermission'];
    }

    /**
     * Sets readPermission
     *
     * @param int $readPermission The permission bits needed by a user in order to read security data on the Security Namespace.
     *
     * @return $this
     */
    public function setReadPermission($readPermission)
    {
        $this->container['readPermission'] = $readPermission;

        return $this;
    }

    /**
     * Gets separatorValue
     *
     * @return string
     */
    public function getSeparatorValue()
    {
        return $this->container['separatorValue'];
    }

    /**
     * Sets separatorValue
     *
     * @param string $separatorValue If the security tokens this namespace will be operating on need to be split on certain characters to determine its elements that character should be specified here. If not, this value will be the null character.
     *
     * @return $this
     */
    public function setSeparatorValue($separatorValue)
    {
        $this->container['separatorValue'] = $separatorValue;

        return $this;
    }

    /**
     * Gets structureValue
     *
     * @return int
     */
    public function getStructureValue()
    {
        return $this->container['structureValue'];
    }

    /**
     * Sets structureValue
     *
     * @param int $structureValue Used to send information about the structure of the security namespace over the web service.
     *
     * @return $this
     */
    public function setStructureValue($structureValue)
    {
        $this->container['structureValue'] = $structureValue;

        return $this;
    }

    /**
     * Gets systemBitMask
     *
     * @return int
     */
    public function getSystemBitMask()
    {
        return $this->container['systemBitMask'];
    }

    /**
     * Sets systemBitMask
     *
     * @param int $systemBitMask The bits reserved by system store
     *
     * @return $this
     */
    public function setSystemBitMask($systemBitMask)
    {
        $this->container['systemBitMask'] = $systemBitMask;

        return $this;
    }

    /**
     * Gets useTokenTranslator
     *
     * @return bool
     */
    public function getUseTokenTranslator()
    {
        return $this->container['useTokenTranslator'];
    }

    /**
     * Sets useTokenTranslator
     *
     * @param bool $useTokenTranslator If true, the security service will expect an ISecurityDataspaceTokenTranslator plugin to exist for this namespace
     *
     * @return $this
     */
    public function setUseTokenTranslator($useTokenTranslator)
    {
        $this->container['useTokenTranslator'] = $useTokenTranslator;

        return $this;
    }

    /**
     * Gets writePermission
     *
     * @return int
     */
    public function getWritePermission()
    {
        return $this->container['writePermission'];
    }

    /**
     * Sets writePermission
     *
     * @param int $writePermission The permission bits needed by a user in order to modify security data on the Security Namespace.
     *
     * @return $this
     */
    public function setWritePermission($writePermission)
    {
        $this->container['writePermission'] = $writePermission;

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


