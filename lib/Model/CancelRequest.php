<?php
/**
 * CancelRequest
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
 * CancelRequest Class Doc Comment
 *
 * @category Class
 * @description This type contains information about a buyer request to cancel an order.
 * @package  Ebay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CancelRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CancelRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cancel_completed_date' => 'string',
        'cancel_initiator' => 'string',
        'cancel_reason' => 'string',
        'cancel_requested_date' => 'string',
        'cancel_request_id' => 'string',
        'cancel_request_state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cancel_completed_date' => null,
        'cancel_initiator' => null,
        'cancel_reason' => null,
        'cancel_requested_date' => null,
        'cancel_request_id' => null,
        'cancel_request_state' => null
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
        'cancel_completed_date' => 'cancelCompletedDate',
        'cancel_initiator' => 'cancelInitiator',
        'cancel_reason' => 'cancelReason',
        'cancel_requested_date' => 'cancelRequestedDate',
        'cancel_request_id' => 'cancelRequestId',
        'cancel_request_state' => 'cancelRequestState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancel_completed_date' => 'setCancelCompletedDate',
        'cancel_initiator' => 'setCancelInitiator',
        'cancel_reason' => 'setCancelReason',
        'cancel_requested_date' => 'setCancelRequestedDate',
        'cancel_request_id' => 'setCancelRequestId',
        'cancel_request_state' => 'setCancelRequestState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancel_completed_date' => 'getCancelCompletedDate',
        'cancel_initiator' => 'getCancelInitiator',
        'cancel_reason' => 'getCancelReason',
        'cancel_requested_date' => 'getCancelRequestedDate',
        'cancel_request_id' => 'getCancelRequestId',
        'cancel_request_state' => 'getCancelRequestState'
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
        $this->container['cancel_completed_date'] = isset($data['cancel_completed_date']) ? $data['cancel_completed_date'] : null;
        $this->container['cancel_initiator'] = isset($data['cancel_initiator']) ? $data['cancel_initiator'] : null;
        $this->container['cancel_reason'] = isset($data['cancel_reason']) ? $data['cancel_reason'] : null;
        $this->container['cancel_requested_date'] = isset($data['cancel_requested_date']) ? $data['cancel_requested_date'] : null;
        $this->container['cancel_request_id'] = isset($data['cancel_request_id']) ? $data['cancel_request_id'] : null;
        $this->container['cancel_request_state'] = isset($data['cancel_request_state']) ? $data['cancel_request_state'] : null;
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
     * Gets cancel_completed_date
     *
     * @return string|null
     */
    public function getCancelCompletedDate()
    {
        return $this->container['cancel_completed_date'];
    }

    /**
     * Sets cancel_completed_date
     *
     * @param string|null $cancel_completed_date The date and time that the order cancellation was completed, if applicable. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the cancellation request has actually been approved by the seller. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z
     *
     * @return self
     */
    public function setCancelCompletedDate($cancel_completed_date)
    {
        $this->container['cancel_completed_date'] = $cancel_completed_date;

        return $this;
    }

    /**
     * Gets cancel_initiator
     *
     * @return string|null
     */
    public function getCancelInitiator()
    {
        return $this->container['cancel_initiator'];
    }

    /**
     * Sets cancel_initiator
     *
     * @param string|null $cancel_initiator This string value indicates the party who made the initial cancellation request. Typically, either the 'Buyer' or 'Seller'. If a cancellation request has been made, this field should be returned.
     *
     * @return self
     */
    public function setCancelInitiator($cancel_initiator)
    {
        $this->container['cancel_initiator'] = $cancel_initiator;

        return $this;
    }

    /**
     * Gets cancel_reason
     *
     * @return string|null
     */
    public function getCancelReason()
    {
        return $this->container['cancel_reason'];
    }

    /**
     * Sets cancel_reason
     *
     * @param string|null $cancel_reason The reason why the cancelInitiator initiated the cancellation request. Cancellation reasons for a buyer might include 'order placed by mistake' or 'order won't arrive in time'. For a seller, a typical cancellation reason is 'out of stock'. If a cancellation request has been made, this field should be returned.
     *
     * @return self
     */
    public function setCancelReason($cancel_reason)
    {
        $this->container['cancel_reason'] = $cancel_reason;

        return $this;
    }

    /**
     * Gets cancel_requested_date
     *
     * @return string|null
     */
    public function getCancelRequestedDate()
    {
        return $this->container['cancel_requested_date'];
    }

    /**
     * Sets cancel_requested_date
     *
     * @param string|null $cancel_requested_date The date and time that the order cancellation was requested. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is returned for each cancellation request. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z
     *
     * @return self
     */
    public function setCancelRequestedDate($cancel_requested_date)
    {
        $this->container['cancel_requested_date'] = $cancel_requested_date;

        return $this;
    }

    /**
     * Gets cancel_request_id
     *
     * @return string|null
     */
    public function getCancelRequestId()
    {
        return $this->container['cancel_request_id'];
    }

    /**
     * Sets cancel_request_id
     *
     * @param string|null $cancel_request_id The unique identifier of the order cancellation request. This field is returned for each cancellation request.
     *
     * @return self
     */
    public function setCancelRequestId($cancel_request_id)
    {
        $this->container['cancel_request_id'] = $cancel_request_id;

        return $this;
    }

    /**
     * Gets cancel_request_state
     *
     * @return string|null
     */
    public function getCancelRequestState()
    {
        return $this->container['cancel_request_state'];
    }

    /**
     * Sets cancel_request_state
     *
     * @param string|null $cancel_request_state The current stage or condition of the cancellation request. This field is returned for each cancellation request. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:CancelRequestStateEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCancelRequestState($cancel_request_state)
    {
        $this->container['cancel_request_state'] = $cancel_request_state;

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


