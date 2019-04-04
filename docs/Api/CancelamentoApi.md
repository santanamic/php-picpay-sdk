# PicPay\CancelamentoApi

All URIs are relative to *https://appws.picpay.com/ecommerce/public/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postCancellations**](CancelamentoApi.md#postCancellations) | **POST** /payments/{referenceId}/cancellations | Cancel Request

# **postCancellations**
> \PicPay\modelPackage\CancelResponse200 postCancellations($body, $reference_id)

Cancel Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: E-commerce Token
$config = PicPay\Configuration::getDefaultConfiguration()->setApiKey('x-picpay-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PicPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-picpay-token', 'Bearer');

$apiInstance = new PicPay\SDK\CancelamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PicPay\modelPackage\CancelRequest(); // \PicPay\modelPackage\CancelRequest | 
$reference_id = "reference_id_example"; // string | id do pedido

try {
    $result = $apiInstance->postCancellations($body, $reference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancelamentoApi->postCancellations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PicPay\modelPackage\CancelRequest**](../Model/CancelRequest.md)|  |
 **reference_id** | **string**| id do pedido |

### Return type

[**\PicPay\modelPackage\CancelResponse200**](../Model/CancelResponse200.md)

### Authorization

[E-commerce Token](../../README.md#E-commerce Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

