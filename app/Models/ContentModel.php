<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{
    protected $table = "content";
    protected $primaryKey = 'content_id';
    protected $fillable = ['ct_instagram','ct_linkedin','ct_number','ct_number2','ct_address','ct_mail','ct_harita'];

}
