<?php

namespace App\Core;

class Route
{
  public static array $routes;
  public static function get($route, $controller_callback)
  {

    self::$routes[] = rtrim($route, '/');

    if (rtrim($_SERVER['PATH_INFO'], '/') === rtrim($route, '/')) {
      call_user_func($controller_callback);
    }
  }
}
