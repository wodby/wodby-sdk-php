<?php
/**
 * InstanceType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Wodby\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wodby API (beta)
 *
 * API documentation https://docs.wodby.com/dev.
 *
 * OpenAPI spec version: master
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Wodby\Api\Model;
use \Wodby\Api\ObjectSerializer;

/**
 * InstanceType Class Doc Comment
 *
 * @category Class
 * @package  Wodby\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InstanceType
{
    /**
     * Possible values of this enum
     */
    const DEV = 'dev';
    const STAGE = 'stage';
    const PROD = 'prod';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEV,
            self::STAGE,
            self::PROD,
        ];
    }
}


