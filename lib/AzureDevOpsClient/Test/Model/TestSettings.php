<?php
/**
 * TestSettings
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
 * TestSettings Class Doc Comment
 *
 * @category Class
 * @description Represents the test settings of the run. Used to create test settings and fetch test settings
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'areaPath' => 'string',
        'description' => 'string',
        'isPublic' => 'bool',
        'machineRoles' => 'string',
        'testSettingsContent' => 'string',
        'testSettingsId' => 'int',
        'testSettingsName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'areaPath' => null,
        'description' => null,
        'isPublic' => null,
        'machineRoles' => null,
        'testSettingsContent' => null,
        'testSettingsId' => 'int32',
        'testSettingsName' => null
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
        'areaPath' => 'areaPath',
        'description' => 'description',
        'isPublic' => 'isPublic',
        'machineRoles' => 'machineRoles',
        'testSettingsContent' => 'testSettingsContent',
        'testSettingsId' => 'testSettingsId',
        'testSettingsName' => 'testSettingsName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'areaPath' => 'setAreaPath',
        'description' => 'setDescription',
        'isPublic' => 'setIsPublic',
        'machineRoles' => 'setMachineRoles',
        'testSettingsContent' => 'setTestSettingsContent',
        'testSettingsId' => 'setTestSettingsId',
        'testSettingsName' => 'setTestSettingsName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'areaPath' => 'getAreaPath',
        'description' => 'getDescription',
        'isPublic' => 'getIsPublic',
        'machineRoles' => 'getMachineRoles',
        'testSettingsContent' => 'getTestSettingsContent',
        'testSettingsId' => 'getTestSettingsId',
        'testSettingsName' => 'getTestSettingsName'
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
        $this->container['areaPath'] = isset($data['areaPath']) ? $data['areaPath'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['machineRoles'] = isset($data['machineRoles']) ? $data['machineRoles'] : null;
        $this->container['testSettingsContent'] = isset($data['testSettingsContent']) ? $data['testSettingsContent'] : null;
        $this->container['testSettingsId'] = isset($data['testSettingsId']) ? $data['testSettingsId'] : null;
        $this->container['testSettingsName'] = isset($data['testSettingsName']) ? $data['testSettingsName'] : null;
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
     * @param string $areaPath Area path required to create test settings
     *
     * @return $this
     */
    public function setAreaPath($areaPath)
    {
        $this->container['areaPath'] = $areaPath;

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
     * @param string $description Description of the test settings. Used in create test settings.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param bool $isPublic Indicates if the tests settings is public or private.Used in create test settings.
     *
     * @return $this
     */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;

        return $this;
    }

    /**
     * Gets machineRoles
     *
     * @return string
     */
    public function getMachineRoles()
    {
        return $this->container['machineRoles'];
    }

    /**
     * Sets machineRoles
     *
     * @param string $machineRoles Xml string of machine roles. Used in create test settings.
     *
     * @return $this
     */
    public function setMachineRoles($machineRoles)
    {
        $this->container['machineRoles'] = $machineRoles;

        return $this;
    }

    /**
     * Gets testSettingsContent
     *
     * @return string
     */
    public function getTestSettingsContent()
    {
        return $this->container['testSettingsContent'];
    }

    /**
     * Sets testSettingsContent
     *
     * @param string $testSettingsContent Test settings content.
     *
     * @return $this
     */
    public function setTestSettingsContent($testSettingsContent)
    {
        $this->container['testSettingsContent'] = $testSettingsContent;

        return $this;
    }

    /**
     * Gets testSettingsId
     *
     * @return int
     */
    public function getTestSettingsId()
    {
        return $this->container['testSettingsId'];
    }

    /**
     * Sets testSettingsId
     *
     * @param int $testSettingsId Test settings id.
     *
     * @return $this
     */
    public function setTestSettingsId($testSettingsId)
    {
        $this->container['testSettingsId'] = $testSettingsId;

        return $this;
    }

    /**
     * Gets testSettingsName
     *
     * @return string
     */
    public function getTestSettingsName()
    {
        return $this->container['testSettingsName'];
    }

    /**
     * Sets testSettingsName
     *
     * @param string $testSettingsName Test settings name.
     *
     * @return $this
     */
    public function setTestSettingsName($testSettingsName)
    {
        $this->container['testSettingsName'] = $testSettingsName;

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


