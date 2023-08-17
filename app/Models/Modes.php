<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modes extends Model
{
    use HasFactory;
    protected $table = 'modes';
    protected $fillable = ['description'];
}
