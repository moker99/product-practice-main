<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'content', 'parent_id'];

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
