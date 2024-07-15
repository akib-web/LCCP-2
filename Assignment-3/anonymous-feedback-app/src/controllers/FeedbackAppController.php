<?php

namespace App\Core\Controllers;

use App\Core\Models\User;
use App\Core\Models\Feedback;

class FeedbackAppController
{
  public static function index()
  {
    include APP_ROOT_PATH . '/resources/views/home.php';
    // var_dump($_REQUEST);
  }
  public static function login()
  {
    if (isset($_SESSION["user"])) {
      header("Location: /dashboard");
    }
    if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {

      $user = new User();
      $login_details = $user->where([
        'email' => $_REQUEST['email'],
        'password' => $_REQUEST['password']
      ]);

      $_SESSION["user"] = $login_details;
      // $_SESSION["user"] = null;
      // var_dump($_SESSION["user"]->id);

      if (isset($_SESSION["user"])) {
        header("Location: /dashboard");
      }
      // var_dump(isset($_SESSION["user"]));
      return;
    }

    include APP_ROOT_PATH . '/resources/views/login.php';
  }
  public static function register()
  {
    if (isset($_SESSION["user"])) {
      header("Location: /login");
    }
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
      $user->created_at = date('d-m-y H:i:s');;
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
    // var_dump(date('d-m-y H:i:s'));
    // die;
    $user = new User();
    $user_details = $user->where(['id' => $user_id]);
    // var_dump($user_details);
    if (!isset($user_details->id)) {
      $error = "Invalid Feedback URL";
      // header("Location: /login");
    } else if (isset($_REQUEST['feedback'])) {
      $feedback = new Feedback();
      $feedback->id = 'fb_' . Uniqid();
      $feedback->user_id = $user_details->id;
      $feedback->feedback = $_REQUEST['feedback'];
      $feedback->created_at = date('d-m-y H:i:s');
      $feedback->save();
      header("Location: /feedback_success");
      return;
      // var_dump($feedback);
    }

    include APP_ROOT_PATH . '/resources/views/feedback.php';

    // var_dump(APP_ROOT_PATH);
  }
  public static function dashboard()
  {
    if (!isset($_SESSION["user"])) {
      header("Location: /login");
    }
    // var_dump($_SESSION["user"]);
    $auth_user = $_SESSION["user"];
    $feedback = new Feedback();
    $feedbacks = $feedback->whereAll(['user_id' => $auth_user->id]);
    // $auth_user = unserialize($auth_user);
    var_dump($feedbacks);
    include APP_ROOT_PATH . '/resources/views/dashboard.php';
  }
  public static function logout()
  {
    $_SESSION["user"] = null;

    header("Location: /login");
    return;
  }
  public static function feedback_success()
  {
    // var_dump($_REQUEST);
    include APP_ROOT_PATH . '/resources/views/feedback-success.php';
  }
}
