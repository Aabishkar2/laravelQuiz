<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
   protected $table = 'socials';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
