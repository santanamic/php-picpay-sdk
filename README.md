# PHP PicPay SDK

![Screenshot](data:image/png;base64,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)

![Screenshot](assets/PicPay.png)

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