<?php
/**
 * TestSession
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
 * TestSession Class Doc Comment
 *
 * @category Class
 * @description Test Session
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestSession implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'area' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference',
        'comment' => 'string',
        'endDate' => '\DateTime',
        'id' => 'int',
        'lastUpdatedBy' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef',
        'lastUpdatedDate' => '\DateTime',
        'owner' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef',
        'project' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference',
        'propertyBag' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\PropertyBag',
        'revision' => 'int',
        'source' => 'string',
        'startDate' => '\DateTime',
        'state' => 'string',
        'title' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'area' => null,
        'comment' => null,
        'endDate' => 'date-time',
        'id' => 'int32',
        'lastUpdatedBy' => null,
        'lastUpdatedDate' => 'date-time',
        'owner' => null,
        'project' => null,
        'propertyBag' => null,
        'revision' => 'int32',
        'source' => null,
        'startDate' => 'date-time',
        'state' => null,
        'title' => null,
        'url' => null
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
        'area' => 'area',
        'comment' => 'comment',
        'endDate' => 'endDate',
        'id' => 'id',
        'lastUpdatedBy' => 'lastUpdatedBy',
        'lastUpdatedDate' => 'lastUpdatedDate',
        'owner' => 'owner',
        'project' => 'project',
        'propertyBag' => 'propertyBag',
        'revision' => 'revision',
        'source' => 'source',
        'startDate' => 'startDate',
        'state' => 'state',
        'title' => 'title',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area' => 'setArea',
        'comment' => 'setComment',
        'endDate' => 'setEndDate',
        'id' => 'setId',
        'lastUpdatedBy' => 'setLastUpdatedBy',
        'lastUpdatedDate' => 'setLastUpdatedDate',
        'owner' => 'setOwner',
        'project' => 'setProject',
        'propertyBag' => 'setPropertyBag',
        'revision' => 'setRevision',
        'source' => 'setSource',
        'startDate' => 'setStartDate',
        'state' => 'setState',
        'title' => 'setTitle',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area' => 'getArea',
        'comment' => 'getComment',
        'endDate' => 'getEndDate',
        'id' => 'getId',
        'lastUpdatedBy' => 'getLastUpdatedBy',
        'lastUpdatedDate' => 'getLastUpdatedDate',
        'owner' => 'getOwner',
        'project' => 'getProject',
        'propertyBag' => 'getPropertyBag',
        'revision' => 'getRevision',
        'source' => 'getSource',
        'startDate' => 'getStartDate',
        'state' => 'getState',
        'title' => 'getTitle',
        'url' => 'getUrl'
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

    const SOURCE_UNKNOWN = 'unknown';
    const SOURCE_XT_DESKTOP = 'xtDesktop';
    const SOURCE_FEEDBACK_DESKTOP = 'feedbackDesktop';
    const SOURCE_XT_WEB = 'xtWeb';
    const SOURCE_FEEDBACK_WEB = 'feedbackWeb';
    const SOURCE_XT_DESKTOP2 = 'xtDesktop2';
    const SOURCE_SESSION_INSIGHTS_FOR_ALL = 'sessionInsightsForAll';
    const STATE_UNSPECIFIED = 'unspecified';
    const STATE_NOT_STARTED = 'notStarted';
    const STATE_IN_PROGRESS = 'inProgress';
    const STATE_PAUSED = 'paused';
    const STATE_COMPLETED = 'completed';
    const STATE_DECLINED = 'declined';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_UNKNOWN,
            self::SOURCE_XT_DESKTOP,
            self::SOURCE_FEEDBACK_DESKTOP,
            self::SOURCE_XT_WEB,
            self::SOURCE_FEEDBACK_WEB,
            self::SOURCE_XT_DESKTOP2,
            self::SOURCE_SESSION_INSIGHTS_FOR_ALL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_UNSPECIFIED,
            self::STATE_NOT_STARTED,
            self::STATE_IN_PROGRESS,
            self::STATE_PAUSED,
            self::STATE_COMPLETED,
            self::STATE_DECLINED,
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
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastUpdatedBy'] = isset($data['lastUpdatedBy']) ? $data['lastUpdatedBy'] : null;
        $this->container['lastUpdatedDate'] = isset($data['lastUpdatedDate']) ? $data['lastUpdatedDate'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['propertyBag'] = isset($data['propertyBag']) ? $data['propertyBag'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * Gets area
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $area Area path of the test session
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

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
     * @param string $comment Comments in the test session
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime $endDate Duration of the session
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

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
     * @param int $id Id of the test session
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lastUpdatedBy
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef
     */
    public function getLastUpdatedBy()
    {
        return $this->container['lastUpdatedBy'];
    }

    /**
     * Sets lastUpdatedBy
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef $lastUpdatedBy Last Updated By  Reference
     *
     * @return $this
     */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->container['lastUpdatedBy'] = $lastUpdatedBy;

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
     * @param \DateTime $lastUpdatedDate Last updated date
     *
     * @return $this
     */
    public function setLastUpdatedDate($lastUpdatedDate)
    {
        $this->container['lastUpdatedDate'] = $lastUpdatedDate;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\IdentityRef $owner Owner of the test session
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ShallowReference $project Project to which the test session belongs
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets propertyBag
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\PropertyBag
     */
    public function getPropertyBag()
    {
        return $this->container['propertyBag'];
    }

    /**
     * Sets propertyBag
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\PropertyBag $propertyBag Generic store for test session data
     *
     * @return $this
     */
    public function setPropertyBag($propertyBag)
    {
        $this->container['propertyBag'] = $propertyBag;

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
     * @param int $revision Revision of the test session
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Source of the test session
     *
     * @return $this
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate Start date
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State of the test session
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of the test session
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $url Url of Test Session Resource
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


