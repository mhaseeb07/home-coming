<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Medal extends Model
{
    protected $fillable = [
        'title', 'description','created_by','updated_by'
    ];
    //Relations
    public function user(){
        return $this->belongsTo(User::class,'created_by');
    }
    public function eligible(){
        return $this->hasMany(Eligibles::class,'medal_id');
    }
}
