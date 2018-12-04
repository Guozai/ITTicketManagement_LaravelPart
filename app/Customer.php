<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [ 'name', 'email', 'phone', 'mobile', 'preferred_contact' ];

    public function tickets() {
        return $this->hasMany('App\Ticket');
    }
}
