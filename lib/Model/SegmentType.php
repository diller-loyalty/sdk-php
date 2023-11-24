<?php
/**
 * SegmentType
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
use \DillerAPI\ObjectSerializer;

/**
 * SegmentType Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */
class SegmentType
{
    /**
     * Possible values of this enum
     */
    const TEXT = 'Text';
    const DATE_TIME = 'DateTime';
    const RADIO = 'Radio';
    const CHECKBOX = 'Checkbox';
    const DROPDOWN = 'Dropdown';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT
            self::DATE_TIME
            self::RADIO
            self::CHECKBOX
            self::DROPDOWN
        ];
    }
}
