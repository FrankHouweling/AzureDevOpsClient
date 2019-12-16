<?php
/**
 * LegacyTestSettings
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
 * LegacyTestSettings Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LegacyTestSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LegacyTestSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'areaId' => 'int',
        'areaPath' => 'string',
        'createdBy' => 'string',
        'createdByName' => 'string',
        'createdDate' => '\DateTime',
        'description' => 'string',
        'id' => 'int',
        'isAutomated' => 'bool',
        'isPublic' => 'bool',
        'lastUpdated' => '\DateTime',
        'lastUpdatedBy' => 'string',
        'lastUpdatedByName' => 'string',
        'machineRoles' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestSettingsMachineRole[]',
        'name' => 'string',
        'revision' => 'int',
        'settings' => 'string',
        'teamProjectUri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'areaId' => 'int32',
        'areaPath' => null,
        'createdBy' => 'uuid',
        'createdByName' => null,
        'createdDate' => 'date-time',
        'description' => null,
        'id' => 'int32',
        'isAutomated' => null,
        'isPublic' => null,
        'lastUpdated' => 'date-time',
        'lastUpdatedBy' => 'uuid',
        'lastUpdatedByName' => null,
        'machineRoles' => null,
        'name' => null,
        'revision' => 'int32',
        'settings' => null,
        'teamProjectUri' => null
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
        'areaId' => 'areaId',
        'areaPath' => 'areaPath',
        'createdBy' => 'createdBy',
        'createdByName' => 'createdByName',
        'createdDate' => 'createdDate',
        'description' => 'description',
        'id' => 'id',
        'isAutomated' => 'isAutomated',
        'isPublic' => 'isPublic',
        'lastUpdated' => 'lastUpdated',
        'lastUpdatedBy' => 'lastUpdatedBy',
        'lastUpdatedByName' => 'lastUpdatedByName',
        'machineRoles' => 'machineRoles',
        'name' => 'name',
        'revision' => 'revision',
        'settings' => 'settings',
        'teamProjectUri' => 'teamProjectUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'areaId' => 'setAreaId',
        'areaPath' => 'setAreaPath',
        'createdBy' => 'setCreatedBy',
        'createdByName' => 'setCreatedByName',
        'createdDate' => 'setCreatedDate',
        'description' => 'setDescription',
        'id' => 'setId',
        'isAutomated' => 'setIsAutomated',
        'isPublic' => 'setIsPublic',
        'lastUpdated' => 'setLastUpdated',
        'lastUpdatedBy' => 'setLastUpdatedBy',
        'lastUpdatedByName' => 'setLastUpdatedByName',
        'machineRoles' => 'setMachineRoles',
        'name' => 'setName',
        'revision' => 'setRevision',
        'settings' => 'setSettings',
        'teamProjectUri' => 'setTeamProjectUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'areaId' => 'getAreaId',
        'areaPath' => 'getAreaPath',
        'createdBy' => 'getCreatedBy',
        'createdByName' => 'getCreatedByName',
        'createdDate' => 'getCreatedDate',
        'description' => 'getDescription',
        'id' => 'getId',
        'isAutomated' => 'getIsAutomated',
        'isPublic' => 'getIsPublic',
        'lastUpdated' => 'getLastUpdated',
        'lastUpdatedBy' => 'getLastUpdatedBy',
        'lastUpdatedByName' => 'getLastUpdatedByName',
        'machineRoles' => 'getMachineRoles',
        'name' => 'getName',
        'revision' => 'getRevision',
        'settings' => 'getSettings',
        'teamProjectUri' => 'getTeamProjectUri'
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
        $this->container['areaId'] = isset($data['areaId']) ? $data['areaId'] : null;
        $this->container['areaPath'] = isset($data['areaPath']) ? $data['areaPath'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdByName'] = isset($data['createdByName']) ? $data['createdByName'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isAutomated'] = isset($data['isAutomated']) ? $data['isAutomated'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['lastUpdated'] = isset($data['lastUpdated']) ? $data['lastUpdated'] : null;
        $this->container['lastUpdatedBy'] = isset($data['lastUpdatedBy']) ? $data['lastUpdatedBy'] : null;
        $this->container['lastUpdatedByName'] = isset($data['lastUpdatedByName']) ? $data['lastUpdatedByName'] : null;
        $this->container['machineRoles'] = isset($data['machineRoles']) ? $data['machineRoles'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['teamProjectUri'] = isset($data['teamProjectUri']) ? $data['teamProjectUri'] : null;
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
     * Gets areaId
     *
     * @return int
     */
    public function getAreaId()
    {
        return $this->container['areaId'];
    }

    /**
     * Sets areaId
     *
     * @param int $areaId areaId
     *
     * @return $this
     */
    public function setAreaId($areaId)
    {
        $this->container['areaId'] = $areaId;

        return $this;
    }

    /**
     * Gets areaPath
     *
     * @return string
     */
    public function getAreaPath()
    {
        return $this->container['areaPath'];
    }

    /**
     * Sets areaPath
     *
     * @param string $areaPath areaPath
     *
     * @return $this
     */
    public function setAreaPath($areaPath)
    {
        $this->container['areaPath'] = $areaPath;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param string $createdBy createdBy
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets createdByName
     *
     * @return string
     */
    public function getCreatedByName()
    {
        return $this->container['createdByName'];
    }

    /**
     * Sets createdByName
     *
     * @param string $createdByName createdByName
     *
     * @return $this
     */
    public function setCreatedByName($createdByName)
    {
        $this->container['createdByName'] = $createdByName;

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
     * @param \DateTime $createdDate createdDate
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets isAutomated
     *
     * @return bool
     */
    public function getIsAutomated()
    {
        return $this->container['isAutomated'];
    }

    /**
     * Sets isAutomated
     *
     * @param bool $isAutomated isAutomated
     *
     * @return $this
     */
    public function setIsAutomated($isAutomated)
    {
        $this->container['isAutomated'] = $isAutomated;

        return $this;
    }

    /**
     * Gets isPublic
     *
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
     * Sets isPublic
     *
     * @param bool $isPublic isPublic
     *
     * @return $this
     */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;

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
     * Gets machineRoles
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestSettingsMachineRole[]
     */
    public function getMachineRoles()
    {
        return $this->container['machineRoles'];
    }

    /**
     * Sets machineRoles
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestSettingsMachineRole[] $machineRoles machineRoles
     *
     * @return $this
     */
    public function setMachineRoles($machineRoles)
    {
        $this->container['machineRoles'] = $machineRoles;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets settings
     *
     * @return string
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param string $settings settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets teamProjectUri
     *
     * @return string
     */
    public function getTeamProjectUri()
    {
        return $this->container['teamProjectUri'];
    }

    /**
     * Sets teamProjectUri
     *
     * @param string $teamProjectUri teamProjectUri
     *
     * @return $this
     */
    public function setTeamProjectUri($teamProjectUri)
    {
        $this->container['teamProjectUri'] = $teamProjectUri;

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


