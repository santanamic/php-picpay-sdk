# PHP PicPay SDK

![](assets/PicPay.png)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![PHP Version][ico-php-version]][link-php]
[![Coverage Status][ico-codecov]][link-codecov]
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]

SDK for integration of PHP applications with the PicPay API.  This is an unofficial open source project.


## Requirements

- PHP 5.5 and later
- Composer installed
- PicPay Token E-commerce

## Structure

```
docs/
src/
example/
lib/
tests/
```

## Installation & Usage
### Composer

To install the bindings via `composer`:

```
$ composer require santanamic/php-picpay-sdk
```

Then run `composer install`

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

This example shows how to get payment URLs.
Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: E-commerce Token
$config = PicPay\Configuration::getDefaultConfiguration()->setApiKey('x-picpay-token', 'YOUR_API_KEY');

$apiInstance = new PicPay\SDK\RequisioDePagamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
	new GuzzleHttp\Client([
		'verify'  => false,
		'headers' => [
			'Content-Type'    => 'text/html; charset=UTF-8',
			'Cache-Control'   => 'no-cache',
			'Accept-Encoding' => 'none'
		]
	]),
    $config
);

//Pass the parameters and make the magic happen. 
//Law the official documentation to know more details about the parameters 
$body = new \PicPay\modelPackage\PaymentRequest([
	'reference_id' => '123456',
	'callback_url' => 'https://example.com/',
	  'return_url' => 'https://example.com/return',
	       'value' => '230.22',
	       'buyer' => [
				'firstName' => 'João',
				'lastName'  => 'Da Silva',
				'document' => '123.456.789-10',
				'email' => 'teste@picpay.com',
				'phone' => '+55 27 12345-6789'
			]
]);

try {
    $result = $apiInstance->postPayments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisioDePagamentoApi->postPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://appws.picpay.com/ecommerce/public/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CancelamentoApi* | [**postCancellations**](docs/Api/CancelamentoApi.md#postcancellations) | **POST** /payments/{referenceId}/cancellations | Cancel Request
*RequisioDePagamentoApi* | [**postPayments**](docs/Api/RequisioDePagamentoApi.md#postpayments) | **POST** /payments | Payment Request
*StatusApi* | [**getStatus**](docs/Api/StatusApi.md#getstatus) | **GET** /payments/{referenceId}/status | Status Request

## Documentation Official

 - https://ecommerce.picpay.com/doc/

## How to get a PicPay Token

- To communicate with the API you need to obtain the [PicPay access credentials](https://lojista.picpay.com/dashboard/ecommerce-token)

## Talk to the author

- Please let me know if you need anything. [Send me an email](mailto%3Awilliansantanamic%40gmail.com).

## License and About Project 

- The MIT License (MIT). Please see [License File](LICENSE.md) for more information. 
- This project was built with [OpenAPI Specification](https://github.com/OAI/OpenAPI-Specification/tree/master/examples/v3.0) and [Swagger CLI](https://github.com/swagger-api/swagger-codegen.git)


[ico-version]: https://img.shields.io/packagist/v/santanamic/php-picpay-sdk.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/santanamic/php-picpay-sdk/master.svg?style=flat-square
[ico-php-version]: https://img.shields.io/badge/php->=5.5-8892BF.svg
[ico-downloads]: https://img.shields.io/packagist/dt/santanamic/php-picpay-sdk.svg?style=flat-square
[ico-codecov]: https://codecov.io/gh/santanamic/php-picpay-sdk/branch/master/graph/badge.svg

[link-packagist]: https://packagist.org/packages/santanamic/php-picpay-sdk
[link-travis]: https://travis-ci.org/santanamic/php-picpay-sdk
[link-php]: https://php.net/
[link-downloads]: https://packagist.org/packages/santanamic/php-picpay-sdk
[link-codecov]: https://codecov.io/gh/santanamic/php-picpay-sdk