<?php
/**
 * ShippingStep
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ebay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.19.7
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ebay\Sell\Fulfillment\Model;

use \ArrayAccess;
use \Ebay\Sell\Fulfillment\ObjectSerializer;

/**
 * ShippingStep Class Doc Comment
 *
 * @category Class
 * @description This type contains shipping information for a fulfillment, including the shipping carrier, the shipping service option, the shipment destination, and the Global Shipping Program reference ID.
 * @package  Ebay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShippingStep implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingStep';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipping_carrier_code' => 'string',
        'shipping_service_code' => 'string',
        'ship_to' => '\Ebay\Sell\Fulfillment\Model\ExtendedContact',
        'ship_to_reference_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipping_carrier_code' => null,
        'shipping_service_code' => null,
        'ship_to' => null,
        'ship_to_reference_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipping_carrier_code' => 'shippingCarrierCode',
        'shipping_service_code' => 'shippingServiceCode',
        'ship_to' => 'shipTo',
        'ship_to_reference_id' => 'shipToReferenceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_carrier_code' => 'setShippingCarrierCode',
        'shipping_service_code' => 'setShippingServiceCode',
        'ship_to' => 'setShipTo',
        'ship_to_reference_id' => 'setShipToReferenceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_carrier_code' => 'getShippingCarrierCode',
        'shipping_service_code' => 'getShippingServiceCode',
        'ship_to' => 'getShipTo',
        'ship_to_reference_id' => 'getShipToReferenceId'
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
        return self::$openAPIModelName;
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
        $this->container['shipping_carrier_code'] = isset($data['shipping_carrier_code']) ? $data['shipping_carrier_code'] : null;
        $this->container['shipping_service_code'] = isset($data['shipping_service_code']) ? $data['shipping_service_code'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['ship_to_reference_id'] = isset($data['ship_to_reference_id']) ? $data['ship_to_reference_id'] : null;
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
     * Gets shipping_carrier_code
     *
     * @return string|null
     */
    public function getShippingCarrierCode()
    {
        return $this->container['shipping_carrier_code'];
    }

    /**
     * Sets shipping_carrier_code
     *
     * @param string|null $shipping_carrier_code The unique identifier of the shipping carrier being used to ship the line item. Note: The Trading API's GeteBayDetails call can be used to retrieve the latest shipping carrier and shipping service option enumeration values.
     *
     * @return self
     */
    public function setShippingCarrierCode($shipping_carrier_code)
    {
        $this->container['shipping_carrier_code'] = $shipping_carrier_code;

        return $this;
    }

    /**
     * Gets shipping_service_code
     *
     * @return string|null
     */
    public function getShippingServiceCode()
    {
        return $this->container['shipping_service_code'];
    }

    /**
     * Sets shipping_service_code
     *
     * @param string|null $shipping_service_code The unique identifier of the shipping service option being used to ship the line item. Note: Use the Trading API's GeteBayDetails call to retrieve the latest shipping carrier and shipping service option enumeration values. When making the GeteBayDetails call, include the DetailName field in the request payload and set its value to ShippingServiceDetails. Each valid shipping service option (returned in ShippingServiceDetails.ShippingService field) and corresponding shipping carrier (returned in ShippingServiceDetails.ShippingCarrier field) is returned in response payload.
     *
     * @return self
     */
    public function setShippingServiceCode($shipping_service_code)
    {
        $this->container['shipping_service_code'] = $shipping_service_code;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \Ebay\Sell\Fulfillment\Model\ExtendedContact|null
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \Ebay\Sell\Fulfillment\Model\ExtendedContact|null $ship_to ship_to
     *
     * @return self
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets ship_to_reference_id
     *
     * @return string|null
     */
    public function getShipToReferenceId()
    {
        return $this->container['ship_to_reference_id'];
    }

    /**
     * Sets ship_to_reference_id
     *
     * @param string|null $ship_to_reference_id This is the unique identifer of the Global Shipping Program (GSP) shipment. This field is only returned if the line item is being shipped via GSP (the value of the fulfillmentStartInstructions.ebaySupportedFulfillment field will be true. The international shipping provider uses the shipToReferenceId value as the primary reference number to retrieve the relevant details about the buyer, the order, and the fulfillment, so the shipment can be completed. Sellers must include this value on the shipping label immediately above the street address of the international shipping provider. Example: &quot;Reference #1234567890123456&quot; Note: This value is the same as the ShipToAddress.ReferenceID value returned by the Trading API's GetOrders call.
     *
     * @return self
     */
    public function setShipToReferenceId($ship_to_reference_id)
    {
        $this->container['ship_to_reference_id'] = $ship_to_reference_id;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


