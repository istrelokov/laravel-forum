<?php

namespace App\Models;


class Discussion extends Model

{
   public function user()
   {
       return $this->belongsTo(User::class, 'user_id');
   }

   public function getRouteKeyName()
   {

    return 'slug';

   }

}
