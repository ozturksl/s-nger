<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table ="users";
    protected $primaryKey = 'user_id';
    protected $fillable = ['user_nickname', 'user_name','user_password','user_photo','user_status'];

}
