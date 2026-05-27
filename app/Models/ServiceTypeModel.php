<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTypeModel extends Model
{
     use HasFactory;

    protected $table = 'service_type_models';

    protected $primaryKey = 'service_type_id';

    protected $fillable = ['service_type_name'];

    public function servicetype()
    {
        return $this->hasMany(ServiceRequestModel::class, 'service_type_id', 'service_type_id');
    }
}
