<?php
/**
 * CreateTransactionRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \DillerAPI\ObjectSerializer;

/**
 * CreateTransactionRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   DILLER AS
 * @link     https://diller.io
 */
class CreateTransactionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateTransactionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_id' => 'string',
'created_at' => '\DateTime',
'payment_details' => '\Swagger\Client\Model\PaymentDetails[]',
'eft_pos' => 'string',
'send_email_receipt' => 'bool',
'total' => 'double',
'total_tax' => 'double',
'total_discount' => 'double',
'currency' => 'string',
'round_off_amount' => 'double',
'origin' => '\Swagger\Client\Model\Origin',
'coupon_codes' => 'string[]',
'stamp_card_ids' => 'int[]',
'details' => '\Swagger\Client\Model\TransactionDetailRequest[]',
'department_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'external_id' => null,
'created_at' => 'date-time',
'payment_details' => null,
'eft_pos' => null,
'send_email_receipt' => null,
'total' => 'double',
'total_tax' => 'double',
'total_discount' => 'double',
'currency' => null,
'round_off_amount' => 'double',
'origin' => null,
'coupon_codes' => null,
'stamp_card_ids' => 'int32',
'details' => null,
'department_id' => null    ];

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
        'external_id' => 'external_id',
'created_at' => 'created_at',
'payment_details' => 'payment_details',
'eft_pos' => 'eft_pos',
'send_email_receipt' => 'send_email_receipt',
'total' => 'total',
'total_tax' => 'total_tax',
'total_discount' => 'total_discount',
'currency' => 'currency',
'round_off_amount' => 'round_off_amount',
'origin' => 'origin',
'coupon_codes' => 'coupon_codes',
'stamp_card_ids' => 'stamp_card_ids',
'details' => 'details',
'department_id' => 'department_id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_id' => 'setExternalId',
'created_at' => 'setCreatedAt',
'payment_details' => 'setPaymentDetails',
'eft_pos' => 'setEftPos',
'send_email_receipt' => 'setSendEmailReceipt',
'total' => 'setTotal',
'total_tax' => 'setTotalTax',
'total_discount' => 'setTotalDiscount',
'currency' => 'setCurrency',
'round_off_amount' => 'setRoundOffAmount',
'origin' => 'setOrigin',
'coupon_codes' => 'setCouponCodes',
'stamp_card_ids' => 'setStampCardIds',
'details' => 'setDetails',
'department_id' => 'setDepartmentId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_id' => 'getExternalId',
'created_at' => 'getCreatedAt',
'payment_details' => 'getPaymentDetails',
'eft_pos' => 'getEftPos',
'send_email_receipt' => 'getSendEmailReceipt',
'total' => 'getTotal',
'total_tax' => 'getTotalTax',
'total_discount' => 'getTotalDiscount',
'currency' => 'getCurrency',
'round_off_amount' => 'getRoundOffAmount',
'origin' => 'getOrigin',
'coupon_codes' => 'getCouponCodes',
'stamp_card_ids' => 'getStampCardIds',
'details' => 'getDetails',
'department_id' => 'getDepartmentId'    ];

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
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['payment_details'] = isset($data['payment_details']) ? $data['payment_details'] : null;
        $this->container['eft_pos'] = isset($data['eft_pos']) ? $data['eft_pos'] : null;
        $this->container['send_email_receipt'] = isset($data['send_email_receipt']) ? $data['send_email_receipt'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['total_discount'] = isset($data['total_discount']) ? $data['total_discount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['round_off_amount'] = isset($data['round_off_amount']) ? $data['round_off_amount'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['coupon_codes'] = isset($data['coupon_codes']) ? $data['coupon_codes'] : null;
        $this->container['stamp_card_ids'] = isset($data['stamp_card_ids']) ? $data['stamp_card_ids'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['department_id'] = isset($data['department_id']) ? $data['department_id'] : null;
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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id The store's transaction unique identifier. Eg. Order-1234
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The date and time the transaction was created in ISO 8601 format.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets payment_details
     *
     * @return \Swagger\Client\Model\PaymentDetails[]
     */
    public function getPaymentDetails()
    {
        return $this->container['payment_details'];
    }

    /**
     * Sets payment_details
     *
     * @param \Swagger\Client\Model\PaymentDetails[] $payment_details payment_details
     *
     * @return $this
     */
    public function setPaymentDetails($payment_details)
    {
        $this->container['payment_details'] = $payment_details;

        return $this;
    }

    /**
     * Gets eft_pos
     *
     * @return string
     */
    public function getEftPos()
    {
        return $this->container['eft_pos'];
    }

    /**
     * Sets eft_pos
     *
     * @param string $eft_pos Electronic funds transfer at point of sale
     *
     * @return $this
     */
    public function setEftPos($eft_pos)
    {
        $this->container['eft_pos'] = $eft_pos;

        return $this;
    }

    /**
     * Gets send_email_receipt
     *
     * @return bool
     */
    public function getSendEmailReceipt()
    {
        return $this->container['send_email_receipt'];
    }

    /**
     * Sets send_email_receipt
     *
     * @param bool $send_email_receipt send_email_receipt
     *
     * @return $this
     */
    public function setSendEmailReceipt($send_email_receipt)
    {
        $this->container['send_email_receipt'] = $send_email_receipt;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double $total Total amount paid by the customer, after discounts and taxes
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return double
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param double $total_tax Total amount of taxes paid
     *
     * @return $this
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets total_discount
     *
     * @return double
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param double $total_discount Discount amount applied to this purchase
     *
     * @return $this
     */
    public function setTotalDiscount($total_discount)
    {
        $this->container['total_discount'] = $total_discount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets round_off_amount
     *
     * @return double
     */
    public function getRoundOffAmount()
    {
        return $this->container['round_off_amount'];
    }

    /**
     * Sets round_off_amount
     *
     * @param double $round_off_amount Stores the specific value used for rounding calculations
     *
     * @return $this
     */
    public function setRoundOffAmount($round_off_amount)
    {
        $this->container['round_off_amount'] = $round_off_amount;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return \Swagger\Client\Model\Origin
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param \Swagger\Client\Model\Origin $origin origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets coupon_codes
     *
     * @return string[]
     */
    public function getCouponCodes()
    {
        return $this->container['coupon_codes'];
    }

    /**
     * Sets coupon_codes
     *
     * @param string[] $coupon_codes coupon_codes
     *
     * @return $this
     */
    public function setCouponCodes($coupon_codes)
    {
        $this->container['coupon_codes'] = $coupon_codes;

        return $this;
    }

    /**
     * Gets stamp_card_ids
     *
     * @return int[]
     */
    public function getStampCardIds()
    {
        return $this->container['stamp_card_ids'];
    }

    /**
     * Sets stamp_card_ids
     *
     * @param int[] $stamp_card_ids stamp_card_ids
     *
     * @return $this
     */
    public function setStampCardIds($stamp_card_ids)
    {
        $this->container['stamp_card_ids'] = $stamp_card_ids;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Swagger\Client\Model\TransactionDetailRequest[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Swagger\Client\Model\TransactionDetailRequest[] $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets department_id
     *
     * @return string
     */
    public function getDepartmentId()
    {
        return $this->container['department_id'];
    }

    /**
     * Sets department_id
     *
     * @param string $department_id The Id assigned by the retailer
     *
     * @return $this
     */
    public function setDepartmentId($department_id)
    {
        $this->container['department_id'] = $department_id;

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