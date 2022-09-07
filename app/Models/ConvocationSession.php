<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ConvocationSession extends Model
{
    protected $fillable = [
        'title', 'status', 'description','session_year','created_by','updated_by'
    ];
    //Relations
    public function user(){
        return $this->belongsTo(User::class,'created_by');
    }
    public function config(){
        return $this->hasMany(ConvocationConfig::class,'session_id');
    }
    public function eligible(){
        return $this->hasMany(Eligibles::class,'session_id');
    }
    public function regalia(){
        return $this->hasMany(Regalia::class,'session_id');
    }
    public function venue(){
        return $this->hasMany(Venue::class,'session_id');
    }
}
