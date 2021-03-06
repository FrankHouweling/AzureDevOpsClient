<?php
/**
 * TenantDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Clt
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CloudLoadTest
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

namespace FrankHouweling\AzureDevOpsClient\Clt\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Clt\ObjectSerializer;

/**
 * TenantDetails Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Clt
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TenantDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TenantDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accessDetails' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\AgentGroupAccessData[]',
        'id' => 'string',
        'staticMachines' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\WebApiTestMachine[]',
        'userLoadAgentInput' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\WebApiUserLoadTestMachineInput',
        'userLoadAgentResourcesUri' => 'string',
        'validGeoLocations' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accessDetails' => null,
        'id' => null,
        'staticMachines' => null,
        'userLoadAgentInput' => null,
        'userLoadAgentResourcesUri' => null,
        'validGeoLocations' => null
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
        'accessDetails' => 'accessDetails',
        'id' => 'id',
        'staticMachines' => 'staticMachines',
        'userLoadAgentInput' => 'userLoadAgentInput',
        'userLoadAgentResourcesUri' => 'userLoadAgentResourcesUri',
        'validGeoLocations' => 'validGeoLocations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessDetails' => 'setAccessDetails',
        'id' => 'setId',
        'staticMachines' => 'setStaticMachines',
        'userLoadAgentInput' => 'setUserLoadAgentInput',
        'userLoadAgentResourcesUri' => 'setUserLoadAgentResourcesUri',
        'validGeoLocations' => 'setValidGeoLocations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessDetails' => 'getAccessDetails',
        'id' => 'getId',
        'staticMachines' => 'getStaticMachines',
        'userLoadAgentInput' => 'getUserLoadAgentInput',
        'userLoadAgentResourcesUri' => 'getUserLoadAgentResourcesUri',
        'validGeoLocations' => 'getValidGeoLocations'
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
        $this->container['accessDetails'] = isset($data['accessDetails']) ? $data['accessDetails'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['staticMachines'] = isset($data['staticMachines']) ? $data['staticMachines'] : null;
        $this->container['userLoadAgentInput'] = isset($data['userLoadAgentInput']) ? $data['userLoadAgentInput'] : null;
        $this->container['userLoadAgentResourcesUri'] = isset($data['userLoadAgentResourcesUri']) ? $data['userLoadAgentResourcesUri'] : null;
        $this->container['validGeoLocations'] = isset($data['validGeoLocations']) ? $data['validGeoLocations'] : null;
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
     * Gets accessDetails
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\AgentGroupAccessData[]
     */
    public function getAccessDetails()
    {
        return $this->container['accessDetails'];
    }

    /**
     * Sets accessDetails
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\AgentGroupAccessData[] $accessDetails Access details
     *
     * @return $this
     */
    public function setAccessDetails($accessDetails)
    {
        $this->container['accessDetails'] = $accessDetails;

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
     * @param string $id Tenant Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets staticMachines
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\WebApiTestMachine[]
     */
    public function getStaticMachines()
    {
        return $this->container['staticMachines'];
    }

    /**
     * Sets staticMachines
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\WebApiTestMachine[] $staticMachines Static machines configured for local runs
     *
     * @return $this
     */
    public function setStaticMachines($staticMachines)
    {
        $this->container['staticMachines'] = $staticMachines;

        return $this;
    }

    /**
     * Gets userLoadAgentInput
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\WebApiUserLoadTestMachineInput
     */
    public function getUserLoadAgentInput()
    {
        return $this->container['userLoadAgentInput'];
    }

    /**
     * Sets userLoadAgentInput
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\WebApiUserLoadTestMachineInput $userLoadAgentInput userLoadAgentInput
     *
     * @return $this
     */
    public function setUserLoadAgentInput($userLoadAgentInput)
    {
        $this->container['userLoadAgentInput'] = $userLoadAgentInput;

        return $this;
    }

    /**
     * Gets userLoadAgentResourcesUri
     *
     * @return string
     */
    public function getUserLoadAgentResourcesUri()
    {
        return $this->container['userLoadAgentResourcesUri'];
    }

    /**
     * Sets userLoadAgentResourcesUri
     *
     * @param string $userLoadAgentResourcesUri userLoadAgentResourcesUri
     *
     * @return $this
     */
    public function setUserLoadAgentResourcesUri($userLoadAgentResourcesUri)
    {
        $this->container['userLoadAgentResourcesUri'] = $userLoadAgentResourcesUri;

        return $this;
    }

    /**
     * Gets validGeoLocations
     *
     * @return string[]
     */
    public function getValidGeoLocations()
    {
        return $this->container['validGeoLocations'];
    }

    /**
     * Sets validGeoLocations
     *
     * @param string[] $validGeoLocations The list of valid geo-lcations for tenant
     *
     * @return $this
     */
    public function setValidGeoLocations($validGeoLocations)
    {
        $this->container['validGeoLocations'] = $validGeoLocations;

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


