<?php
/**
 * PointsSystem
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
 * PointsSystem Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PointsSystem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PointsSystem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'friendReferralPoints' => 'int',
        'followerSignupPoints' => 'int',
        'currencyPointsRatio' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'friendReferralPoints' => 'int32',
        'followerSignupPoints' => 'int32',
        'currencyPointsRatio' => 'float'
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
        'enabled' => 'enabled',
        'friendReferralPoints' => 'friend_referral_points',
        'followerSignupPoints' => 'follower_signup_points',
        'currencyPointsRatio' => 'currency_points_ratio'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'friendReferralPoints' => 'setFriendReferralPoints',
        'followerSignupPoints' => 'setFollowerSignupPoints',
        'currencyPointsRatio' => 'setCurrencyPointsRatio'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'friendReferralPoints' => 'getFriendReferralPoints',
        'followerSignupPoints' => 'getFollowerSignupPoints',
        'currencyPointsRatio' => 'getCurrencyPointsRatio'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['friendReferralPoints'] = isset($data['friendReferralPoints']) ? $data['friendReferralPoints'] : null;
        $this->container['followerSignupPoints'] = isset($data['followerSignupPoints']) ? $data['followerSignupPoints'] : null;
        $this->container['currencyPointsRatio'] = isset($data['currencyPointsRatio']) ? $data['currencyPointsRatio'] : null;
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
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets friendReferralPoints
     *
     * @return int
     */
    public function getFriendReferralPoints()
    {
        return $this->container['friendReferralPoints'];
    }

    /**
     * Sets friendReferralPoints
     *
     * @param int $friendReferralPoints friendReferralPoints
     *
     * @return $this
     */
    public function setFriendReferralPoints($friendReferralPoints)
    {
        $this->container['friendReferralPoints'] = $friendReferralPoints;

        return $this;
    }

    /**
     * Gets followerSignupPoints
     *
     * @return int
     */
    public function getFollowerSignupPoints()
    {
        return $this->container['followerSignupPoints'];
    }

    /**
     * Sets followerSignupPoints
     *
     * @param int $followerSignupPoints followerSignupPoints
     *
     * @return $this
     */
    public function setFollowerSignupPoints($followerSignupPoints)
    {
        $this->container['followerSignupPoints'] = $followerSignupPoints;

        return $this;
    }

    /**
     * Gets currencyPointsRatio
     *
     * @return float
     */
    public function getCurrencyPointsRatio()
    {
        return $this->container['currencyPointsRatio'];
    }

    /**
     * Sets currencyPointsRatio
     *
     * @param float $currencyPointsRatio currencyPointsRatio
     *
     * @return $this
     */
    public function setCurrencyPointsRatio($currencyPointsRatio)
    {
        $this->container['currencyPointsRatio'] = $currencyPointsRatio;

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
