<?php

namespace App\Core;

class Route
{
  public static array $routes;
  public static function get($route, $controller_callback)
  {
    self::$routes[] = rtrim($route, '/');

    $url = $_SERVER['PATH_INFO'];
    // Remove leading and trailing slashes to avoid empty elements
    $trimmedRoute = trim($route, '/');
    $trimmedUrl = trim($url, '/');
    // Split the URL by slashes
    $segmentsUrl = explode('/', $trimmedUrl);
    $segmentsRoute = explode('/', $trimmedRoute);

    preg_match('/\{(.*?)\}/', $trimmedRoute, $param);

    if ($segmentsUrl[0] == $segmentsRoute[0] && isset($param[1])) {
      call_user_func($controller_callback, $segmentsUrl[1]);
    } else if (rtrim($_SERVER['PATH_INFO'], '/') === rtrim($route, '/')) {
      call_user_func($controller_callback);
    }
  }
}