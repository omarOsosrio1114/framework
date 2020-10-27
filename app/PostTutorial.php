<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTutorial extends Model
{
    protected $fillable = ['framework_id','tutorial'];

    public function framework(){
        return $this->belongsTo(Framework::class);
    }
}
