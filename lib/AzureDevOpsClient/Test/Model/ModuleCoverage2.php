<?php
/**
 * ModuleCoverage2
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Test
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

namespace AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Test\ObjectSerializer;

/**
 * ModuleCoverage2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModuleCoverage2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModuleCoverage2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'blockCount' => 'int',
        'blockData' => 'string[]',
        'blockDataLength' => 'int',
        'blocksCovered' => 'int',
        'blocksNotCovered' => 'int',
        'coverageFileUrl' => 'string',
        'coverageId' => 'int',
        'linesCovered' => 'int',
        'linesNotCovered' => 'int',
        'linesPartiallyCovered' => 'int',
        'moduleId' => 'int',
        'name' => 'string',
        'signature' => 'string',
        'signatureAge' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'blockCount' => 'int32',
        'blockData' => 'byte',
        'blockDataLength' => 'int32',
        'blocksCovered' => 'int32',
        'blocksNotCovered' => 'int32',
        'coverageFileUrl' => null,
        'coverageId' => 'int32',
        'linesCovered' => 'int32',
        'linesNotCovered' => 'int32',
        'linesPartiallyCovered' => 'int32',
        'moduleId' => 'int32',
        'name' => null,
        'signature' => 'uuid',
        'signatureAge' => 'int32'
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
        'blockCount' => 'blockCount',
        'blockData' => 'blockData',
        'blockDataLength' => 'blockDataLength',
        'blocksCovered' => 'blocksCovered',
        'blocksNotCovered' => 'blocksNotCovered',
        'coverageFileUrl' => 'coverageFileUrl',
        'coverageId' => 'coverageId',
        'linesCovered' => 'linesCovered',
        'linesNotCovered' => 'linesNotCovered',
        'linesPartiallyCovered' => 'linesPartiallyCovered',
        'moduleId' => 'moduleId',
        'name' => 'name',
        'signature' => 'signature',
        'signatureAge' => 'signatureAge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blockCount' => 'setBlockCount',
        'blockData' => 'setBlockData',
        'blockDataLength' => 'setBlockDataLength',
        'blocksCovered' => 'setBlocksCovered',
        'blocksNotCovered' => 'setBlocksNotCovered',
        'coverageFileUrl' => 'setCoverageFileUrl',
        'coverageId' => 'setCoverageId',
        'linesCovered' => 'setLinesCovered',
        'linesNotCovered' => 'setLinesNotCovered',
        'linesPartiallyCovered' => 'setLinesPartiallyCovered',
        'moduleId' => 'setModuleId',
        'name' => 'setName',
        'signature' => 'setSignature',
        'signatureAge' => 'setSignatureAge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blockCount' => 'getBlockCount',
        'blockData' => 'getBlockData',
        'blockDataLength' => 'getBlockDataLength',
        'blocksCovered' => 'getBlocksCovered',
        'blocksNotCovered' => 'getBlocksNotCovered',
        'coverageFileUrl' => 'getCoverageFileUrl',
        'coverageId' => 'getCoverageId',
        'linesCovered' => 'getLinesCovered',
        'linesNotCovered' => 'getLinesNotCovered',
        'linesPartiallyCovered' => 'getLinesPartiallyCovered',
        'moduleId' => 'getModuleId',
        'name' => 'getName',
        'signature' => 'getSignature',
        'signatureAge' => 'getSignatureAge'
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
        $this->container['blockCount'] = isset($data['blockCount']) ? $data['blockCount'] : null;
        $this->container['blockData'] = isset($data['blockData']) ? $data['blockData'] : null;
        $this->container['blockDataLength'] = isset($data['blockDataLength']) ? $data['blockDataLength'] : null;
        $this->container['blocksCovered'] = isset($data['blocksCovered']) ? $data['blocksCovered'] : null;
        $this->container['blocksNotCovered'] = isset($data['blocksNotCovered']) ? $data['blocksNotCovered'] : null;
        $this->container['coverageFileUrl'] = isset($data['coverageFileUrl']) ? $data['coverageFileUrl'] : null;
        $this->container['coverageId'] = isset($data['coverageId']) ? $data['coverageId'] : null;
        $this->container['linesCovered'] = isset($data['linesCovered']) ? $data['linesCovered'] : null;
        $this->container['linesNotCovered'] = isset($data['linesNotCovered']) ? $data['linesNotCovered'] : null;
        $this->container['linesPartiallyCovered'] = isset($data['linesPartiallyCovered']) ? $data['linesPartiallyCovered'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['signatureAge'] = isset($data['signatureAge']) ? $data['signatureAge'] : null;
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
     * Gets blockCount
     *
     * @return int
     */
    public function getBlockCount()
    {
        return $this->container['blockCount'];
    }

    /**
     * Sets blockCount
     *
     * @param int $blockCount blockCount
     *
     * @return $this
     */
    public function setBlockCount($blockCount)
    {
        $this->container['blockCount'] = $blockCount;

        return $this;
    }

    /**
     * Gets blockData
     *
     * @return string[]
     */
    public function getBlockData()
    {
        return $this->container['blockData'];
    }

    /**
     * Sets blockData
     *
     * @param string[] $blockData blockData
     *
     * @return $this
     */
    public function setBlockData($blockData)
    {
        $this->container['blockData'] = $blockData;

        return $this;
    }

    /**
     * Gets blockDataLength
     *
     * @return int
     */
    public function getBlockDataLength()
    {
        return $this->container['blockDataLength'];
    }

    /**
     * Sets blockDataLength
     *
     * @param int $blockDataLength blockDataLength
     *
     * @return $this
     */
    public function setBlockDataLength($blockDataLength)
    {
        $this->container['blockDataLength'] = $blockDataLength;

        return $this;
    }

    /**
     * Gets blocksCovered
     *
     * @return int
     */
    public function getBlocksCovered()
    {
        return $this->container['blocksCovered'];
    }

    /**
     * Sets blocksCovered
     *
     * @param int $blocksCovered blocksCovered
     *
     * @return $this
     */
    public function setBlocksCovered($blocksCovered)
    {
        $this->container['blocksCovered'] = $blocksCovered;

        return $this;
    }

    /**
     * Gets blocksNotCovered
     *
     * @return int
     */
    public function getBlocksNotCovered()
    {
        return $this->container['blocksNotCovered'];
    }

    /**
     * Sets blocksNotCovered
     *
     * @param int $blocksNotCovered blocksNotCovered
     *
     * @return $this
     */
    public function setBlocksNotCovered($blocksNotCovered)
    {
        $this->container['blocksNotCovered'] = $blocksNotCovered;

        return $this;
    }

    /**
     * Gets coverageFileUrl
     *
     * @return string
     */
    public function getCoverageFileUrl()
    {
        return $this->container['coverageFileUrl'];
    }

    /**
     * Sets coverageFileUrl
     *
     * @param string $coverageFileUrl coverageFileUrl
     *
     * @return $this
     */
    public function setCoverageFileUrl($coverageFileUrl)
    {
        $this->container['coverageFileUrl'] = $coverageFileUrl;

        return $this;
    }

    /**
     * Gets coverageId
     *
     * @return int
     */
    public function getCoverageId()
    {
        return $this->container['coverageId'];
    }

    /**
     * Sets coverageId
     *
     * @param int $coverageId coverageId
     *
     * @return $this
     */
    public function setCoverageId($coverageId)
    {
        $this->container['coverageId'] = $coverageId;

        return $this;
    }

    /**
     * Gets linesCovered
     *
     * @return int
     */
    public function getLinesCovered()
    {
        return $this->container['linesCovered'];
    }

    /**
     * Sets linesCovered
     *
     * @param int $linesCovered linesCovered
     *
     * @return $this
     */
    public function setLinesCovered($linesCovered)
    {
        $this->container['linesCovered'] = $linesCovered;

        return $this;
    }

    /**
     * Gets linesNotCovered
     *
     * @return int
     */
    public function getLinesNotCovered()
    {
        return $this->container['linesNotCovered'];
    }

    /**
     * Sets linesNotCovered
     *
     * @param int $linesNotCovered linesNotCovered
     *
     * @return $this
     */
    public function setLinesNotCovered($linesNotCovered)
    {
        $this->container['linesNotCovered'] = $linesNotCovered;

        return $this;
    }

    /**
     * Gets linesPartiallyCovered
     *
     * @return int
     */
    public function getLinesPartiallyCovered()
    {
        return $this->container['linesPartiallyCovered'];
    }

    /**
     * Sets linesPartiallyCovered
     *
     * @param int $linesPartiallyCovered linesPartiallyCovered
     *
     * @return $this
     */
    public function setLinesPartiallyCovered($linesPartiallyCovered)
    {
        $this->container['linesPartiallyCovered'] = $linesPartiallyCovered;

        return $this;
    }

    /**
     * Gets moduleId
     *
     * @return int
     */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
     * Sets moduleId
     *
     * @param int $moduleId moduleId
     *
     * @return $this
     */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature signature
     *
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets signatureAge
     *
     * @return int
     */
    public function getSignatureAge()
    {
        return $this->container['signatureAge'];
    }

    /**
     * Sets signatureAge
     *
     * @param int $signatureAge signatureAge
     *
     * @return $this
     */
    public function setSignatureAge($signatureAge)
    {
        $this->container['signatureAge'] = $signatureAge;

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


