<?php
/**
 * TestRunContext2
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Test
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

namespace AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Test\ObjectSerializer;

/**
 * TestRunContext2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestRunContext2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestRunContext2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buildRefId' => 'int',
        'projectId' => 'string',
        'releaseRefId' => 'int',
        'sourceWorkflow' => 'string',
        'testRunContextId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buildRefId' => 'int32',
        'projectId' => 'uuid',
        'releaseRefId' => 'int32',
        'sourceWorkflow' => null,
        'testRunContextId' => 'int32'
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
        'buildRefId' => 'buildRefId',
        'projectId' => 'projectId',
        'releaseRefId' => 'releaseRefId',
        'sourceWorkflow' => 'sourceWorkflow',
        'testRunContextId' => 'testRunContextId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buildRefId' => 'setBuildRefId',
        'projectId' => 'setProjectId',
        'releaseRefId' => 'setReleaseRefId',
        'sourceWorkflow' => 'setSourceWorkflow',
        'testRunContextId' => 'setTestRunContextId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buildRefId' => 'getBuildRefId',
        'projectId' => 'getProjectId',
        'releaseRefId' => 'getReleaseRefId',
        'sourceWorkflow' => 'getSourceWorkflow',
        'testRunContextId' => 'getTestRunContextId'
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
        $this->container['buildRefId'] = isset($data['buildRefId']) ? $data['buildRefId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['releaseRefId'] = isset($data['releaseRefId']) ? $data['releaseRefId'] : null;
        $this->container['sourceWorkflow'] = isset($data['sourceWorkflow']) ? $data['sourceWorkflow'] : null;
        $this->container['testRunContextId'] = isset($data['testRunContextId']) ? $data['testRunContextId'] : null;
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
     * Gets buildRefId
     *
     * @return int
     */
    public function getBuildRefId()
    {
        return $this->container['buildRefId'];
    }

    /**
     * Sets buildRefId
     *
     * @param int $buildRefId buildRefId
     *
     * @return $this
     */
    public function setBuildRefId($buildRefId)
    {
        $this->container['buildRefId'] = $buildRefId;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param string $projectId projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets releaseRefId
     *
     * @return int
     */
    public function getReleaseRefId()
    {
        return $this->container['releaseRefId'];
    }

    /**
     * Sets releaseRefId
     *
     * @param int $releaseRefId releaseRefId
     *
     * @return $this
     */
    public function setReleaseRefId($releaseRefId)
    {
        $this->container['releaseRefId'] = $releaseRefId;

        return $this;
    }

    /**
     * Gets sourceWorkflow
     *
     * @return string
     */
    public function getSourceWorkflow()
    {
        return $this->container['sourceWorkflow'];
    }

    /**
     * Sets sourceWorkflow
     *
     * @param string $sourceWorkflow sourceWorkflow
     *
     * @return $this
     */
    public function setSourceWorkflow($sourceWorkflow)
    {
        $this->container['sourceWorkflow'] = $sourceWorkflow;

        return $this;
    }

    /**
     * Gets testRunContextId
     *
     * @return int
     */
    public function getTestRunContextId()
    {
        return $this->container['testRunContextId'];
    }

    /**
     * Sets testRunContextId
     *
     * @param int $testRunContextId testRunContextId
     *
     * @return $this
     */
    public function setTestRunContextId($testRunContextId)
    {
        $this->container['testRunContextId'] = $testRunContextId;

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


