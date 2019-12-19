<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
   protected $table = 'business_contact_persons';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
