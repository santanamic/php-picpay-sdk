<?php 

/**
 * The base configuration for examples
 *
 * This file contains the following configurations:
 *
 * * Client HTTP 
 *
 * @package PicPay SDK
 */
 
define( 'API_KEY', 'YOUR_API_KEY' );

define( 'PCPY_HTTPS_REQUIRE', false );

define( 'PCPY_CLIENT_HEADERS', [
			'Content-Type'    => 'text/html; charset=UTF-8',
			'Cache-Control'   => 'no-cache',
			'Accept-Encoding' => 'none'
		] );
?>