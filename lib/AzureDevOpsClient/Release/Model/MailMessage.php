<?php
/**
 * MailMessage
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Release
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

namespace AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Release\ObjectSerializer;

/**
 * MailMessage Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MailMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MailMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'body' => 'string',
        'cc' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EmailRecipients',
        'inReplyTo' => 'string',
        'messageId' => 'string',
        'replyBy' => '\DateTime',
        'replyTo' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EmailRecipients',
        'sections' => 'object[]',
        'senderType' => 'string',
        'subject' => 'string',
        'to' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EmailRecipients'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'body' => null,
        'cc' => null,
        'inReplyTo' => null,
        'messageId' => null,
        'replyBy' => 'date-time',
        'replyTo' => null,
        'sections' => null,
        'senderType' => null,
        'subject' => null,
        'to' => null
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
        'body' => 'body',
        'cc' => 'cc',
        'inReplyTo' => 'inReplyTo',
        'messageId' => 'messageId',
        'replyBy' => 'replyBy',
        'replyTo' => 'replyTo',
        'sections' => 'sections',
        'senderType' => 'senderType',
        'subject' => 'subject',
        'to' => 'to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'body' => 'setBody',
        'cc' => 'setCc',
        'inReplyTo' => 'setInReplyTo',
        'messageId' => 'setMessageId',
        'replyBy' => 'setReplyBy',
        'replyTo' => 'setReplyTo',
        'sections' => 'setSections',
        'senderType' => 'setSenderType',
        'subject' => 'setSubject',
        'to' => 'setTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'body' => 'getBody',
        'cc' => 'getCc',
        'inReplyTo' => 'getInReplyTo',
        'messageId' => 'getMessageId',
        'replyBy' => 'getReplyBy',
        'replyTo' => 'getReplyTo',
        'sections' => 'getSections',
        'senderType' => 'getSenderType',
        'subject' => 'getSubject',
        'to' => 'getTo'
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

    const SENDER_TYPE_SERVICE_ACCOUNT = 'serviceAccount';
    const SENDER_TYPE_REQUESTING_USER = 'requestingUser';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSenderTypeAllowableValues()
    {
        return [
            self::SENDER_TYPE_SERVICE_ACCOUNT,
            self::SENDER_TYPE_REQUESTING_USER,
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
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['inReplyTo'] = isset($data['inReplyTo']) ? $data['inReplyTo'] : null;
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['replyBy'] = isset($data['replyBy']) ? $data['replyBy'] : null;
        $this->container['replyTo'] = isset($data['replyTo']) ? $data['replyTo'] : null;
        $this->container['sections'] = isset($data['sections']) ? $data['sections'] : null;
        $this->container['senderType'] = isset($data['senderType']) ? $data['senderType'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSenderTypeAllowableValues();
        if (!is_null($this->container['senderType']) && !in_array($this->container['senderType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'senderType', must be one of '%s'",
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
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body Body of mail.
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EmailRecipients
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EmailRecipients $cc Mail CC recipients.
     *
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets inReplyTo
     *
     * @return string
     */
    public function getInReplyTo()
    {
        return $this->container['inReplyTo'];
    }

    /**
     * Sets inReplyTo
     *
     * @param string $inReplyTo Reply to.
     *
     * @return $this
     */
    public function setInReplyTo($inReplyTo)
    {
        $this->container['inReplyTo'] = $inReplyTo;

        return $this;
    }

    /**
     * Gets messageId
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
     * Sets messageId
     *
     * @param string $messageId Message ID of the mail.
     *
     * @return $this
     */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;

        return $this;
    }

    /**
     * Gets replyBy
     *
     * @return \DateTime
     */
    public function getReplyBy()
    {
        return $this->container['replyBy'];
    }

    /**
     * Sets replyBy
     *
     * @param \DateTime $replyBy Data when should be replied to mail.
     *
     * @return $this
     */
    public function setReplyBy($replyBy)
    {
        $this->container['replyBy'] = $replyBy;

        return $this;
    }

    /**
     * Gets replyTo
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EmailRecipients
     */
    public function getReplyTo()
    {
        return $this->container['replyTo'];
    }

    /**
     * Sets replyTo
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EmailRecipients $replyTo Reply to Email recipients.
     *
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->container['replyTo'] = $replyTo;

        return $this;
    }

    /**
     * Gets sections
     *
     * @return object[]
     */
    public function getSections()
    {
        return $this->container['sections'];
    }

    /**
     * Sets sections
     *
     * @param object[] $sections List of mail section types.
     *
     * @return $this
     */
    public function setSections($sections)
    {
        $this->container['sections'] = $sections;

        return $this;
    }

    /**
     * Gets senderType
     *
     * @return string
     */
    public function getSenderType()
    {
        return $this->container['senderType'];
    }

    /**
     * Sets senderType
     *
     * @param string $senderType Mail sender type.
     *
     * @return $this
     */
    public function setSenderType($senderType)
    {
        $allowedValues = $this->getSenderTypeAllowableValues();
        if (!is_null($senderType) && !in_array($senderType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'senderType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['senderType'] = $senderType;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Subject of the mail.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EmailRecipients
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EmailRecipients $to Mail To recipients.
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

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


