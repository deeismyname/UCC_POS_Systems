<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class extra extends Model
{
    use HasFactory;

    protected $table = 'extras';
    protected $fillable = ['extra_name', 'unit_cost'];
}
