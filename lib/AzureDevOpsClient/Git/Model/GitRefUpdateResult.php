<?php
/**
 * GitRefUpdateResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Git
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

namespace AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Git\ObjectSerializer;

/**
 * GitRefUpdateResult Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitRefUpdateResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitRefUpdateResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customMessage' => 'string',
        'isLocked' => 'bool',
        'name' => 'string',
        'newObjectId' => 'string',
        'oldObjectId' => 'string',
        'rejectedBy' => 'string',
        'repositoryId' => 'string',
        'success' => 'bool',
        'updateStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customMessage' => null,
        'isLocked' => null,
        'name' => null,
        'newObjectId' => null,
        'oldObjectId' => null,
        'rejectedBy' => null,
        'repositoryId' => 'uuid',
        'success' => null,
        'updateStatus' => null
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
        'customMessage' => 'customMessage',
        'isLocked' => 'isLocked',
        'name' => 'name',
        'newObjectId' => 'newObjectId',
        'oldObjectId' => 'oldObjectId',
        'rejectedBy' => 'rejectedBy',
        'repositoryId' => 'repositoryId',
        'success' => 'success',
        'updateStatus' => 'updateStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customMessage' => 'setCustomMessage',
        'isLocked' => 'setIsLocked',
        'name' => 'setName',
        'newObjectId' => 'setNewObjectId',
        'oldObjectId' => 'setOldObjectId',
        'rejectedBy' => 'setRejectedBy',
        'repositoryId' => 'setRepositoryId',
        'success' => 'setSuccess',
        'updateStatus' => 'setUpdateStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customMessage' => 'getCustomMessage',
        'isLocked' => 'getIsLocked',
        'name' => 'getName',
        'newObjectId' => 'getNewObjectId',
        'oldObjectId' => 'getOldObjectId',
        'rejectedBy' => 'getRejectedBy',
        'repositoryId' => 'getRepositoryId',
        'success' => 'getSuccess',
        'updateStatus' => 'getUpdateStatus'
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

    const UPDATE_STATUS_SUCCEEDED = 'succeeded';
    const UPDATE_STATUS_FORCE_PUSH_REQUIRED = 'forcePushRequired';
    const UPDATE_STATUS_STALE_OLD_OBJECT_ID = 'staleOldObjectId';
    const UPDATE_STATUS_INVALID_REF_NAME = 'invalidRefName';
    const UPDATE_STATUS_UNPROCESSED = 'unprocessed';
    const UPDATE_STATUS_UNRESOLVABLE_TO_COMMIT = 'unresolvableToCommit';
    const UPDATE_STATUS_WRITE_PERMISSION_REQUIRED = 'writePermissionRequired';
    const UPDATE_STATUS_MANAGE_NOTE_PERMISSION_REQUIRED = 'manageNotePermissionRequired';
    const UPDATE_STATUS_CREATE_BRANCH_PERMISSION_REQUIRED = 'createBranchPermissionRequired';
    const UPDATE_STATUS_CREATE_TAG_PERMISSION_REQUIRED = 'createTagPermissionRequired';
    const UPDATE_STATUS_REJECTED_BY_PLUGIN = 'rejectedByPlugin';
    const UPDATE_STATUS_LOCKED = 'locked';
    const UPDATE_STATUS_REF_NAME_CONFLICT = 'refNameConflict';
    const UPDATE_STATUS_REJECTED_BY_POLICY = 'rejectedByPolicy';
    const UPDATE_STATUS_SUCCEEDED_NON_EXISTENT_REF = 'succeededNonExistentRef';
    const UPDATE_STATUS_SUCCEEDED_CORRUPT_REF = 'succeededCorruptRef';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUpdateStatusAllowableValues()
    {
        return [
            self::UPDATE_STATUS_SUCCEEDED,
            self::UPDATE_STATUS_FORCE_PUSH_REQUIRED,
            self::UPDATE_STATUS_STALE_OLD_OBJECT_ID,
            self::UPDATE_STATUS_INVALID_REF_NAME,
            self::UPDATE_STATUS_UNPROCESSED,
            self::UPDATE_STATUS_UNRESOLVABLE_TO_COMMIT,
            self::UPDATE_STATUS_WRITE_PERMISSION_REQUIRED,
            self::UPDATE_STATUS_MANAGE_NOTE_PERMISSION_REQUIRED,
            self::UPDATE_STATUS_CREATE_BRANCH_PERMISSION_REQUIRED,
            self::UPDATE_STATUS_CREATE_TAG_PERMISSION_REQUIRED,
            self::UPDATE_STATUS_REJECTED_BY_PLUGIN,
            self::UPDATE_STATUS_LOCKED,
            self::UPDATE_STATUS_REF_NAME_CONFLICT,
            self::UPDATE_STATUS_REJECTED_BY_POLICY,
            self::UPDATE_STATUS_SUCCEEDED_NON_EXISTENT_REF,
            self::UPDATE_STATUS_SUCCEEDED_CORRUPT_REF,
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
        $this->container['customMessage'] = isset($data['customMessage']) ? $data['customMessage'] : null;
        $this->container['isLocked'] = isset($data['isLocked']) ? $data['isLocked'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['newObjectId'] = isset($data['newObjectId']) ? $data['newObjectId'] : null;
        $this->container['oldObjectId'] = isset($data['oldObjectId']) ? $data['oldObjectId'] : null;
        $this->container['rejectedBy'] = isset($data['rejectedBy']) ? $data['rejectedBy'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['updateStatus'] = isset($data['updateStatus']) ? $data['updateStatus'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUpdateStatusAllowableValues();
        if (!is_null($this->container['updateStatus']) && !in_array($this->container['updateStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'updateStatus', must be one of '%s'",
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
     * Gets customMessage
     *
     * @return string
     */
    public function getCustomMessage()
    {
        return $this->container['customMessage'];
    }

    /**
     * Sets customMessage
     *
     * @param string $customMessage Custom message for the result object For instance, Reason for failing.
     *
     * @return $this
     */
    public function setCustomMessage($customMessage)
    {
        $this->container['customMessage'] = $customMessage;

        return $this;
    }

    /**
     * Gets isLocked
     *
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->container['isLocked'];
    }

    /**
     * Sets isLocked
     *
     * @param bool $isLocked Whether the ref is locked or not
     *
     * @return $this
     */
    public function setIsLocked($isLocked)
    {
        $this->container['isLocked'] = $isLocked;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Ref name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets newObjectId
     *
     * @return string
     */
    public function getNewObjectId()
    {
        return $this->container['newObjectId'];
    }

    /**
     * Sets newObjectId
     *
     * @param string $newObjectId New object ID
     *
     * @return $this
     */
    public function setNewObjectId($newObjectId)
    {
        $this->container['newObjectId'] = $newObjectId;

        return $this;
    }

    /**
     * Gets oldObjectId
     *
     * @return string
     */
    public function getOldObjectId()
    {
        return $this->container['oldObjectId'];
    }

    /**
     * Sets oldObjectId
     *
     * @param string $oldObjectId Old object ID
     *
     * @return $this
     */
    public function setOldObjectId($oldObjectId)
    {
        $this->container['oldObjectId'] = $oldObjectId;

        return $this;
    }

    /**
     * Gets rejectedBy
     *
     * @return string
     */
    public function getRejectedBy()
    {
        return $this->container['rejectedBy'];
    }

    /**
     * Sets rejectedBy
     *
     * @param string $rejectedBy Name of the plugin that rejected the updated.
     *
     * @return $this
     */
    public function setRejectedBy($rejectedBy)
    {
        $this->container['rejectedBy'] = $rejectedBy;

        return $this;
    }

    /**
     * Gets repositoryId
     *
     * @return string
     */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
     * Sets repositoryId
     *
     * @param string $repositoryId Repository ID
     *
     * @return $this
     */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success True if the ref update succeeded, false otherwise
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets updateStatus
     *
     * @return string
     */
    public function getUpdateStatus()
    {
        return $this->container['updateStatus'];
    }

    /**
     * Sets updateStatus
     *
     * @param string $updateStatus Status of the update from the TFS server.
     *
     * @return $this
     */
    public function setUpdateStatus($updateStatus)
    {
        $allowedValues = $this->getUpdateStatusAllowableValues();
        if (!is_null($updateStatus) && !in_array($updateStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'updateStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['updateStatus'] = $updateStatus;

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


