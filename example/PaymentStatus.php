<?php

require_once(__DIR__ . './config.php');

require_once(__DIR__ . '/../vendor/autoload.php');

$config = PicPay\Configuration::getDefaultConfiguration()->setApiKey('x-picpay-token', API_KEY);

$apiInstance = new PicPay\SDK\StatusApi(

	new GuzzleHttp\Client([
		'verify'  => PCPY_HTTPS_REQUIRE,
		'headers' => PCPY_CLIENT_HEADERS
	]),
    $config
);

$reference_id = "123456";

try {
    $result = $apiInstance->getStatus($reference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->getStatus: ', $e->getMessage(), PHP_EOL;
}

?>