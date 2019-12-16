<?php
/**
 * BuildReference
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TestResults
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

namespace AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model;

use \ArrayAccess;
use \AzureDevOpsClient\TestResults\ObjectSerializer;

/**
 * BuildReference Class Doc Comment
 *
 * @category Class
 * @description Reference to a build.
 * @package  AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'branchName' => 'string',
        'buildSystem' => 'string',
        'definitionId' => 'int',
        'id' => 'int',
        'number' => 'string',
        'repositoryId' => 'string',
        'uri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'branchName' => null,
        'buildSystem' => null,
        'definitionId' => 'int32',
        'id' => 'int32',
        'number' => null,
        'repositoryId' => null,
        'uri' => null
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
        'branchName' => 'branchName',
        'buildSystem' => 'buildSystem',
        'definitionId' => 'definitionId',
        'id' => 'id',
        'number' => 'number',
        'repositoryId' => 'repositoryId',
        'uri' => 'uri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branchName' => 'setBranchName',
        'buildSystem' => 'setBuildSystem',
        'definitionId' => 'setDefinitionId',
        'id' => 'setId',
        'number' => 'setNumber',
        'repositoryId' => 'setRepositoryId',
        'uri' => 'setUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branchName' => 'getBranchName',
        'buildSystem' => 'getBuildSystem',
        'definitionId' => 'getDefinitionId',
        'id' => 'getId',
        'number' => 'getNumber',
        'repositoryId' => 'getRepositoryId',
        'uri' => 'getUri'
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
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['buildSystem'] = isset($data['buildSystem']) ? $data['buildSystem'] : null;
        $this->container['definitionId'] = isset($data['definitionId']) ? $data['definitionId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
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
     * Gets branchName
     *
     * @return string
     */
    public function getBranchName()
    {
        return $this->container['branchName'];
    }

    /**
     * Sets branchName
     *
     * @param string $branchName Branch name.
     *
     * @return $this
     */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;

        return $this;
    }

    /**
     * Gets buildSystem
     *
     * @return string
     */
    public function getBuildSystem()
    {
        return $this->container['buildSystem'];
    }

    /**
     * Sets buildSystem
     *
     * @param string $buildSystem Build system.
     *
     * @return $this
     */
    public function setBuildSystem($buildSystem)
    {
        $this->container['buildSystem'] = $buildSystem;

        return $this;
    }

    /**
     * Gets definitionId
     *
     * @return int
     */
    public function getDefinitionId()
    {
        return $this->container['definitionId'];
    }

    /**
     * Sets definitionId
     *
     * @param int $definitionId Build Definition ID.
     *
     * @return $this
     */
    public function setDefinitionId($definitionId)
    {
        $this->container['definitionId'] = $definitionId;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Build ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Build Number.
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets repositoryId
     *
     * @return string
     */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
     * Sets repositoryId
     *
     * @param string $repositoryId Repository ID.
     *
     * @return $this
     */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri Build URI.
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

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


