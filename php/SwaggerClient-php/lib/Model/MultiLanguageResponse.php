<?php
/**
 * MultiLanguageResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TestingTime Public API
 *
 * Partners API to recruit test users with TestingTime programmatically
 *
 * OpenAPI spec version: 1.0.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * MultiLanguageResponse Class Doc Comment
 *
 * @category Class
 * @description A single response option for a user in all languages and if selecting this option brings a user further or gets rejected.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MultiLanguageResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MultiLanguageResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'en' => 'string',
'de' => 'string',
'fr' => 'string',
'qualification' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'en' => null,
'de' => null,
'fr' => null,
'qualification' => null    ];

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
        'en' => 'en',
'de' => 'de',
'fr' => 'fr',
'qualification' => 'qualification'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'en' => 'setEn',
'de' => 'setDe',
'fr' => 'setFr',
'qualification' => 'setQualification'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'en' => 'getEn',
'de' => 'getDe',
'fr' => 'getFr',
'qualification' => 'getQualification'    ];

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

    const QUALIFICATION_QUALIFY = 'QUALIFY';
const QUALIFICATION_DISQUALIFY = 'DISQUALIFY';
const QUALIFICATION_IRRELEVANT = 'IRRELEVANT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQualificationAllowableValues()
    {
        return [
            self::QUALIFICATION_QUALIFY,
self::QUALIFICATION_DISQUALIFY,
self::QUALIFICATION_IRRELEVANT,        ];
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
        $this->container['en'] = isset($data['en']) ? $data['en'] : null;
        $this->container['de'] = isset($data['de']) ? $data['de'] : null;
        $this->container['fr'] = isset($data['fr']) ? $data['fr'] : null;
        $this->container['qualification'] = isset($data['qualification']) ? $data['qualification'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['en'] === null) {
            $invalidProperties[] = "'en' can't be null";
        }
        $allowedValues = $this->getQualificationAllowableValues();
        if (!is_null($this->container['qualification']) && !in_array($this->container['qualification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'qualification', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets en
     *
     * @return string
     */
    public function getEn()
    {
        return $this->container['en'];
    }

    /**
     * Sets en
     *
     * @param string $en en
     *
     * @return $this
     */
    public function setEn($en)
    {
        $this->container['en'] = $en;

        return $this;
    }

    /**
     * Gets de
     *
     * @return string
     */
    public function getDe()
    {
        return $this->container['de'];
    }

    /**
     * Sets de
     *
     * @param string $de de
     *
     * @return $this
     */
    public function setDe($de)
    {
        $this->container['de'] = $de;

        return $this;
    }

    /**
     * Gets fr
     *
     * @return string
     */
    public function getFr()
    {
        return $this->container['fr'];
    }

    /**
     * Sets fr
     *
     * @param string $fr fr
     *
     * @return $this
     */
    public function setFr($fr)
    {
        $this->container['fr'] = $fr;

        return $this;
    }

    /**
     * Gets qualification
     *
     * @return string
     */
    public function getQualification()
    {
        return $this->container['qualification'];
    }

    /**
     * Sets qualification
     *
     * @param string $qualification qualification
     *
     * @return $this
     */
    public function setQualification($qualification)
    {
        $allowedValues = $this->getQualificationAllowableValues();
        if (!is_null($qualification) && !in_array($qualification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'qualification', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['qualification'] = $qualification;

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
