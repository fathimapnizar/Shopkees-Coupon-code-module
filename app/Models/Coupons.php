<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Coupons extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'code',
        'condition',
        'cat',
        'name',
        'applied_on',
        'amount_or_percentage',
        'amount_limit',
        'value',
        'in_or_not_in',
        'cart_total',
    ];
}
