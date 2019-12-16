<?php
/**
 * UserEntitlement
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\MemberEntitlementManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MemberEntitlementManagement
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

namespace AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model;

use \ArrayAccess;
use \AzureDevOpsClient\MemberEntitlementManagement\ObjectSerializer;

/**
 * UserEntitlement Class Doc Comment
 *
 * @category Class
 * @description A user entity with additional properties including their license, extensions, and project membership
 * @package  AzureDevOpsClient\MemberEntitlementManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserEntitlement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserEntitlement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accessLevel' => '\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\AccessLevel',
        'dateCreated' => '\DateTime',
        'groupAssignments' => '\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlement[]',
        'id' => 'string',
        'lastAccessedDate' => '\DateTime',
        'projectEntitlements' => '\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\ProjectEntitlement[]',
        'user' => '\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GraphUser'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accessLevel' => null,
        'dateCreated' => 'date-time',
        'groupAssignments' => null,
        'id' => 'uuid',
        'lastAccessedDate' => 'date-time',
        'projectEntitlements' => null,
        'user' => null
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
        'accessLevel' => 'accessLevel',
        'dateCreated' => 'dateCreated',
        'groupAssignments' => 'groupAssignments',
        'id' => 'id',
        'lastAccessedDate' => 'lastAccessedDate',
        'projectEntitlements' => 'projectEntitlements',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessLevel' => 'setAccessLevel',
        'dateCreated' => 'setDateCreated',
        'groupAssignments' => 'setGroupAssignments',
        'id' => 'setId',
        'lastAccessedDate' => 'setLastAccessedDate',
        'projectEntitlements' => 'setProjectEntitlements',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessLevel' => 'getAccessLevel',
        'dateCreated' => 'getDateCreated',
        'groupAssignments' => 'getGroupAssignments',
        'id' => 'getId',
        'lastAccessedDate' => 'getLastAccessedDate',
        'projectEntitlements' => 'getProjectEntitlements',
        'user' => 'getUser'
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
        $this->container['accessLevel'] = isset($data['accessLevel']) ? $data['accessLevel'] : null;
        $this->container['dateCreated'] = isset($data['dateCreated']) ? $data['dateCreated'] : null;
        $this->container['groupAssignments'] = isset($data['groupAssignments']) ? $data['groupAssignments'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastAccessedDate'] = isset($data['lastAccessedDate']) ? $data['lastAccessedDate'] : null;
        $this->container['projectEntitlements'] = isset($data['projectEntitlements']) ? $data['projectEntitlements'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
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
     * Gets accessLevel
     *
     * @return \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\AccessLevel
     */
    public function getAccessLevel()
    {
        return $this->container['accessLevel'];
    }

    /**
     * Sets accessLevel
     *
     * @param \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\AccessLevel $accessLevel User's access level denoted by a license.
     *
     * @return $this
     */
    public function setAccessLevel($accessLevel)
    {
        $this->container['accessLevel'] = $accessLevel;

        return $this;
    }

    /**
     * Gets dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param \DateTime $dateCreated [Readonly] Date the user was added to the collection.
     *
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets groupAssignments
     *
     * @return \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlement[]
     */
    public function getGroupAssignments()
    {
        return $this->container['groupAssignments'];
    }

    /**
     * Sets groupAssignments
     *
     * @param \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlement[] $groupAssignments [Readonly] GroupEntitlements that this user belongs to.
     *
     * @return $this
     */
    public function setGroupAssignments($groupAssignments)
    {
        $this->container['groupAssignments'] = $groupAssignments;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique identifier which matches the Id of the Identity associated with the GraphMember.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lastAccessedDate
     *
     * @return \DateTime
     */
    public function getLastAccessedDate()
    {
        return $this->container['lastAccessedDate'];
    }

    /**
     * Sets lastAccessedDate
     *
     * @param \DateTime $lastAccessedDate [Readonly] Date the user last accessed the collection.
     *
     * @return $this
     */
    public function setLastAccessedDate($lastAccessedDate)
    {
        $this->container['lastAccessedDate'] = $lastAccessedDate;

        return $this;
    }

    /**
     * Gets projectEntitlements
     *
     * @return \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\ProjectEntitlement[]
     */
    public function getProjectEntitlements()
    {
        return $this->container['projectEntitlements'];
    }

    /**
     * Sets projectEntitlements
     *
     * @param \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\ProjectEntitlement[] $projectEntitlements Relation between a project and the user's effective permissions in that project.
     *
     * @return $this
     */
    public function setProjectEntitlements($projectEntitlements)
    {
        $this->container['projectEntitlements'] = $projectEntitlements;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GraphUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GraphUser $user User reference.
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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


