<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllExercises extends Model
{
    use HasFactory;
    protected $table = 'all_exercises';

    protected $fillable = ['description', 'muscular_group'];
}
