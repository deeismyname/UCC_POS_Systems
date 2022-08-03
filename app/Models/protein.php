<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class protein extends Model
{
    use HasFactory;

    protected $table = 'proteins';
    protected $fillable = ['protien_name', 'unit_cost'];
}
