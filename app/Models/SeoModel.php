<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoModel extends Model
{
    protected $table = "seo";
    protected $primaryKey = 'seo_id';
    protected $fillable = ['seo_favicon','seo_icon','seo_comment','seo_keys'];
}
