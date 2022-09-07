<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserAttendance extends Model
{
    protected $fillable = [
        'in_out','user_id','position','created_by',
    ];
    //Relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
