<?php
/**
 * Consent
 *
 * PHP version 5
 *
 * @category Class
 * @package  DillerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Diller Retailer API
 *
 * The official Diller Retailer API (beta version) <br/> Last Updated: 07-11-2023 14:08
 *
 * OpenAPI spec version: v2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DillerAPI\Model;

use \ArrayAccess;
use \DillerAPI\ObjectSerializer;

/**
 * Consent Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Consent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Consent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gdprAccepted' => 'bool',
        'saveOrderHistory' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gdprAccepted' => null,
        'saveOrderHistory' => null
    ];

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
        'gdprAccepted' => 'gdpr_accepted',
        'saveOrderHistory' => 'save_order_history'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gdprAccepted' => 'setGdprAccepted',
        'saveOrderHistory' => 'setSaveOrderHistory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gdprAccepted' => 'getGdprAccepted',
        'saveOrderHistory' => 'getSaveOrderHistory'
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
        $this->container['gdprAccepted'] = isset($data['gdprAccepted']) ? $data['gdprAccepted'] : null;
        $this->container['saveOrderHistory'] = isset($data['saveOrderHistory']) ? $data['saveOrderHistory'] : null;
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
     * Gets gdprAccepted
     *
     * @return bool
     */
    public function getGdprAccepted()
    {
        return $this->container['gdprAccepted'];
    }

    /**
     * Sets gdprAccepted
     *
     * @param bool $gdprAccepted True if the member has accepted the GDPR. False otherwise.
     *
     * @return $this
     */
    public function setGdprAccepted($gdprAccepted)
    {
        $this->container['gdprAccepted'] = $gdprAccepted;

        return $this;
    }

    /**
     * Gets saveOrderHistory
     *
     * @return bool
     */
    public function getSaveOrderHistory()
    {
        return $this->container['saveOrderHistory'];
    }

    /**
     * Sets saveOrderHistory
     *
     * @param bool $saveOrderHistory True if member has authorized to save order history e.g. transaction details about their purchases.
     *
     * @return $this
     */
    public function setSaveOrderHistory($saveOrderHistory)
    {
        $this->container['saveOrderHistory'] = $saveOrderHistory;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
