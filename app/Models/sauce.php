<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sauce extends Model
{
    use HasFactory;

    protected $table = 'sauces';
    protected $fillable = ['sauce_name', 'unit_cost'];
}
