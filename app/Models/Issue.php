<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $table = 'issues';
    protected $fillable = ['user_id', 'book_id', 'admin_id', 'issued'];
}
