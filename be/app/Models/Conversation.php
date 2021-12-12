<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    public $guarded = [];

    public function sender(){
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }

    public function messages(){
        return $this->hasMany(Messages::class, 'conversation_id', 'id');
    }
}
