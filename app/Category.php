<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table= "categories";
    protected $fillable=['name'];

    //función a la tabla con la que se relaciona (en plural)
    public function articles()
    {
        //Uno a muchos.
        return $this->hasMany('App\Article');

    }
}
