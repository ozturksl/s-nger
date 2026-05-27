<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoriesModel extends Model
{
    protected $table = 'prodcategories';

    protected $primaryKey = 'category_id';

    protected $fillable = ['category_name'];

    public function category()
    {
        return $this->hasMany(User::class, 'prod_category_id', 'category_id');
    }
}
