<?php
/**
 * ReleaseReference2
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
 * ReleaseReference2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReleaseReference2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReleaseReference2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attempt' => 'int',
        'environmentCreationDate' => '\DateTime',
        'projectId' => 'string',
        'releaseCreationDate' => '\DateTime',
        'releaseDefId' => 'int',
        'releaseEnvDefId' => 'int',
        'releaseEnvId' => 'int',
        'releaseEnvName' => 'string',
        'releaseEnvUri' => 'string',
        'releaseId' => 'int',
        'releaseName' => 'string',
        'releaseRefId' => 'int',
        'releaseUri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attempt' => 'int32',
        'environmentCreationDate' => 'date-time',
        'projectId' => 'uuid',
        'releaseCreationDate' => 'date-time',
        'releaseDefId' => 'int32',
        'releaseEnvDefId' => 'int32',
        'releaseEnvId' => 'int32',
        'releaseEnvName' => null,
        'releaseEnvUri' => null,
        'releaseId' => 'int32',
        'releaseName' => null,
        'releaseRefId' => 'int32',
        'releaseUri' => null
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
        'attempt' => 'attempt',
        'environmentCreationDate' => 'environmentCreationDate',
        'projectId' => 'projectId',
        'releaseCreationDate' => 'releaseCreationDate',
        'releaseDefId' => 'releaseDefId',
        'releaseEnvDefId' => 'releaseEnvDefId',
        'releaseEnvId' => 'releaseEnvId',
        'releaseEnvName' => 'releaseEnvName',
        'releaseEnvUri' => 'releaseEnvUri',
        'releaseId' => 'releaseId',
        'releaseName' => 'releaseName',
        'releaseRefId' => 'releaseRefId',
        'releaseUri' => 'releaseUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attempt' => 'setAttempt',
        'environmentCreationDate' => 'setEnvironmentCreationDate',
        'projectId' => 'setProjectId',
        'releaseCreationDate' => 'setReleaseCreationDate',
        'releaseDefId' => 'setReleaseDefId',
        'releaseEnvDefId' => 'setReleaseEnvDefId',
        'releaseEnvId' => 'setReleaseEnvId',
        'releaseEnvName' => 'setReleaseEnvName',
        'releaseEnvUri' => 'setReleaseEnvUri',
        'releaseId' => 'setReleaseId',
        'releaseName' => 'setReleaseName',
        'releaseRefId' => 'setReleaseRefId',
        'releaseUri' => 'setReleaseUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attempt' => 'getAttempt',
        'environmentCreationDate' => 'getEnvironmentCreationDate',
        'projectId' => 'getProjectId',
        'releaseCreationDate' => 'getReleaseCreationDate',
        'releaseDefId' => 'getReleaseDefId',
        'releaseEnvDefId' => 'getReleaseEnvDefId',
        'releaseEnvId' => 'getReleaseEnvId',
        'releaseEnvName' => 'getReleaseEnvName',
        'releaseEnvUri' => 'getReleaseEnvUri',
        'releaseId' => 'getReleaseId',
        'releaseName' => 'getReleaseName',
        'releaseRefId' => 'getReleaseRefId',
        'releaseUri' => 'getReleaseUri'
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
        $this->container['attempt'] = isset($data['attempt']) ? $data['attempt'] : null;
        $this->container['environmentCreationDate'] = isset($data['environmentCreationDate']) ? $data['environmentCreationDate'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['releaseCreationDate'] = isset($data['releaseCreationDate']) ? $data['releaseCreationDate'] : null;
        $this->container['releaseDefId'] = isset($data['releaseDefId']) ? $data['releaseDefId'] : null;
        $this->container['releaseEnvDefId'] = isset($data['releaseEnvDefId']) ? $data['releaseEnvDefId'] : null;
        $this->container['releaseEnvId'] = isset($data['releaseEnvId']) ? $data['releaseEnvId'] : null;
        $this->container['releaseEnvName'] = isset($data['releaseEnvName']) ? $data['releaseEnvName'] : null;
        $this->container['releaseEnvUri'] = isset($data['releaseEnvUri']) ? $data['releaseEnvUri'] : null;
        $this->container['releaseId'] = isset($data['releaseId']) ? $data['releaseId'] : null;
        $this->container['releaseName'] = isset($data['releaseName']) ? $data['releaseName'] : null;
        $this->container['releaseRefId'] = isset($data['releaseRefId']) ? $data['releaseRefId'] : null;
        $this->container['releaseUri'] = isset($data['releaseUri']) ? $data['releaseUri'] : null;
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
     * Gets attempt
     *
     * @return int
     */
    public function getAttempt()
    {
        return $this->container['attempt'];
    }

    /**
     * Sets attempt
     *
     * @param int $attempt attempt
     *
     * @return $this
     */
    public function setAttempt($attempt)
    {
        $this->container['attempt'] = $attempt;

        return $this;
    }

    /**
     * Gets environmentCreationDate
     *
     * @return \DateTime
     */
    public function getEnvironmentCreationDate()
    {
        return $this->container['environmentCreationDate'];
    }

    /**
     * Sets environmentCreationDate
     *
     * @param \DateTime $environmentCreationDate environmentCreationDate
     *
     * @return $this
     */
    public function setEnvironmentCreationDate($environmentCreationDate)
    {
        $this->container['environmentCreationDate'] = $environmentCreationDate;

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
     * Gets releaseCreationDate
     *
     * @return \DateTime
     */
    public function getReleaseCreationDate()
    {
        return $this->container['releaseCreationDate'];
    }

    /**
     * Sets releaseCreationDate
     *
     * @param \DateTime $releaseCreationDate releaseCreationDate
     *
     * @return $this
     */
    public function setReleaseCreationDate($releaseCreationDate)
    {
        $this->container['releaseCreationDate'] = $releaseCreationDate;

        return $this;
    }

    /**
     * Gets releaseDefId
     *
     * @return int
     */
    public function getReleaseDefId()
    {
        return $this->container['releaseDefId'];
    }

    /**
     * Sets releaseDefId
     *
     * @param int $releaseDefId releaseDefId
     *
     * @return $this
     */
    public function setReleaseDefId($releaseDefId)
    {
        $this->container['releaseDefId'] = $releaseDefId;

        return $this;
    }

    /**
     * Gets releaseEnvDefId
     *
     * @return int
     */
    public function getReleaseEnvDefId()
    {
        return $this->container['releaseEnvDefId'];
    }

    /**
     * Sets releaseEnvDefId
     *
     * @param int $releaseEnvDefId releaseEnvDefId
     *
     * @return $this
     */
    public function setReleaseEnvDefId($releaseEnvDefId)
    {
        $this->container['releaseEnvDefId'] = $releaseEnvDefId;

        return $this;
    }

    /**
     * Gets releaseEnvId
     *
     * @return int
     */
    public function getReleaseEnvId()
    {
        return $this->container['releaseEnvId'];
    }

    /**
     * Sets releaseEnvId
     *
     * @param int $releaseEnvId releaseEnvId
     *
     * @return $this
     */
    public function setReleaseEnvId($releaseEnvId)
    {
        $this->container['releaseEnvId'] = $releaseEnvId;

        return $this;
    }

    /**
     * Gets releaseEnvName
     *
     * @return string
     */
    public function getReleaseEnvName()
    {
        return $this->container['releaseEnvName'];
    }

    /**
     * Sets releaseEnvName
     *
     * @param string $releaseEnvName releaseEnvName
     *
     * @return $this
     */
    public function setReleaseEnvName($releaseEnvName)
    {
        $this->container['releaseEnvName'] = $releaseEnvName;

        return $this;
    }

    /**
     * Gets releaseEnvUri
     *
     * @return string
     */
    public function getReleaseEnvUri()
    {
        return $this->container['releaseEnvUri'];
    }

    /**
     * Sets releaseEnvUri
     *
     * @param string $releaseEnvUri releaseEnvUri
     *
     * @return $this
     */
    public function setReleaseEnvUri($releaseEnvUri)
    {
        $this->container['releaseEnvUri'] = $releaseEnvUri;

        return $this;
    }

    /**
     * Gets releaseId
     *
     * @return int
     */
    public function getReleaseId()
    {
        return $this->container['releaseId'];
    }

    /**
     * Sets releaseId
     *
     * @param int $releaseId releaseId
     *
     * @return $this
     */
    public function setReleaseId($releaseId)
    {
        $this->container['releaseId'] = $releaseId;

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
     * Gets releaseRefId
     *
     * @return int
     */
    public function getReleaseRefId()
    {
        return $this->container['releaseRefId'];
    }

    /**
     * Sets releaseRefId
     *
     * @param int $releaseRefId releaseRefId
     *
     * @return $this
     */
    public function setReleaseRefId($releaseRefId)
    {
        $this->container['releaseRefId'] = $releaseRefId;

        return $this;
    }

    /**
     * Gets releaseUri
     *
     * @return string
     */
    public function getReleaseUri()
    {
        return $this->container['releaseUri'];
    }

    /**
     * Sets releaseUri
     *
     * @param string $releaseUri releaseUri
     *
     * @return $this
     */
    public function setReleaseUri($releaseUri)
    {
        $this->container['releaseUri'] = $releaseUri;

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


