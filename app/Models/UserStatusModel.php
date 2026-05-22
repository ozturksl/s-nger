<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStatusModel extends Model
{
    use HasFactory;

    protected $table = 'user_status_models';

    protected $primaryKey = 'user_status_id';

    protected $fillable = ['user_status_name'];

    public function users()
    {
        return $this->hasMany(UsersModel::class, 'user_status_id', 'user_status_id');
    }
}
