<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
   protected $table = 'locations';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
