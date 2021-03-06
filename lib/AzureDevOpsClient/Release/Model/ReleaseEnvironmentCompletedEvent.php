<?php
/**
 * ReleaseEnvironmentCompletedEvent
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
 * ReleaseEnvironmentCompletedEvent Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReleaseEnvironmentCompletedEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReleaseEnvironmentCompletedEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'createdByName' => 'string',
        'definitionId' => 'int',
        'definitionName' => 'string',
        'environment' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseEnvironment',
        'environmentId' => 'int',
        'projectName' => 'string',
        'reason' => 'string',
        'releaseCreatedBy' => '\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef',
        'releaseLogsUri' => 'string',
        'releaseName' => 'string',
        'status' => 'string',
        'title' => 'string',
        'webAccessUri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'createdByName' => null,
        'definitionId' => 'int32',
        'definitionName' => null,
        'environment' => null,
        'environmentId' => 'int32',
        'projectName' => null,
        'reason' => null,
        'releaseCreatedBy' => null,
        'releaseLogsUri' => null,
        'releaseName' => null,
        'status' => null,
        'title' => null,
        'webAccessUri' => null
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
        'createdByName' => 'createdByName',
        'definitionId' => 'definitionId',
        'definitionName' => 'definitionName',
        'environment' => 'environment',
        'environmentId' => 'environmentId',
        'projectName' => 'projectName',
        'reason' => 'reason',
        'releaseCreatedBy' => 'releaseCreatedBy',
        'releaseLogsUri' => 'releaseLogsUri',
        'releaseName' => 'releaseName',
        'status' => 'status',
        'title' => 'title',
        'webAccessUri' => 'webAccessUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createdByName' => 'setCreatedByName',
        'definitionId' => 'setDefinitionId',
        'definitionName' => 'setDefinitionName',
        'environment' => 'setEnvironment',
        'environmentId' => 'setEnvironmentId',
        'projectName' => 'setProjectName',
        'reason' => 'setReason',
        'releaseCreatedBy' => 'setReleaseCreatedBy',
        'releaseLogsUri' => 'setReleaseLogsUri',
        'releaseName' => 'setReleaseName',
        'status' => 'setStatus',
        'title' => 'setTitle',
        'webAccessUri' => 'setWebAccessUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createdByName' => 'getCreatedByName',
        'definitionId' => 'getDefinitionId',
        'definitionName' => 'getDefinitionName',
        'environment' => 'getEnvironment',
        'environmentId' => 'getEnvironmentId',
        'projectName' => 'getProjectName',
        'reason' => 'getReason',
        'releaseCreatedBy' => 'getReleaseCreatedBy',
        'releaseLogsUri' => 'getReleaseLogsUri',
        'releaseName' => 'getReleaseName',
        'status' => 'getStatus',
        'title' => 'getTitle',
        'webAccessUri' => 'getWebAccessUri'
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

    const REASON_NONE = 'none';
    const REASON_MANUAL = 'manual';
    const REASON_AUTOMATED = 'automated';
    const REASON_SCHEDULED = 'scheduled';
    const REASON_REDEPLOY_TRIGGER = 'redeployTrigger';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_NONE,
            self::REASON_MANUAL,
            self::REASON_AUTOMATED,
            self::REASON_SCHEDULED,
            self::REASON_REDEPLOY_TRIGGER,
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
        $this->container['createdByName'] = isset($data['createdByName']) ? $data['createdByName'] : null;
        $this->container['definitionId'] = isset($data['definitionId']) ? $data['definitionId'] : null;
        $this->container['definitionName'] = isset($data['definitionName']) ? $data['definitionName'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['releaseCreatedBy'] = isset($data['releaseCreatedBy']) ? $data['releaseCreatedBy'] : null;
        $this->container['releaseLogsUri'] = isset($data['releaseLogsUri']) ? $data['releaseLogsUri'] : null;
        $this->container['releaseName'] = isset($data['releaseName']) ? $data['releaseName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['webAccessUri'] = isset($data['webAccessUri']) ? $data['webAccessUri'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
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
     * Gets definitionId
     *
     * @return int
     */
    public function getDefinitionId()
    {
        return $this->container['definitionId'];
    }

    /**
     * Sets definitionId
     *
     * @param int $definitionId definitionId
     *
     * @return $this
     */
    public function setDefinitionId($definitionId)
    {
        $this->container['definitionId'] = $definitionId;

        return $this;
    }

    /**
     * Gets definitionName
     *
     * @return string
     */
    public function getDefinitionName()
    {
        return $this->container['definitionName'];
    }

    /**
     * Sets definitionName
     *
     * @param string $definitionName definitionName
     *
     * @return $this
     */
    public function setDefinitionName($definitionName)
    {
        $this->container['definitionName'] = $definitionName;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseEnvironment
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseEnvironment $environment environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets environmentId
     *
     * @return int
     */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
     * Sets environmentId
     *
     * @param int $environmentId environmentId
     *
     * @return $this
     */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;

        return $this;
    }

    /**
     * Gets projectName
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
     * Sets projectName
     *
     * @param string $projectName projectName
     *
     * @return $this
     */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($reason) && !in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets releaseCreatedBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef
     */
    public function getReleaseCreatedBy()
    {
        return $this->container['releaseCreatedBy'];
    }

    /**
     * Sets releaseCreatedBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef $releaseCreatedBy releaseCreatedBy
     *
     * @return $this
     */
    public function setReleaseCreatedBy($releaseCreatedBy)
    {
        $this->container['releaseCreatedBy'] = $releaseCreatedBy;

        return $this;
    }

    /**
     * Gets releaseLogsUri
     *
     * @return string
     */
    public function getReleaseLogsUri()
    {
        return $this->container['releaseLogsUri'];
    }

    /**
     * Sets releaseLogsUri
     *
     * @param string $releaseLogsUri releaseLogsUri
     *
     * @return $this
     */
    public function setReleaseLogsUri($releaseLogsUri)
    {
        $this->container['releaseLogsUri'] = $releaseLogsUri;

        return $this;
    }

    /**
     * Gets releaseName
     *
     * @return string
     */
    public function getReleaseName()
    {
        return $this->container['releaseName'];
    }

    /**
     * Sets releaseName
     *
     * @param string $releaseName releaseName
     *
     * @return $this
     */
    public function setReleaseName($releaseName)
    {
        $this->container['releaseName'] = $releaseName;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets webAccessUri
     *
     * @return string
     */
    public function getWebAccessUri()
    {
        return $this->container['webAccessUri'];
    }

    /**
     * Sets webAccessUri
     *
     * @param string $webAccessUri webAccessUri
     *
     * @return $this
     */
    public function setWebAccessUri($webAccessUri)
    {
        $this->container['webAccessUri'] = $webAccessUri;

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


