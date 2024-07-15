<?php

namespace App\Core\Models;

use App\Core\Models\Model;

class Feedback extends Model
{
  //
  public string $table = 'feedbacks';

  public string $id;
  public string $user_id; //id of the users model class
  public string $feedback;
  public string $created_at;
}