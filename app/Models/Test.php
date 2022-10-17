<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    
    public function test_depts()
    {
        return $this->belongsTo('App\Model\TestDept');
    }
}
