<?php
/**
 * Route
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
 * Route Class Doc Comment
 *
 * @category Class
 * @description The Transfer Route Services class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Route implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Route';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => 'string',
'error' => '\Swagger\Client\Model\Error',
'id' => 'string',
'services' => '\Swagger\Client\Model\TransferServiceAvail[]',
'time' => 'string',
'unfiltered_total_count' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => null,
'error' => null,
'id' => null,
'services' => null,
'time' => null,
'unfiltered_total_count' => 'int32'    ];

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
        'date' => 'date',
'error' => 'error',
'id' => 'id',
'services' => 'services',
'time' => 'time',
'unfiltered_total_count' => 'unfilteredTotalCount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
'error' => 'setError',
'id' => 'setId',
'services' => 'setServices',
'time' => 'setTime',
'unfiltered_total_count' => 'setUnfilteredTotalCount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
'error' => 'getError',
'id' => 'getId',
'services' => 'getServices',
'time' => 'getTime',
'unfiltered_total_count' => 'getUnfilteredTotalCount'    ];

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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['unfiltered_total_count'] = isset($data['unfiltered_total_count']) ? $data['unfiltered_total_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['unfiltered_total_count'] === null) {
            $invalidProperties[] = "'unfiltered_total_count' can't be null";
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
     * Gets date
     *
     * @return ?string
     */
    public function getDate(): ?string
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date Date
     *
     * @return $this
     */
    public function setDate($date): static
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets error
     *
     * @return ?\Swagger\Client\Model\Error
     */
    public function getError(): ?Error
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \Swagger\Client\Model\Error $error error
     *
     * @return $this
     */
    public function setError($error): static
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets id
     *
     * @return ?string
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Id
     *
     * @return $this
     */
    public function setId($id): static
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets services
     *
     * @return ?\Swagger\Client\Model\TransferServiceAvail[]
     */
    public function getServices(): ?array
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Swagger\Client\Model\TransferServiceAvail[] $services Transfers services list
     *
     * @return $this
     */
    public function setServices($services): static
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets time
     *
     * @return ?string
     */
    public function getTime(): ?string
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string $time Time duration
     *
     * @return $this
     */
    public function setTime($time): static
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets unfiltered_total_count
     *
     * @return ?int
     */
    public function getUnfilteredTotalCount(): ?int
    {
        return $this->container['unfiltered_total_count'];
    }

    /**
     * Sets unfiltered_total_count
     *
     * @param int $unfiltered_total_count Unfiltered services total count
     *
     * @return $this
     */
    public function setUnfilteredTotalCount($unfiltered_total_count): static
    {
        $this->container['unfiltered_total_count'] = $unfiltered_total_count;

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
