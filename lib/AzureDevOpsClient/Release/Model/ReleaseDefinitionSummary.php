<?php
/**
 * ReleaseDefinitionSummary
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
 * ReleaseDefinitionSummary Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReleaseDefinitionSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReleaseDefinitionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'environments' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionEnvironmentSummary[]',
        'releaseDefinition' => '\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference',
        'releases' => '\FrankHouweling\AzureDevOpsClient\Release\Model\Release[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'environments' => null,
        'releaseDefinition' => null,
        'releases' => null
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
        'environments' => 'environments',
        'releaseDefinition' => 'releaseDefinition',
        'releases' => 'releases'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'environments' => 'setEnvironments',
        'releaseDefinition' => 'setReleaseDefinition',
        'releases' => 'setReleases'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'environments' => 'getEnvironments',
        'releaseDefinition' => 'getReleaseDefinition',
        'releases' => 'getReleases'
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
        $this->container['environments'] = isset($data['environments']) ? $data['environments'] : null;
        $this->container['releaseDefinition'] = isset($data['releaseDefinition']) ? $data['releaseDefinition'] : null;
        $this->container['releases'] = isset($data['releases']) ? $data['releases'] : null;
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
     * Gets environments
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionEnvironmentSummary[]
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionEnvironmentSummary[] $environments List of Release Definition environment summary.
     *
     * @return $this
     */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;

        return $this;
    }

    /**
     * Gets releaseDefinition
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference
     */
    public function getReleaseDefinition()
    {
        return $this->container['releaseDefinition'];
    }

    /**
     * Sets releaseDefinition
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference $releaseDefinition Release Definition reference.
     *
     * @return $this
     */
    public function setReleaseDefinition($releaseDefinition)
    {
        $this->container['releaseDefinition'] = $releaseDefinition;

        return $this;
    }

    /**
     * Gets releases
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\Release[]
     */
    public function getReleases()
    {
        return $this->container['releases'];
    }

    /**
     * Sets releases
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\Release[] $releases List of releases deployed using this Release Definition.
     *
     * @return $this
     */
    public function setReleases($releases)
    {
        $this->container['releases'] = $releases;

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


