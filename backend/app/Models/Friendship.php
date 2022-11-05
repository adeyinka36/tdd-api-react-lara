<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    use HasFactory;

    protected $table = 'friendships';

    protected $fillable = [
        'url',
        'user_id'
    ];

    public function requester(){
        return $this->belongsTo(User::class, 'requester_id');
    }

    public function requestee(){
        return $this->belongsTo(User::class, 'requestee_id');
    }

}
