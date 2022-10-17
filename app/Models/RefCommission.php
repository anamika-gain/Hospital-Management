<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefCommission extends Model
{
    use HasFactory;
    protected $fillable = [
        'billing_id', 'referral_id', 'date','amount','status'
    ];
}
