<?php
/**
 * NotificationEventType
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
 * NotificationEventType Class Doc Comment
 *
 * @category Class
 * @description Encapsulates the properties of an event type. It defines the fields, that can be used for filtering, for that event type.
 * @package  AzureDevOpsClient\Notification
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationEventType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationEventType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category' => '\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventTypeCategory',
        'color' => 'string',
        'customSubscriptionsAllowed' => 'bool',
        'eventPublisher' => '\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventPublisher',
        'fields' => 'map[string,\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventField]',
        'hasInitiator' => 'bool',
        'icon' => 'string',
        'id' => 'string',
        'name' => 'string',
        'roles' => '\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventRole[]',
        'supportedScopes' => 'string[]',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category' => null,
        'color' => null,
        'customSubscriptionsAllowed' => null,
        'eventPublisher' => null,
        'fields' => null,
        'hasInitiator' => null,
        'icon' => null,
        'id' => null,
        'name' => null,
        'roles' => null,
        'supportedScopes' => null,
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
        'category' => 'category',
        'color' => 'color',
        'customSubscriptionsAllowed' => 'customSubscriptionsAllowed',
        'eventPublisher' => 'eventPublisher',
        'fields' => 'fields',
        'hasInitiator' => 'hasInitiator',
        'icon' => 'icon',
        'id' => 'id',
        'name' => 'name',
        'roles' => 'roles',
        'supportedScopes' => 'supportedScopes',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'color' => 'setColor',
        'customSubscriptionsAllowed' => 'setCustomSubscriptionsAllowed',
        'eventPublisher' => 'setEventPublisher',
        'fields' => 'setFields',
        'hasInitiator' => 'setHasInitiator',
        'icon' => 'setIcon',
        'id' => 'setId',
        'name' => 'setName',
        'roles' => 'setRoles',
        'supportedScopes' => 'setSupportedScopes',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'color' => 'getColor',
        'customSubscriptionsAllowed' => 'getCustomSubscriptionsAllowed',
        'eventPublisher' => 'getEventPublisher',
        'fields' => 'getFields',
        'hasInitiator' => 'getHasInitiator',
        'icon' => 'getIcon',
        'id' => 'getId',
        'name' => 'getName',
        'roles' => 'getRoles',
        'supportedScopes' => 'getSupportedScopes',
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['customSubscriptionsAllowed'] = isset($data['customSubscriptionsAllowed']) ? $data['customSubscriptionsAllowed'] : null;
        $this->container['eventPublisher'] = isset($data['eventPublisher']) ? $data['eventPublisher'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['hasInitiator'] = isset($data['hasInitiator']) ? $data['hasInitiator'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['supportedScopes'] = isset($data['supportedScopes']) ? $data['supportedScopes'] : null;
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
     * Gets category
     *
     * @return \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventTypeCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventTypeCategory $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color Gets or sets the color representing this event type. Example: rgb(128,245,211) or #fafafa
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets customSubscriptionsAllowed
     *
     * @return bool
     */
    public function getCustomSubscriptionsAllowed()
    {
        return $this->container['customSubscriptionsAllowed'];
    }

    /**
     * Sets customSubscriptionsAllowed
     *
     * @param bool $customSubscriptionsAllowed customSubscriptionsAllowed
     *
     * @return $this
     */
    public function setCustomSubscriptionsAllowed($customSubscriptionsAllowed)
    {
        $this->container['customSubscriptionsAllowed'] = $customSubscriptionsAllowed;

        return $this;
    }

    /**
     * Gets eventPublisher
     *
     * @return \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventPublisher
     */
    public function getEventPublisher()
    {
        return $this->container['eventPublisher'];
    }

    /**
     * Sets eventPublisher
     *
     * @param \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventPublisher $eventPublisher eventPublisher
     *
     * @return $this
     */
    public function setEventPublisher($eventPublisher)
    {
        $this->container['eventPublisher'] = $eventPublisher;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return map[string,\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventField]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param map[string,\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventField] $fields fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets hasInitiator
     *
     * @return bool
     */
    public function getHasInitiator()
    {
        return $this->container['hasInitiator'];
    }

    /**
     * Sets hasInitiator
     *
     * @param bool $hasInitiator hasInitiator
     *
     * @return $this
     */
    public function setHasInitiator($hasInitiator)
    {
        $this->container['hasInitiator'] = $hasInitiator;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon Gets or sets the icon representing this event type. Can be a URL or a CSS class. Example: css://some-css-class
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

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
     * @param string $id Gets or sets the unique identifier of this event definition.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name Gets or sets the name of this event definition.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventRole[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventRole[] $roles roles
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets supportedScopes
     *
     * @return string[]
     */
    public function getSupportedScopes()
    {
        return $this->container['supportedScopes'];
    }

    /**
     * Sets supportedScopes
     *
     * @param string[] $supportedScopes Gets or sets the scopes that this event type supports
     *
     * @return $this
     */
    public function setSupportedScopes($supportedScopes)
    {
        $this->container['supportedScopes'] = $supportedScopes;

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
     * @param string $url Gets or sets the rest end point to get this event type details (fields, fields types)
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


