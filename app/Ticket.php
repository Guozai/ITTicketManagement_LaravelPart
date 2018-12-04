<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    // type can be: service or issue; status: active or closed
    protected $fillable = [ 'type', 'status', 'area', 'description' ];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function comment() {
        return $this->hasMany('App\Comment');
    }
}
