<?php
/**
 * PaymentRequestMiniCartMiniCartBillingAddress
 *
 * PHP version 5
 *
 * @category Class
 * @package  PicPay
*/

/**
 * PicPay - E-commerce Public API
 *
 * Public API
 *
 * OpenAPI spec version: 1.0
 * 
 */

namespace PicPay\modelPackage;

use \ArrayAccess;
use \PicPay\ObjectSerializer;

/**
 * PaymentRequestMiniCartMiniCartBillingAddress Class Doc Comment
 *
 * @category Class
 * @description Objeto contendo as informações do endereço de cobrança.
 * @package  PicPay
*/
class PaymentRequestMiniCartMiniCartBillingAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentRequestMiniCart_miniCart_billingAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country' => 'string',
'street' => 'string',
'number' => 'string',
'complement' => 'string',
'neighborhood' => 'string',
'city' => 'string',
'state' => 'string',
'postal_code' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country' => null,
'street' => null,
'number' => null,
'complement' => null,
'neighborhood' => null,
'city' => null,
'state' => null,
'postal_code' => null    ];

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
        'country' => 'country',
'street' => 'street',
'number' => 'number',
'complement' => 'complement',
'neighborhood' => 'neighborhood',
'city' => 'city',
'state' => 'state',
'postal_code' => 'postalCode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
'street' => 'setStreet',
'number' => 'setNumber',
'complement' => 'setComplement',
'neighborhood' => 'setNeighborhood',
'city' => 'setCity',
'state' => 'setState',
'postal_code' => 'setPostalCode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
'street' => 'getStreet',
'number' => 'getNumber',
'complement' => 'getComplement',
'neighborhood' => 'getNeighborhood',
'city' => 'getCity',
'state' => 'getState',
'postal_code' => 'getPostalCode'    ];

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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['complement'] = isset($data['complement']) ? $data['complement'] : null;
        $this->container['neighborhood'] = isset($data['neighborhood']) ? $data['neighborhood'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
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
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Sigla do país.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Logradouro.
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Número
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets complement
     *
     * @return string
     */
    public function getComplement()
    {
        return $this->container['complement'];
    }

    /**
     * Sets complement
     *
     * @param string $complement Complemento.
     *
     * @return $this
     */
    public function setComplement($complement)
    {
        $this->container['complement'] = $complement;

        return $this;
    }

    /**
     * Gets neighborhood
     *
     * @return string
     */
    public function getNeighborhood()
    {
        return $this->container['neighborhood'];
    }

    /**
     * Sets neighborhood
     *
     * @param string $neighborhood Bairro
     *
     * @return $this
     */
    public function setNeighborhood($neighborhood)
    {
        $this->container['neighborhood'] = $neighborhood;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Cidade
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Siga do estado
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code CEP
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

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
