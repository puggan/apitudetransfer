<?php
/**
 * TransferServiceBookingList
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
 * TransferServiceBookingList Class Doc Comment
 *
 * @category Class
 * @description The Transfer Service superclass of the list operation
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferServiceBookingList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferServiceBookingList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cancellation_policies' => '\Swagger\Client\Model\CancellationPolicy[]',
'category' => '\Swagger\Client\Model\Category',
'links' => '\Swagger\Client\Model\Link[]',
'pickup_information' => '\Swagger\Client\Model\PickupInformation',
'price' => '\Swagger\Client\Model\Price',
'transfer_type' => 'string',
'vehicle' => '\Swagger\Client\Model\Vehicle'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cancellation_policies' => null,
'category' => null,
'links' => null,
'pickup_information' => null,
'price' => null,
'transfer_type' => null,
'vehicle' => null    ];

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
        'cancellation_policies' => 'cancellationPolicies',
'category' => 'category',
'links' => 'links',
'pickup_information' => 'pickupInformation',
'price' => 'price',
'transfer_type' => 'transferType',
'vehicle' => 'vehicle'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancellation_policies' => 'setCancellationPolicies',
'category' => 'setCategory',
'links' => 'setLinks',
'pickup_information' => 'setPickupInformation',
'price' => 'setPrice',
'transfer_type' => 'setTransferType',
'vehicle' => 'setVehicle'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancellation_policies' => 'getCancellationPolicies',
'category' => 'getCategory',
'links' => 'getLinks',
'pickup_information' => 'getPickupInformation',
'price' => 'getPrice',
'transfer_type' => 'getTransferType',
'vehicle' => 'getVehicle'    ];

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

    const TRANSFER_TYPE__PRIVATE = 'PRIVATE';
const TRANSFER_TYPE_SHARED = 'SHARED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransferTypeAllowableValues(): array
    {
        return [
            self::TRANSFER_TYPE__PRIVATE,
self::TRANSFER_TYPE_SHARED,        ];
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
        $this->container['cancellation_policies'] = isset($data['cancellation_policies']) ? $data['cancellation_policies'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['pickup_information'] = isset($data['pickup_information']) ? $data['pickup_information'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['transfer_type'] = isset($data['transfer_type']) ? $data['transfer_type'] : null;
        $this->container['vehicle'] = isset($data['vehicle']) ? $data['vehicle'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['cancellation_policies'] === null) {
            $invalidProperties[] = "'cancellation_policies' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['pickup_information'] === null) {
            $invalidProperties[] = "'pickup_information' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['transfer_type'] === null) {
            $invalidProperties[] = "'transfer_type' can't be null";
        }
        $allowedValues = $this->getTransferTypeAllowableValues();
        if (!is_null($this->container['transfer_type']) && !in_array($this->container['transfer_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transfer_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['vehicle'] === null) {
            $invalidProperties[] = "'vehicle' can't be null";
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
     * Gets cancellation_policies
     *
     * @return \Swagger\Client\Model\CancellationPolicy[]
     */
    public function getCancellationPolicies(): array
    {
        return $this->container['cancellation_policies'];
    }

    /**
     * Sets cancellation_policies
     *
     * @param \Swagger\Client\Model\CancellationPolicy[] $cancellation_policies Cancellation policies
     *
     * @return $this
     */
    public function setCancellationPolicies($cancellation_policies): static
    {
        $this->container['cancellation_policies'] = $cancellation_policies;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Swagger\Client\Model\Category
     */
    public function getCategory(): Category
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Swagger\Client\Model\Category $category category
     *
     * @return $this
     */
    public function setCategory($category): static
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Swagger\Client\Model\Link[]
     */
    public function getLinks(): array
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\Link[] $links Links
     *
     * @return $this
     */
    public function setLinks($links): static
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets pickup_information
     *
     * @return \Swagger\Client\Model\PickupInformation
     */
    public function getPickupInformation(): PickupInformation
    {
        return $this->container['pickup_information'];
    }

    /**
     * Sets pickup_information
     *
     * @param \Swagger\Client\Model\PickupInformation $pickup_information pickup_information
     *
     * @return $this
     */
    public function setPickupInformation($pickup_information): static
    {
        $this->container['pickup_information'] = $pickup_information;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Swagger\Client\Model\Price
     */
    public function getPrice(): Price
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Swagger\Client\Model\Price $price price
     *
     * @return $this
     */
    public function setPrice($price): static
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets transfer_type
     *
     * @return string
     */
    public function getTransferType(): string
    {
        return $this->container['transfer_type'];
    }

    /**
     * Sets transfer_type
     *
     * @param string $transfer_type Transfer Type
     *
     * @return $this
     */
    public function setTransferType($transfer_type): static
    {
        $allowedValues = $this->getTransferTypeAllowableValues();
        if (!in_array($transfer_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transfer_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transfer_type'] = $transfer_type;

        return $this;
    }

    /**
     * Gets vehicle
     *
     * @return \Swagger\Client\Model\Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->container['vehicle'];
    }

    /**
     * Sets vehicle
     *
     * @param \Swagger\Client\Model\Vehicle $vehicle vehicle
     *
     * @return $this
     */
    public function setVehicle($vehicle): static
    {
        $this->container['vehicle'] = $vehicle;

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
