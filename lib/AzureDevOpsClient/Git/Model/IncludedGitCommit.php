<?php
/**
 * IncludedGitCommit
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
 * IncludedGitCommit Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IncludedGitCommit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IncludedGitCommit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commitId' => 'string',
        'commitTime' => '\DateTime',
        'parentCommitIds' => 'string[]',
        'repositoryId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commitId' => null,
        'commitTime' => 'date-time',
        'parentCommitIds' => null,
        'repositoryId' => 'uuid'
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
        'commitId' => 'commitId',
        'commitTime' => 'commitTime',
        'parentCommitIds' => 'parentCommitIds',
        'repositoryId' => 'repositoryId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commitId' => 'setCommitId',
        'commitTime' => 'setCommitTime',
        'parentCommitIds' => 'setParentCommitIds',
        'repositoryId' => 'setRepositoryId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commitId' => 'getCommitId',
        'commitTime' => 'getCommitTime',
        'parentCommitIds' => 'getParentCommitIds',
        'repositoryId' => 'getRepositoryId'
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
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['commitTime'] = isset($data['commitTime']) ? $data['commitTime'] : null;
        $this->container['parentCommitIds'] = isset($data['parentCommitIds']) ? $data['parentCommitIds'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
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
     * Gets commitId
     *
     * @return string
     */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
     * Sets commitId
     *
     * @param string $commitId commitId
     *
     * @return $this
     */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;

        return $this;
    }

    /**
     * Gets commitTime
     *
     * @return \DateTime
     */
    public function getCommitTime()
    {
        return $this->container['commitTime'];
    }

    /**
     * Sets commitTime
     *
     * @param \DateTime $commitTime commitTime
     *
     * @return $this
     */
    public function setCommitTime($commitTime)
    {
        $this->container['commitTime'] = $commitTime;

        return $this;
    }

    /**
     * Gets parentCommitIds
     *
     * @return string[]
     */
    public function getParentCommitIds()
    {
        return $this->container['parentCommitIds'];
    }

    /**
     * Sets parentCommitIds
     *
     * @param string[] $parentCommitIds parentCommitIds
     *
     * @return $this
     */
    public function setParentCommitIds($parentCommitIds)
    {
        $this->container['parentCommitIds'] = $parentCommitIds;

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
     * @param string $repositoryId repositoryId
     *
     * @return $this
     */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;

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


