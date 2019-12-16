<?php
/**
 * ReleaseRevision
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
 * ReleaseRevision Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReleaseRevision implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReleaseRevision';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'changedBy' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\IdentityRef',
        'changedDate' => '\DateTime',
        'changeDetails' => 'string',
        'changeType' => 'string',
        'comment' => 'string',
        'definitionSnapshotRevision' => 'int',
        'releaseId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'changedBy' => null,
        'changedDate' => 'date-time',
        'changeDetails' => null,
        'changeType' => null,
        'comment' => null,
        'definitionSnapshotRevision' => 'int32',
        'releaseId' => 'int32'
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
        'changedBy' => 'changedBy',
        'changedDate' => 'changedDate',
        'changeDetails' => 'changeDetails',
        'changeType' => 'changeType',
        'comment' => 'comment',
        'definitionSnapshotRevision' => 'definitionSnapshotRevision',
        'releaseId' => 'releaseId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changedBy' => 'setChangedBy',
        'changedDate' => 'setChangedDate',
        'changeDetails' => 'setChangeDetails',
        'changeType' => 'setChangeType',
        'comment' => 'setComment',
        'definitionSnapshotRevision' => 'setDefinitionSnapshotRevision',
        'releaseId' => 'setReleaseId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changedBy' => 'getChangedBy',
        'changedDate' => 'getChangedDate',
        'changeDetails' => 'getChangeDetails',
        'changeType' => 'getChangeType',
        'comment' => 'getComment',
        'definitionSnapshotRevision' => 'getDefinitionSnapshotRevision',
        'releaseId' => 'getReleaseId'
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
        $this->container['changedBy'] = isset($data['changedBy']) ? $data['changedBy'] : null;
        $this->container['changedDate'] = isset($data['changedDate']) ? $data['changedDate'] : null;
        $this->container['changeDetails'] = isset($data['changeDetails']) ? $data['changeDetails'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['definitionSnapshotRevision'] = isset($data['definitionSnapshotRevision']) ? $data['definitionSnapshotRevision'] : null;
        $this->container['releaseId'] = isset($data['releaseId']) ? $data['releaseId'] : null;
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
     * Gets changedBy
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\IdentityRef
     */
    public function getChangedBy()
    {
        return $this->container['changedBy'];
    }

    /**
     * Sets changedBy
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\IdentityRef $changedBy Gets or sets the identity who changed.
     *
     * @return $this
     */
    public function setChangedBy($changedBy)
    {
        $this->container['changedBy'] = $changedBy;

        return $this;
    }

    /**
     * Gets changedDate
     *
     * @return \DateTime
     */
    public function getChangedDate()
    {
        return $this->container['changedDate'];
    }

    /**
     * Sets changedDate
     *
     * @param \DateTime $changedDate Change date of the revision.
     *
     * @return $this
     */
    public function setChangedDate($changedDate)
    {
        $this->container['changedDate'] = $changedDate;

        return $this;
    }

    /**
     * Gets changeDetails
     *
     * @return string
     */
    public function getChangeDetails()
    {
        return $this->container['changeDetails'];
    }

    /**
     * Sets changeDetails
     *
     * @param string $changeDetails Change details of the revision.
     *
     * @return $this
     */
    public function setChangeDetails($changeDetails)
    {
        $this->container['changeDetails'] = $changeDetails;

        return $this;
    }

    /**
     * Gets changeType
     *
     * @return string
     */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
     * Sets changeType
     *
     * @param string $changeType Change details of the revision. Typically ChangeDetails values are Add and Update.
     *
     * @return $this
     */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;

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
     * @param string $comment Comment of the revision.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets definitionSnapshotRevision
     *
     * @return int
     */
    public function getDefinitionSnapshotRevision()
    {
        return $this->container['definitionSnapshotRevision'];
    }

    /**
     * Sets definitionSnapshotRevision
     *
     * @param int $definitionSnapshotRevision Release ID of which this revision belongs.
     *
     * @return $this
     */
    public function setDefinitionSnapshotRevision($definitionSnapshotRevision)
    {
        $this->container['definitionSnapshotRevision'] = $definitionSnapshotRevision;

        return $this;
    }

    /**
     * Gets releaseId
     *
     * @return int
     */
    public function getReleaseId()
    {
        return $this->container['releaseId'];
    }

    /**
     * Sets releaseId
     *
     * @param int $releaseId Gets or sets the release ID of which this revision belongs.
     *
     * @return $this
     */
    public function setReleaseId($releaseId)
    {
        $this->container['releaseId'] = $releaseId;

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


