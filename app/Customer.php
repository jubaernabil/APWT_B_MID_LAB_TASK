<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'email';
    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'last_updated';
}
