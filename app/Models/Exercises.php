<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercises extends Model
{
    use HasFactory;
    protected $table = 'exercise';

    protected $fillable = [
        'workout_id','exercise_id','series',
        'repetitions','height_id','mode_id',
        'technique_id', 'orientation_id'
    ];
}
