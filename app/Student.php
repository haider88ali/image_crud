<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table='student';
    protected $fillable=['name','email','post','image'];
}
