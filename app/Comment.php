<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [ 'comment' ];

    public function ticket() {
        return $this->belongsTo('App\Ticket');
    }
}