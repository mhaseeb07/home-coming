<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserLedger extends Model
{
    protected $fillable = [
        'payment','description','regalia_id','user_id','created_by','updated_by'
    ];
    //Relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function regalia(){
        return $this->belongsTo(Regalia::class,'regalia_id');
    }
}
