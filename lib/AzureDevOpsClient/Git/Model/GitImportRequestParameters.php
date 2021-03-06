<?php
/**
 * GitImportRequestParameters
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Git
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

namespace FrankHouweling\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Git\ObjectSerializer;

/**
 * GitImportRequestParameters Class Doc Comment
 *
 * @category Class
 * @description Parameters for creating an import request
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitImportRequestParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitImportRequestParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deleteServiceEndpointAfterImportIsDone' => 'bool',
        'gitSource' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitImportGitSource',
        'serviceEndpointId' => 'string',
        'tfvcSource' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitImportTfvcSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deleteServiceEndpointAfterImportIsDone' => null,
        'gitSource' => null,
        'serviceEndpointId' => 'uuid',
        'tfvcSource' => null
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
        'deleteServiceEndpointAfterImportIsDone' => 'deleteServiceEndpointAfterImportIsDone',
        'gitSource' => 'gitSource',
        'serviceEndpointId' => 'serviceEndpointId',
        'tfvcSource' => 'tfvcSource'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deleteServiceEndpointAfterImportIsDone' => 'setDeleteServiceEndpointAfterImportIsDone',
        'gitSource' => 'setGitSource',
        'serviceEndpointId' => 'setServiceEndpointId',
        'tfvcSource' => 'setTfvcSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deleteServiceEndpointAfterImportIsDone' => 'getDeleteServiceEndpointAfterImportIsDone',
        'gitSource' => 'getGitSource',
        'serviceEndpointId' => 'getServiceEndpointId',
        'tfvcSource' => 'getTfvcSource'
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
        $this->container['deleteServiceEndpointAfterImportIsDone'] = isset($data['deleteServiceEndpointAfterImportIsDone']) ? $data['deleteServiceEndpointAfterImportIsDone'] : null;
        $this->container['gitSource'] = isset($data['gitSource']) ? $data['gitSource'] : null;
        $this->container['serviceEndpointId'] = isset($data['serviceEndpointId']) ? $data['serviceEndpointId'] : null;
        $this->container['tfvcSource'] = isset($data['tfvcSource']) ? $data['tfvcSource'] : null;
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
     * Gets deleteServiceEndpointAfterImportIsDone
     *
     * @return bool
     */
    public function getDeleteServiceEndpointAfterImportIsDone()
    {
        return $this->container['deleteServiceEndpointAfterImportIsDone'];
    }

    /**
     * Sets deleteServiceEndpointAfterImportIsDone
     *
     * @param bool $deleteServiceEndpointAfterImportIsDone Option to delete service endpoint when import is done
     *
     * @return $this
     */
    public function setDeleteServiceEndpointAfterImportIsDone($deleteServiceEndpointAfterImportIsDone)
    {
        $this->container['deleteServiceEndpointAfterImportIsDone'] = $deleteServiceEndpointAfterImportIsDone;

        return $this;
    }

    /**
     * Gets gitSource
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitImportGitSource
     */
    public function getGitSource()
    {
        return $this->container['gitSource'];
    }

    /**
     * Sets gitSource
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitImportGitSource $gitSource Source for importing git repository
     *
     * @return $this
     */
    public function setGitSource($gitSource)
    {
        $this->container['gitSource'] = $gitSource;

        return $this;
    }

    /**
     * Gets serviceEndpointId
     *
     * @return string
     */
    public function getServiceEndpointId()
    {
        return $this->container['serviceEndpointId'];
    }

    /**
     * Sets serviceEndpointId
     *
     * @param string $serviceEndpointId Service Endpoint for connection to external endpoint
     *
     * @return $this
     */
    public function setServiceEndpointId($serviceEndpointId)
    {
        $this->container['serviceEndpointId'] = $serviceEndpointId;

        return $this;
    }

    /**
     * Gets tfvcSource
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitImportTfvcSource
     */
    public function getTfvcSource()
    {
        return $this->container['tfvcSource'];
    }

    /**
     * Sets tfvcSource
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitImportTfvcSource $tfvcSource Source for importing tfvc repository
     *
     * @return $this
     */
    public function setTfvcSource($tfvcSource)
    {
        $this->container['tfvcSource'] = $tfvcSource;

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


