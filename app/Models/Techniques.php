<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techniques extends Model
{
    use HasFactory;
    protected $table = 'techniques';
    protected $fillable = ['description'];
}
