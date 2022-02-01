<?php
/**
 * ConfirmRequest
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
 * ConfirmRequest Class Doc Comment
 *
 * @category Class
 * @description The Confirm Request Object
 * @package  EmanuelBuss\ApitudeTransfer
 * @author   Emanuel Karlsson <emanuel.karlsson@rolfsbuss.se>
 * @link     https://github.com/emanuelbuss/apitudetransfer
 */
class ConfirmRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConfirmRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_reference' => 'string',
'holder' => '\EmanuelBuss\ApitudeTransfer\Model\Pax',
'language' => 'string',
'remark' => 'string',
'transfers' => '\EmanuelBuss\ApitudeTransfer\Model\TransferConfirm[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_reference' => null,
'holder' => null,
'language' => null,
'remark' => null,
'transfers' => null    ];

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
        'client_reference' => 'clientReference',
'holder' => 'holder',
'language' => 'language',
'remark' => 'remark',
'transfers' => 'transfers'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_reference' => 'setClientReference',
'holder' => 'setHolder',
'language' => 'setLanguage',
'remark' => 'setRemark',
'transfers' => 'setTransfers'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_reference' => 'getClientReference',
'holder' => 'getHolder',
'language' => 'getLanguage',
'remark' => 'getRemark',
'transfers' => 'getTransfers'    ];

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
        $this->container['client_reference'] = isset($data['client_reference']) ? $data['client_reference'] : null;
        $this->container['holder'] = isset($data['holder']) ? $data['holder'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['transfers'] = isset($data['transfers']) ? $data['transfers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['holder'] === null) {
            $invalidProperties[] = "'holder' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['transfers'] === null) {
            $invalidProperties[] = "'transfers' can't be null";
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
     * Gets client_reference
     *
     * @return string
     */
    public function getClientReference()
    {
        return $this->container['client_reference'];
    }

    /**
     * Sets client_reference
     *
     * @param string $client_reference Client reference
     *
     * @return $this
     */
    public function setClientReference($client_reference)
    {
        $this->container['client_reference'] = $client_reference;

        return $this;
    }

    /**
     * Gets holder
     *
     * @return \EmanuelBuss\ApitudeTransfer\Model\Pax
     */
    public function getHolder()
    {
        return $this->container['holder'];
    }

    /**
     * Sets holder
     *
     * @param \EmanuelBuss\ApitudeTransfer\Model\Pax $holder holder
     *
     * @return $this
     */
    public function setHolder($holder)
    {
        $this->container['holder'] = $holder;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets transfers
     *
     * @return \EmanuelBuss\ApitudeTransfer\Model\TransferConfirm[]
     */
    public function getTransfers()
    {
        return $this->container['transfers'];
    }

    /**
     * Sets transfers
     *
     * @param \EmanuelBuss\ApitudeTransfer\Model\TransferConfirm[] $transfers List of transfers to confirm
     *
     * @return $this
     */
    public function setTransfers($transfers)
    {
        $this->container['transfers'] = $transfers;

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
