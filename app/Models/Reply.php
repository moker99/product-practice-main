<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'content', 'message_id'];

    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
