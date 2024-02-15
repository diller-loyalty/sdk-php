<?php
/**
 * MemberResponse
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

namespace DillerAPI\Model;

use \ArrayAccess;
use \DillerAPI\ObjectSerializer;

/**
 * MemberResponse Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */
class MemberResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MemberResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'firstName' => 'string',
'lastName' => 'string',
'email' => 'string',
'additionalIdentifiers' => 'string[]',
'remarks' => 'string',
'phone' => '\DillerAPI\Model\Phone',
'birthDate' => '\DateTime',
'address' => '\DillerAPI\Model\Address',
'gender' => '\DillerAPI\Model\Gender',
'consent' => '\DillerAPI\Model\MemberConsent',
'membershipDetail' => '\DillerAPI\Model\MemberMembershipDetail',
'departmentIds' => 'string[]',
'segments' => '\DillerAPI\Model\MemberSegmentResponse[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'firstName' => null,
'lastName' => null,
'email' => null,
'additionalIdentifiers' => null,
'remarks' => null,
'phone' => null,
'birthDate' => 'date-time',
'address' => null,
'gender' => null,
'consent' => null,
'membershipDetail' => null,
'departmentIds' => null,
'segments' => null    ];

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
        'id' => 'id',
'firstName' => 'first_name',
'lastName' => 'last_name',
'email' => 'email',
'additionalIdentifiers' => 'additional_identifiers',
'remarks' => 'remarks',
'phone' => 'phone',
'birthDate' => 'birth_date',
'address' => 'address',
'gender' => 'gender',
'consent' => 'consent',
'membershipDetail' => 'membership_detail',
'departmentIds' => 'department_ids',
'segments' => 'segments'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'firstName' => 'setFirstName',
'lastName' => 'setLastName',
'email' => 'setEmail',
'additionalIdentifiers' => 'setAdditionalIdentifiers',
'remarks' => 'setRemarks',
'phone' => 'setPhone',
'birthDate' => 'setBirthDate',
'address' => 'setAddress',
'gender' => 'setGender',
'consent' => 'setConsent',
'membershipDetail' => 'setMembershipDetail',
'departmentIds' => 'setDepartmentIds',
'segments' => 'setSegments'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'firstName' => 'getFirstName',
'lastName' => 'getLastName',
'email' => 'getEmail',
'additionalIdentifiers' => 'getAdditionalIdentifiers',
'remarks' => 'getRemarks',
'phone' => 'getPhone',
'birthDate' => 'getBirthDate',
'address' => 'getAddress',
'gender' => 'getGender',
'consent' => 'getConsent',
'membershipDetail' => 'getMembershipDetail',
'departmentIds' => 'getDepartmentIds',
'segments' => 'getSegments'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['additionalIdentifiers'] = isset($data['additionalIdentifiers']) ? $data['additionalIdentifiers'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['consent'] = isset($data['consent']) ? $data['consent'] : null;
        $this->container['membershipDetail'] = isset($data['membershipDetail']) ? $data['membershipDetail'] : null;
        $this->container['departmentIds'] = isset($data['departmentIds']) ? $data['departmentIds'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
        }
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets additionalIdentifiers
     *
     * @return string[]
     */
    public function getAdditionalIdentifiers()
    {
        return $this->container['additionalIdentifiers'];
    }

    /**
     * Sets additionalIdentifiers
     *
     * @param string[] $additionalIdentifiers Specifies an additional identifier value for the member identifier type that is defined at the store level.
     *
     * @return $this
     */
    public function setAdditionalIdentifiers($additionalIdentifiers)
    {
        $this->container['additionalIdentifiers'] = $additionalIdentifiers;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string $remarks remarks
     *
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \DillerAPI\Model\Phone
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \DillerAPI\Model\Phone $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birthDate'];
    }

    /**
     * Sets birthDate
     *
     * @param \DateTime $birthDate birthDate
     *
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        $this->container['birthDate'] = $birthDate;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \DillerAPI\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \DillerAPI\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \DillerAPI\Model\Gender
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \DillerAPI\Model\Gender $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets consent
     *
     * @return \DillerAPI\Model\MemberConsent
     */
    public function getConsent()
    {
        return $this->container['consent'];
    }

    /**
     * Sets consent
     *
     * @param \DillerAPI\Model\MemberConsent $consent consent
     *
     * @return $this
     */
    public function setConsent($consent)
    {
        $this->container['consent'] = $consent;

        return $this;
    }

    /**
     * Gets membershipDetail
     *
     * @return \DillerAPI\Model\MemberMembershipDetail
     */
    public function getMembershipDetail()
    {
        return $this->container['membershipDetail'];
    }

    /**
     * Sets membershipDetail
     *
     * @param \DillerAPI\Model\MemberMembershipDetail $membershipDetail membershipDetail
     *
     * @return $this
     */
    public function setMembershipDetail($membershipDetail)
    {
        $this->container['membershipDetail'] = $membershipDetail;

        return $this;
    }

    /**
     * Gets departmentIds
     *
     * @return string[]
     */
    public function getDepartmentIds()
    {
        return $this->container['departmentIds'];
    }

    /**
     * Sets departmentIds
     *
     * @param string[] $departmentIds departmentIds
     *
     * @return $this
     */
    public function setDepartmentIds($departmentIds)
    {
        $this->container['departmentIds'] = $departmentIds;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return \DillerAPI\Model\MemberSegmentResponse[]
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \DillerAPI\Model\MemberSegmentResponse[] $segments segments
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

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
