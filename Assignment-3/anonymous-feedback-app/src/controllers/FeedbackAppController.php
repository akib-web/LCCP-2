<?php

namespace App\Core\Controllers;

class FeedbackAppController
{
  public static function index()
  {
    include APP_ROOT_PATH . '/resources/views/index.php';
    // var_dump($_REQUEST);
  }
  public static function login()
  {
    include APP_ROOT_PATH . '/resources/views/login.php';
  }
  public static function register()
  {
    // echo "<h1>register:testing</h1>";
    include APP_ROOT_PATH . '/resources/views/register.php';
  }
  public static function feedback()
  {
    // var_dump($_REQUEST);
    include APP_ROOT_PATH . '/resources/views/feedback.php';

    // var_dump(APP_ROOT_PATH);
  }
  public static function dashboard()
  {
    // var_dump($_REQUEST);
    include APP_ROOT_PATH . '/resources/views/dashboard.php';
  }
  public static function feedback_success()
  {
    // var_dump($_REQUEST);
    include APP_ROOT_PATH . '/resources/views/feedback-success.php';
  }
}
