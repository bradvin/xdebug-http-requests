<?php
/**
 * @package    WordPress
 * @subpackage XDebug Http Requests
 * @author     Brad Vincent
 */

/**
 * Plugin Name: XDebug Http Requests
 * Plugin URI:  http://fooplugins.com
 * Description: Enable debugging (XDebug) when using http requests
 * Version:     0.1
 * Author:      Brad Vincent
 * Author URI:  http://fooplugins.com
 * Last Change: 31-03-2013
 */

define('XDEBUG_SESSION', 'DEBUGME');

add_filter( 'http_request_args', 'http_request_args_add_xdebug_cookie', 10, 2);

//add_filter( 'http_request_timeout', 'wp_offline_http_request_timeout' );

function http_request_args_add_xdebug_cookie($args, $url) {
    $cookie = new WP_Http_Cookie('XDEBUG_SESSION='.XDEBUG_SESSION.';path=/;');
    $args['cookies'][] = $cookie;
    return $args;
}

function wp_offline_http_request_timeout($timeout) {
    return 999;
}