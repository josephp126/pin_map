<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Pins extends Model
{
    public $table = "pins";

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
