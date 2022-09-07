<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestDoc extends Model
{
    protected $fillable = [
        'title', 'image', 'doc_type_id','guest_id','created_by','updated_by',
    ];
    //Relations
    public function guest(){
        return $this->belongsTo(Guest::class,'guest_id');
    }
    public function docs(){
        return $this->belongsTo(DocType::class,'doc_type_id');
    }
}
