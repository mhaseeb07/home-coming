<?php

namespace App\Models;

use App\Models\ConvocationSession;
use Illuminate\Database\Eloquent\Model;

class ConvocationConfig extends Model
{
    protected $fillable = [
        'key', 'value', 'description','session_id'
    ];
    //Relations
    public function session(){
        return $this->belongsTo(ConvocationSession::class,'session_id');
    }
    public function SCate(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ConvocationSession::class, 'session_id');
    }
}
