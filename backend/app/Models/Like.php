<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'likes';
    protected $fillable = [
        'liker_id',
        'likee_id',
        'like_item'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
