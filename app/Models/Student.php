<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Establecemos los parámetros que se podrán asignar directamente
class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'password'];
}
