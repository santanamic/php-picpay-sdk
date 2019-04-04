# PicPay\RequisioDePagamentoApi

All URIs are relative to *https://appws.picpay.com/ecommerce/public/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postPayments**](RequisioDePagamentoApi.md#postPayments) | **POST** /payments | Payment Request

# **postPayments**
> \PicPay\modelPackage\PaymentResponse200 postPayments($body)

Payment Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: E-commerce Token
$config = PicPay\Configuration::getDefaultConfiguration()->setApiKey('x-picpay-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PicPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-picpay-token', 'Bearer');

$apiInstance = new PicPay\SDK\RequisioDePagamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PicPay\modelPackage\PaymentRequest(); // \PicPay\modelPackage\PaymentRequest | 

try {
    $result = $apiInstance->postPayments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisioDePagamentoApi->postPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PicPay\modelPackage\PaymentRequest**](../Model/PaymentRequest.md)|  | [optional]

### Return type

[**\PicPay\modelPackage\PaymentResponse200**](../Model/PaymentResponse200.md)

### Authorization

[E-commerce Token](../../README.md#E-commerce Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

