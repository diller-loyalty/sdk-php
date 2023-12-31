<?php
/**
 * PlatformType
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
 * PlatformType Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */
class PlatformType
{
    /**
     * Possible values of this enum
     */
    const EXTENDA_GO = 'ExtendaGo';
    const WOOCOMERCE = 'Woocomerce';
    const MAGENTO = 'Magento';
    const SHOPIFY = 'Shopify';
    const LINK_POS = 'LinkPos';
    const PCK = 'Pck';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXTENDA_GO, 
            self::WOOCOMERCE, 
            self::MAGENTO, 
            self::SHOPIFY, 
            self::LINK_POS, 
            self::PCK, 
        ];
    }
}
