<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientations extends Model
{
    use HasFactory;
    protected $table = 'orientations';

    protected $fillable = ['description'];
}
