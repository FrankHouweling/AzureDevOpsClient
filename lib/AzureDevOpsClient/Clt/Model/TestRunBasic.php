<?php
/**
 * TestRunBasic
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Clt
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CloudLoadTest
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

namespace FrankHouweling\AzureDevOpsClient\Clt\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Clt\ObjectSerializer;

/**
 * TestRunBasic Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Clt
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestRunBasic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestRunBasic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'createdBy' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef',
        'createdDate' => '\DateTime',
        'deletedBy' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef',
        'deletedDate' => '\DateTime',
        'finishedDate' => '\DateTime',
        'id' => 'string',
        'loadGenerationGeoLocations' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\LoadGenerationGeoLocation[]',
        'loadTestFileName' => 'string',
        'name' => 'string',
        'runNumber' => 'int',
        'runSource' => 'string',
        'runSpecificDetails' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\LoadTestRunDetails',
        'runType' => 'string',
        'state' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'createdBy' => null,
        'createdDate' => 'date-time',
        'deletedBy' => null,
        'deletedDate' => 'date-time',
        'finishedDate' => 'date-time',
        'id' => null,
        'loadGenerationGeoLocations' => null,
        'loadTestFileName' => null,
        'name' => null,
        'runNumber' => 'int32',
        'runSource' => null,
        'runSpecificDetails' => null,
        'runType' => null,
        'state' => null,
        'url' => null
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
        'createdBy' => 'createdBy',
        'createdDate' => 'createdDate',
        'deletedBy' => 'deletedBy',
        'deletedDate' => 'deletedDate',
        'finishedDate' => 'finishedDate',
        'id' => 'id',
        'loadGenerationGeoLocations' => 'loadGenerationGeoLocations',
        'loadTestFileName' => 'loadTestFileName',
        'name' => 'name',
        'runNumber' => 'runNumber',
        'runSource' => 'runSource',
        'runSpecificDetails' => 'runSpecificDetails',
        'runType' => 'runType',
        'state' => 'state',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createdBy' => 'setCreatedBy',
        'createdDate' => 'setCreatedDate',
        'deletedBy' => 'setDeletedBy',
        'deletedDate' => 'setDeletedDate',
        'finishedDate' => 'setFinishedDate',
        'id' => 'setId',
        'loadGenerationGeoLocations' => 'setLoadGenerationGeoLocations',
        'loadTestFileName' => 'setLoadTestFileName',
        'name' => 'setName',
        'runNumber' => 'setRunNumber',
        'runSource' => 'setRunSource',
        'runSpecificDetails' => 'setRunSpecificDetails',
        'runType' => 'setRunType',
        'state' => 'setState',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createdBy' => 'getCreatedBy',
        'createdDate' => 'getCreatedDate',
        'deletedBy' => 'getDeletedBy',
        'deletedDate' => 'getDeletedDate',
        'finishedDate' => 'getFinishedDate',
        'id' => 'getId',
        'loadGenerationGeoLocations' => 'getLoadGenerationGeoLocations',
        'loadTestFileName' => 'getLoadTestFileName',
        'name' => 'getName',
        'runNumber' => 'getRunNumber',
        'runSource' => 'getRunSource',
        'runSpecificDetails' => 'getRunSpecificDetails',
        'runType' => 'getRunType',
        'state' => 'getState',
        'url' => 'getUrl'
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

    const RUN_TYPE_VISUAL_STUDIO_LOAD_TEST = 'visualStudioLoadTest';
    const RUN_TYPE_J_METER_LOAD_TEST = 'jMeterLoadTest';
    const STATE_PENDING = 'pending';
    const STATE_QUEUED = 'queued';
    const STATE_IN_PROGRESS = 'inProgress';
    const STATE_STOPPING = 'stopping';
    const STATE_COMPLETED = 'completed';
    const STATE_ABORTED = 'aborted';
    const STATE_ERROR = 'error';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRunTypeAllowableValues()
    {
        return [
            self::RUN_TYPE_VISUAL_STUDIO_LOAD_TEST,
            self::RUN_TYPE_J_METER_LOAD_TEST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_QUEUED,
            self::STATE_IN_PROGRESS,
            self::STATE_STOPPING,
            self::STATE_COMPLETED,
            self::STATE_ABORTED,
            self::STATE_ERROR,
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
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['deletedBy'] = isset($data['deletedBy']) ? $data['deletedBy'] : null;
        $this->container['deletedDate'] = isset($data['deletedDate']) ? $data['deletedDate'] : null;
        $this->container['finishedDate'] = isset($data['finishedDate']) ? $data['finishedDate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['loadGenerationGeoLocations'] = isset($data['loadGenerationGeoLocations']) ? $data['loadGenerationGeoLocations'] : null;
        $this->container['loadTestFileName'] = isset($data['loadTestFileName']) ? $data['loadTestFileName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['runNumber'] = isset($data['runNumber']) ? $data['runNumber'] : null;
        $this->container['runSource'] = isset($data['runSource']) ? $data['runSource'] : null;
        $this->container['runSpecificDetails'] = isset($data['runSpecificDetails']) ? $data['runSpecificDetails'] : null;
        $this->container['runType'] = isset($data['runType']) ? $data['runType'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRunTypeAllowableValues();
        if (!is_null($this->container['runType']) && !in_array($this->container['runType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'runType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * Gets createdBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef $createdBy Vss User identity who created the test run.
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

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
     * @param \DateTime $createdDate Gets the creation time of the test run
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets deletedBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef
     */
    public function getDeletedBy()
    {
        return $this->container['deletedBy'];
    }

    /**
     * Sets deletedBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef $deletedBy Vss User identity who deleted the test run.
     *
     * @return $this
     */
    public function setDeletedBy($deletedBy)
    {
        $this->container['deletedBy'] = $deletedBy;

        return $this;
    }

    /**
     * Gets deletedDate
     *
     * @return \DateTime
     */
    public function getDeletedDate()
    {
        return $this->container['deletedDate'];
    }

    /**
     * Sets deletedDate
     *
     * @param \DateTime $deletedDate Gets the deleted time of the test run
     *
     * @return $this
     */
    public function setDeletedDate($deletedDate)
    {
        $this->container['deletedDate'] = $deletedDate;

        return $this;
    }

    /**
     * Gets finishedDate
     *
     * @return \DateTime
     */
    public function getFinishedDate()
    {
        return $this->container['finishedDate'];
    }

    /**
     * Sets finishedDate
     *
     * @param \DateTime $finishedDate Gets the finish time of the test run
     *
     * @return $this
     */
    public function setFinishedDate($finishedDate)
    {
        $this->container['finishedDate'] = $finishedDate;

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
     * @param string $id Gets the unique identifier for the test run definition.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets loadGenerationGeoLocations
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\LoadGenerationGeoLocation[]
     */
    public function getLoadGenerationGeoLocations()
    {
        return $this->container['loadGenerationGeoLocations'];
    }

    /**
     * Sets loadGenerationGeoLocations
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\LoadGenerationGeoLocation[] $loadGenerationGeoLocations loadGenerationGeoLocations
     *
     * @return $this
     */
    public function setLoadGenerationGeoLocations($loadGenerationGeoLocations)
    {
        $this->container['loadGenerationGeoLocations'] = $loadGenerationGeoLocations;

        return $this;
    }

    /**
     * Gets loadTestFileName
     *
     * @return string
     */
    public function getLoadTestFileName()
    {
        return $this->container['loadTestFileName'];
    }

    /**
     * Sets loadTestFileName
     *
     * @param string $loadTestFileName Gets the load test file of the test run definition.
     *
     * @return $this
     */
    public function setLoadTestFileName($loadTestFileName)
    {
        $this->container['loadTestFileName'] = $loadTestFileName;

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
     * @param string $name Gets the name of the test run definition.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets runNumber
     *
     * @return int
     */
    public function getRunNumber()
    {
        return $this->container['runNumber'];
    }

    /**
     * Sets runNumber
     *
     * @param int $runNumber Gets the number of the test run (unique within a tenant)
     *
     * @return $this
     */
    public function setRunNumber($runNumber)
    {
        $this->container['runNumber'] = $runNumber;

        return $this;
    }

    /**
     * Gets runSource
     *
     * @return string
     */
    public function getRunSource()
    {
        return $this->container['runSource'];
    }

    /**
     * Sets runSource
     *
     * @param string $runSource Test run source like Ibiza,VSO,BuildVNext, etc.
     *
     * @return $this
     */
    public function setRunSource($runSource)
    {
        $this->container['runSource'] = $runSource;

        return $this;
    }

    /**
     * Gets runSpecificDetails
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\LoadTestRunDetails
     */
    public function getRunSpecificDetails()
    {
        return $this->container['runSpecificDetails'];
    }

    /**
     * Sets runSpecificDetails
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\LoadTestRunDetails $runSpecificDetails Run specific details.
     *
     * @return $this
     */
    public function setRunSpecificDetails($runSpecificDetails)
    {
        $this->container['runSpecificDetails'] = $runSpecificDetails;

        return $this;
    }

    /**
     * Gets runType
     *
     * @return string
     */
    public function getRunType()
    {
        return $this->container['runType'];
    }

    /**
     * Sets runType
     *
     * @param string $runType Run type like VisualStudioLoadTest or JMeterLoadTest
     *
     * @return $this
     */
    public function setRunType($runType)
    {
        $allowedValues = $this->getRunTypeAllowableValues();
        if (!is_null($runType) && !in_array($runType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'runType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['runType'] = $runType;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State of the test run.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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


