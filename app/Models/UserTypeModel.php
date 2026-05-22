<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTypeModel extends Model
{
    use HasFactory;

    protected $table = 'usertype';

    protected $primaryKey = 'usertype_id';

    protected $fillable = ['usertype_name'];

   public function users()
{
    return $this->hasMany(\App\Models\User::class, 'user_type_id', 'usertype_id');
}
}
