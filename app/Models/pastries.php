<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pastries extends Model
{
    use HasFactory;

    protected $table = 'pastries';
    protected $fillable = ['sauce_name', 'unit_cost'];
}
