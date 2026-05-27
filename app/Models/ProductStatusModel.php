<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStatusModel extends Model
{
    
    use HasFactory;

    protected $table = 'product_status';

    protected $primaryKey = 'product_status_id';

    protected $fillable = ['product_status_name'];

    public function statusprod()
    {
        return $this->hasMany(ProductModel::class, 'product_status_id', 'product_status_id');
    }
}

