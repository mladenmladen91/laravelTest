<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
    //
    
    protected $fillable = [
        'name', 
    ];
    
    protected $with = ["users"];
    
    public function users(){
        return $this->hasMany("App\User");
    }
}
