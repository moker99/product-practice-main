<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messagereply extends Model
{
    use HasFactory;
    protected $table = 'message_texts';

    protected $fillable = ['text_2','message_text_id'];

    public function messageNew()
    {
        // hasOne(關聯,對方的欄位,自己的欄位)
        return $this->hasOne(Messagenew::class,'id','message_text_id');
    }
}

