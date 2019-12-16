<?php
/**
 * CommentThread
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
 * CommentThread Class Doc Comment
 *
 * @category Class
 * @description Represents a comment thread of a pull request. A thread contains meta data about the file it was left on along with one or more comments (an initial comment and the subsequent replies).
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommentThread implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommentThread';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks',
        'comments' => '\FrankHouweling\AzureDevOpsClient\Git\Model\Comment[]',
        'id' => 'int',
        'identities' => 'map[string,\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef]',
        'isDeleted' => 'bool',
        'lastUpdatedDate' => '\DateTime',
        'properties' => '\FrankHouweling\AzureDevOpsClient\Git\Model\PropertiesCollection',
        'publishedDate' => '\DateTime',
        'status' => 'string',
        'threadContext' => '\FrankHouweling\AzureDevOpsClient\Git\Model\CommentThreadContext'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'comments' => null,
        'id' => 'int32',
        'identities' => null,
        'isDeleted' => null,
        'lastUpdatedDate' => 'date-time',
        'properties' => null,
        'publishedDate' => 'date-time',
        'status' => null,
        'threadContext' => null
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
        'comments' => 'comments',
        'id' => 'id',
        'identities' => 'identities',
        'isDeleted' => 'isDeleted',
        'lastUpdatedDate' => 'lastUpdatedDate',
        'properties' => 'properties',
        'publishedDate' => 'publishedDate',
        'status' => 'status',
        'threadContext' => 'threadContext'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'comments' => 'setComments',
        'id' => 'setId',
        'identities' => 'setIdentities',
        'isDeleted' => 'setIsDeleted',
        'lastUpdatedDate' => 'setLastUpdatedDate',
        'properties' => 'setProperties',
        'publishedDate' => 'setPublishedDate',
        'status' => 'setStatus',
        'threadContext' => 'setThreadContext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'comments' => 'getComments',
        'id' => 'getId',
        'identities' => 'getIdentities',
        'isDeleted' => 'getIsDeleted',
        'lastUpdatedDate' => 'getLastUpdatedDate',
        'properties' => 'getProperties',
        'publishedDate' => 'getPublishedDate',
        'status' => 'getStatus',
        'threadContext' => 'getThreadContext'
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

    const STATUS_UNKNOWN = 'unknown';
    const STATUS_ACTIVE = 'active';
    const STATUS_FIXED = 'fixed';
    const STATUS_WONT_FIX = 'wontFix';
    const STATUS_CLOSED = 'closed';
    const STATUS_BY_DESIGN = 'byDesign';
    const STATUS_PENDING = 'pending';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNKNOWN,
            self::STATUS_ACTIVE,
            self::STATUS_FIXED,
            self::STATUS_WONT_FIX,
            self::STATUS_CLOSED,
            self::STATUS_BY_DESIGN,
            self::STATUS_PENDING,
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
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identities'] = isset($data['identities']) ? $data['identities'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['lastUpdatedDate'] = isset($data['lastUpdatedDate']) ? $data['lastUpdatedDate'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['publishedDate'] = isset($data['publishedDate']) ? $data['publishedDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['threadContext'] = isset($data['threadContext']) ? $data['threadContext'] : null;
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
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks $links Links to other related objects.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\Comment[]
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\Comment[] $comments A list of the comments.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

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
     * @param int $id The comment thread id.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets identities
     *
     * @return map[string,\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef]
     */
    public function getIdentities()
    {
        return $this->container['identities'];
    }

    /**
     * Sets identities
     *
     * @param map[string,\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef] $identities Set of identities related to this thread
     *
     * @return $this
     */
    public function setIdentities($identities)
    {
        $this->container['identities'] = $identities;

        return $this;
    }

    /**
     * Gets isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool $isDeleted Specify if the thread is deleted which happens when all comments are deleted.
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;

        return $this;
    }

    /**
     * Gets lastUpdatedDate
     *
     * @return \DateTime
     */
    public function getLastUpdatedDate()
    {
        return $this->container['lastUpdatedDate'];
    }

    /**
     * Sets lastUpdatedDate
     *
     * @param \DateTime $lastUpdatedDate The time this thread was last updated.
     *
     * @return $this
     */
    public function setLastUpdatedDate($lastUpdatedDate)
    {
        $this->container['lastUpdatedDate'] = $lastUpdatedDate;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\PropertiesCollection
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\PropertiesCollection $properties Optional properties associated with the thread as a collection of key-value pairs.
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets publishedDate
     *
     * @return \DateTime
     */
    public function getPublishedDate()
    {
        return $this->container['publishedDate'];
    }

    /**
     * Sets publishedDate
     *
     * @param \DateTime $publishedDate The time this thread was published.
     *
     * @return $this
     */
    public function setPublishedDate($publishedDate)
    {
        $this->container['publishedDate'] = $publishedDate;

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
     * @param string $status The status of the comment thread.
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
     * Gets threadContext
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\CommentThreadContext
     */
    public function getThreadContext()
    {
        return $this->container['threadContext'];
    }

    /**
     * Sets threadContext
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\CommentThreadContext $threadContext Specify thread context such as position in left/right file.
     *
     * @return $this
     */
    public function setThreadContext($threadContext)
    {
        $this->container['threadContext'] = $threadContext;

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

