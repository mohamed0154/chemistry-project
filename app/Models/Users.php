<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = ['username','email','password','photo'];
    protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps= false;
}
