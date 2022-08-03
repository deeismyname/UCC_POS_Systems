<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drinks extends Model
{
    use HasFactory;

    protected $table = 'drinks';
    protected $fillable = ['drink_name', 'unit_cost'];
}
