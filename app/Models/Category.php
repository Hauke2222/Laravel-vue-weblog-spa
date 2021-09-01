<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsToMany('App\Models\Post', 'post_categories');
    }

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'post_id',
    ];
}
