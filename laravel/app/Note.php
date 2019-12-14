<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Note extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function user(){
        return $this->BelongsTo("App\User");
    }
}
