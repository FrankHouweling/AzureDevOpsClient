<?php
/**
 * TestSettings
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
 * TestSettings Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Clt
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cleanupCommand' => 'string',
        'hostProcessPlatform' => 'string',
        'setupCommand' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cleanupCommand' => null,
        'hostProcessPlatform' => null,
        'setupCommand' => null
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
        'cleanupCommand' => 'cleanupCommand',
        'hostProcessPlatform' => 'hostProcessPlatform',
        'setupCommand' => 'setupCommand'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cleanupCommand' => 'setCleanupCommand',
        'hostProcessPlatform' => 'setHostProcessPlatform',
        'setupCommand' => 'setSetupCommand'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cleanupCommand' => 'getCleanupCommand',
        'hostProcessPlatform' => 'getHostProcessPlatform',
        'setupCommand' => 'getSetupCommand'
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

    const HOST_PROCESS_PLATFORM_NONE = 'none';
    const HOST_PROCESS_PLATFORM_MSIL = 'msil';
    const HOST_PROCESS_PLATFORM_X86 = 'x86';
    const HOST_PROCESS_PLATFORM_IA64 = 'ia64';
    const HOST_PROCESS_PLATFORM_AMD64 = 'amd64';
    const HOST_PROCESS_PLATFORM_ARM = 'arm';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHostProcessPlatformAllowableValues()
    {
        return [
            self::HOST_PROCESS_PLATFORM_NONE,
            self::HOST_PROCESS_PLATFORM_MSIL,
            self::HOST_PROCESS_PLATFORM_X86,
            self::HOST_PROCESS_PLATFORM_IA64,
            self::HOST_PROCESS_PLATFORM_AMD64,
            self::HOST_PROCESS_PLATFORM_ARM,
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
        $this->container['cleanupCommand'] = isset($data['cleanupCommand']) ? $data['cleanupCommand'] : null;
        $this->container['hostProcessPlatform'] = isset($data['hostProcessPlatform']) ? $data['hostProcessPlatform'] : null;
        $this->container['setupCommand'] = isset($data['setupCommand']) ? $data['setupCommand'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHostProcessPlatformAllowableValues();
        if (!is_null($this->container['hostProcessPlatform']) && !in_array($this->container['hostProcessPlatform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hostProcessPlatform', must be one of '%s'",
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
     * Gets cleanupCommand
     *
     * @return string
     */
    public function getCleanupCommand()
    {
        return $this->container['cleanupCommand'];
    }

    /**
     * Sets cleanupCommand
     *
     * @param string $cleanupCommand Cleanup command
     *
     * @return $this
     */
    public function setCleanupCommand($cleanupCommand)
    {
        $this->container['cleanupCommand'] = $cleanupCommand;

        return $this;
    }

    /**
     * Gets hostProcessPlatform
     *
     * @return string
     */
    public function getHostProcessPlatform()
    {
        return $this->container['hostProcessPlatform'];
    }

    /**
     * Sets hostProcessPlatform
     *
     * @param string $hostProcessPlatform Processor Architecture chosen
     *
     * @return $this
     */
    public function setHostProcessPlatform($hostProcessPlatform)
    {
        $allowedValues = $this->getHostProcessPlatformAllowableValues();
        if (!is_null($hostProcessPlatform) && !in_array($hostProcessPlatform, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hostProcessPlatform', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hostProcessPlatform'] = $hostProcessPlatform;

        return $this;
    }

    /**
     * Gets setupCommand
     *
     * @return string
     */
    public function getSetupCommand()
    {
        return $this->container['setupCommand'];
    }

    /**
     * Sets setupCommand
     *
     * @param string $setupCommand Setup command
     *
     * @return $this
     */
    public function setSetupCommand($setupCommand)
    {
        $this->container['setupCommand'] = $setupCommand;

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

