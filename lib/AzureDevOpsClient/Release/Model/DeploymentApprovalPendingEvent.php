<?php
/**
 * DeploymentApprovalPendingEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Release
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

namespace FrankHouweling\AzureDevOpsClient\Release\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Release\ObjectSerializer;

/**
 * DeploymentApprovalPendingEvent Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeploymentApprovalPendingEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeploymentApprovalPendingEvent';

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
        'approval' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval',
        'approvalOptions' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ApprovalOptions',
        'completedApprovals' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval[]',
        'data' => 'map[string,object]',
        'deployment' => '\FrankHouweling\AzureDevOpsClient\Release\Model\Deployment',
        'isMultipleRankApproval' => 'bool',
        'pendingApprovals' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval[]',
        'project' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ProjectReference',
        'release' => '\FrankHouweling\AzureDevOpsClient\Release\Model\Release'
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
        'approval' => null,
        'approvalOptions' => null,
        'completedApprovals' => null,
        'data' => null,
        'deployment' => null,
        'isMultipleRankApproval' => null,
        'pendingApprovals' => null,
        'project' => null,
        'release' => null
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
        'approval' => 'approval',
        'approvalOptions' => 'approvalOptions',
        'completedApprovals' => 'completedApprovals',
        'data' => 'data',
        'deployment' => 'deployment',
        'isMultipleRankApproval' => 'isMultipleRankApproval',
        'pendingApprovals' => 'pendingApprovals',
        'project' => 'project',
        'release' => 'release'
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
        'approval' => 'setApproval',
        'approvalOptions' => 'setApprovalOptions',
        'completedApprovals' => 'setCompletedApprovals',
        'data' => 'setData',
        'deployment' => 'setDeployment',
        'isMultipleRankApproval' => 'setIsMultipleRankApproval',
        'pendingApprovals' => 'setPendingApprovals',
        'project' => 'setProject',
        'release' => 'setRelease'
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
        'approval' => 'getApproval',
        'approvalOptions' => 'getApprovalOptions',
        'completedApprovals' => 'getCompletedApprovals',
        'data' => 'getData',
        'deployment' => 'getDeployment',
        'isMultipleRankApproval' => 'getIsMultipleRankApproval',
        'pendingApprovals' => 'getPendingApprovals',
        'project' => 'getProject',
        'release' => 'getRelease'
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
        $this->container['approval'] = isset($data['approval']) ? $data['approval'] : null;
        $this->container['approvalOptions'] = isset($data['approvalOptions']) ? $data['approvalOptions'] : null;
        $this->container['completedApprovals'] = isset($data['completedApprovals']) ? $data['completedApprovals'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['deployment'] = isset($data['deployment']) ? $data['deployment'] : null;
        $this->container['isMultipleRankApproval'] = isset($data['isMultipleRankApproval']) ? $data['isMultipleRankApproval'] : null;
        $this->container['pendingApprovals'] = isset($data['pendingApprovals']) ? $data['pendingApprovals'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['release'] = isset($data['release']) ? $data['release'] : null;
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
     * Gets approval
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval
     */
    public function getApproval()
    {
        return $this->container['approval'];
    }

    /**
     * Sets approval
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval $approval approval
     *
     * @return $this
     */
    public function setApproval($approval)
    {
        $this->container['approval'] = $approval;

        return $this;
    }

    /**
     * Gets approvalOptions
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ApprovalOptions
     */
    public function getApprovalOptions()
    {
        return $this->container['approvalOptions'];
    }

    /**
     * Sets approvalOptions
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ApprovalOptions $approvalOptions approvalOptions
     *
     * @return $this
     */
    public function setApprovalOptions($approvalOptions)
    {
        $this->container['approvalOptions'] = $approvalOptions;

        return $this;
    }

    /**
     * Gets completedApprovals
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval[]
     */
    public function getCompletedApprovals()
    {
        return $this->container['completedApprovals'];
    }

    /**
     * Sets completedApprovals
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval[] $completedApprovals completedApprovals
     *
     * @return $this
     */
    public function setCompletedApprovals($completedApprovals)
    {
        $this->container['completedApprovals'] = $completedApprovals;

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
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\Deployment
     */
    public function getDeployment()
    {
        return $this->container['deployment'];
    }

    /**
     * Sets deployment
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\Deployment $deployment deployment
     *
     * @return $this
     */
    public function setDeployment($deployment)
    {
        $this->container['deployment'] = $deployment;

        return $this;
    }

    /**
     * Gets isMultipleRankApproval
     *
     * @return bool
     */
    public function getIsMultipleRankApproval()
    {
        return $this->container['isMultipleRankApproval'];
    }

    /**
     * Sets isMultipleRankApproval
     *
     * @param bool $isMultipleRankApproval isMultipleRankApproval
     *
     * @return $this
     */
    public function setIsMultipleRankApproval($isMultipleRankApproval)
    {
        $this->container['isMultipleRankApproval'] = $isMultipleRankApproval;

        return $this;
    }

    /**
     * Gets pendingApprovals
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval[]
     */
    public function getPendingApprovals()
    {
        return $this->container['pendingApprovals'];
    }

    /**
     * Sets pendingApprovals
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval[] $pendingApprovals pendingApprovals
     *
     * @return $this
     */
    public function setPendingApprovals($pendingApprovals)
    {
        $this->container['pendingApprovals'] = $pendingApprovals;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ProjectReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ProjectReference $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets release
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\Release
     */
    public function getRelease()
    {
        return $this->container['release'];
    }

    /**
     * Sets release
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\Release $release release
     *
     * @return $this
     */
    public function setRelease($release)
    {
        $this->container['release'] = $release;

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


