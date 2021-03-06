<?php
/**
 * PaymentSummary
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
 * PaymentSummary Class Doc Comment
 *
 * @category Class
 * @description This type contains information about the various monetary exchanges that apply to the net balance due for the order.
 * @package  Ebay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payments' => '\Ebay\Sell\Fulfillment\Model\Payment[]',
        'refunds' => '\Ebay\Sell\Fulfillment\Model\OrderRefund[]',
        'total_due_seller' => '\Ebay\Sell\Fulfillment\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payments' => null,
        'refunds' => null,
        'total_due_seller' => null
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
        'payments' => 'payments',
        'refunds' => 'refunds',
        'total_due_seller' => 'totalDueSeller'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payments' => 'setPayments',
        'refunds' => 'setRefunds',
        'total_due_seller' => 'setTotalDueSeller'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payments' => 'getPayments',
        'refunds' => 'getRefunds',
        'total_due_seller' => 'getTotalDueSeller'
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
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
        $this->container['refunds'] = isset($data['refunds']) ? $data['refunds'] : null;
        $this->container['total_due_seller'] = isset($data['total_due_seller']) ? $data['total_due_seller'] : null;
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
     * Gets payments
     *
     * @return \Ebay\Sell\Fulfillment\Model\Payment[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Ebay\Sell\Fulfillment\Model\Payment[]|null $payments This array consists of payment information for the order, including payment status, payment method, payment amount, and payment date. This array is always returned, although some of the fields under this container will not be returned until payment has been made.
     *
     * @return self
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \Ebay\Sell\Fulfillment\Model\OrderRefund[]|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \Ebay\Sell\Fulfillment\Model\OrderRefund[]|null $refunds This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
     *
     * @return self
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets total_due_seller
     *
     * @return \Ebay\Sell\Fulfillment\Model\Amount|null
     */
    public function getTotalDueSeller()
    {
        return $this->container['total_due_seller'];
    }

    /**
     * Sets total_due_seller
     *
     * @param \Ebay\Sell\Fulfillment\Model\Amount|null $total_due_seller total_due_seller
     *
     * @return self
     */
    public function setTotalDueSeller($total_due_seller)
    {
        $this->container['total_due_seller'] = $total_due_seller;

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


