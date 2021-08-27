<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;


    //Permite que los campos se llenen mediante peticiones POST
    protected $fillable = ['title', 'body'];
}
