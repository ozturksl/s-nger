<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequestModel extends Model
{
    protected $table = 'service_request_models';

    protected $primaryKey = 'servicereq_id';

    protected $fillable = ['servicereq_taker',  'servicereq_number', 'servicereq_message', 'service_type_id'];

     public function servicetype()
    {
        return $this->belongsTo(ServiceTypeModel::class, 'service_type_id', 'service_type_id');
    }
}
