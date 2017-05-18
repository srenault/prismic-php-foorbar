<?php

include_once __DIR__.'/vendor/autoload.php';

use Prismic\Api;

$api = Api::get("https://quickstart.prismic.io/api");
$doc = $api->getByUID("page", "example-title");

var_dump($doc->getImage('page.image')->getUrl());

?>