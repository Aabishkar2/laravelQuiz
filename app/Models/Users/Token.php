<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
   protected $table = 'tokens';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
