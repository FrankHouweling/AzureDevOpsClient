<?php
/**
 * GitForkSyncRequest
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
 * GitForkSyncRequest Class Doc Comment
 *
 * @category Class
 * @description Request to sync data between two forks.
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitForkSyncRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitForkSyncRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks',
        'detailedStatus' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitForkOperationStatusDetail',
        'operationId' => 'int',
        'source' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GlobalGitRepositoryKey',
        'sourceToTargetRefs' => '\FrankHouweling\AzureDevOpsClient\Git\Model\SourceToTargetRef[]',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'detailedStatus' => null,
        'operationId' => 'int32',
        'source' => null,
        'sourceToTargetRefs' => null,
        'status' => null
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
        'links' => '_links',
        'detailedStatus' => 'detailedStatus',
        'operationId' => 'operationId',
        'source' => 'source',
        'sourceToTargetRefs' => 'sourceToTargetRefs',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'detailedStatus' => 'setDetailedStatus',
        'operationId' => 'setOperationId',
        'source' => 'setSource',
        'sourceToTargetRefs' => 'setSourceToTargetRefs',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'detailedStatus' => 'getDetailedStatus',
        'operationId' => 'getOperationId',
        'source' => 'getSource',
        'sourceToTargetRefs' => 'getSourceToTargetRefs',
        'status' => 'getStatus'
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

    const STATUS_QUEUED = 'queued';
    const STATUS_IN_PROGRESS = 'inProgress';
    const STATUS_COMPLETED = 'completed';
    const STATUS_FAILED = 'failed';
    const STATUS_ABANDONED = 'abandoned';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_QUEUED,
            self::STATUS_IN_PROGRESS,
            self::STATUS_COMPLETED,
            self::STATUS_FAILED,
            self::STATUS_ABANDONED,
        ];
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['detailedStatus'] = isset($data['detailedStatus']) ? $data['detailedStatus'] : null;
        $this->container['operationId'] = isset($data['operationId']) ? $data['operationId'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['sourceToTargetRefs'] = isset($data['sourceToTargetRefs']) ? $data['sourceToTargetRefs'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets links
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks $links Collection of related links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets detailedStatus
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitForkOperationStatusDetail
     */
    public function getDetailedStatus()
    {
        return $this->container['detailedStatus'];
    }

    /**
     * Sets detailedStatus
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitForkOperationStatusDetail $detailedStatus detailedStatus
     *
     * @return $this
     */
    public function setDetailedStatus($detailedStatus)
    {
        $this->container['detailedStatus'] = $detailedStatus;

        return $this;
    }

    /**
     * Gets operationId
     *
     * @return int
     */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
     * Sets operationId
     *
     * @param int $operationId Unique identifier for the operation.
     *
     * @return $this
     */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GlobalGitRepositoryKey
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GlobalGitRepositoryKey $source Fully-qualified identifier for the source repository.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets sourceToTargetRefs
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\SourceToTargetRef[]
     */
    public function getSourceToTargetRefs()
    {
        return $this->container['sourceToTargetRefs'];
    }

    /**
     * Sets sourceToTargetRefs
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\SourceToTargetRef[] $sourceToTargetRefs If supplied, the set of ref mappings to use when performing a \"sync\" or create. If missing, all refs will be synchronized.
     *
     * @return $this
     */
    public function setSourceToTargetRefs($sourceToTargetRefs)
    {
        $this->container['sourceToTargetRefs'] = $sourceToTargetRefs;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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


