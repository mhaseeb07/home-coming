<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $fillable = [
        'name', 'location', 'created_by','updated_by'
    ];
    //Relations
    public function user(){
        return $this->belongsTo(User::class,'created_by');
    }
}
