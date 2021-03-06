<?php
/**
 * WikiV2
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Wiki
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wiki
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

namespace FrankHouweling\AzureDevOpsClient\Wiki\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Wiki\ObjectSerializer;

/**
 * WikiV2 Class Doc Comment
 *
 * @category Class
 * @description Defines a wiki resource.
 * @package  FrankHouweling\AzureDevOpsClient\Wiki
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WikiV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WikiV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mappedPath' => 'string',
        'name' => 'string',
        'projectId' => 'string',
        'repositoryId' => 'string',
        'type' => 'string',
        'id' => 'string',
        'properties' => 'map[string,string]',
        'remoteUrl' => 'string',
        'url' => 'string',
        'versions' => '\FrankHouweling\AzureDevOpsClient\Wiki\Model\GitVersionDescriptor[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mappedPath' => null,
        'name' => null,
        'projectId' => 'uuid',
        'repositoryId' => 'uuid',
        'type' => null,
        'id' => 'uuid',
        'properties' => null,
        'remoteUrl' => null,
        'url' => null,
        'versions' => null
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
        'mappedPath' => 'mappedPath',
        'name' => 'name',
        'projectId' => 'projectId',
        'repositoryId' => 'repositoryId',
        'type' => 'type',
        'id' => 'id',
        'properties' => 'properties',
        'remoteUrl' => 'remoteUrl',
        'url' => 'url',
        'versions' => 'versions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mappedPath' => 'setMappedPath',
        'name' => 'setName',
        'projectId' => 'setProjectId',
        'repositoryId' => 'setRepositoryId',
        'type' => 'setType',
        'id' => 'setId',
        'properties' => 'setProperties',
        'remoteUrl' => 'setRemoteUrl',
        'url' => 'setUrl',
        'versions' => 'setVersions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mappedPath' => 'getMappedPath',
        'name' => 'getName',
        'projectId' => 'getProjectId',
        'repositoryId' => 'getRepositoryId',
        'type' => 'getType',
        'id' => 'getId',
        'properties' => 'getProperties',
        'remoteUrl' => 'getRemoteUrl',
        'url' => 'getUrl',
        'versions' => 'getVersions'
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

    const TYPE_PROJECT_WIKI = 'projectWiki';
    const TYPE_CODE_WIKI = 'codeWiki';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PROJECT_WIKI,
            self::TYPE_CODE_WIKI,
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
        $this->container['mappedPath'] = isset($data['mappedPath']) ? $data['mappedPath'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['remoteUrl'] = isset($data['remoteUrl']) ? $data['remoteUrl'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets mappedPath
     *
     * @return string
     */
    public function getMappedPath()
    {
        return $this->container['mappedPath'];
    }

    /**
     * Sets mappedPath
     *
     * @param string $mappedPath Folder path inside repository which is shown as Wiki. Not required for ProjectWiki type.
     *
     * @return $this
     */
    public function setMappedPath($mappedPath)
    {
        $this->container['mappedPath'] = $mappedPath;

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
     * @param string $name Wiki name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param string $projectId ID of the project in which the wiki is to be created.
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

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
     * @param string $repositoryId ID of the git repository that backs up the wiki. Not required for ProjectWiki type.
     *
     * @return $this
     */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of the wiki.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @param string $id ID of the wiki.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return map[string,string]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param map[string,string] $properties Properties of the wiki.
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets remoteUrl
     *
     * @return string
     */
    public function getRemoteUrl()
    {
        return $this->container['remoteUrl'];
    }

    /**
     * Sets remoteUrl
     *
     * @param string $remoteUrl Remote web url to the wiki.
     *
     * @return $this
     */
    public function setRemoteUrl($remoteUrl)
    {
        $this->container['remoteUrl'] = $remoteUrl;

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
     * @param string $url REST url for this wiki.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \FrankHouweling\AzureDevOpsClient\Wiki\Model\GitVersionDescriptor[]
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \FrankHouweling\AzureDevOpsClient\Wiki\Model\GitVersionDescriptor[] $versions Versions of the wiki.
     *
     * @return $this
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

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


