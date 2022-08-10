<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $casts = [
        'components' => 'array'
    ];

    // protected $fillable = ['menu_name', 'unit_cost', 'customize', 'description'];
    protected $guarded = ['id'];
}
