<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserDoc extends Model
{
    protected $fillable = [
        'title', 'image', 'doc_type_id','user_id','created_by','updated_by',
    ];
    //Relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function docs(){
        return $this->belongsTo(DocType::class,'doc_type_id');
    }
}
