<?php
/**
 * Artifact
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
 * Artifact Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Artifact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Artifact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alias' => 'string',
        'definitionReference' => 'map[string,\FrankHouweling\AzureDevOpsClient\Release\Model\ArtifactSourceReference]',
        'isPrimary' => 'bool',
        'isRetained' => 'bool',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alias' => null,
        'definitionReference' => null,
        'isPrimary' => null,
        'isRetained' => null,
        'type' => null
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
        'alias' => 'alias',
        'definitionReference' => 'definitionReference',
        'isPrimary' => 'isPrimary',
        'isRetained' => 'isRetained',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alias' => 'setAlias',
        'definitionReference' => 'setDefinitionReference',
        'isPrimary' => 'setIsPrimary',
        'isRetained' => 'setIsRetained',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alias' => 'getAlias',
        'definitionReference' => 'getDefinitionReference',
        'isPrimary' => 'getIsPrimary',
        'isRetained' => 'getIsRetained',
        'type' => 'getType'
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
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['definitionReference'] = isset($data['definitionReference']) ? $data['definitionReference'] : null;
        $this->container['isPrimary'] = isset($data['isPrimary']) ? $data['isPrimary'] : null;
        $this->container['isRetained'] = isset($data['isRetained']) ? $data['isRetained'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string $alias Gets or sets alias.
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets definitionReference
     *
     * @return map[string,\FrankHouweling\AzureDevOpsClient\Release\Model\ArtifactSourceReference]
     */
    public function getDefinitionReference()
    {
        return $this->container['definitionReference'];
    }

    /**
     * Sets definitionReference
     *
     * @param map[string,\FrankHouweling\AzureDevOpsClient\Release\Model\ArtifactSourceReference] $definitionReference Gets or sets definition reference. e.g. {\"project\":{\"id\":\"fed755ea-49c5-4399-acea-fd5b5aa90a6c\",\"name\":\"myProject\"},\"definition\":{\"id\":\"1\",\"name\":\"mybuildDefinition\"},\"connection\":{\"id\":\"1\",\"name\":\"myConnection\"}}.
     *
     * @return $this
     */
    public function setDefinitionReference($definitionReference)
    {
        $this->container['definitionReference'] = $definitionReference;

        return $this;
    }

    /**
     * Gets isPrimary
     *
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->container['isPrimary'];
    }

    /**
     * Sets isPrimary
     *
     * @param bool $isPrimary Indicates whether artifact is primary or not.
     *
     * @return $this
     */
    public function setIsPrimary($isPrimary)
    {
        $this->container['isPrimary'] = $isPrimary;

        return $this;
    }

    /**
     * Gets isRetained
     *
     * @return bool
     */
    public function getIsRetained()
    {
        return $this->container['isRetained'];
    }

    /**
     * Sets isRetained
     *
     * @param bool $isRetained Indicates whether artifact is retained by release or not.
     *
     * @return $this
     */
    public function setIsRetained($isRetained)
    {
        $this->container['isRetained'] = $isRetained;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Gets or sets type. It can have value as 'Build', 'Jenkins', 'GitHub', 'Nuget', 'Team Build (external)', 'ExternalTFSBuild', 'Git', 'TFVC', 'ExternalTfsXamlBuild'.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


