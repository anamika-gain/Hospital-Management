<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestDept extends Model
{
    use HasFactory;
    public function test_categories()
    {
        return $this->belongsTo('App\Model\TestCategory');
    }
    public function tests()
    {
        return $this->hasMany('App\Model\Test');
    }
}
