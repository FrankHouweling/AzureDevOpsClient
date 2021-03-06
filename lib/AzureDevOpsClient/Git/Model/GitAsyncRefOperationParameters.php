<?php
/**
 * GitAsyncRefOperationParameters
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Git
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

namespace FrankHouweling\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Git\ObjectSerializer;

/**
 * GitAsyncRefOperationParameters Class Doc Comment
 *
 * @category Class
 * @description Parameters that are provided in the request body when requesting to cherry pick or revert.
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitAsyncRefOperationParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitAsyncRefOperationParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'generatedRefName' => 'string',
        'ontoRefName' => 'string',
        'repository' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository',
        'source' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitAsyncRefOperationSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'generatedRefName' => null,
        'ontoRefName' => null,
        'repository' => null,
        'source' => null
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
        'generatedRefName' => 'generatedRefName',
        'ontoRefName' => 'ontoRefName',
        'repository' => 'repository',
        'source' => 'source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'generatedRefName' => 'setGeneratedRefName',
        'ontoRefName' => 'setOntoRefName',
        'repository' => 'setRepository',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'generatedRefName' => 'getGeneratedRefName',
        'ontoRefName' => 'getOntoRefName',
        'repository' => 'getRepository',
        'source' => 'getSource'
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
        $this->container['generatedRefName'] = isset($data['generatedRefName']) ? $data['generatedRefName'] : null;
        $this->container['ontoRefName'] = isset($data['ontoRefName']) ? $data['ontoRefName'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
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
     * Gets generatedRefName
     *
     * @return string
     */
    public function getGeneratedRefName()
    {
        return $this->container['generatedRefName'];
    }

    /**
     * Sets generatedRefName
     *
     * @param string $generatedRefName Proposed target branch name for the cherry pick or revert operation.
     *
     * @return $this
     */
    public function setGeneratedRefName($generatedRefName)
    {
        $this->container['generatedRefName'] = $generatedRefName;

        return $this;
    }

    /**
     * Gets ontoRefName
     *
     * @return string
     */
    public function getOntoRefName()
    {
        return $this->container['ontoRefName'];
    }

    /**
     * Sets ontoRefName
     *
     * @param string $ontoRefName The target branch for the cherry pick or revert operation.
     *
     * @return $this
     */
    public function setOntoRefName($ontoRefName)
    {
        $this->container['ontoRefName'] = $ontoRefName;

        return $this;
    }

    /**
     * Gets repository
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository
     */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
     * Sets repository
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository $repository The git repository for the cherry pick or revert operation.
     *
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitAsyncRefOperationSource
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitAsyncRefOperationSource $source Details about the source of the cherry pick or revert operation (e.g. A pull request or a specific commit).
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

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


