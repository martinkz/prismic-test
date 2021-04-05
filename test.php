<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use Prismic\Api;

$api = Api::get("https://asdfgh.cdn.prismic.io/api/v2"); // Doesn't work with this repo
// $api = Api::get("https://mynewsite.cdn.prismic.io/api/v2"); // Works with this one

$response = $api->query('');
print_r($response->results);
