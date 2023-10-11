<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JsUser extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'age', 'email'];
    protected $table = 'my_users';
    public $timestamps = false;

}
