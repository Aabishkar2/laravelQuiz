<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
   protected $table = 'sets';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
