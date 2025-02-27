<?php
/**
 * Pickup
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
 * Pickup Class Doc Comment
 *
 * @category Class
 * @description The pickup information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Pickup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Pickup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => 'string',
'altitude' => 'double',
'check_pickup' => '\Swagger\Client\Model\CheckPickup',
'description' => 'string',
'image' => 'string',
'latitude' => 'double',
'longitude' => 'double',
'number' => 'string',
'pickup_id' => 'int',
'stop_name' => 'string',
'town' => 'string',
'zip' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
'altitude' => 'double',
'check_pickup' => null,
'description' => null,
'image' => null,
'latitude' => 'double',
'longitude' => 'double',
'number' => null,
'pickup_id' => 'int64',
'stop_name' => null,
'town' => null,
'zip' => null    ];

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
        'address' => 'address',
'altitude' => 'altitude',
'check_pickup' => 'checkPickup',
'description' => 'description',
'image' => 'image',
'latitude' => 'latitude',
'longitude' => 'longitude',
'number' => 'number',
'pickup_id' => 'pickupId',
'stop_name' => 'stopName',
'town' => 'town',
'zip' => 'zip'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
'altitude' => 'setAltitude',
'check_pickup' => 'setCheckPickup',
'description' => 'setDescription',
'image' => 'setImage',
'latitude' => 'setLatitude',
'longitude' => 'setLongitude',
'number' => 'setNumber',
'pickup_id' => 'setPickupId',
'stop_name' => 'setStopName',
'town' => 'setTown',
'zip' => 'setZip'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
'altitude' => 'getAltitude',
'check_pickup' => 'getCheckPickup',
'description' => 'getDescription',
'image' => 'getImage',
'latitude' => 'getLatitude',
'longitude' => 'getLongitude',
'number' => 'getNumber',
'pickup_id' => 'getPickupId',
'stop_name' => 'getStopName',
'town' => 'getTown',
'zip' => 'getZip'    ];

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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['altitude'] = isset($data['altitude']) ? $data['altitude'] : null;
        $this->container['check_pickup'] = isset($data['check_pickup']) ? $data['check_pickup'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['pickup_id'] = isset($data['pickup_id']) ? $data['pickup_id'] : null;
        $this->container['stop_name'] = isset($data['stop_name']) ? $data['stop_name'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets address
     *
     * @return ?string
     */
    public function getAddress(): ?string
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Address
     *
     * @return $this
     */
    public function setAddress($address): static
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets altitude
     *
     * @return ?double
     */
    public function getAltitude(): ?float
    {
        return $this->container['altitude'];
    }

    /**
     * Sets altitude
     *
     * @param double $altitude Altitude
     *
     * @return $this
     */
    public function setAltitude($altitude): static
    {
        $this->container['altitude'] = $altitude;

        return $this;
    }

    /**
     * Gets check_pickup
     *
     * @return ?\Swagger\Client\Model\CheckPickup
     */
    public function getCheckPickup(): ?CheckPickup
    {
        return $this->container['check_pickup'];
    }

    /**
     * Sets check_pickup
     *
     * @param \Swagger\Client\Model\CheckPickup $check_pickup check_pickup
     *
     * @return $this
     */
    public function setCheckPickup($check_pickup): static
    {
        $this->container['check_pickup'] = $check_pickup;

        return $this;
    }

    /**
     * Gets description
     *
     * @return ?string
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Pickup description
     *
     * @return $this
     */
    public function setDescription($description): static
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets image
     *
     * @return ?string
     */
    public function getImage(): ?string
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image Image
     *
     * @return $this
     */
    public function setImage($image): static
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return ?double
     */
    public function getLatitude(): ?float
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double $latitude Latitude
     *
     * @return $this
     */
    public function setLatitude($latitude): static
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return ?double
     */
    public function getLongitude(): ?float
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude Longitude
     *
     * @return $this
     */
    public function setLongitude($longitude): static
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets number
     *
     * @return ?string
     */
    public function getNumber(): ?string
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Number
     *
     * @return $this
     */
    public function setNumber($number): static
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets pickup_id
     *
     * @return ?int
     */
    public function getPickupId(): ?int
    {
        return $this->container['pickup_id'];
    }

    /**
     * Sets pickup_id
     *
     * @param int $pickup_id Pickup Id
     *
     * @return $this
     */
    public function setPickupId($pickup_id): static
    {
        $this->container['pickup_id'] = $pickup_id;

        return $this;
    }

    /**
     * Gets stop_name
     *
     * @return ?string
     */
    public function getStopName(): ?string
    {
        return $this->container['stop_name'];
    }

    /**
     * Sets stop_name
     *
     * @param string $stop_name Stop Name
     *
     * @return $this
     */
    public function setStopName($stop_name): static
    {
        $this->container['stop_name'] = $stop_name;

        return $this;
    }

    /**
     * Gets town
     *
     * @return ?string
     */
    public function getTown(): ?string
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town Town
     *
     * @return $this
     */
    public function setTown($town): static
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return ?string
     */
    public function getZip(): ?string
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip Zip
     *
     * @return $this
     */
    public function setZip($zip): static
    {
        $this->container['zip'] = $zip;

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
