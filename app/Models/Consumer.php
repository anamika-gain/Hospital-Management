<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'role_id', 'age','age-prefix','gender','mobile','address'
    ];
    public function role()
    {
        return $this->belongsTo('App\Model\Role');
    }
}
