<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'description', 'image', 'text', 'send_to_admin_email', 'user_id'];
}
