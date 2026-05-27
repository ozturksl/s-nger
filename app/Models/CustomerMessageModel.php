<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerMessageModel extends Model
{
    protected $table = 'customer_message_models';

    protected $primaryKey = 'customer_id';

    protected $fillable = ['customer_name',  'customer_message'];
}
