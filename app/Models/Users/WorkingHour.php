<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class WorkingHour extends Model
{
   protected $table = 'working_hours';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
