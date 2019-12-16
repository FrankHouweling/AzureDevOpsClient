<?php
/**
 * DeploymentCompletedEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Release
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

namespace AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Release\ObjectSerializer;

/**
 * DeploymentCompletedEvent Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeploymentCompletedEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeploymentCompletedEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attemptId' => 'int',
        'stageName' => 'string',
        'id' => 'int',
        'url' => 'string',
        'comment' => 'string',
        'data' => 'map[string,object]',
        'deployment' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Deployment',
        'environment' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironment',
        'project' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ProjectReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attemptId' => 'int32',
        'stageName' => null,
        'id' => 'int32',
        'url' => null,
        'comment' => null,
        'data' => null,
        'deployment' => null,
        'environment' => null,
        'project' => null
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
        'attemptId' => 'attemptId',
        'stageName' => 'stageName',
        'id' => 'id',
        'url' => 'url',
        'comment' => 'comment',
        'data' => 'data',
        'deployment' => 'deployment',
        'environment' => 'environment',
        'project' => 'project'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attemptId' => 'setAttemptId',
        'stageName' => 'setStageName',
        'id' => 'setId',
        'url' => 'setUrl',
        'comment' => 'setComment',
        'data' => 'setData',
        'deployment' => 'setDeployment',
        'environment' => 'setEnvironment',
        'project' => 'setProject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attemptId' => 'getAttemptId',
        'stageName' => 'getStageName',
        'id' => 'getId',
        'url' => 'getUrl',
        'comment' => 'getComment',
        'data' => 'getData',
        'deployment' => 'getDeployment',
        'environment' => 'getEnvironment',
        'project' => 'getProject'
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
        $this->container['attemptId'] = isset($data['attemptId']) ? $data['attemptId'] : null;
        $this->container['stageName'] = isset($data['stageName']) ? $data['stageName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['deployment'] = isset($data['deployment']) ? $data['deployment'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
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
     * Gets attemptId
     *
     * @return int
     */
    public function getAttemptId()
    {
        return $this->container['attemptId'];
    }

    /**
     * Sets attemptId
     *
     * @param int $attemptId attemptId
     *
     * @return $this
     */
    public function setAttemptId($attemptId)
    {
        $this->container['attemptId'] = $attemptId;

        return $this;
    }

    /**
     * Gets stageName
     *
     * @return string
     */
    public function getStageName()
    {
        return $this->container['stageName'];
    }

    /**
     * Sets stageName
     *
     * @param string $stageName stageName
     *
     * @return $this
     */
    public function setStageName($stageName)
    {
        $this->container['stageName'] = $stageName;

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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets data
     *
     * @return map[string,object]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param map[string,object] $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets deployment
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Deployment
     */
    public function getDeployment()
    {
        return $this->container['deployment'];
    }

    /**
     * Sets deployment
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Deployment $deployment deployment
     *
     * @return $this
     */
    public function setDeployment($deployment)
    {
        $this->container['deployment'] = $deployment;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironment
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironment $environment environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ProjectReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ProjectReference $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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


