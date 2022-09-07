<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocType extends Model
{
    protected $fillable = [
        'title', 'description','created_by','updated_by'
    ];
    //Relations
    public function userDoc(){
        return $this->hasMany(UserDoc::class,'doc_type_id');
    }
    public function guestDoc(){
        return $this->hasMany(GuestDoc::class,'doc_type_id');
    }
}
