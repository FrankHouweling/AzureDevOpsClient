<?php
/**
 * BuildReference2
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Test
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

namespace FrankHouweling\AzureDevOpsClient\Test\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Test\ObjectSerializer;

/**
 * BuildReference2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildReference2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildReference2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'branchName' => 'string',
        'buildConfigurationId' => 'int',
        'buildDefinitionId' => 'int',
        'buildDeleted' => 'bool',
        'buildFlavor' => 'string',
        'buildId' => 'int',
        'buildNumber' => 'string',
        'buildPlatform' => 'string',
        'buildSystem' => 'string',
        'buildUri' => 'string',
        'coverageId' => 'int',
        'createdDate' => '\DateTime',
        'projectId' => 'string',
        'repoId' => 'string',
        'repoType' => 'string',
        'sourceVersion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'branchName' => null,
        'buildConfigurationId' => 'int32',
        'buildDefinitionId' => 'int32',
        'buildDeleted' => null,
        'buildFlavor' => null,
        'buildId' => 'int32',
        'buildNumber' => null,
        'buildPlatform' => null,
        'buildSystem' => null,
        'buildUri' => null,
        'coverageId' => 'int32',
        'createdDate' => 'date-time',
        'projectId' => 'uuid',
        'repoId' => null,
        'repoType' => null,
        'sourceVersion' => null
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
        'branchName' => 'branchName',
        'buildConfigurationId' => 'buildConfigurationId',
        'buildDefinitionId' => 'buildDefinitionId',
        'buildDeleted' => 'buildDeleted',
        'buildFlavor' => 'buildFlavor',
        'buildId' => 'buildId',
        'buildNumber' => 'buildNumber',
        'buildPlatform' => 'buildPlatform',
        'buildSystem' => 'buildSystem',
        'buildUri' => 'buildUri',
        'coverageId' => 'coverageId',
        'createdDate' => 'createdDate',
        'projectId' => 'projectId',
        'repoId' => 'repoId',
        'repoType' => 'repoType',
        'sourceVersion' => 'sourceVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branchName' => 'setBranchName',
        'buildConfigurationId' => 'setBuildConfigurationId',
        'buildDefinitionId' => 'setBuildDefinitionId',
        'buildDeleted' => 'setBuildDeleted',
        'buildFlavor' => 'setBuildFlavor',
        'buildId' => 'setBuildId',
        'buildNumber' => 'setBuildNumber',
        'buildPlatform' => 'setBuildPlatform',
        'buildSystem' => 'setBuildSystem',
        'buildUri' => 'setBuildUri',
        'coverageId' => 'setCoverageId',
        'createdDate' => 'setCreatedDate',
        'projectId' => 'setProjectId',
        'repoId' => 'setRepoId',
        'repoType' => 'setRepoType',
        'sourceVersion' => 'setSourceVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branchName' => 'getBranchName',
        'buildConfigurationId' => 'getBuildConfigurationId',
        'buildDefinitionId' => 'getBuildDefinitionId',
        'buildDeleted' => 'getBuildDeleted',
        'buildFlavor' => 'getBuildFlavor',
        'buildId' => 'getBuildId',
        'buildNumber' => 'getBuildNumber',
        'buildPlatform' => 'getBuildPlatform',
        'buildSystem' => 'getBuildSystem',
        'buildUri' => 'getBuildUri',
        'coverageId' => 'getCoverageId',
        'createdDate' => 'getCreatedDate',
        'projectId' => 'getProjectId',
        'repoId' => 'getRepoId',
        'repoType' => 'getRepoType',
        'sourceVersion' => 'getSourceVersion'
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
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['buildConfigurationId'] = isset($data['buildConfigurationId']) ? $data['buildConfigurationId'] : null;
        $this->container['buildDefinitionId'] = isset($data['buildDefinitionId']) ? $data['buildDefinitionId'] : null;
        $this->container['buildDeleted'] = isset($data['buildDeleted']) ? $data['buildDeleted'] : null;
        $this->container['buildFlavor'] = isset($data['buildFlavor']) ? $data['buildFlavor'] : null;
        $this->container['buildId'] = isset($data['buildId']) ? $data['buildId'] : null;
        $this->container['buildNumber'] = isset($data['buildNumber']) ? $data['buildNumber'] : null;
        $this->container['buildPlatform'] = isset($data['buildPlatform']) ? $data['buildPlatform'] : null;
        $this->container['buildSystem'] = isset($data['buildSystem']) ? $data['buildSystem'] : null;
        $this->container['buildUri'] = isset($data['buildUri']) ? $data['buildUri'] : null;
        $this->container['coverageId'] = isset($data['coverageId']) ? $data['coverageId'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
        $this->container['sourceVersion'] = isset($data['sourceVersion']) ? $data['sourceVersion'] : null;
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
     * Gets branchName
     *
     * @return string
     */
    public function getBranchName()
    {
        return $this->container['branchName'];
    }

    /**
     * Sets branchName
     *
     * @param string $branchName branchName
     *
     * @return $this
     */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;

        return $this;
    }

    /**
     * Gets buildConfigurationId
     *
     * @return int
     */
    public function getBuildConfigurationId()
    {
        return $this->container['buildConfigurationId'];
    }

    /**
     * Sets buildConfigurationId
     *
     * @param int $buildConfigurationId buildConfigurationId
     *
     * @return $this
     */
    public function setBuildConfigurationId($buildConfigurationId)
    {
        $this->container['buildConfigurationId'] = $buildConfigurationId;

        return $this;
    }

    /**
     * Gets buildDefinitionId
     *
     * @return int
     */
    public function getBuildDefinitionId()
    {
        return $this->container['buildDefinitionId'];
    }

    /**
     * Sets buildDefinitionId
     *
     * @param int $buildDefinitionId buildDefinitionId
     *
     * @return $this
     */
    public function setBuildDefinitionId($buildDefinitionId)
    {
        $this->container['buildDefinitionId'] = $buildDefinitionId;

        return $this;
    }

    /**
     * Gets buildDeleted
     *
     * @return bool
     */
    public function getBuildDeleted()
    {
        return $this->container['buildDeleted'];
    }

    /**
     * Sets buildDeleted
     *
     * @param bool $buildDeleted buildDeleted
     *
     * @return $this
     */
    public function setBuildDeleted($buildDeleted)
    {
        $this->container['buildDeleted'] = $buildDeleted;

        return $this;
    }

    /**
     * Gets buildFlavor
     *
     * @return string
     */
    public function getBuildFlavor()
    {
        return $this->container['buildFlavor'];
    }

    /**
     * Sets buildFlavor
     *
     * @param string $buildFlavor buildFlavor
     *
     * @return $this
     */
    public function setBuildFlavor($buildFlavor)
    {
        $this->container['buildFlavor'] = $buildFlavor;

        return $this;
    }

    /**
     * Gets buildId
     *
     * @return int
     */
    public function getBuildId()
    {
        return $this->container['buildId'];
    }

    /**
     * Sets buildId
     *
     * @param int $buildId buildId
     *
     * @return $this
     */
    public function setBuildId($buildId)
    {
        $this->container['buildId'] = $buildId;

        return $this;
    }

    /**
     * Gets buildNumber
     *
     * @return string
     */
    public function getBuildNumber()
    {
        return $this->container['buildNumber'];
    }

    /**
     * Sets buildNumber
     *
     * @param string $buildNumber buildNumber
     *
     * @return $this
     */
    public function setBuildNumber($buildNumber)
    {
        $this->container['buildNumber'] = $buildNumber;

        return $this;
    }

    /**
     * Gets buildPlatform
     *
     * @return string
     */
    public function getBuildPlatform()
    {
        return $this->container['buildPlatform'];
    }

    /**
     * Sets buildPlatform
     *
     * @param string $buildPlatform buildPlatform
     *
     * @return $this
     */
    public function setBuildPlatform($buildPlatform)
    {
        $this->container['buildPlatform'] = $buildPlatform;

        return $this;
    }

    /**
     * Gets buildSystem
     *
     * @return string
     */
    public function getBuildSystem()
    {
        return $this->container['buildSystem'];
    }

    /**
     * Sets buildSystem
     *
     * @param string $buildSystem buildSystem
     *
     * @return $this
     */
    public function setBuildSystem($buildSystem)
    {
        $this->container['buildSystem'] = $buildSystem;

        return $this;
    }

    /**
     * Gets buildUri
     *
     * @return string
     */
    public function getBuildUri()
    {
        return $this->container['buildUri'];
    }

    /**
     * Sets buildUri
     *
     * @param string $buildUri buildUri
     *
     * @return $this
     */
    public function setBuildUri($buildUri)
    {
        $this->container['buildUri'] = $buildUri;

        return $this;
    }

    /**
     * Gets coverageId
     *
     * @return int
     */
    public function getCoverageId()
    {
        return $this->container['coverageId'];
    }

    /**
     * Sets coverageId
     *
     * @param int $coverageId coverageId
     *
     * @return $this
     */
    public function setCoverageId($coverageId)
    {
        $this->container['coverageId'] = $coverageId;

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
     * @param string $projectId projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets repoId
     *
     * @return string
     */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
     * Sets repoId
     *
     * @param string $repoId repoId
     *
     * @return $this
     */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;

        return $this;
    }

    /**
     * Gets repoType
     *
     * @return string
     */
    public function getRepoType()
    {
        return $this->container['repoType'];
    }

    /**
     * Sets repoType
     *
     * @param string $repoType repoType
     *
     * @return $this
     */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;

        return $this;
    }

    /**
     * Gets sourceVersion
     *
     * @return string
     */
    public function getSourceVersion()
    {
        return $this->container['sourceVersion'];
    }

    /**
     * Sets sourceVersion
     *
     * @param string $sourceVersion sourceVersion
     *
     * @return $this
     */
    public function setSourceVersion($sourceVersion)
    {
        $this->container['sourceVersion'] = $sourceVersion;

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


