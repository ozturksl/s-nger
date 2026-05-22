<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsersModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_nickname',
        'user_name',
        'user_password',
        'user_type_id',
        'user_status_id', 
        'user_photo',
    ];

    protected $hidden = [
        'user_password',
    ];

    public function getAuthPassword()
    {
        return $this->user_password;
    }

    public function type()
    {
        return $this->belongsTo(UserTypeModel::class, 'user_type_id', 'usertype_id');
    }

    public function status()
    {
        return $this->belongsTo(UserStatusModel::class, 'user_status_id', 'user_status_id');
    }
}