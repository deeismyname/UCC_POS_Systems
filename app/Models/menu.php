<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $casts = [
        'repeat' => 'array'
    ];

    protected $table = 'menu';
    protected $fillable = ['menu_name', 'unit_cost', 'customize', 'description'];
}
