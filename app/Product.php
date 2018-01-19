<?php

namespace App;

class Product extends BaseModel
{
    protected $fillable = array('name', 'title', 'description','price','category_id','brand_id','created_at_ip', 'updated_at_ip');
}
