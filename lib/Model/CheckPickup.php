<?php
/**
 * CheckPickup
 *
 * PHP version 5
 *
 * @category Class
 * @package  EmanuelBuss\ApitudeTransfer
 * @author   Emanuel Karlsson <emanuel.karlsson@rolfsbuss.se>
 * @link     https://github.com/emanuelbuss/apitudetransfer
 */

/**
 * Transfer Booking API
 *
 * # APItude Transfer Booking API  APItude also includes now the ability to book transfers. This API will provide you with availability for transfer services and allow you to distribute those not only through the websites but also is thought to support mobile and tablets.  APItude for transfers API is designed to provide Hotelbeds Group clients with a set of API calls to:   * Enable the construction or creation of a complete transfer website or mobile application (app) * Integrate transfer services into existing systems both internal and external. * Integrate transfers contents for transfers into a common CMS for all the products being distributed.  **Transfer Booking API** provides all the needed calls (operations) to develop your booking funnel, confirm a booking and obtain the relevant information for a customer to enjoy the transfer service that he or she bought.  To obtain and cache the static content you can use [Transfers Cache API](), an API designed to return all the static information needed to operate the Transfers BookingAPI as quickly and simple as possible.
 *
 * OpenAPI spec version: 1.0
 * Contact: integrations.btb@hotelbeds.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/emanuelbuss/apitudetransfer
 * Do not edit the class manually.
 */

namespace EmanuelBuss\ApitudeTransfer\Model;

use \ArrayAccess;
use \EmanuelBuss\ApitudeTransfer\ObjectSerializer;

/**
 * CheckPickup Class Doc Comment
 *
 * @category Class
 * @description Pickup information instructing the client to visit the url if needed
 * @package  EmanuelBuss\ApitudeTransfer
 * @author   Emanuel Karlsson <emanuel.karlsson@rolfsbuss.se>
 * @link     https://github.com/emanuelbuss/apitudetransfer
 */
class CheckPickup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckPickup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hours_before_consulting' => 'int',
'must_check_pickup_time' => 'bool',
'url' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hours_before_consulting' => 'int32',
'must_check_pickup_time' => null,
'url' => null    ];

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
        'hours_before_consulting' => 'hoursBeforeConsulting',
'must_check_pickup_time' => 'mustCheckPickupTime',
'url' => 'url'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hours_before_consulting' => 'setHoursBeforeConsulting',
'must_check_pickup_time' => 'setMustCheckPickupTime',
'url' => 'setUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hours_before_consulting' => 'getHoursBeforeConsulting',
'must_check_pickup_time' => 'getMustCheckPickupTime',
'url' => 'getUrl'    ];

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
        $this->container['hours_before_consulting'] = isset($data['hours_before_consulting']) ? $data['hours_before_consulting'] : null;
        $this->container['must_check_pickup_time'] = isset($data['must_check_pickup_time']) ? $data['must_check_pickup_time'] : null;
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
     * Gets hours_before_consulting
     *
     * @return int
     */
    public function getHoursBeforeConsulting()
    {
        return $this->container['hours_before_consulting'];
    }

    /**
     * Sets hours_before_consulting
     *
     * @param int $hours_before_consulting Indicates how many hours before the service, the pickup time will be available on the website
     *
     * @return $this
     */
    public function setHoursBeforeConsulting($hours_before_consulting)
    {
        $this->container['hours_before_consulting'] = $hours_before_consulting;

        return $this;
    }

    /**
     * Gets must_check_pickup_time
     *
     * @return bool
     */
    public function getMustCheckPickupTime()
    {
        return $this->container['must_check_pickup_time'];
    }

    /**
     * Sets must_check_pickup_time
     *
     * @param bool $must_check_pickup_time Indicates whether the user needs to confirm exact pickup time on external website
     *
     * @return $this
     */
    public function setMustCheckPickupTime($must_check_pickup_time)
    {
        $this->container['must_check_pickup_time'] = $must_check_pickup_time;

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
     * @param string $url URL the user needs to visit in order to confirm pickup time
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
