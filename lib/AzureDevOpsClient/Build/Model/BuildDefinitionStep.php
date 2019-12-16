<?php
/**
 * BuildDefinitionStep
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
 * BuildDefinitionStep Class Doc Comment
 *
 * @category Class
 * @description Represents a step in a build phase.
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildDefinitionStep implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildDefinitionStep';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alwaysRun' => 'bool',
        'condition' => 'string',
        'continueOnError' => 'bool',
        'displayName' => 'string',
        'enabled' => 'bool',
        'environment' => 'map[string,string]',
        'inputs' => 'map[string,string]',
        'refName' => 'string',
        'task' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TaskDefinitionReference',
        'timeoutInMinutes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alwaysRun' => null,
        'condition' => null,
        'continueOnError' => null,
        'displayName' => null,
        'enabled' => null,
        'environment' => null,
        'inputs' => null,
        'refName' => null,
        'task' => null,
        'timeoutInMinutes' => 'int32'
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
        'alwaysRun' => 'alwaysRun',
        'condition' => 'condition',
        'continueOnError' => 'continueOnError',
        'displayName' => 'displayName',
        'enabled' => 'enabled',
        'environment' => 'environment',
        'inputs' => 'inputs',
        'refName' => 'refName',
        'task' => 'task',
        'timeoutInMinutes' => 'timeoutInMinutes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alwaysRun' => 'setAlwaysRun',
        'condition' => 'setCondition',
        'continueOnError' => 'setContinueOnError',
        'displayName' => 'setDisplayName',
        'enabled' => 'setEnabled',
        'environment' => 'setEnvironment',
        'inputs' => 'setInputs',
        'refName' => 'setRefName',
        'task' => 'setTask',
        'timeoutInMinutes' => 'setTimeoutInMinutes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alwaysRun' => 'getAlwaysRun',
        'condition' => 'getCondition',
        'continueOnError' => 'getContinueOnError',
        'displayName' => 'getDisplayName',
        'enabled' => 'getEnabled',
        'environment' => 'getEnvironment',
        'inputs' => 'getInputs',
        'refName' => 'getRefName',
        'task' => 'getTask',
        'timeoutInMinutes' => 'getTimeoutInMinutes'
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
        $this->container['alwaysRun'] = isset($data['alwaysRun']) ? $data['alwaysRun'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['continueOnError'] = isset($data['continueOnError']) ? $data['continueOnError'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['refName'] = isset($data['refName']) ? $data['refName'] : null;
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['timeoutInMinutes'] = isset($data['timeoutInMinutes']) ? $data['timeoutInMinutes'] : null;
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
     * Gets alwaysRun
     *
     * @return bool
     */
    public function getAlwaysRun()
    {
        return $this->container['alwaysRun'];
    }

    /**
     * Sets alwaysRun
     *
     * @param bool $alwaysRun Indicates whether this step should run even if a previous step fails.
     *
     * @return $this
     */
    public function setAlwaysRun($alwaysRun)
    {
        $this->container['alwaysRun'] = $alwaysRun;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition A condition that determines whether this step should run.
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
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
     * @param bool $continueOnError Indicates whether the phase should continue even if this step fails.
     *
     * @return $this
     */
    public function setContinueOnError($continueOnError)
    {
        $this->container['continueOnError'] = $continueOnError;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName The display name for this step.
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Indicates whether the step is enabled.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return map[string,string]
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param map[string,string] $environment environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets inputs
     *
     * @return map[string,string]
     */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
     * Sets inputs
     *
     * @param map[string,string] $inputs inputs
     *
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;

        return $this;
    }

    /**
     * Gets refName
     *
     * @return string
     */
    public function getRefName()
    {
        return $this->container['refName'];
    }

    /**
     * Sets refName
     *
     * @param string $refName The reference name for this step.
     *
     * @return $this
     */
    public function setRefName($refName)
    {
        $this->container['refName'] = $refName;

        return $this;
    }

    /**
     * Gets task
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TaskDefinitionReference
     */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
     * Sets task
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TaskDefinitionReference $task The task associated with this step.
     *
     * @return $this
     */
    public function setTask($task)
    {
        $this->container['task'] = $task;

        return $this;
    }

    /**
     * Gets timeoutInMinutes
     *
     * @return int
     */
    public function getTimeoutInMinutes()
    {
        return $this->container['timeoutInMinutes'];
    }

    /**
     * Sets timeoutInMinutes
     *
     * @param int $timeoutInMinutes The time, in minutes, that this step is allowed to run.
     *
     * @return $this
     */
    public function setTimeoutInMinutes($timeoutInMinutes)
    {
        $this->container['timeoutInMinutes'] = $timeoutInMinutes;

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


