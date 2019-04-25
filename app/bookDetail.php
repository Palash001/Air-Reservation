<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookDetail extends Model
{
    //
    protected $fillable=['b_no','book_lot','class_type','e_fare','b_fare','passenger_id','name','email','phone','address','child','adult','total_fare','status'];

    public function flightUser()
    {
      return $this->belongsTo(flightUser::class);
    }

    public function user()
    {
      return $this->belongsTo(user::class);
    }

    public function cardDetail()
    {
      $this->belongsToMany(cardDetail::class);
    }
}
