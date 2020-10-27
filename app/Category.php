<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','description'];

    public function Framework(){
        return $this->hasMany(Framework::class);
    }
}
