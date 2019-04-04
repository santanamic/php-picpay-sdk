<?php
/**
 * PaymentRequestMiniCartMiniCart
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
 * PaymentRequestMiniCartMiniCart Class Doc Comment
 *
 * @category Class
 * @description Objeto contendo o carrinho com comprador, endereços, frete, imposto e descontos
 * @package  PicPay
*/
class PaymentRequestMiniCartMiniCart implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentRequestMiniCart_miniCart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buyer' => '\PicPay\modelPackage\PaymentRequestBuyer',
'shipping_address' => '\PicPay\modelPackage\PaymentRequestMiniCartMiniCartShippingAddress',
'billing_address' => '\PicPay\modelPackage\PaymentRequestMiniCartMiniCartBillingAddress',
'items' => '\PicPay\modelPackage\PaymentRequestMiniCartMiniCartItems[]',
'shipping_value' => 'double',
'tax_value' => 'double'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buyer' => null,
'shipping_address' => null,
'billing_address' => null,
'items' => null,
'shipping_value' => 'double',
'tax_value' => 'double'    ];

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
        'buyer' => 'buyer',
'shipping_address' => 'shippingAddress',
'billing_address' => 'billingAddress',
'items' => 'items',
'shipping_value' => 'shippingValue',
'tax_value' => 'taxValue'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyer' => 'setBuyer',
'shipping_address' => 'setShippingAddress',
'billing_address' => 'setBillingAddress',
'items' => 'setItems',
'shipping_value' => 'setShippingValue',
'tax_value' => 'setTaxValue'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyer' => 'getBuyer',
'shipping_address' => 'getShippingAddress',
'billing_address' => 'getBillingAddress',
'items' => 'getItems',
'shipping_value' => 'getShippingValue',
'tax_value' => 'getTaxValue'    ];

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
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['shipping_value'] = isset($data['shipping_value']) ? $data['shipping_value'] : null;
        $this->container['tax_value'] = isset($data['tax_value']) ? $data['tax_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
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
     * Gets buyer
     *
     * @return \PicPay\modelPackage\PaymentRequestBuyer
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \PicPay\modelPackage\PaymentRequestBuyer $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \PicPay\modelPackage\PaymentRequestMiniCartMiniCartShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \PicPay\modelPackage\PaymentRequestMiniCartMiniCartShippingAddress $shipping_address shipping_address
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \PicPay\modelPackage\PaymentRequestMiniCartMiniCartBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \PicPay\modelPackage\PaymentRequestMiniCartMiniCartBillingAddress $billing_address billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \PicPay\modelPackage\PaymentRequestMiniCartMiniCartItems[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \PicPay\modelPackage\PaymentRequestMiniCartMiniCartItems[] $items Objeto contendo as informações do endereço de cobrança.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets shipping_value
     *
     * @return double
     */
    public function getShippingValue()
    {
        return $this->container['shipping_value'];
    }

    /**
     * Sets shipping_value
     *
     * @param double $shipping_value Valor do frete
     *
     * @return $this
     */
    public function setShippingValue($shipping_value)
    {
        $this->container['shipping_value'] = $shipping_value;

        return $this;
    }

    /**
     * Gets tax_value
     *
     * @return double
     */
    public function getTaxValue()
    {
        return $this->container['tax_value'];
    }

    /**
     * Sets tax_value
     *
     * @param double $tax_value Valor de alguma taxa
     *
     * @return $this
     */
    public function setTaxValue($tax_value)
    {
        $this->container['tax_value'] = $tax_value;

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
