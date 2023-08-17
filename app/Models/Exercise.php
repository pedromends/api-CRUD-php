<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $table = 'exercise';
    public $timestamps = false;

    protected $fillable = [
        'workout_id','exercises_id','series',
        'repetitions','height_id','mode_id',
        'technique_id', 'orientation_id'
    ];
}
