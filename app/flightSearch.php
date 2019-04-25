<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flightSearch extends Model
{
    //
    protected $fillable =['fNo','from_city','to_city','departure_date','arrival_date','adult','child','e_fare','b_fare','user_id'];

    public function User()
    {
      return $this->hasOne(User::Class);
    }

    public function flightUser()
    {
      return $this->belongsToMany(flightUser::Class);
    }

}
