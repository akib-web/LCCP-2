<?php
session_start();
require 'vendor/autoload.php';

use App\Core\Route;
use App\Core\Controllers\FeedbackAppController;

// var_dump($_SERVER["REQUEST_URI"]);
// var_dump($_SERVER);

// exit;

define('APP_ROOT_PATH', __DIR__);


Route::get('/', [FeedbackAppController::class, 'index']);
Route::get('/login', [FeedbackAppController::class, 'login']);
Route::get('/register', [FeedbackAppController::class, 'register']);
Route::get('/dashboard', [FeedbackAppController::class, 'dashboard']);
Route::get('/feedback', [FeedbackAppController::class, 'feedback']);
Route::get('/feedback_success', [FeedbackAppController::class, 'feedback_success']);



if (!in_array(rtrim($_SERVER['PATH_INFO'], '/'), Route::$routes)) {
  include APP_ROOT_PATH . '/resources/views/404.php';
}
