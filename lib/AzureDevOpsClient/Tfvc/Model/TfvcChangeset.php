<?php
/**
 * TfvcChangeset
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Tfvc
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

namespace FrankHouweling\AzureDevOpsClient\Tfvc\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Tfvc\ObjectSerializer;

/**
 * TfvcChangeset Class Doc Comment
 *
 * @category Class
 * @description A collection of changes.
 * @package  FrankHouweling\AzureDevOpsClient\Tfvc
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TfvcChangeset implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TfvcChangeset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FrankHouweling\AzureDevOpsClient\Tfvc\Model\ReferenceLinks',
        'author' => '\FrankHouweling\AzureDevOpsClient\Tfvc\Model\IdentityRef',
        'changesetId' => 'int',
        'checkedInBy' => '\FrankHouweling\AzureDevOpsClient\Tfvc\Model\IdentityRef',
        'comment' => 'string',
        'commentTruncated' => 'bool',
        'createdDate' => '\DateTime',
        'url' => 'string',
        'accountId' => 'string',
        'changes' => '\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChange[]',
        'checkinNotes' => '\FrankHouweling\AzureDevOpsClient\Tfvc\Model\CheckinNote[]',
        'collectionId' => 'string',
        'hasMoreChanges' => 'bool',
        'policyOverride' => '\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcPolicyOverrideInfo',
        'teamProjectIds' => 'string[]',
        'workItems' => '\FrankHouweling\AzureDevOpsClient\Tfvc\Model\AssociatedWorkItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'author' => null,
        'changesetId' => 'int32',
        'checkedInBy' => null,
        'comment' => null,
        'commentTruncated' => null,
        'createdDate' => 'date-time',
        'url' => null,
        'accountId' => 'uuid',
        'changes' => null,
        'checkinNotes' => null,
        'collectionId' => 'uuid',
        'hasMoreChanges' => null,
        'policyOverride' => null,
        'teamProjectIds' => 'uuid',
        'workItems' => null
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
        'author' => 'author',
        'changesetId' => 'changesetId',
        'checkedInBy' => 'checkedInBy',
        'comment' => 'comment',
        'commentTruncated' => 'commentTruncated',
        'createdDate' => 'createdDate',
        'url' => 'url',
        'accountId' => 'accountId',
        'changes' => 'changes',
        'checkinNotes' => 'checkinNotes',
        'collectionId' => 'collectionId',
        'hasMoreChanges' => 'hasMoreChanges',
        'policyOverride' => 'policyOverride',
        'teamProjectIds' => 'teamProjectIds',
        'workItems' => 'workItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'author' => 'setAuthor',
        'changesetId' => 'setChangesetId',
        'checkedInBy' => 'setCheckedInBy',
        'comment' => 'setComment',
        'commentTruncated' => 'setCommentTruncated',
        'createdDate' => 'setCreatedDate',
        'url' => 'setUrl',
        'accountId' => 'setAccountId',
        'changes' => 'setChanges',
        'checkinNotes' => 'setCheckinNotes',
        'collectionId' => 'setCollectionId',
        'hasMoreChanges' => 'setHasMoreChanges',
        'policyOverride' => 'setPolicyOverride',
        'teamProjectIds' => 'setTeamProjectIds',
        'workItems' => 'setWorkItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'author' => 'getAuthor',
        'changesetId' => 'getChangesetId',
        'checkedInBy' => 'getCheckedInBy',
        'comment' => 'getComment',
        'commentTruncated' => 'getCommentTruncated',
        'createdDate' => 'getCreatedDate',
        'url' => 'getUrl',
        'accountId' => 'getAccountId',
        'changes' => 'getChanges',
        'checkinNotes' => 'getCheckinNotes',
        'collectionId' => 'getCollectionId',
        'hasMoreChanges' => 'getHasMoreChanges',
        'policyOverride' => 'getPolicyOverride',
        'teamProjectIds' => 'getTeamProjectIds',
        'workItems' => 'getWorkItems'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['changesetId'] = isset($data['changesetId']) ? $data['changesetId'] : null;
        $this->container['checkedInBy'] = isset($data['checkedInBy']) ? $data['checkedInBy'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['commentTruncated'] = isset($data['commentTruncated']) ? $data['commentTruncated'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['changes'] = isset($data['changes']) ? $data['changes'] : null;
        $this->container['checkinNotes'] = isset($data['checkinNotes']) ? $data['checkinNotes'] : null;
        $this->container['collectionId'] = isset($data['collectionId']) ? $data['collectionId'] : null;
        $this->container['hasMoreChanges'] = isset($data['hasMoreChanges']) ? $data['hasMoreChanges'] : null;
        $this->container['policyOverride'] = isset($data['policyOverride']) ? $data['policyOverride'] : null;
        $this->container['teamProjectIds'] = isset($data['teamProjectIds']) ? $data['teamProjectIds'] : null;
        $this->container['workItems'] = isset($data['workItems']) ? $data['workItems'] : null;
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
     * Gets links
     *
     * @return \FrankHouweling\AzureDevOpsClient\Tfvc\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FrankHouweling\AzureDevOpsClient\Tfvc\Model\ReferenceLinks $links A collection of REST reference links.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \FrankHouweling\AzureDevOpsClient\Tfvc\Model\IdentityRef
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \FrankHouweling\AzureDevOpsClient\Tfvc\Model\IdentityRef $author Alias or display name of user.
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets changesetId
     *
     * @return int
     */
    public function getChangesetId()
    {
        return $this->container['changesetId'];
    }

    /**
     * Sets changesetId
     *
     * @param int $changesetId Changeset Id.
     *
     * @return $this
     */
    public function setChangesetId($changesetId)
    {
        $this->container['changesetId'] = $changesetId;

        return $this;
    }

    /**
     * Gets checkedInBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Tfvc\Model\IdentityRef
     */
    public function getCheckedInBy()
    {
        return $this->container['checkedInBy'];
    }

    /**
     * Sets checkedInBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Tfvc\Model\IdentityRef $checkedInBy Alias or display name of user.
     *
     * @return $this
     */
    public function setCheckedInBy($checkedInBy)
    {
        $this->container['checkedInBy'] = $checkedInBy;

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
     * @param string $comment Comment for the changeset.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets commentTruncated
     *
     * @return bool
     */
    public function getCommentTruncated()
    {
        return $this->container['commentTruncated'];
    }

    /**
     * Sets commentTruncated
     *
     * @param bool $commentTruncated Was the Comment result truncated?
     *
     * @return $this
     */
    public function setCommentTruncated($commentTruncated)
    {
        $this->container['commentTruncated'] = $commentTruncated;

        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime $createdDate Creation date of the changeset.
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

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
     * @param string $url URL to retrieve the item.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string $accountId Changeset Account Id also known as Organization Id.
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets changes
     *
     * @return \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChange[]
     */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChange[] $changes List of associated changes.
     *
     * @return $this
     */
    public function setChanges($changes)
    {
        $this->container['changes'] = $changes;

        return $this;
    }

    /**
     * Gets checkinNotes
     *
     * @return \FrankHouweling\AzureDevOpsClient\Tfvc\Model\CheckinNote[]
     */
    public function getCheckinNotes()
    {
        return $this->container['checkinNotes'];
    }

    /**
     * Sets checkinNotes
     *
     * @param \FrankHouweling\AzureDevOpsClient\Tfvc\Model\CheckinNote[] $checkinNotes List of Checkin Notes for the changeset.
     *
     * @return $this
     */
    public function setCheckinNotes($checkinNotes)
    {
        $this->container['checkinNotes'] = $checkinNotes;

        return $this;
    }

    /**
     * Gets collectionId
     *
     * @return string
     */
    public function getCollectionId()
    {
        return $this->container['collectionId'];
    }

    /**
     * Sets collectionId
     *
     * @param string $collectionId Changeset collection Id.
     *
     * @return $this
     */
    public function setCollectionId($collectionId)
    {
        $this->container['collectionId'] = $collectionId;

        return $this;
    }

    /**
     * Gets hasMoreChanges
     *
     * @return bool
     */
    public function getHasMoreChanges()
    {
        return $this->container['hasMoreChanges'];
    }

    /**
     * Sets hasMoreChanges
     *
     * @param bool $hasMoreChanges True if more changes are available.
     *
     * @return $this
     */
    public function setHasMoreChanges($hasMoreChanges)
    {
        $this->container['hasMoreChanges'] = $hasMoreChanges;

        return $this;
    }

    /**
     * Gets policyOverride
     *
     * @return \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcPolicyOverrideInfo
     */
    public function getPolicyOverride()
    {
        return $this->container['policyOverride'];
    }

    /**
     * Sets policyOverride
     *
     * @param \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcPolicyOverrideInfo $policyOverride Policy Override for the changeset.
     *
     * @return $this
     */
    public function setPolicyOverride($policyOverride)
    {
        $this->container['policyOverride'] = $policyOverride;

        return $this;
    }

    /**
     * Gets teamProjectIds
     *
     * @return string[]
     */
    public function getTeamProjectIds()
    {
        return $this->container['teamProjectIds'];
    }

    /**
     * Sets teamProjectIds
     *
     * @param string[] $teamProjectIds Team Project Ids for the changeset.
     *
     * @return $this
     */
    public function setTeamProjectIds($teamProjectIds)
    {
        $this->container['teamProjectIds'] = $teamProjectIds;

        return $this;
    }

    /**
     * Gets workItems
     *
     * @return \FrankHouweling\AzureDevOpsClient\Tfvc\Model\AssociatedWorkItem[]
     */
    public function getWorkItems()
    {
        return $this->container['workItems'];
    }

    /**
     * Sets workItems
     *
     * @param \FrankHouweling\AzureDevOpsClient\Tfvc\Model\AssociatedWorkItem[] $workItems List of work items associated with the changeset.
     *
     * @return $this
     */
    public function setWorkItems($workItems)
    {
        $this->container['workItems'] = $workItems;

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


