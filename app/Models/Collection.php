<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $fillable = ['bill_id', 'patient_id', 'pay_amount','due_amount','date','method','discount','transaction_id','user_id'];   
}
