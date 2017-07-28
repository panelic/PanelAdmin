<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserManagement extends Model
{
    protected $table = 'user_mgn';
    protected $fillable = ['name', 'email','phene', 'password_hash', 'api_key', 'status'];
}
