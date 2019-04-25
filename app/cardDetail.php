<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cardDetail extends Model
{
    //
    protected $guarded =[];

    public function bookDetail()
    {
      $this->belongsToMany(bookDetail::class);
    }
}
