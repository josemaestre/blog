<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['post','content','user_id'];


    public function HasComment(){

      return $this->hasMany(comment::class);
        // return $this->hasMany(comment::class,'post_id');
    }


}
