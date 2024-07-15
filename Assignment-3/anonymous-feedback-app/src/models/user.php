<?php

namespace App\Core\Models;

use App\Core\Models\Model;

class User extends Model
{
  //
  public string $table = 'users';

  public string $id;
  public string $name;
  public string $email;
  public string $password;
  public string $created_at;
}