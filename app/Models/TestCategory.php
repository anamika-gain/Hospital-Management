<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestCategory extends Model
{
    use HasFactory;
    
    public function test_depts()
    {
        return $this->hasMany('App\Model\TestDept');
    }
}
