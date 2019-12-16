<?php
/**
 * TfvcChangesetSearchCriteria
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Tfvc
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Tfvc
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

namespace AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Tfvc\ObjectSerializer;

/**
 * TfvcChangesetSearchCriteria Class Doc Comment
 *
 * @category Class
 * @description Criteria used in a search for change lists.
 * @package  AzureDevOpsClient\Tfvc
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TfvcChangesetSearchCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TfvcChangesetSearchCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'author' => 'string',
        'followRenames' => 'bool',
        'fromDate' => 'string',
        'fromId' => 'int',
        'includeLinks' => 'bool',
        'itemPath' => 'string',
        'mappings' => '\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcMappingFilter[]',
        'toDate' => 'string',
        'toId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'author' => null,
        'followRenames' => null,
        'fromDate' => null,
        'fromId' => 'int32',
        'includeLinks' => null,
        'itemPath' => null,
        'mappings' => null,
        'toDate' => null,
        'toId' => 'int32'
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
        'author' => 'author',
        'followRenames' => 'followRenames',
        'fromDate' => 'fromDate',
        'fromId' => 'fromId',
        'includeLinks' => 'includeLinks',
        'itemPath' => 'itemPath',
        'mappings' => 'mappings',
        'toDate' => 'toDate',
        'toId' => 'toId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'author' => 'setAuthor',
        'followRenames' => 'setFollowRenames',
        'fromDate' => 'setFromDate',
        'fromId' => 'setFromId',
        'includeLinks' => 'setIncludeLinks',
        'itemPath' => 'setItemPath',
        'mappings' => 'setMappings',
        'toDate' => 'setToDate',
        'toId' => 'setToId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'author' => 'getAuthor',
        'followRenames' => 'getFollowRenames',
        'fromDate' => 'getFromDate',
        'fromId' => 'getFromId',
        'includeLinks' => 'getIncludeLinks',
        'itemPath' => 'getItemPath',
        'mappings' => 'getMappings',
        'toDate' => 'getToDate',
        'toId' => 'getToId'
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
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['followRenames'] = isset($data['followRenames']) ? $data['followRenames'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['fromId'] = isset($data['fromId']) ? $data['fromId'] : null;
        $this->container['includeLinks'] = isset($data['includeLinks']) ? $data['includeLinks'] : null;
        $this->container['itemPath'] = isset($data['itemPath']) ? $data['itemPath'] : null;
        $this->container['mappings'] = isset($data['mappings']) ? $data['mappings'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
        $this->container['toId'] = isset($data['toId']) ? $data['toId'] : null;
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
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author Alias or display name of user who made the changes.
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets followRenames
     *
     * @return bool
     */
    public function getFollowRenames()
    {
        return $this->container['followRenames'];
    }

    /**
     * Sets followRenames
     *
     * @param bool $followRenames Whether or not to follow renames for the given item being queried.
     *
     * @return $this
     */
    public function setFollowRenames($followRenames)
    {
        $this->container['followRenames'] = $followRenames;

        return $this;
    }

    /**
     * Gets fromDate
     *
     * @return string
     */
    public function getFromDate()
    {
        return $this->container['fromDate'];
    }

    /**
     * Sets fromDate
     *
     * @param string $fromDate If provided, only include changesets created after this date (string).
     *
     * @return $this
     */
    public function setFromDate($fromDate)
    {
        $this->container['fromDate'] = $fromDate;

        return $this;
    }

    /**
     * Gets fromId
     *
     * @return int
     */
    public function getFromId()
    {
        return $this->container['fromId'];
    }

    /**
     * Sets fromId
     *
     * @param int $fromId If provided, only include changesets after this changesetID.
     *
     * @return $this
     */
    public function setFromId($fromId)
    {
        $this->container['fromId'] = $fromId;

        return $this;
    }

    /**
     * Gets includeLinks
     *
     * @return bool
     */
    public function getIncludeLinks()
    {
        return $this->container['includeLinks'];
    }

    /**
     * Sets includeLinks
     *
     * @param bool $includeLinks Whether to include the _links field on the shallow references.
     *
     * @return $this
     */
    public function setIncludeLinks($includeLinks)
    {
        $this->container['includeLinks'] = $includeLinks;

        return $this;
    }

    /**
     * Gets itemPath
     *
     * @return string
     */
    public function getItemPath()
    {
        return $this->container['itemPath'];
    }

    /**
     * Sets itemPath
     *
     * @param string $itemPath Path of item to search under.
     *
     * @return $this
     */
    public function setItemPath($itemPath)
    {
        $this->container['itemPath'] = $itemPath;

        return $this;
    }

    /**
     * Gets mappings
     *
     * @return \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcMappingFilter[]
     */
    public function getMappings()
    {
        return $this->container['mappings'];
    }

    /**
     * Sets mappings
     *
     * @param \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcMappingFilter[] $mappings mappings
     *
     * @return $this
     */
    public function setMappings($mappings)
    {
        $this->container['mappings'] = $mappings;

        return $this;
    }

    /**
     * Gets toDate
     *
     * @return string
     */
    public function getToDate()
    {
        return $this->container['toDate'];
    }

    /**
     * Sets toDate
     *
     * @param string $toDate If provided, only include changesets created before this date (string).
     *
     * @return $this
     */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;

        return $this;
    }

    /**
     * Gets toId
     *
     * @return int
     */
    public function getToId()
    {
        return $this->container['toId'];
    }

    /**
     * Sets toId
     *
     * @param int $toId If provided, a version descriptor for the latest change list to include.
     *
     * @return $this
     */
    public function setToId($toId)
    {
        $this->container['toId'] = $toId;

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


