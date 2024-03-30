<?php

require_once('../Router.php');

Router::listen('/php-rest-router');

var_dump(Router::$params);