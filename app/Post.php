<?php

namespace App;

class Post extends BaseModel
{
    protected $fillable = array('url', 'title', 'description','content','blog','created_at_ip', 'updated_at_ip');
}
