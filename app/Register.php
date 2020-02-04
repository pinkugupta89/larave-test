<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Register extends Model{
    public $timestamps = false;
    protected $fillable=['name','last_name','emailid','mobile'];
}
