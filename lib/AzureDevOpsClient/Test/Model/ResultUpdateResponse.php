<?php
/**
 * ResultUpdateResponse
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
 * ResultUpdateResponse Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResultUpdateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResultUpdateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attachmentIds' => 'int[]',
        'lastUpdated' => '\DateTime',
        'lastUpdatedBy' => 'string',
        'lastUpdatedByName' => 'string',
        'maxReservedSubResultId' => 'int',
        'revision' => 'int',
        'testPlanId' => 'int',
        'testResultId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attachmentIds' => 'int32',
        'lastUpdated' => 'date-time',
        'lastUpdatedBy' => 'uuid',
        'lastUpdatedByName' => null,
        'maxReservedSubResultId' => 'int32',
        'revision' => 'int32',
        'testPlanId' => 'int32',
        'testResultId' => 'int32'
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
        'attachmentIds' => 'attachmentIds',
        'lastUpdated' => 'lastUpdated',
        'lastUpdatedBy' => 'lastUpdatedBy',
        'lastUpdatedByName' => 'lastUpdatedByName',
        'maxReservedSubResultId' => 'maxReservedSubResultId',
        'revision' => 'revision',
        'testPlanId' => 'testPlanId',
        'testResultId' => 'testResultId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachmentIds' => 'setAttachmentIds',
        'lastUpdated' => 'setLastUpdated',
        'lastUpdatedBy' => 'setLastUpdatedBy',
        'lastUpdatedByName' => 'setLastUpdatedByName',
        'maxReservedSubResultId' => 'setMaxReservedSubResultId',
        'revision' => 'setRevision',
        'testPlanId' => 'setTestPlanId',
        'testResultId' => 'setTestResultId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachmentIds' => 'getAttachmentIds',
        'lastUpdated' => 'getLastUpdated',
        'lastUpdatedBy' => 'getLastUpdatedBy',
        'lastUpdatedByName' => 'getLastUpdatedByName',
        'maxReservedSubResultId' => 'getMaxReservedSubResultId',
        'revision' => 'getRevision',
        'testPlanId' => 'getTestPlanId',
        'testResultId' => 'getTestResultId'
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
        $this->container['attachmentIds'] = isset($data['attachmentIds']) ? $data['attachmentIds'] : null;
        $this->container['lastUpdated'] = isset($data['lastUpdated']) ? $data['lastUpdated'] : null;
        $this->container['lastUpdatedBy'] = isset($data['lastUpdatedBy']) ? $data['lastUpdatedBy'] : null;
        $this->container['lastUpdatedByName'] = isset($data['lastUpdatedByName']) ? $data['lastUpdatedByName'] : null;
        $this->container['maxReservedSubResultId'] = isset($data['maxReservedSubResultId']) ? $data['maxReservedSubResultId'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['testPlanId'] = isset($data['testPlanId']) ? $data['testPlanId'] : null;
        $this->container['testResultId'] = isset($data['testResultId']) ? $data['testResultId'] : null;
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
     * Gets attachmentIds
     *
     * @return int[]
     */
    public function getAttachmentIds()
    {
        return $this->container['attachmentIds'];
    }

    /**
     * Sets attachmentIds
     *
     * @param int[] $attachmentIds attachmentIds
     *
     * @return $this
     */
    public function setAttachmentIds($attachmentIds)
    {
        $this->container['attachmentIds'] = $attachmentIds;

        return $this;
    }

    /**
     * Gets lastUpdated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->container['lastUpdated'];
    }

    /**
     * Sets lastUpdated
     *
     * @param \DateTime $lastUpdated lastUpdated
     *
     * @return $this
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->container['lastUpdated'] = $lastUpdated;

        return $this;
    }

    /**
     * Gets lastUpdatedBy
     *
     * @return string
     */
    public function getLastUpdatedBy()
    {
        return $this->container['lastUpdatedBy'];
    }

    /**
     * Sets lastUpdatedBy
     *
     * @param string $lastUpdatedBy lastUpdatedBy
     *
     * @return $this
     */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->container['lastUpdatedBy'] = $lastUpdatedBy;

        return $this;
    }

    /**
     * Gets lastUpdatedByName
     *
     * @return string
     */
    public function getLastUpdatedByName()
    {
        return $this->container['lastUpdatedByName'];
    }

    /**
     * Sets lastUpdatedByName
     *
     * @param string $lastUpdatedByName lastUpdatedByName
     *
     * @return $this
     */
    public function setLastUpdatedByName($lastUpdatedByName)
    {
        $this->container['lastUpdatedByName'] = $lastUpdatedByName;

        return $this;
    }

    /**
     * Gets maxReservedSubResultId
     *
     * @return int
     */
    public function getMaxReservedSubResultId()
    {
        return $this->container['maxReservedSubResultId'];
    }

    /**
     * Sets maxReservedSubResultId
     *
     * @param int $maxReservedSubResultId maxReservedSubResultId
     *
     * @return $this
     */
    public function setMaxReservedSubResultId($maxReservedSubResultId)
    {
        $this->container['maxReservedSubResultId'] = $maxReservedSubResultId;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision revision
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets testPlanId
     *
     * @return int
     */
    public function getTestPlanId()
    {
        return $this->container['testPlanId'];
    }

    /**
     * Sets testPlanId
     *
     * @param int $testPlanId testPlanId
     *
     * @return $this
     */
    public function setTestPlanId($testPlanId)
    {
        $this->container['testPlanId'] = $testPlanId;

        return $this;
    }

    /**
     * Gets testResultId
     *
     * @return int
     */
    public function getTestResultId()
    {
        return $this->container['testResultId'];
    }

    /**
     * Sets testResultId
     *
     * @param int $testResultId testResultId
     *
     * @return $this
     */
    public function setTestResultId($testResultId)
    {
        $this->container['testResultId'] = $testResultId;

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


