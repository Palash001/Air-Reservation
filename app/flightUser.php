<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flightUser extends Model
{
    //
  protected $fillable=['phone','passport_no','visa_no','address','dob','gender','user_id'];

   public function user()
   {
     return $this->belongsTo(User::class);
   }

   public function BookDetails()
   {
     return $this->hasMany(BookDetails::class);
   }

   public function flightSearch()
   {
     return $this->belongsToMany(flightSearch::Class);
   }



}
