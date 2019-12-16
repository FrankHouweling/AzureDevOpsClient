<?php
/**
 * SubscriptionDiagnostics
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Notification
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

namespace AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Notification\ObjectSerializer;

/**
 * SubscriptionDiagnostics Class Doc Comment
 *
 * @category Class
 * @description Contains all the diagnostics settings for a subscription.
 * @package  AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionDiagnostics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionDiagnostics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deliveryResults' => '\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionTracing',
        'deliveryTracing' => '\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionTracing',
        'evaluationTracing' => '\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionTracing'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deliveryResults' => null,
        'deliveryTracing' => null,
        'evaluationTracing' => null
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
        'deliveryResults' => 'deliveryResults',
        'deliveryTracing' => 'deliveryTracing',
        'evaluationTracing' => 'evaluationTracing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deliveryResults' => 'setDeliveryResults',
        'deliveryTracing' => 'setDeliveryTracing',
        'evaluationTracing' => 'setEvaluationTracing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deliveryResults' => 'getDeliveryResults',
        'deliveryTracing' => 'getDeliveryTracing',
        'evaluationTracing' => 'getEvaluationTracing'
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
        $this->container['deliveryResults'] = isset($data['deliveryResults']) ? $data['deliveryResults'] : null;
        $this->container['deliveryTracing'] = isset($data['deliveryTracing']) ? $data['deliveryTracing'] : null;
        $this->container['evaluationTracing'] = isset($data['evaluationTracing']) ? $data['evaluationTracing'] : null;
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
     * Gets deliveryResults
     *
     * @return \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionTracing
     */
    public function getDeliveryResults()
    {
        return $this->container['deliveryResults'];
    }

    /**
     * Sets deliveryResults
     *
     * @param \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionTracing $deliveryResults Diagnostics settings for retaining delivery results.  Used for Service Hooks subscriptions.
     *
     * @return $this
     */
    public function setDeliveryResults($deliveryResults)
    {
        $this->container['deliveryResults'] = $deliveryResults;

        return $this;
    }

    /**
     * Gets deliveryTracing
     *
     * @return \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionTracing
     */
    public function getDeliveryTracing()
    {
        return $this->container['deliveryTracing'];
    }

    /**
     * Sets deliveryTracing
     *
     * @param \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionTracing $deliveryTracing Diagnostics settings for troubleshooting notification delivery.
     *
     * @return $this
     */
    public function setDeliveryTracing($deliveryTracing)
    {
        $this->container['deliveryTracing'] = $deliveryTracing;

        return $this;
    }

    /**
     * Gets evaluationTracing
     *
     * @return \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionTracing
     */
    public function getEvaluationTracing()
    {
        return $this->container['evaluationTracing'];
    }

    /**
     * Sets evaluationTracing
     *
     * @param \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionTracing $evaluationTracing Diagnostics settings for troubleshooting event matching.
     *
     * @return $this
     */
    public function setEvaluationTracing($evaluationTracing)
    {
        $this->container['evaluationTracing'] = $evaluationTracing;

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


