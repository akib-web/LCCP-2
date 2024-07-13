<?php

namespace App\Core\Controllers;

use App\Core\Models\User;

class FeedbackAppController
{
  public static function index()
  {
    include APP_ROOT_PATH . '/resources/views/home.php';
    // var_dump($_REQUEST);
  }
  public static function login()
  {
    if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {

      $user = new User();
      $login_details = $user->where([
        'email' => $_REQUEST['email'],
        'password' => $_REQUEST['password']
      ]);

      $_SESSION["user"] = $login_details;
      // $_SESSION["user"] = null;
      // var_dump(empty($login_details->id));

      if (isset($_SESSION["user"])) {
        header("Location: /dashboard");
      }
      // var_dump(isset($_SESSION["user"]));
      // return;
    }

    include APP_ROOT_PATH . '/resources/views/login.php';
  }
  public static function register()
  {
    if (isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
      if ($_REQUEST['password'] !== $_REQUEST['confirm_password']) {
        echo "password mismatched";
        return;
      }
      if ($_REQUEST['password'] !== $_REQUEST['confirm_password']) {
        echo "password mismatched";
        return;
      }
      $user = new User();
      $user->id = Uniqid();
      $user->name = $_REQUEST['name'];
      $user->email = $_REQUEST['email'];
      $user->password = $_REQUEST['password'];
      $user->save();
      // $_SESSION["registration_success"] = "Registration has been successfull.";
      header("Location: /login");
      return;
    }
    // echo "<h1>register:testing</h1>";
    include APP_ROOT_PATH . '/resources/views/register.php';
    // var_dump(isset($_SESSION["registration_success"]));
    // if ($_SESSION["registration_success"]) {

    // }
  }
  public static function feedback($user_id)
  {
    var_dump($user_id);
    // var_dump($_SERVER['PATH_INFO']);

    include APP_ROOT_PATH . '/resources/views/feedback.php';

    // var_dump(APP_ROOT_PATH);
  }
  public static function dashboard()
  {
    var_dump($_SESSION["user"]);
    include APP_ROOT_PATH . '/resources/views/dashboard.php';
  }
  public static function feedback_success()
  {
    // var_dump($_REQUEST);
    include APP_ROOT_PATH . '/resources/views/feedback-success.php';
  }
}