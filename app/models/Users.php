<?php

namespace App\Models;

use Core\ActiveRecord;

class Users extends ActiveRecord
{
  protected $table = 'users';
  protected $idField = 'id';
  protected $logTimestamp = TRUE;
}
