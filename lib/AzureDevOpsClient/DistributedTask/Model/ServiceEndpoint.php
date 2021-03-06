<?php
/**
 * ServiceEndpoint
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
 * ServiceEndpoint Class Doc Comment
 *
 * @category Class
 * @description Represents an endpoint which may be used by an orchestration job.
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceEndpoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceEndpoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'administratorsGroup' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef',
        'authorization' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\EndpointAuthorization',
        'createdBy' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef',
        'data' => 'map[string,string]',
        'description' => 'string',
        'groupScopeId' => 'string',
        'id' => 'string',
        'isReady' => 'bool',
        'isShared' => 'bool',
        'name' => 'string',
        'operationStatus' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\JObject',
        'owner' => 'string',
        'readersGroup' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef',
        'type' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'administratorsGroup' => null,
        'authorization' => null,
        'createdBy' => null,
        'data' => null,
        'description' => null,
        'groupScopeId' => 'uuid',
        'id' => 'uuid',
        'isReady' => null,
        'isShared' => null,
        'name' => null,
        'operationStatus' => null,
        'owner' => null,
        'readersGroup' => null,
        'type' => null,
        'url' => null
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
        'administratorsGroup' => 'administratorsGroup',
        'authorization' => 'authorization',
        'createdBy' => 'createdBy',
        'data' => 'data',
        'description' => 'description',
        'groupScopeId' => 'groupScopeId',
        'id' => 'id',
        'isReady' => 'isReady',
        'isShared' => 'isShared',
        'name' => 'name',
        'operationStatus' => 'operationStatus',
        'owner' => 'owner',
        'readersGroup' => 'readersGroup',
        'type' => 'type',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'administratorsGroup' => 'setAdministratorsGroup',
        'authorization' => 'setAuthorization',
        'createdBy' => 'setCreatedBy',
        'data' => 'setData',
        'description' => 'setDescription',
        'groupScopeId' => 'setGroupScopeId',
        'id' => 'setId',
        'isReady' => 'setIsReady',
        'isShared' => 'setIsShared',
        'name' => 'setName',
        'operationStatus' => 'setOperationStatus',
        'owner' => 'setOwner',
        'readersGroup' => 'setReadersGroup',
        'type' => 'setType',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'administratorsGroup' => 'getAdministratorsGroup',
        'authorization' => 'getAuthorization',
        'createdBy' => 'getCreatedBy',
        'data' => 'getData',
        'description' => 'getDescription',
        'groupScopeId' => 'getGroupScopeId',
        'id' => 'getId',
        'isReady' => 'getIsReady',
        'isShared' => 'getIsShared',
        'name' => 'getName',
        'operationStatus' => 'getOperationStatus',
        'owner' => 'getOwner',
        'readersGroup' => 'getReadersGroup',
        'type' => 'getType',
        'url' => 'getUrl'
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
        $this->container['administratorsGroup'] = isset($data['administratorsGroup']) ? $data['administratorsGroup'] : null;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['groupScopeId'] = isset($data['groupScopeId']) ? $data['groupScopeId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isReady'] = isset($data['isReady']) ? $data['isReady'] : null;
        $this->container['isShared'] = isset($data['isShared']) ? $data['isShared'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['operationStatus'] = isset($data['operationStatus']) ? $data['operationStatus'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['readersGroup'] = isset($data['readersGroup']) ? $data['readersGroup'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets administratorsGroup
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef
     */
    public function getAdministratorsGroup()
    {
        return $this->container['administratorsGroup'];
    }

    /**
     * Sets administratorsGroup
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef $administratorsGroup Gets or sets the identity reference for the administrators group of the service endpoint.
     *
     * @return $this
     */
    public function setAdministratorsGroup($administratorsGroup)
    {
        $this->container['administratorsGroup'] = $administratorsGroup;

        return $this;
    }

    /**
     * Gets authorization
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\EndpointAuthorization
     */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
     * Sets authorization
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\EndpointAuthorization $authorization Gets or sets the authorization data for talking to the endpoint.
     *
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef $createdBy Gets or sets the identity reference for the user who created the Service endpoint.
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets data
     *
     * @return map[string,string]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param map[string,string] $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Gets or sets the description of endpoint.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets groupScopeId
     *
     * @return string
     */
    public function getGroupScopeId()
    {
        return $this->container['groupScopeId'];
    }

    /**
     * Sets groupScopeId
     *
     * @param string $groupScopeId groupScopeId
     *
     * @return $this
     */
    public function setGroupScopeId($groupScopeId)
    {
        $this->container['groupScopeId'] = $groupScopeId;

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
     * @param string $id Gets or sets the identifier of this endpoint.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isReady
     *
     * @return bool
     */
    public function getIsReady()
    {
        return $this->container['isReady'];
    }

    /**
     * Sets isReady
     *
     * @param bool $isReady EndPoint state indicator
     *
     * @return $this
     */
    public function setIsReady($isReady)
    {
        $this->container['isReady'] = $isReady;

        return $this;
    }

    /**
     * Gets isShared
     *
     * @return bool
     */
    public function getIsShared()
    {
        return $this->container['isShared'];
    }

    /**
     * Sets isShared
     *
     * @param bool $isShared Indicates whether service endpoint is shared with other projects or not.
     *
     * @return $this
     */
    public function setIsShared($isShared)
    {
        $this->container['isShared'] = $isShared;

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
     * @param string $name Gets or sets the friendly name of the endpoint.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets operationStatus
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\JObject
     */
    public function getOperationStatus()
    {
        return $this->container['operationStatus'];
    }

    /**
     * Sets operationStatus
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\JObject $operationStatus Error message during creation/deletion of endpoint
     *
     * @return $this
     */
    public function setOperationStatus($operationStatus)
    {
        $this->container['operationStatus'] = $operationStatus;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string $owner Gets or sets the owner of the endpoint.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets readersGroup
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef
     */
    public function getReadersGroup()
    {
        return $this->container['readersGroup'];
    }

    /**
     * Sets readersGroup
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef $readersGroup Gets or sets the identity reference for the readers group of the service endpoint.
     *
     * @return $this
     */
    public function setReadersGroup($readersGroup)
    {
        $this->container['readersGroup'] = $readersGroup;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Gets or sets the type of the endpoint.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $url Gets or sets the url of the endpoint.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


