<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
class Article extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable=[

        "build_brom"=>"title",
        "save_to"=>"slug"
    ];

    protected $table="articles";

    protected $fillable=['title','content','category_id','user_id'];

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        $this->hasMany('App\Image');
    }

    public function tags()
    {
       return $this->belongsToMany('App\Tag');

    }

}
