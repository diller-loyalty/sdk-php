<?php
/**
 * GtinType
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
use \DillerAPI\ObjectSerializer;

/**
 * GtinType Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GtinType
{
    /**
     * Possible values of this enum
     */
    const ISBN = 'Isbn';
    const UPC_GTIN12 = 'UpcGtin12';
    const EAN_GTIN13 = 'EanGtin13';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ISBN
            self::UPC_GTIN12
            self::EAN_GTIN13
        ];
    }
}
