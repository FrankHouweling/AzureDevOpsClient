<?php
/**
 * Phase
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
 * Phase Class Doc Comment
 *
 * @category Class
 * @description Represents a phase of a build definition.
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Phase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Phase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'condition' => 'string',
        'dependencies' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Dependency[]',
        'jobAuthorizationScope' => 'string',
        'jobCancelTimeoutInMinutes' => 'int',
        'jobTimeoutInMinutes' => 'int',
        'name' => 'string',
        'refName' => 'string',
        'steps' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionStep[]',
        'target' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PhaseTarget',
        'variables' => 'map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionVariable]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'condition' => null,
        'dependencies' => null,
        'jobAuthorizationScope' => null,
        'jobCancelTimeoutInMinutes' => 'int32',
        'jobTimeoutInMinutes' => 'int32',
        'name' => null,
        'refName' => null,
        'steps' => null,
        'target' => null,
        'variables' => null
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
        'condition' => 'condition',
        'dependencies' => 'dependencies',
        'jobAuthorizationScope' => 'jobAuthorizationScope',
        'jobCancelTimeoutInMinutes' => 'jobCancelTimeoutInMinutes',
        'jobTimeoutInMinutes' => 'jobTimeoutInMinutes',
        'name' => 'name',
        'refName' => 'refName',
        'steps' => 'steps',
        'target' => 'target',
        'variables' => 'variables'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition',
        'dependencies' => 'setDependencies',
        'jobAuthorizationScope' => 'setJobAuthorizationScope',
        'jobCancelTimeoutInMinutes' => 'setJobCancelTimeoutInMinutes',
        'jobTimeoutInMinutes' => 'setJobTimeoutInMinutes',
        'name' => 'setName',
        'refName' => 'setRefName',
        'steps' => 'setSteps',
        'target' => 'setTarget',
        'variables' => 'setVariables'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition',
        'dependencies' => 'getDependencies',
        'jobAuthorizationScope' => 'getJobAuthorizationScope',
        'jobCancelTimeoutInMinutes' => 'getJobCancelTimeoutInMinutes',
        'jobTimeoutInMinutes' => 'getJobTimeoutInMinutes',
        'name' => 'getName',
        'refName' => 'getRefName',
        'steps' => 'getSteps',
        'target' => 'getTarget',
        'variables' => 'getVariables'
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

    const JOB_AUTHORIZATION_SCOPE_PROJECT_COLLECTION = 'projectCollection';
    const JOB_AUTHORIZATION_SCOPE_PROJECT = 'project';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJobAuthorizationScopeAllowableValues()
    {
        return [
            self::JOB_AUTHORIZATION_SCOPE_PROJECT_COLLECTION,
            self::JOB_AUTHORIZATION_SCOPE_PROJECT,
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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['dependencies'] = isset($data['dependencies']) ? $data['dependencies'] : null;
        $this->container['jobAuthorizationScope'] = isset($data['jobAuthorizationScope']) ? $data['jobAuthorizationScope'] : null;
        $this->container['jobCancelTimeoutInMinutes'] = isset($data['jobCancelTimeoutInMinutes']) ? $data['jobCancelTimeoutInMinutes'] : null;
        $this->container['jobTimeoutInMinutes'] = isset($data['jobTimeoutInMinutes']) ? $data['jobTimeoutInMinutes'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['refName'] = isset($data['refName']) ? $data['refName'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getJobAuthorizationScopeAllowableValues();
        if (!is_null($this->container['jobAuthorizationScope']) && !in_array($this->container['jobAuthorizationScope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'jobAuthorizationScope', must be one of '%s'",
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
     * @param string $condition The condition that must be true for this phase to execute.
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets dependencies
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Dependency[]
     */
    public function getDependencies()
    {
        return $this->container['dependencies'];
    }

    /**
     * Sets dependencies
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Dependency[] $dependencies dependencies
     *
     * @return $this
     */
    public function setDependencies($dependencies)
    {
        $this->container['dependencies'] = $dependencies;

        return $this;
    }

    /**
     * Gets jobAuthorizationScope
     *
     * @return string
     */
    public function getJobAuthorizationScope()
    {
        return $this->container['jobAuthorizationScope'];
    }

    /**
     * Sets jobAuthorizationScope
     *
     * @param string $jobAuthorizationScope The job authorization scope for builds queued against this definition.
     *
     * @return $this
     */
    public function setJobAuthorizationScope($jobAuthorizationScope)
    {
        $allowedValues = $this->getJobAuthorizationScopeAllowableValues();
        if (!is_null($jobAuthorizationScope) && !in_array($jobAuthorizationScope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'jobAuthorizationScope', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['jobAuthorizationScope'] = $jobAuthorizationScope;

        return $this;
    }

    /**
     * Gets jobCancelTimeoutInMinutes
     *
     * @return int
     */
    public function getJobCancelTimeoutInMinutes()
    {
        return $this->container['jobCancelTimeoutInMinutes'];
    }

    /**
     * Sets jobCancelTimeoutInMinutes
     *
     * @param int $jobCancelTimeoutInMinutes The cancellation timeout, in minutes, for builds queued against this definition.
     *
     * @return $this
     */
    public function setJobCancelTimeoutInMinutes($jobCancelTimeoutInMinutes)
    {
        $this->container['jobCancelTimeoutInMinutes'] = $jobCancelTimeoutInMinutes;

        return $this;
    }

    /**
     * Gets jobTimeoutInMinutes
     *
     * @return int
     */
    public function getJobTimeoutInMinutes()
    {
        return $this->container['jobTimeoutInMinutes'];
    }

    /**
     * Sets jobTimeoutInMinutes
     *
     * @param int $jobTimeoutInMinutes The job execution timeout, in minutes, for builds queued against this definition.
     *
     * @return $this
     */
    public function setJobTimeoutInMinutes($jobTimeoutInMinutes)
    {
        $this->container['jobTimeoutInMinutes'] = $jobTimeoutInMinutes;

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
     * @param string $name The name of the phase.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $refName The unique ref name of the phase.
     *
     * @return $this
     */
    public function setRefName($refName)
    {
        $this->container['refName'] = $refName;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionStep[]
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionStep[] $steps steps
     *
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets target
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PhaseTarget
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PhaseTarget $target The target (agent, server, etc.) for this phase.
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets variables
     *
     * @return map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionVariable]
     */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
     * Sets variables
     *
     * @param map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionVariable] $variables variables
     *
     * @return $this
     */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;

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


