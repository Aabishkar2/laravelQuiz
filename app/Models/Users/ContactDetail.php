<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
   protected $table = 'contact_details';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
