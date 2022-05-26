<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $table = 'condition';
    protected $fillable = [
        'id',
        'value'
    ];

    use HasFactory;
}
