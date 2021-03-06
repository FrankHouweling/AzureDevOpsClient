<?php
/**
 * Response
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Test
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

namespace FrankHouweling\AzureDevOpsClient\Test\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Test\ObjectSerializer;

/**
 * Response Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Response implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error' => 'string',
        'id' => 'string',
        'status' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error' => null,
        'id' => 'uuid',
        'status' => null,
        'url' => null
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
        'error' => 'error',
        'id' => 'id',
        'status' => 'status',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error' => 'setError',
        'id' => 'setId',
        'status' => 'setStatus',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error' => 'getError',
        'id' => 'getId',
        'status' => 'getStatus',
        'url' => 'getUrl'
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

    const STATUS__CONTINUE = 'continue';
    const STATUS_SWITCHING_PROTOCOLS = 'switchingProtocols';
    const STATUS_OK = 'ok';
    const STATUS_CREATED = 'created';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_NON_AUTHORITATIVE_INFORMATION = 'nonAuthoritativeInformation';
    const STATUS_NO_CONTENT = 'noContent';
    const STATUS_RESET_CONTENT = 'resetContent';
    const STATUS_PARTIAL_CONTENT = 'partialContent';
    const STATUS_MULTIPLE_CHOICES = 'multipleChoices';
    const STATUS_AMBIGUOUS = 'ambiguous';
    const STATUS_MOVED_PERMANENTLY = 'movedPermanently';
    const STATUS_MOVED = 'moved';
    const STATUS_FOUND = 'found';
    const STATUS_REDIRECT = 'redirect';
    const STATUS_SEE_OTHER = 'seeOther';
    const STATUS_REDIRECT_METHOD = 'redirectMethod';
    const STATUS_NOT_MODIFIED = 'notModified';
    const STATUS_USE_PROXY = 'useProxy';
    const STATUS_UNUSED = 'unused';
    const STATUS_TEMPORARY_REDIRECT = 'temporaryRedirect';
    const STATUS_REDIRECT_KEEP_VERB = 'redirectKeepVerb';
    const STATUS_BAD_REQUEST = 'badRequest';
    const STATUS_UNAUTHORIZED = 'unauthorized';
    const STATUS_PAYMENT_REQUIRED = 'paymentRequired';
    const STATUS_FORBIDDEN = 'forbidden';
    const STATUS_NOT_FOUND = 'notFound';
    const STATUS_METHOD_NOT_ALLOWED = 'methodNotAllowed';
    const STATUS_NOT_ACCEPTABLE = 'notAcceptable';
    const STATUS_PROXY_AUTHENTICATION_REQUIRED = 'proxyAuthenticationRequired';
    const STATUS_REQUEST_TIMEOUT = 'requestTimeout';
    const STATUS_CONFLICT = 'conflict';
    const STATUS_GONE = 'gone';
    const STATUS_LENGTH_REQUIRED = 'lengthRequired';
    const STATUS_PRECONDITION_FAILED = 'preconditionFailed';
    const STATUS_REQUEST_ENTITY_TOO_LARGE = 'requestEntityTooLarge';
    const STATUS_REQUEST_URI_TOO_LONG = 'requestUriTooLong';
    const STATUS_UNSUPPORTED_MEDIA_TYPE = 'unsupportedMediaType';
    const STATUS_REQUESTED_RANGE_NOT_SATISFIABLE = 'requestedRangeNotSatisfiable';
    const STATUS_EXPECTATION_FAILED = 'expectationFailed';
    const STATUS_UPGRADE_REQUIRED = 'upgradeRequired';
    const STATUS_INTERNAL_SERVER_ERROR = 'internalServerError';
    const STATUS_NOT_IMPLEMENTED = 'notImplemented';
    const STATUS_BAD_GATEWAY = 'badGateway';
    const STATUS_SERVICE_UNAVAILABLE = 'serviceUnavailable';
    const STATUS_GATEWAY_TIMEOUT = 'gatewayTimeout';
    const STATUS_HTTP_VERSION_NOT_SUPPORTED = 'httpVersionNotSupported';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__CONTINUE,
            self::STATUS_SWITCHING_PROTOCOLS,
            self::STATUS_OK,
            self::STATUS_CREATED,
            self::STATUS_ACCEPTED,
            self::STATUS_NON_AUTHORITATIVE_INFORMATION,
            self::STATUS_NO_CONTENT,
            self::STATUS_RESET_CONTENT,
            self::STATUS_PARTIAL_CONTENT,
            self::STATUS_MULTIPLE_CHOICES,
            self::STATUS_AMBIGUOUS,
            self::STATUS_MOVED_PERMANENTLY,
            self::STATUS_MOVED,
            self::STATUS_FOUND,
            self::STATUS_REDIRECT,
            self::STATUS_SEE_OTHER,
            self::STATUS_REDIRECT_METHOD,
            self::STATUS_NOT_MODIFIED,
            self::STATUS_USE_PROXY,
            self::STATUS_UNUSED,
            self::STATUS_TEMPORARY_REDIRECT,
            self::STATUS_REDIRECT_KEEP_VERB,
            self::STATUS_BAD_REQUEST,
            self::STATUS_UNAUTHORIZED,
            self::STATUS_PAYMENT_REQUIRED,
            self::STATUS_FORBIDDEN,
            self::STATUS_NOT_FOUND,
            self::STATUS_METHOD_NOT_ALLOWED,
            self::STATUS_NOT_ACCEPTABLE,
            self::STATUS_PROXY_AUTHENTICATION_REQUIRED,
            self::STATUS_REQUEST_TIMEOUT,
            self::STATUS_CONFLICT,
            self::STATUS_GONE,
            self::STATUS_LENGTH_REQUIRED,
            self::STATUS_PRECONDITION_FAILED,
            self::STATUS_REQUEST_ENTITY_TOO_LARGE,
            self::STATUS_REQUEST_URI_TOO_LONG,
            self::STATUS_UNSUPPORTED_MEDIA_TYPE,
            self::STATUS_REQUESTED_RANGE_NOT_SATISFIABLE,
            self::STATUS_EXPECTATION_FAILED,
            self::STATUS_UPGRADE_REQUIRED,
            self::STATUS_INTERNAL_SERVER_ERROR,
            self::STATUS_NOT_IMPLEMENTED,
            self::STATUS_BAD_GATEWAY,
            self::STATUS_SERVICE_UNAVAILABLE,
            self::STATUS_GATEWAY_TIMEOUT,
            self::STATUS_HTTP_VERSION_NOT_SUPPORTED,
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
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets error
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


