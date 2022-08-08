<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;


    protected $casts = [
        'repeat' => 'array',
        'description' => 'array'
    ];

    // public function setDescriptionAttribute($value)
    // {
    //     $this->attributes['description'] = json_encode($value);
    // }

    // public function getDescriptionAttribute($value)
    // {
    //     return $this->attributes['description'] = json_decode($value);
    // }

    // protected $table = 'menu';
    // protected $fillable = ['menu_name', 'unit_cost', 'customize', 'description'];
    protected $guarded = ['id'];
}
