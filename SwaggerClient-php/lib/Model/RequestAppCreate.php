<?php
/**
 * RequestAppCreate
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

use \ArrayAccess;
use \Wodby\Api\ObjectSerializer;

/**
 * RequestAppCreate Class Doc Comment
 *
 * @category Class
 * @package  Wodby\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequestAppCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RequestAppCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deployment_type' => 'string',
        'docroot' => 'string',
        'git' => '\Wodby\Api\Model\RequestAppCreateGit',
        'instance_name' => 'string',
        'instance_title' => 'string',
        'instance_type' => '\Wodby\Api\Model\InstanceType',
        'name' => 'string',
        'org_id' => '\Wodby\Api\Model\Uuid',
        'post_deployment' => 'bool',
        'server_id' => '\Wodby\Api\Model\Uuid',
        'services' => '\Wodby\Api\Model\RequestAppCreateServices[]',
        'sitename' => 'string',
        'stack_id' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deployment_type' => null,
        'docroot' => null,
        'git' => null,
        'instance_name' => null,
        'instance_title' => null,
        'instance_type' => null,
        'name' => null,
        'org_id' => null,
        'post_deployment' => null,
        'server_id' => null,
        'services' => null,
        'sitename' => null,
        'stack_id' => null,
        'title' => null
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
        'deployment_type' => 'deployment_type',
        'docroot' => 'docroot',
        'git' => 'git',
        'instance_name' => 'instance_name',
        'instance_title' => 'instance_title',
        'instance_type' => 'instance_type',
        'name' => 'name',
        'org_id' => 'org_id',
        'post_deployment' => 'post_deployment',
        'server_id' => 'server_id',
        'services' => 'services',
        'sitename' => 'sitename',
        'stack_id' => 'stack_id',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deployment_type' => 'setDeploymentType',
        'docroot' => 'setDocroot',
        'git' => 'setGit',
        'instance_name' => 'setInstanceName',
        'instance_title' => 'setInstanceTitle',
        'instance_type' => 'setInstanceType',
        'name' => 'setName',
        'org_id' => 'setOrgId',
        'post_deployment' => 'setPostDeployment',
        'server_id' => 'setServerId',
        'services' => 'setServices',
        'sitename' => 'setSitename',
        'stack_id' => 'setStackId',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deployment_type' => 'getDeploymentType',
        'docroot' => 'getDocroot',
        'git' => 'getGit',
        'instance_name' => 'getInstanceName',
        'instance_title' => 'getInstanceTitle',
        'instance_type' => 'getInstanceType',
        'name' => 'getName',
        'org_id' => 'getOrgId',
        'post_deployment' => 'getPostDeployment',
        'server_id' => 'getServerId',
        'services' => 'getServices',
        'sitename' => 'getSitename',
        'stack_id' => 'getStackId',
        'title' => 'getTitle'
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

    const DEPLOYMENT_TYPE_VANILLA = 'vanilla';
    const DEPLOYMENT_TYPE_GIT = 'git';
    const DEPLOYMENT_TYPE_CI = 'ci';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeploymentTypeAllowableValues()
    {
        return [
            self::DEPLOYMENT_TYPE_VANILLA,
            self::DEPLOYMENT_TYPE_GIT,
            self::DEPLOYMENT_TYPE_CI,
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
        $this->container['deployment_type'] = isset($data['deployment_type']) ? $data['deployment_type'] : 'vanilla';
        $this->container['docroot'] = isset($data['docroot']) ? $data['docroot'] : null;
        $this->container['git'] = isset($data['git']) ? $data['git'] : null;
        $this->container['instance_name'] = isset($data['instance_name']) ? $data['instance_name'] : null;
        $this->container['instance_title'] = isset($data['instance_title']) ? $data['instance_title'] : null;
        $this->container['instance_type'] = isset($data['instance_type']) ? $data['instance_type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['org_id'] = isset($data['org_id']) ? $data['org_id'] : null;
        $this->container['post_deployment'] = isset($data['post_deployment']) ? $data['post_deployment'] : null;
        $this->container['server_id'] = isset($data['server_id']) ? $data['server_id'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['sitename'] = isset($data['sitename']) ? $data['sitename'] : null;
        $this->container['stack_id'] = isset($data['stack_id']) ? $data['stack_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeploymentTypeAllowableValues();
        if (!in_array($this->container['deployment_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deployment_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['instance_name']) && !preg_match("/^[a-z0-9][a-z0-9-]{0,18}[a-z0-9]$/", $this->container['instance_name'])) {
            $invalidProperties[] = "invalid value for 'instance_name', must be conform to the pattern /^[a-z0-9][a-z0-9-]{0,18}[a-z0-9]$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!preg_match("/^[a-z0-9][a-z0-9-]{0,28}[a-z0-9]$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9][a-z0-9-]{0,28}[a-z0-9]$/.";
        }

        if ($this->container['org_id'] === null) {
            $invalidProperties[] = "'org_id' can't be null";
        }
        if ($this->container['server_id'] === null) {
            $invalidProperties[] = "'server_id' can't be null";
        }
        if ($this->container['stack_id'] === null) {
            $invalidProperties[] = "'stack_id' can't be null";
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

        $allowedValues = $this->getDeploymentTypeAllowableValues();
        if (!in_array($this->container['deployment_type'], $allowedValues)) {
            return false;
        }
        if (!preg_match("/^[a-z0-9][a-z0-9-]{0,18}[a-z0-9]$/", $this->container['instance_name'])) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if (!preg_match("/^[a-z0-9][a-z0-9-]{0,28}[a-z0-9]$/", $this->container['name'])) {
            return false;
        }
        if ($this->container['org_id'] === null) {
            return false;
        }
        if ($this->container['server_id'] === null) {
            return false;
        }
        if ($this->container['stack_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets deployment_type
     *
     * @return string
     */
    public function getDeploymentType()
    {
        return $this->container['deployment_type'];
    }

    /**
     * Sets deployment_type
     *
     * @param string $deployment_type deployment_type
     *
     * @return $this
     */
    public function setDeploymentType($deployment_type)
    {
        $allowedValues = $this->getDeploymentTypeAllowableValues();
        if (!is_null($deployment_type) && !in_array($deployment_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deployment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deployment_type'] = $deployment_type;

        return $this;
    }

    /**
     * Gets docroot
     *
     * @return string
     */
    public function getDocroot()
    {
        return $this->container['docroot'];
    }

    /**
     * Sets docroot
     *
     * @param string $docroot docroot
     *
     * @return $this
     */
    public function setDocroot($docroot)
    {
        $this->container['docroot'] = $docroot;

        return $this;
    }

    /**
     * Gets git
     *
     * @return \Wodby\Api\Model\RequestAppCreateGit
     */
    public function getGit()
    {
        return $this->container['git'];
    }

    /**
     * Sets git
     *
     * @param \Wodby\Api\Model\RequestAppCreateGit $git git
     *
     * @return $this
     */
    public function setGit($git)
    {
        $this->container['git'] = $git;

        return $this;
    }

    /**
     * Gets instance_name
     *
     * @return string
     */
    public function getInstanceName()
    {
        return $this->container['instance_name'];
    }

    /**
     * Sets instance_name
     *
     * @param string $instance_name instance_name
     *
     * @return $this
     */
    public function setInstanceName($instance_name)
    {

        if (!is_null($instance_name) && (!preg_match("/^[a-z0-9][a-z0-9-]{0,18}[a-z0-9]$/", $instance_name))) {
            throw new \InvalidArgumentException("invalid value for $instance_name when calling RequestAppCreate., must conform to the pattern /^[a-z0-9][a-z0-9-]{0,18}[a-z0-9]$/.");
        }

        $this->container['instance_name'] = $instance_name;

        return $this;
    }

    /**
     * Gets instance_title
     *
     * @return string
     */
    public function getInstanceTitle()
    {
        return $this->container['instance_title'];
    }

    /**
     * Sets instance_title
     *
     * @param string $instance_title instance_title
     *
     * @return $this
     */
    public function setInstanceTitle($instance_title)
    {
        $this->container['instance_title'] = $instance_title;

        return $this;
    }

    /**
     * Gets instance_type
     *
     * @return \Wodby\Api\Model\InstanceType
     */
    public function getInstanceType()
    {
        return $this->container['instance_type'];
    }

    /**
     * Sets instance_type
     *
     * @param \Wodby\Api\Model\InstanceType $instance_type instance_type
     *
     * @return $this
     */
    public function setInstanceType($instance_type)
    {
        $this->container['instance_type'] = $instance_type;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((!preg_match("/^[a-z0-9][a-z0-9-]{0,28}[a-z0-9]$/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling RequestAppCreate., must conform to the pattern /^[a-z0-9][a-z0-9-]{0,28}[a-z0-9]$/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return \Wodby\Api\Model\Uuid
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param \Wodby\Api\Model\Uuid $org_id org_id
     *
     * @return $this
     */
    public function setOrgId($org_id)
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets post_deployment
     *
     * @return bool
     */
    public function getPostDeployment()
    {
        return $this->container['post_deployment'];
    }

    /**
     * Sets post_deployment
     *
     * @param bool $post_deployment post_deployment
     *
     * @return $this
     */
    public function setPostDeployment($post_deployment)
    {
        $this->container['post_deployment'] = $post_deployment;

        return $this;
    }

    /**
     * Gets server_id
     *
     * @return \Wodby\Api\Model\Uuid
     */
    public function getServerId()
    {
        return $this->container['server_id'];
    }

    /**
     * Sets server_id
     *
     * @param \Wodby\Api\Model\Uuid $server_id server_id
     *
     * @return $this
     */
    public function setServerId($server_id)
    {
        $this->container['server_id'] = $server_id;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \Wodby\Api\Model\RequestAppCreateServices[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Wodby\Api\Model\RequestAppCreateServices[] $services services
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets sitename
     *
     * @return string
     */
    public function getSitename()
    {
        return $this->container['sitename'];
    }

    /**
     * Sets sitename
     *
     * @param string $sitename sitename
     *
     * @return $this
     */
    public function setSitename($sitename)
    {
        $this->container['sitename'] = $sitename;

        return $this;
    }

    /**
     * Gets stack_id
     *
     * @return string
     */
    public function getStackId()
    {
        return $this->container['stack_id'];
    }

    /**
     * Sets stack_id
     *
     * @param string $stack_id stack_id
     *
     * @return $this
     */
    public function setStackId($stack_id)
    {
        $this->container['stack_id'] = $stack_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


