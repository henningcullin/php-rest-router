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

        switch (true) { // body parser
            case !isset($_SERVER['CONTENT_TYPE']): // no body case
                break;
            case str_contains($_SERVER['CONTENT_TYPE'], 'multipart/form-data'):
                $boundary = '--' . explode('=', $_SERVER['CONTENT_TYPE'])[1];
                $body_array = explode($boundary, file_get_contents('php://input'));
                for ($i = 1; $i < count($body_array) - 1; $i++) {
                    if (str_contains($body_array[$i], 'Content-Type')) continue;
                    $body_slice_array = explode('"', $body_array[$i]);
                    $key = $body_slice_array[1];
                    $value = str_replace(PHP_EOL, '', $body_slice_array[2]);
                    self::$body[$key] = $value;
                }
                break;
            case str_contains($_SERVER['CONTENT_TYPE'], 'application/x-www-form-urlencoded'):
                $body_array = explode('&', file_get_contents('php://input'));
                foreach ($body_array as $body_slice) {
                    $kvp = explode('=', $body_slice);
                    self::$body[$kvp[0]] = $kvp[1];
                }
                break;
            case str_contains($_SERVER['CONTENT_TYPE'], 'application/json'): 
                $raw_body = file_get_contents('php://input');
                self::$body = json_decode($raw_body, true);
                break;
        }

        $target = isset(self::$routes[$method][$route]) ? self::$routes[$method][$route] : null;

        if (!isset($target)) {
            echo 'No route';
            return;
        }

        if (is_callable($target)) {
            call_user_func($target);
            return;
        }

        if (is_file($target)) {
            require_once($target);
            return;
        }
    }
}