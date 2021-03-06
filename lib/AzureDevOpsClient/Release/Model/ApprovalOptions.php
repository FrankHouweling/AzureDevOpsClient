<?php
/**
 * ApprovalOptions
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
 * ApprovalOptions Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApprovalOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApprovalOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped' => 'bool',
        'enforceIdentityRevalidation' => 'bool',
        'executionOrder' => 'string',
        'releaseCreatorCanBeApprover' => 'bool',
        'requiredApproverCount' => 'int',
        'timeoutInMinutes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped' => null,
        'enforceIdentityRevalidation' => null,
        'executionOrder' => null,
        'releaseCreatorCanBeApprover' => null,
        'requiredApproverCount' => 'int32',
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
        'autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped' => 'autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped',
        'enforceIdentityRevalidation' => 'enforceIdentityRevalidation',
        'executionOrder' => 'executionOrder',
        'releaseCreatorCanBeApprover' => 'releaseCreatorCanBeApprover',
        'requiredApproverCount' => 'requiredApproverCount',
        'timeoutInMinutes' => 'timeoutInMinutes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped' => 'setAutoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped',
        'enforceIdentityRevalidation' => 'setEnforceIdentityRevalidation',
        'executionOrder' => 'setExecutionOrder',
        'releaseCreatorCanBeApprover' => 'setReleaseCreatorCanBeApprover',
        'requiredApproverCount' => 'setRequiredApproverCount',
        'timeoutInMinutes' => 'setTimeoutInMinutes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped' => 'getAutoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped',
        'enforceIdentityRevalidation' => 'getEnforceIdentityRevalidation',
        'executionOrder' => 'getExecutionOrder',
        'releaseCreatorCanBeApprover' => 'getReleaseCreatorCanBeApprover',
        'requiredApproverCount' => 'getRequiredApproverCount',
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

    const EXECUTION_ORDER_BEFORE_GATES = 'beforeGates';
    const EXECUTION_ORDER_AFTER_SUCCESSFUL_GATES = 'afterSuccessfulGates';
    const EXECUTION_ORDER_AFTER_GATES_ALWAYS = 'afterGatesAlways';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExecutionOrderAllowableValues()
    {
        return [
            self::EXECUTION_ORDER_BEFORE_GATES,
            self::EXECUTION_ORDER_AFTER_SUCCESSFUL_GATES,
            self::EXECUTION_ORDER_AFTER_GATES_ALWAYS,
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
        $this->container['autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped'] = isset($data['autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped']) ? $data['autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped'] : null;
        $this->container['enforceIdentityRevalidation'] = isset($data['enforceIdentityRevalidation']) ? $data['enforceIdentityRevalidation'] : null;
        $this->container['executionOrder'] = isset($data['executionOrder']) ? $data['executionOrder'] : null;
        $this->container['releaseCreatorCanBeApprover'] = isset($data['releaseCreatorCanBeApprover']) ? $data['releaseCreatorCanBeApprover'] : null;
        $this->container['requiredApproverCount'] = isset($data['requiredApproverCount']) ? $data['requiredApproverCount'] : null;
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

        $allowedValues = $this->getExecutionOrderAllowableValues();
        if (!is_null($this->container['executionOrder']) && !in_array($this->container['executionOrder'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'executionOrder', must be one of '%s'",
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
     * Gets autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped
     *
     * @return bool
     */
    public function getAutoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped()
    {
        return $this->container['autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped'];
    }

    /**
     * Sets autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped
     *
     * @param bool $autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped Specify whether the approval can be skipped if the same approver approved the previous stage.
     *
     * @return $this
     */
    public function setAutoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped($autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped)
    {
        $this->container['autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped'] = $autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped;

        return $this;
    }

    /**
     * Gets enforceIdentityRevalidation
     *
     * @return bool
     */
    public function getEnforceIdentityRevalidation()
    {
        return $this->container['enforceIdentityRevalidation'];
    }

    /**
     * Sets enforceIdentityRevalidation
     *
     * @param bool $enforceIdentityRevalidation Specify whether revalidate identity of approver before completing the approval.
     *
     * @return $this
     */
    public function setEnforceIdentityRevalidation($enforceIdentityRevalidation)
    {
        $this->container['enforceIdentityRevalidation'] = $enforceIdentityRevalidation;

        return $this;
    }

    /**
     * Gets executionOrder
     *
     * @return string
     */
    public function getExecutionOrder()
    {
        return $this->container['executionOrder'];
    }

    /**
     * Sets executionOrder
     *
     * @param string $executionOrder Approvals execution order.
     *
     * @return $this
     */
    public function setExecutionOrder($executionOrder)
    {
        $allowedValues = $this->getExecutionOrderAllowableValues();
        if (!is_null($executionOrder) && !in_array($executionOrder, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'executionOrder', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['executionOrder'] = $executionOrder;

        return $this;
    }

    /**
     * Gets releaseCreatorCanBeApprover
     *
     * @return bool
     */
    public function getReleaseCreatorCanBeApprover()
    {
        return $this->container['releaseCreatorCanBeApprover'];
    }

    /**
     * Sets releaseCreatorCanBeApprover
     *
     * @param bool $releaseCreatorCanBeApprover Specify whether the user requesting a release or deployment should allow to approver.
     *
     * @return $this
     */
    public function setReleaseCreatorCanBeApprover($releaseCreatorCanBeApprover)
    {
        $this->container['releaseCreatorCanBeApprover'] = $releaseCreatorCanBeApprover;

        return $this;
    }

    /**
     * Gets requiredApproverCount
     *
     * @return int
     */
    public function getRequiredApproverCount()
    {
        return $this->container['requiredApproverCount'];
    }

    /**
     * Sets requiredApproverCount
     *
     * @param int $requiredApproverCount The number of approvals required to move release forward. '0' means all approvals required.
     *
     * @return $this
     */
    public function setRequiredApproverCount($requiredApproverCount)
    {
        $this->container['requiredApproverCount'] = $requiredApproverCount;

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
     * @param int $timeoutInMinutes Approval timeout. Approval default timeout is 30 days. Maximum allowed timeout is 365 days. '0' means default timeout i.e 30 days.
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


