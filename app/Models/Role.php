<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function consumers()
    {
        return $this->hasMany('App\Model\Consumer');
    }
    public function users()
    {
        return $this->hasMany('App\Model\Users');
    }
    
}
