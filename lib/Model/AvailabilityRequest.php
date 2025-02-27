<?php
/**
 * AvailabilityRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
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
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AvailabilityRequest Class Doc Comment
 *
 * @category Class
 * @description The Availability Request Object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvailabilityRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AvailabilityRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'come_back' => '\Swagger\Client\Model\TransferDateTime',
'departure' => '\Swagger\Client\Model\TransferDateTime',
'from' => '\Swagger\Client\Model\TransferPoint',
'language' => 'string',
'occupancy' => '\Swagger\Client\Model\Occupancy',
'to' => '\Swagger\Client\Model\TransferPoint'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'come_back' => null,
'departure' => null,
'from' => null,
'language' => null,
'occupancy' => null,
'to' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats(): array
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
        'come_back' => 'comeBack',
'departure' => 'departure',
'from' => 'from',
'language' => 'language',
'occupancy' => 'occupancy',
'to' => 'to'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'come_back' => 'setComeBack',
'departure' => 'setDeparture',
'from' => 'setFrom',
'language' => 'setLanguage',
'occupancy' => 'setOccupancy',
'to' => 'setTo'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'come_back' => 'getComeBack',
'departure' => 'getDeparture',
'from' => 'getFrom',
'language' => 'getLanguage',
'occupancy' => 'getOccupancy',
'to' => 'getTo'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
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
        $this->container['come_back'] = isset($data['come_back']) ? $data['come_back'] : null;
        $this->container['departure'] = isset($data['departure']) ? $data['departure'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['occupancy'] = isset($data['occupancy']) ? $data['occupancy'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['come_back'] === null) {
            $invalidProperties[] = "'come_back' can't be null";
        }
        if ($this->container['departure'] === null) {
            $invalidProperties[] = "'departure' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['occupancy'] === null) {
            $invalidProperties[] = "'occupancy' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets come_back
     *
     * @return ?\Swagger\Client\Model\TransferDateTime
     */
    public function getComeBack(): ?TransferDateTime
    {
        return $this->container['come_back'];
    }

    /**
     * Sets come_back
     *
     * @param \Swagger\Client\Model\TransferDateTime $come_back come_back
     *
     * @return $this
     */
    public function setComeBack($come_back): static
    {
        $this->container['come_back'] = $come_back;

        return $this;
    }

    /**
     * Gets departure
     *
     * @return ?\Swagger\Client\Model\TransferDateTime
     */
    public function getDeparture(): ?TransferDateTime
    {
        return $this->container['departure'];
    }

    /**
     * Sets departure
     *
     * @param \Swagger\Client\Model\TransferDateTime $departure departure
     *
     * @return $this
     */
    public function setDeparture($departure): static
    {
        $this->container['departure'] = $departure;

        return $this;
    }

    /**
     * Gets from
     *
     * @return ?\Swagger\Client\Model\TransferPoint
     */
    public function getFrom(): ?TransferPoint
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \Swagger\Client\Model\TransferPoint $from from
     *
     * @return $this
     */
    public function setFrom($from): static
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets language
     *
     * @return ?string
     */
    public function getLanguage(): ?string
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Language
     *
     * @return $this
     */
    public function setLanguage($language): static
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets occupancy
     *
     * @return ?\Swagger\Client\Model\Occupancy
     */
    public function getOccupancy(): ?Occupancy
    {
        return $this->container['occupancy'];
    }

    /**
     * Sets occupancy
     *
     * @param \Swagger\Client\Model\Occupancy $occupancy occupancy
     *
     * @return $this
     */
    public function setOccupancy($occupancy): static
    {
        $this->container['occupancy'] = $occupancy;

        return $this;
    }

    /**
     * Gets to
     *
     * @return ?\Swagger\Client\Model\TransferPoint
     */
    public function getTo(): ?TransferPoint
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \Swagger\Client\Model\TransferPoint $to to
     *
     * @return $this
     */
    public function setTo($to): static
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
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
