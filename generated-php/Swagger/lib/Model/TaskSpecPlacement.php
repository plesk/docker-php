<?php
/**
 * TaskSpecPlacement
 *
 * PHP version 5
 *
 * @category Class
 * @package  Docker\API
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docker Engine API
 *
 * The Engine API is an HTTP API served by Docker Engine. It is the API the Docker client uses to communicate with the Engine, so everything the Docker client can do can be done with the API.  Most of the client's commands map directly to API endpoints (e.g. `docker ps` is `GET /containers/json`). The notable exception is running containers, which consists of several API calls.  # Errors  The API uses standard HTTP status codes to indicate the success or failure of the API call. The body of the response will be JSON in the following format:  ``` {   \"message\": \"page not found\" } ```  # Versioning  The API is usually changed in each release, so API calls are versioned to ensure that clients don't break. To lock to a specific version of the API, you prefix the URL with its version, for example, call `/v1.30/info` to use the v1.30 version of the `/info` endpoint. If the API version specified in the URL is not supported by the daemon, a HTTP `400 Bad Request` error message is returned.  If you omit the version-prefix, the current version of the API (v1.47) is used. For example, calling `/info` is the same as calling `/v1.47/info`. Using the API without a version-prefix is deprecated and will be removed in a future release.  Engine releases in the near future should support this version of the API, so your client will continue to work even if it is talking to a newer Engine.  The API uses an open schema model, which means server may add extra properties to responses. Likewise, the server will ignore any extra query parameters and request body properties. When you write clients, you need to ignore additional properties in responses to ensure they do not break when talking to newer daemons.   # Authentication  Authentication for registries is handled client side. The client has to send authentication details to various endpoints that need to communicate with registries, such as `POST /images/(name)/push`. These are sent as `X-Registry-Auth` header as a [base64url encoded](https://tools.ietf.org/html/rfc4648#section-5) (JSON) string with the following structure:  ``` {   \"username\": \"string\",   \"password\": \"string\",   \"email\": \"string\",   \"serveraddress\": \"string\" } ```  The `serveraddress` is a domain/IP without a protocol. Throughout this structure, double quotes are required.  If you have already got an identity token from the [`/auth` endpoint](#operation/SystemAuth), you can just pass this instead of credentials:  ``` {   \"identitytoken\": \"9cbaf023786cd7...\" } ```
 *
 * OpenAPI spec version: 1.47
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.68
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Docker\API\Model;

use \ArrayAccess;
use \Docker\API\ObjectSerializer;

/**
 * TaskSpecPlacement Class Doc Comment
 *
 * @category Class
 * @package  Docker\API
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskSpecPlacement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskSpec_Placement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'constraints' => 'string[]',
        'preferences' => '\Docker\API\Model\TaskSpecPlacementPreferences[]',
        'maxReplicas' => 'int',
        'platforms' => '\Docker\API\Model\Platform[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'constraints' => null,
        'preferences' => null,
        'maxReplicas' => 'int64',
        'platforms' => null
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
        'constraints' => 'Constraints',
        'preferences' => 'Preferences',
        'maxReplicas' => 'MaxReplicas',
        'platforms' => 'Platforms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'constraints' => 'setConstraints',
        'preferences' => 'setPreferences',
        'maxReplicas' => 'setMaxReplicas',
        'platforms' => 'setPlatforms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'constraints' => 'getConstraints',
        'preferences' => 'getPreferences',
        'maxReplicas' => 'getMaxReplicas',
        'platforms' => 'getPlatforms'
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
    public function __construct(?array $data = null)
    {
        $this->container['constraints'] = isset($data['constraints']) ? $data['constraints'] : null;
        $this->container['preferences'] = isset($data['preferences']) ? $data['preferences'] : null;
        $this->container['maxReplicas'] = isset($data['maxReplicas']) ? $data['maxReplicas'] : 0;
        $this->container['platforms'] = isset($data['platforms']) ? $data['platforms'] : null;
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
     * Gets constraints
     *
     * @return string[]
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     *
     * @param string[] $constraints An array of constraint expressions to limit the set of nodes where a task can be scheduled. Constraint expressions can either use a _match_ (`==`) or _exclude_ (`!=`) rule. Multiple constraints find nodes that satisfy every expression (AND match). Constraints can match node or Docker Engine labels as follows:  node attribute       | matches                        | example ---------------------|--------------------------------|----------------------------------------------- `node.id`            | Node ID                        | `node.id==2ivku8v2gvtg4` `node.hostname`      | Node hostname                  | `node.hostname!=node-2` `node.role`          | Node role (`manager`/`worker`) | `node.role==manager` `node.platform.os`   | Node operating system          | `node.platform.os==windows` `node.platform.arch` | Node architecture              | `node.platform.arch==x86_64` `node.labels`        | User-defined node labels       | `node.labels.security==high` `engine.labels`      | Docker Engine's labels         | `engine.labels.operatingsystem==ubuntu-24.04`  `engine.labels` apply to Docker Engine labels like operating system, drivers, etc. Swarm administrators add `node.labels` for operational purposes by using the [`node update endpoint`](#operation/NodeUpdate).
     *
     * @return $this
     */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;

        return $this;
    }

    /**
     * Gets preferences
     *
     * @return \Docker\API\Model\TaskSpecPlacementPreferences[]
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param \Docker\API\Model\TaskSpecPlacementPreferences[] $preferences Preferences provide a way to make the scheduler aware of factors such as topology. They are provided in order from highest to lowest precedence.
     *
     * @return $this
     */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;

        return $this;
    }

    /**
     * Gets maxReplicas
     *
     * @return int
     */
    public function getMaxReplicas()
    {
        return $this->container['maxReplicas'];
    }

    /**
     * Sets maxReplicas
     *
     * @param int $maxReplicas Maximum number of replicas for per node (default value is 0, which is unlimited)
     *
     * @return $this
     */
    public function setMaxReplicas($maxReplicas)
    {
        $this->container['maxReplicas'] = $maxReplicas;

        return $this;
    }

    /**
     * Gets platforms
     *
     * @return \Docker\API\Model\Platform[]
     */
    public function getPlatforms()
    {
        return $this->container['platforms'];
    }

    /**
     * Sets platforms
     *
     * @param \Docker\API\Model\Platform[] $platforms Platforms stores all the platforms that the service's image can run on. This field is used in the platform filter for scheduling. If empty, then the platform filter is off, meaning there are no scheduling restrictions.
     *
     * @return $this
     */
    public function setPlatforms($platforms)
    {
        $this->container['platforms'] = $platforms;

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
