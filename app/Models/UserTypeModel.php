<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTypeModel extends Model
{
    protected $table ="usertype";
    protected $primaryKey = 'usertype_id';
    protected $fillable = 'usertype_name';
}
