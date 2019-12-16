<?php
/**
 * DataSourceDetails
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
 * DataSourceDetails Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataSourceDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataSourceDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dataSourceName' => 'string',
        'dataSourceUrl' => 'string',
        'headers' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\AuthorizationHeader[]',
        'parameters' => 'map[string,string]',
        'resourceUrl' => 'string',
        'resultSelector' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dataSourceName' => null,
        'dataSourceUrl' => null,
        'headers' => null,
        'parameters' => null,
        'resourceUrl' => null,
        'resultSelector' => null
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
        'dataSourceName' => 'dataSourceName',
        'dataSourceUrl' => 'dataSourceUrl',
        'headers' => 'headers',
        'parameters' => 'parameters',
        'resourceUrl' => 'resourceUrl',
        'resultSelector' => 'resultSelector'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataSourceName' => 'setDataSourceName',
        'dataSourceUrl' => 'setDataSourceUrl',
        'headers' => 'setHeaders',
        'parameters' => 'setParameters',
        'resourceUrl' => 'setResourceUrl',
        'resultSelector' => 'setResultSelector'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataSourceName' => 'getDataSourceName',
        'dataSourceUrl' => 'getDataSourceUrl',
        'headers' => 'getHeaders',
        'parameters' => 'getParameters',
        'resourceUrl' => 'getResourceUrl',
        'resultSelector' => 'getResultSelector'
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
        $this->container['dataSourceName'] = isset($data['dataSourceName']) ? $data['dataSourceName'] : null;
        $this->container['dataSourceUrl'] = isset($data['dataSourceUrl']) ? $data['dataSourceUrl'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['resourceUrl'] = isset($data['resourceUrl']) ? $data['resourceUrl'] : null;
        $this->container['resultSelector'] = isset($data['resultSelector']) ? $data['resultSelector'] : null;
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
     * Gets dataSourceName
     *
     * @return string
     */
    public function getDataSourceName()
    {
        return $this->container['dataSourceName'];
    }

    /**
     * Sets dataSourceName
     *
     * @param string $dataSourceName dataSourceName
     *
     * @return $this
     */
    public function setDataSourceName($dataSourceName)
    {
        $this->container['dataSourceName'] = $dataSourceName;

        return $this;
    }

    /**
     * Gets dataSourceUrl
     *
     * @return string
     */
    public function getDataSourceUrl()
    {
        return $this->container['dataSourceUrl'];
    }

    /**
     * Sets dataSourceUrl
     *
     * @param string $dataSourceUrl dataSourceUrl
     *
     * @return $this
     */
    public function setDataSourceUrl($dataSourceUrl)
    {
        $this->container['dataSourceUrl'] = $dataSourceUrl;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\AuthorizationHeader[]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\AuthorizationHeader[] $headers headers
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return map[string,string]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param map[string,string] $parameters parameters
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets resourceUrl
     *
     * @return string
     */
    public function getResourceUrl()
    {
        return $this->container['resourceUrl'];
    }

    /**
     * Sets resourceUrl
     *
     * @param string $resourceUrl resourceUrl
     *
     * @return $this
     */
    public function setResourceUrl($resourceUrl)
    {
        $this->container['resourceUrl'] = $resourceUrl;

        return $this;
    }

    /**
     * Gets resultSelector
     *
     * @return string
     */
    public function getResultSelector()
    {
        return $this->container['resultSelector'];
    }

    /**
     * Sets resultSelector
     *
     * @param string $resultSelector resultSelector
     *
     * @return $this
     */
    public function setResultSelector($resultSelector)
    {
        $this->container['resultSelector'] = $resultSelector;

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

