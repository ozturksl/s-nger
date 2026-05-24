<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ProductModel extends Model
{
    protected $table = "product";
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_name','product_price','product_comment','product_feature','product_photo'];

    public function category()
    {
        return $this->belongsTo(ProductCategoriesModel::class, 'prod_category_id', 'category_id');
    }
}
