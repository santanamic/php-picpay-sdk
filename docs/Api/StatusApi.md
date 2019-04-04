# PicPay\StatusApi

All URIs are relative to *https://appws.picpay.com/ecommerce/public/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatus**](StatusApi.md#getStatus) | **GET** /payments/{referenceId}/status | Status Request

# **getStatus**
> \PicPay\modelPackage\StatusResponse200 getStatus($reference_id)

Status Request

Use the endpoint (POST request) below to check the status of your request for payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: E-commerce Token
$config = PicPay\Configuration::getDefaultConfiguration()->setApiKey('x-picpay-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PicPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-picpay-token', 'Bearer');

$apiInstance = new PicPay\SDK\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_id = "reference_id_example"; // string | seu id de referencia

try {
    $result = $apiInstance->getStatus($reference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_id** | **string**| seu id de referencia |

### Return type

[**\PicPay\modelPackage\StatusResponse200**](../Model/StatusResponse200.md)

### Authorization

[E-commerce Token](../../README.md#E-commerce Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

