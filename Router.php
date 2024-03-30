<?php

class Router {

    public static $params = [];

    public static $body = [];


    private static $routes = ['get' => [], 'post' => [], 'put' => [], 'delete' => []];
    
    public static function get($route, $target) {
        self::$routes['get'][$route] = $target;
    }

    public static function post($route, $target) {
        self::$routes['post'][$route] = $target;
    }

    public static function put($route, $target) {
        self::$routes['put'][$route] = $target;
    }

    public static function delete($route, $target) {
        self::$routes['delete'][$route] = $target;
    }

    public static function listen($basepath) {

        $method = strtolower($_SERVER['REQUEST_METHOD']);

        $raw_uri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);

        $path = str_replace($basepath, '', $raw_uri);

        $path_array = explode('?', $path);

        $route = $path_array[0];

        $params_array = count($path_array) > 1 ? explode('&', $path_array[1]) : [];

        foreach ($params_array as $param) {
            $kvp = explode('=', $param);
            self::$params[$kvp[0]] = $kvp[1];
        }

    }
}