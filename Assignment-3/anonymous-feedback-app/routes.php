<?php

use App\Core\Route;


Route::get('login', function () {
  echo "<h1>login:testing</h1>";
});
Route::get('register', function () {
  echo "<h1>register:testing</h1>";
});
var_dump(Route::$routes);

// ["REQUEST_URI"]=>
// string(6) "/login"
// ["REQUEST_METHOD"]=>
// string(3) "GET"
// ["SCRIPT_NAME"]=>
// string(10) "/index.php"
// ["PATH_INFO"]=>
// string(6) "/login"
// ["PHP_SELF"]=>
// string(16) "/index.php/login"