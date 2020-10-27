<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    protected $fillable = ['name','version','programming_language','multi_platform','mobile_web_development','description','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tutorial(){
        return $this->hasMany(PostTutorial::class);
    }
}
