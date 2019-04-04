<?php

require_once(__DIR__ . './config.php');

require_once(__DIR__ . '/../vendor/autoload.php');

$config = PicPay\Configuration::getDefaultConfiguration()->setApiKey('x-picpay-token', API_KEY);

$apiInstance = new PicPay\SDK\RequisioDePagamentoApi(

	new GuzzleHttp\Client([
		'verify'  => PCPY_HTTPS_REQUIRE,
		'headers' => PCPY_CLIENT_HEADERS
	]),
    $config
);
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