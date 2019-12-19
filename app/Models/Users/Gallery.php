<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
   protected $table = 'galleries';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
