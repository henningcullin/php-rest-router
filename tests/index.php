<?php

require_once('../Router.php');
require_once('product.php');

Router::post('/', 'Product::details');

Router::listen('/php-rest-router/tests');