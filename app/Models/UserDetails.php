<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'address', 'phone', 'birth'
    ];
    // determina il nome della tabella sovrascrivendo la convenzione del plurale
    protected $table = 'users_details';

    public function user() {
        //return $this->hasOne() //nella tabella che non ha il foreign key
        return $this->belongsTo('App\Models\User'); //nella tabella con il foreign key
    }
}
