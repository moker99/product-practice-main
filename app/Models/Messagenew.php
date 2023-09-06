<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messagenew extends Model
{
    use HasFactory;
    protected $table = 'messages';

    protected $fillable = ['text', 'new_desc', 'reply_desc'];
    public function messageReply()
    {
        // hasMany(關聯,對方的欄位,自己的欄位)
        return $this->hasMany(Messagereply::class, 'message_text_id', 'id');
    }
}
