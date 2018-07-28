<?php
/**
 * Backup
 *
 * PHP version 5
 *
 * @category Class
 * @package  Wodby\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wodby API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0.x
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

use \ArrayAccess;
use \Wodby\Api\ObjectSerializer;

/**
 * Backup Class Doc Comment
 *
 * @category Class
 * @package  Wodby\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Backup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Backup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'type' => 'string',
        'org_id' => 'string',
        'instance_id' => 'string',
        'eta' => 'int',
        'spent' => 'int',
        'status' => 'string',
        'created' => 'int',
        'updated' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'type' => null,
        'org_id' => null,
        'instance_id' => null,
        'eta' => null,
        'spent' => null,
        'status' => null,
        'created' => null,
        'updated' => null
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
        'id' => 'id',
        'type' => 'type',
        'org_id' => 'org_id',
        'instance_id' => 'instance_id',
        'eta' => 'eta',
        'spent' => 'spent',
        'status' => 'status',
        'created' => 'created',
        'updated' => 'updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'org_id' => 'setOrgId',
        'instance_id' => 'setInstanceId',
        'eta' => 'setEta',
        'spent' => 'setSpent',
        'status' => 'setStatus',
        'created' => 'setCreated',
        'updated' => 'setUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'org_id' => 'getOrgId',
        'instance_id' => 'getInstanceId',
        'eta' => 'getEta',
        'spent' => 'getSpent',
        'status' => 'getStatus',
        'created' => 'getCreated',
        'updated' => 'getUpdated'
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

    const TYPE_SYSTEM = 'system';
    const TYPE_DAILY = 'daily';
    const TYPE_MANUAL = 'manual';
    const STATUS_OK = 'ok';
    const STATUS_ERROR = 'error';
    const STATUS_WAITING = 'waiting';
    const STATUS_CREATING = 'creating';
    const STATUS_RESTORING = 'restoring';
    const STATUS_DELETING = 'deleting';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SYSTEM,
            self::TYPE_DAILY,
            self::TYPE_MANUAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OK,
            self::STATUS_ERROR,
            self::STATUS_WAITING,
            self::STATUS_CREATING,
            self::STATUS_RESTORING,
            self::STATUS_DELETING,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['org_id'] = isset($data['org_id']) ? $data['org_id'] : null;
        $this->container['instance_id'] = isset($data['instance_id']) ? $data['instance_id'] : null;
        $this->container['eta'] = isset($data['eta']) ? $data['eta'] : null;
        $this->container['spent'] = isset($data['spent']) ? $data['spent'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['org_id'] === null) {
            $invalidProperties[] = "'org_id' can't be null";
        }
        if ($this->container['instance_id'] === null) {
            $invalidProperties[] = "'instance_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        if ($this->container['org_id'] === null) {
            return false;
        }
        if ($this->container['instance_id'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['updated'] === null) {
            return false;
        }
        return true;
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return string
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param string $org_id org_id
     *
     * @return $this
     */
    public function setOrgId($org_id)
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets instance_id
     *
     * @return string
     */
    public function getInstanceId()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string $instance_id instance_id
     *
     * @return $this
     */
    public function setInstanceId($instance_id)
    {
        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets eta
     *
     * @return int
     */
    public function getEta()
    {
        return $this->container['eta'];
    }

    /**
     * Sets eta
     *
     * @param int $eta eta
     *
     * @return $this
     */
    public function setEta($eta)
    {
        $this->container['eta'] = $eta;

        return $this;
    }

    /**
     * Gets spent
     *
     * @return int
     */
    public function getSpent()
    {
        return $this->container['spent'];
    }

    /**
     * Sets spent
     *
     * @param int $spent spent
     *
     * @return $this
     */
    public function setSpent($spent)
    {
        $this->container['spent'] = $spent;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param int $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return int
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param int $updated updated
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

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
     * @return mixed
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


