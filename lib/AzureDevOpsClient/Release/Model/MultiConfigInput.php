<?php
/**
 * MultiConfigInput
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Release
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

namespace AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Release\ObjectSerializer;

/**
 * MultiConfigInput Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MultiConfigInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MultiConfigInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'continueOnError' => 'bool',
        'maxNumberOfAgents' => 'int',
        'parallelExecutionType' => 'string',
        'multipliers' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'continueOnError' => null,
        'maxNumberOfAgents' => 'int32',
        'parallelExecutionType' => null,
        'multipliers' => null
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
        'continueOnError' => 'continueOnError',
        'maxNumberOfAgents' => 'maxNumberOfAgents',
        'parallelExecutionType' => 'parallelExecutionType',
        'multipliers' => 'multipliers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'continueOnError' => 'setContinueOnError',
        'maxNumberOfAgents' => 'setMaxNumberOfAgents',
        'parallelExecutionType' => 'setParallelExecutionType',
        'multipliers' => 'setMultipliers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'continueOnError' => 'getContinueOnError',
        'maxNumberOfAgents' => 'getMaxNumberOfAgents',
        'parallelExecutionType' => 'getParallelExecutionType',
        'multipliers' => 'getMultipliers'
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

    const PARALLEL_EXECUTION_TYPE_NONE = 'none';
    const PARALLEL_EXECUTION_TYPE_MULTI_CONFIGURATION = 'multiConfiguration';
    const PARALLEL_EXECUTION_TYPE_MULTI_MACHINE = 'multiMachine';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getParallelExecutionTypeAllowableValues()
    {
        return [
            self::PARALLEL_EXECUTION_TYPE_NONE,
            self::PARALLEL_EXECUTION_TYPE_MULTI_CONFIGURATION,
            self::PARALLEL_EXECUTION_TYPE_MULTI_MACHINE,
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
        $this->container['continueOnError'] = isset($data['continueOnError']) ? $data['continueOnError'] : null;
        $this->container['maxNumberOfAgents'] = isset($data['maxNumberOfAgents']) ? $data['maxNumberOfAgents'] : null;
        $this->container['parallelExecutionType'] = isset($data['parallelExecutionType']) ? $data['parallelExecutionType'] : null;
        $this->container['multipliers'] = isset($data['multipliers']) ? $data['multipliers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getParallelExecutionTypeAllowableValues();
        if (!is_null($this->container['parallelExecutionType']) && !in_array($this->container['parallelExecutionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'parallelExecutionType', must be one of '%s'",
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
     * Gets continueOnError
     *
     * @return bool
     */
    public function getContinueOnError()
    {
        return $this->container['continueOnError'];
    }

    /**
     * Sets continueOnError
     *
     * @param bool $continueOnError Indicate whether continue execution of deployment on error or not.
     *
     * @return $this
     */
    public function setContinueOnError($continueOnError)
    {
        $this->container['continueOnError'] = $continueOnError;

        return $this;
    }

    /**
     * Gets maxNumberOfAgents
     *
     * @return int
     */
    public function getMaxNumberOfAgents()
    {
        return $this->container['maxNumberOfAgents'];
    }

    /**
     * Sets maxNumberOfAgents
     *
     * @param int $maxNumberOfAgents Maximum number of agents used while parallel execution.
     *
     * @return $this
     */
    public function setMaxNumberOfAgents($maxNumberOfAgents)
    {
        $this->container['maxNumberOfAgents'] = $maxNumberOfAgents;

        return $this;
    }

    /**
     * Gets parallelExecutionType
     *
     * @return string
     */
    public function getParallelExecutionType()
    {
        return $this->container['parallelExecutionType'];
    }

    /**
     * Sets parallelExecutionType
     *
     * @param string $parallelExecutionType Parallel execution type, for example MultiConfiguration or MultiMachine.
     *
     * @return $this
     */
    public function setParallelExecutionType($parallelExecutionType)
    {
        $allowedValues = $this->getParallelExecutionTypeAllowableValues();
        if (!is_null($parallelExecutionType) && !in_array($parallelExecutionType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'parallelExecutionType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['parallelExecutionType'] = $parallelExecutionType;

        return $this;
    }

    /**
     * Gets multipliers
     *
     * @return string
     */
    public function getMultipliers()
    {
        return $this->container['multipliers'];
    }

    /**
     * Sets multipliers
     *
     * @param string $multipliers Multipliers for parallel execution of deployment, for example x86,x64.
     *
     * @return $this
     */
    public function setMultipliers($multipliers)
    {
        $this->container['multipliers'] = $multipliers;

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


