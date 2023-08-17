<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuscularGroup extends Model
{
    use HasFactory;
    protected $table = 'muscular_group';

    protected $fillable = ['muscle_name'];
}
