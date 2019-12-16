<?php
/**
 * ContinuousDeploymentDefinition
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Build
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

namespace AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Build\ObjectSerializer;

/**
 * ContinuousDeploymentDefinition Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContinuousDeploymentDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContinuousDeploymentDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'connectedService' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\WebApiConnectedServiceRef',
        'definition' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\XamlDefinitionReference',
        'gitBranch' => 'string',
        'hostedServiceName' => 'string',
        'project' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TeamProjectReference',
        'repositoryId' => 'string',
        'storageAccountName' => 'string',
        'subscriptionId' => 'string',
        'website' => 'string',
        'webspace' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'connectedService' => null,
        'definition' => null,
        'gitBranch' => null,
        'hostedServiceName' => null,
        'project' => null,
        'repositoryId' => null,
        'storageAccountName' => null,
        'subscriptionId' => null,
        'website' => null,
        'webspace' => null
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
        'connectedService' => 'connectedService',
        'definition' => 'definition',
        'gitBranch' => 'gitBranch',
        'hostedServiceName' => 'hostedServiceName',
        'project' => 'project',
        'repositoryId' => 'repositoryId',
        'storageAccountName' => 'storageAccountName',
        'subscriptionId' => 'subscriptionId',
        'website' => 'website',
        'webspace' => 'webspace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connectedService' => 'setConnectedService',
        'definition' => 'setDefinition',
        'gitBranch' => 'setGitBranch',
        'hostedServiceName' => 'setHostedServiceName',
        'project' => 'setProject',
        'repositoryId' => 'setRepositoryId',
        'storageAccountName' => 'setStorageAccountName',
        'subscriptionId' => 'setSubscriptionId',
        'website' => 'setWebsite',
        'webspace' => 'setWebspace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connectedService' => 'getConnectedService',
        'definition' => 'getDefinition',
        'gitBranch' => 'getGitBranch',
        'hostedServiceName' => 'getHostedServiceName',
        'project' => 'getProject',
        'repositoryId' => 'getRepositoryId',
        'storageAccountName' => 'getStorageAccountName',
        'subscriptionId' => 'getSubscriptionId',
        'website' => 'getWebsite',
        'webspace' => 'getWebspace'
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
        $this->container['connectedService'] = isset($data['connectedService']) ? $data['connectedService'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['gitBranch'] = isset($data['gitBranch']) ? $data['gitBranch'] : null;
        $this->container['hostedServiceName'] = isset($data['hostedServiceName']) ? $data['hostedServiceName'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['storageAccountName'] = isset($data['storageAccountName']) ? $data['storageAccountName'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['webspace'] = isset($data['webspace']) ? $data['webspace'] : null;
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
     * Gets connectedService
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\WebApiConnectedServiceRef
     */
    public function getConnectedService()
    {
        return $this->container['connectedService'];
    }

    /**
     * Sets connectedService
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\WebApiConnectedServiceRef $connectedService The connected service associated with the continuous deployment
     *
     * @return $this
     */
    public function setConnectedService($connectedService)
    {
        $this->container['connectedService'] = $connectedService;

        return $this;
    }

    /**
     * Gets definition
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\XamlDefinitionReference
     */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
     * Sets definition
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\XamlDefinitionReference $definition The definition associated with the continuous deployment
     *
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;

        return $this;
    }

    /**
     * Gets gitBranch
     *
     * @return string
     */
    public function getGitBranch()
    {
        return $this->container['gitBranch'];
    }

    /**
     * Sets gitBranch
     *
     * @param string $gitBranch gitBranch
     *
     * @return $this
     */
    public function setGitBranch($gitBranch)
    {
        $this->container['gitBranch'] = $gitBranch;

        return $this;
    }

    /**
     * Gets hostedServiceName
     *
     * @return string
     */
    public function getHostedServiceName()
    {
        return $this->container['hostedServiceName'];
    }

    /**
     * Sets hostedServiceName
     *
     * @param string $hostedServiceName hostedServiceName
     *
     * @return $this
     */
    public function setHostedServiceName($hostedServiceName)
    {
        $this->container['hostedServiceName'] = $hostedServiceName;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TeamProjectReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TeamProjectReference $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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
     * @param string $repositoryId repositoryId
     *
     * @return $this
     */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;

        return $this;
    }

    /**
     * Gets storageAccountName
     *
     * @return string
     */
    public function getStorageAccountName()
    {
        return $this->container['storageAccountName'];
    }

    /**
     * Sets storageAccountName
     *
     * @param string $storageAccountName storageAccountName
     *
     * @return $this
     */
    public function setStorageAccountName($storageAccountName)
    {
        $this->container['storageAccountName'] = $storageAccountName;

        return $this;
    }

    /**
     * Gets subscriptionId
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
     * Sets subscriptionId
     *
     * @param string $subscriptionId subscriptionId
     *
     * @return $this
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets webspace
     *
     * @return string
     */
    public function getWebspace()
    {
        return $this->container['webspace'];
    }

    /**
     * Sets webspace
     *
     * @param string $webspace webspace
     *
     * @return $this
     */
    public function setWebspace($webspace)
    {
        $this->container['webspace'] = $webspace;

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


