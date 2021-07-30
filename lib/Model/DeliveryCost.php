<?php
/**
 * DeliveryCost
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
 * DeliveryCost Class Doc Comment
 *
 * @category Class
 * @description This type contains a breakdown of all costs associated with the fulfillment of a line item.
 * @package  Ebay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeliveryCost implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryCost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'import_charges' => '\Ebay\Sell\Fulfillment\Model\Amount',
        'shipping_cost' => '\Ebay\Sell\Fulfillment\Model\Amount',
        'shipping_intermediation_fee' => '\Ebay\Sell\Fulfillment\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'import_charges' => null,
        'shipping_cost' => null,
        'shipping_intermediation_fee' => null
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
        'import_charges' => 'importCharges',
        'shipping_cost' => 'shippingCost',
        'shipping_intermediation_fee' => 'shippingIntermediationFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'import_charges' => 'setImportCharges',
        'shipping_cost' => 'setShippingCost',
        'shipping_intermediation_fee' => 'setShippingIntermediationFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'import_charges' => 'getImportCharges',
        'shipping_cost' => 'getShippingCost',
        'shipping_intermediation_fee' => 'getShippingIntermediationFee'
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
        $this->container['import_charges'] = isset($data['import_charges']) ? $data['import_charges'] : null;
        $this->container['shipping_cost'] = isset($data['shipping_cost']) ? $data['shipping_cost'] : null;
        $this->container['shipping_intermediation_fee'] = isset($data['shipping_intermediation_fee']) ? $data['shipping_intermediation_fee'] : null;
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
     * Gets import_charges
     *
     * @return \Ebay\Sell\Fulfillment\Model\Amount|null
     */
    public function getImportCharges()
    {
        return $this->container['import_charges'];
    }

    /**
     * Sets import_charges
     *
     * @param \Ebay\Sell\Fulfillment\Model\Amount|null $import_charges import_charges
     *
     * @return self
     */
    public function setImportCharges($import_charges)
    {
        $this->container['import_charges'] = $import_charges;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return \Ebay\Sell\Fulfillment\Model\Amount|null
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param \Ebay\Sell\Fulfillment\Model\Amount|null $shipping_cost shipping_cost
     *
     * @return self
     */
    public function setShippingCost($shipping_cost)
    {
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets shipping_intermediation_fee
     *
     * @return \Ebay\Sell\Fulfillment\Model\Amount|null
     */
    public function getShippingIntermediationFee()
    {
        return $this->container['shipping_intermediation_fee'];
    }

    /**
     * Sets shipping_intermediation_fee
     *
     * @param \Ebay\Sell\Fulfillment\Model\Amount|null $shipping_intermediation_fee shipping_intermediation_fee
     *
     * @return self
     */
    public function setShippingIntermediationFee($shipping_intermediation_fee)
    {
        $this->container['shipping_intermediation_fee'] = $shipping_intermediation_fee;

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


