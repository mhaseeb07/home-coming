<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class MedalListCategory extends Model
{
    protected $table = 'medal_list_category';
    protected $fillable = [
        'title','slug','created_by','updated_by'
    ];
}
